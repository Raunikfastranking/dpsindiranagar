<?php


if (!defined('DPS_API_CACHE_DIR')) {
    define('DPS_API_CACHE_DIR', __DIR__ . '/cache');
}
if (!defined('DPS_API_CACHE_TTL')) {
    define('DPS_API_CACHE_TTL', 15); 
}
if (!defined('DPS_API_FLAG_STALE')) {
    define('DPS_API_FLAG_STALE', 120); 
}
if (!defined('DPS_API_CONNECT_TIMEOUT')) {
    define('DPS_API_CONNECT_TIMEOUT', 3);
}
if (!defined('DPS_API_TIMEOUT')) {
    define('DPS_API_TIMEOUT', 8);
}
if (!defined('DPS_API_BASE_URL')) {
    define('DPS_API_BASE_URL', 'https://dps.allenhouseschools.com/api');
}



function dps_api_cache_ensure_dir(): void
{
    if (!is_dir(DPS_API_CACHE_DIR)) {
        @mkdir(DPS_API_CACHE_DIR, 0755, true);
    }
}

function dps_api_bundle_path(): string
{
    return DPS_API_CACHE_DIR . '/api-bundle.json';
}

function dps_api_flag_path(): string
{
    return DPS_API_CACHE_DIR . '/api-refresh.flag';
}

function dps_api_warm_lock_path(): string
{
    return DPS_API_CACHE_DIR . '/api-warm.lock';
}

/** Secret key for cache-clear / cache-warm endpoints (derived, no config needed). */
function dps_api_purge_key(): string
{
    if (defined('DPS_CACHE_PURGE_KEY')) {
        return DPS_CACHE_PURGE_KEY;
    }
    $seed = defined('API_JWT_TOKEN') ? API_JWT_TOKEN : 'dps-indiranagar';
    return sha1($seed . '|dps-cache-purge');
}

function dps_api_endpoints_hash(array $endpoints): string
{
    return md5(json_encode($endpoints));
}
/* ------------------------------------------------------------- bundle I/O */

/** @return array{fetched_at:int,hash:string,data:array}|null */
function dps_api_read_bundle(): ?array
{
    $file = dps_api_bundle_path();
    if (!is_file($file)) {
        return null;
    }
    $raw = @file_get_contents($file);
    if ($raw === false || $raw === '') {
        return null;
    }
    $bundle = json_decode($raw, true);
    if (!is_array($bundle) || !isset($bundle['data']) || !is_array($bundle['data'])) {
        return null;
    }
    $bundle['fetched_at'] = (int) ($bundle['fetched_at'] ?? 0);
    return $bundle;
}

function dps_api_write_bundle(string $hash, array $data): bool
{
    dps_api_cache_ensure_dir();
    $payload = json_encode([
        'fetched_at' => time(),
        'hash'       => $hash,
        'data'       => $data,
    ]);
    if ($payload === false) {
        return false;
    }
    $tmp = dps_api_bundle_path() . '.tmp.' . getmypid();
    if (@file_put_contents($tmp, $payload, LOCK_EX) === false) {
        return false;
    }
    return @rename($tmp, dps_api_bundle_path());
}

/** Keep previous values for endpoints that failed (null) in the fresh fetch. */
function dps_api_merge_stale(array $fresh, ?array $old): array
{
    if (!is_array($old)) {
        return $fresh;
    }
    foreach ($fresh as $key => $value) {
        if ($value === null && array_key_exists($key, $old) && $old[$key] !== null) {
            $fresh[$key] = $old[$key];
        }
    }
    return $fresh;
}

/* -------------------------------------------------------------- fetching */

/**
 * Parallel fetch of all endpoints via curl_multi with strict timeouts.
 * @return array<string,mixed> map of endpoint key => decoded JSON (or null on failure)
 */
function dps_api_fetch_all(string $baseUrl, array $endpoints): array
{
    $mh = curl_multi_init();
    $handles = [];

    foreach ($endpoints as $key => $endpoint) {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $baseUrl . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => DPS_API_CONNECT_TIMEOUT,
            CURLOPT_TIMEOUT        => DPS_API_TIMEOUT,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER     => api_auth_headers(),
        ]);
        curl_multi_add_handle($mh, $ch);
        $handles[$key] = $ch;
    }

    $running = null;
    do {
        $status = curl_multi_exec($mh, $running);
        if ($status > CURLM_OK) {
            break;
        }
        curl_multi_select($mh, 0.5);
    } while ($running > 0);

    $responses = [];
    foreach ($handles as $key => $ch) {
        $content = curl_multi_getcontent($ch);
        $responses[$key] = ($content === false || $content === '' || $content === null)
            ? null
            : json_decode($content, true);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);

    return $responses;
}

/* ------------------------------------------------------ refresh triggering */

/**
 * Mark that a refresh is needed. Returns true if THIS call should trigger
 * the refresh (i.e. no fresh flag already present).
 */
function dps_api_mark_refresh_needed(string $flagFile = ''): bool
{
    dps_api_cache_ensure_dir();
    $flagFile = $flagFile !== '' ? $flagFile : dps_api_flag_path();

    // Fast path: a fresh flag already exists (flag freshness is tracked via
    // file mtime; 'c' mode preserves mtime for existing files).
    clearstatcache(true, $flagFile);
    $existed = is_file($flagFile);
    if ($existed) {
        $mtime = (int) @filemtime($flagFile);
        if ($mtime !== 0 && (time() - $mtime) <= DPS_API_FLAG_STALE) {
            return false;
        }
    }

    $fh = @fopen($flagFile, 'c');
    if (!$fh) {
        return true; // can't manage flag, better to refresh than not
    }
    $should = false;
    if (flock($fh, LOCK_EX)) {
        clearstatcache(true, $flagFile);
        $mtime = $existed ? (int) @filemtime($flagFile) : 0;
        if (!$existed || $mtime === 0 || (time() - $mtime) > DPS_API_FLAG_STALE) {
            @touch($flagFile); // claim by refreshing mtime
            $should = true;
        }
        flock($fh, LOCK_UN);
    }
    fclose($fh);
    return $should;
}

function dps_api_clear_refresh_flag(string $flagFile = ''): void
{
    $flagFile = $flagFile !== '' ? $flagFile : dps_api_flag_path();
    @unlink($flagFile);
}

/** Non-blocking ping to /cache-warm.php so the current request never waits. */
function dps_api_ping_warm(array $extraQuery = []): void
{
    if (PHP_SAPI === 'cli' || empty($_SERVER['HTTP_HOST'])) {
        return;
    }
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['SERVER_PORT'] ?? null) == 443);
    // Works for subdirectory deploys and for pings triggered by direct
    // hits on files inside /includes (warm script always sits at docroot).
    $scriptDir = str_replace('\\', '/', dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '')));
    $prefix = in_array($scriptDir, ['/', '\\', '.', ''], true) ? '' : $scriptDir;
    if (substr($prefix, -9) === '/includes') {
        $prefix = substr($prefix, 0, -9);
    }
    $query = array_merge(['key' => dps_api_purge_key()], $extraQuery);
    $url = ($https ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']
        . $prefix . '/cache-warm.php?' . http_build_query($query);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER   => true,
        CURLOPT_CONNECTTIMEOUT_MS => 200,
        CURLOPT_TIMEOUT_MS       => 700,
        CURLOPT_NOSIGNAL         => 1,
        CURLOPT_SSL_VERIFYPEER   => false,
        CURLOPT_SSL_VERIFYHOST   => false,
        CURLOPT_USERAGENT        => 'DPS-Cache-Warmer/1.0',
    ]);
    @curl_exec($ch);
    curl_close($ch);
}

/**
 * Trigger a background refresh for the bundle.
 * Prefers fastcgi_finish_request (runs after response, same process);
 * otherwise pings cache-warm.php over HTTP (non-blocking).
 */
function dps_api_request_bundle_refresh(string $baseUrl, array $endpoints): void
{
    if (!dps_api_mark_refresh_needed()) {
        return; // another process already triggered a refresh
    }

    // Cron/CLI mode: refresh inline instead of background ping.
    if (getenv('DPS_API_SYNC_REFRESH')) {
        dps_api_warm_bundle($baseUrl, $endpoints);
        return;
    }

    if (function_exists('fastcgi_finish_request')) {
        register_shutdown_function(function () use ($baseUrl, $endpoints) {
            @fastcgi_finish_request();
            dps_api_warm_bundle($baseUrl, $endpoints);
        });
        return;
    }

    dps_api_ping_warm();
}

/* ------------------------------------------------------------ warm worker */

/**
 * Does the actual bundle refresh. Safe to call from cache-warm.php,
 * a shutdown function, or CLI. Only one instance runs at a time.
 */
function dps_api_warm_bundle(string $baseUrl, array $endpoints): void
{
    dps_api_cache_ensure_dir();
    $hash = dps_api_endpoints_hash($endpoints);

    $lockFh = @fopen(dps_api_warm_lock_path(), 'c');
    if ($lockFh && !flock($lockFh, LOCK_EX | LOCK_NB)) {
        fclose($lockFh);
        return; // another warm is already running
    }

    $old = dps_api_read_bundle();

    // Nothing to do if bundle is already fresh with the same endpoints.
    if ($old !== null
        && $old['hash'] === $hash
        && (time() - $old['fetched_at']) <= DPS_API_CACHE_TTL) {
        dps_api_clear_refresh_flag();
        if ($lockFh) {
            flock($lockFh, LOCK_UN);
            fclose($lockFh);
        }
        return;
    }

    $fresh = dps_api_fetch_all($baseUrl, $endpoints);
    $fresh = dps_api_merge_stale($fresh, $old['data'] ?? null);
    dps_api_write_bundle($hash, $fresh);
    dps_api_clear_refresh_flag();

    if ($lockFh) {
        flock($lockFh, LOCK_UN);
        fclose($lockFh);
    }
}

/* ---------------------------------------------------------- main entry point */

/**
 * Get the full endpoint->data map. Never blocks longer than timeouts on a
 * cold cache; normally returns in a few ms from the cache file.
 */
function dps_api_get_bundle(string $baseUrl, array $endpoints): array
{
    $hash = dps_api_endpoints_hash($endpoints);
    $bundle = dps_api_read_bundle();

    if ($bundle !== null && $bundle['hash'] === $hash) {
        if ((time() - $bundle['fetched_at']) <= DPS_API_CACHE_TTL) {
            return $bundle['data']; // fresh
        }
        // stale -> serve immediately, refresh in background
        dps_api_request_bundle_refresh($baseUrl, $endpoints);
        return $bundle['data'];
    }

    // No usable cache (first run, purge, or endpoint list changed):
    // fetch synchronously once under a lock so concurrent requests don't stampede.
    dps_api_cache_ensure_dir();
    $lockFh = @fopen(dps_api_warm_lock_path(), 'c');
    if ($lockFh) {
        flock($lockFh, LOCK_EX);
        $bundle = dps_api_read_bundle(); // another process may have filled it
        if ($bundle !== null && $bundle['hash'] === $hash) {
            flock($lockFh, LOCK_UN);
            fclose($lockFh);
            if ((time() - $bundle['fetched_at']) > DPS_API_CACHE_TTL) {
                dps_api_request_bundle_refresh($baseUrl, $endpoints);
            }
            return $bundle['data'];
        }
    }

    $fresh = dps_api_fetch_all($baseUrl, $endpoints);
    $fresh = dps_api_merge_stale($fresh, $bundle['data'] ?? null);
    dps_api_write_bundle($hash, $fresh);

    if ($lockFh) {
        flock($lockFh, LOCK_UN);
        fclose($lockFh);
    }
    return $fresh;
}

/** Mark the bundle stale and trigger a background refresh (used by cache-clear). */
function dps_api_invalidate(string $baseUrl, array $endpoints): void
{
    $bundle = dps_api_read_bundle();
    if ($bundle !== null) {
        $bundle['fetched_at'] = 0;
        dps_api_cache_ensure_dir();
        @file_put_contents(dps_api_bundle_path(), json_encode($bundle), LOCK_EX);
    }
    dps_api_clear_refresh_flag();
    if (dps_api_mark_refresh_needed()) {
        dps_api_ping_warm();
    }
}

/* ---------------------------------------------------- per-page cache (page-template) */

function dps_api_page_cache_path(string $slug): string
{
    return DPS_API_CACHE_DIR . '/page-' . sha1(strtolower($slug)) . '.json';
}

function dps_api_page_flag_path(string $slug): string
{
    return DPS_API_CACHE_DIR . '/page-flag-' . sha1(strtolower($slug));
}

/** Fetch a single CMS page payload (decoded array or null). */
function dps_api_fetch_page(string $baseUrl, string $slug)
{
    $ch = curl_init($baseUrl . '/pages/' . $slug);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => DPS_API_TIMEOUT,
        CURLOPT_CONNECTTIMEOUT => DPS_API_CONNECT_TIMEOUT,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTPHEADER     => api_auth_headers(),
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false || $response === '') {
        return null; // transport failure - keep stale cache if any
    }
    // Any parseable response (including 404 bodies) is cacheable, so a
    // deleted CMS page starts 404ing within the TTL window.
    return json_decode($response, true);
}

function dps_api_write_page_cache(string $slug, $data): void
{
    dps_api_cache_ensure_dir();
    $tmp = dps_api_page_cache_path($slug) . '.tmp.' . getmypid();
    if (@file_put_contents($tmp, json_encode(['fetched_at' => time(), 'data' => $data]), LOCK_EX) !== false) {
        @rename($tmp, dps_api_page_cache_path($slug));
    }
}

/** Warm a single dynamic page (called by cache-warm.php?page=slug). */
function dps_api_warm_page(string $baseUrl, string $slug): void
{
    $data = dps_api_fetch_page($baseUrl, $slug);
    if ($data !== null) {
        dps_api_write_page_cache($slug, $data);
    }
    dps_api_clear_refresh_flag(dps_api_page_flag_path($slug));
}

/**
 * Get a dynamic CMS page with the same SWR semantics as the bundle.
 * Returns decoded API response array, or null if nothing available.
 */
function dps_api_page_get(string $baseUrl, string $slug)
{
    $file = dps_api_page_cache_path($slug);
    $cached = null;
    if (is_file($file)) {
        $decoded = json_decode((string) @file_get_contents($file), true);
        if (is_array($decoded) && array_key_exists('data', $decoded)) {
            $cached = $decoded;
        }
    }

    if ($cached !== null && $cached['data'] !== null
        && (time() - (int) $cached['fetched_at']) <= DPS_API_CACHE_TTL) {
        return $cached['data']; // fresh
    }

    if ($cached !== null && $cached['data'] !== null) {
        // stale -> serve now, refresh in background
        if (dps_api_mark_refresh_needed(dps_api_page_flag_path($slug))) {
            if (getenv('DPS_API_SYNC_REFRESH')) {
                dps_api_warm_page($baseUrl, $slug);
            } elseif (function_exists('fastcgi_finish_request')) {
                register_shutdown_function(function () use ($baseUrl, $slug) {
                    @fastcgi_finish_request();
                    dps_api_warm_page($baseUrl, $slug);
                });
            } else {
                dps_api_ping_warm(['page' => $slug]);
            }
        }
        return $cached['data'];
    }

    // cold: synchronous fetch (bounded by timeouts)
    $data = dps_api_fetch_page($baseUrl, $slug);
    if ($data !== null) {
        dps_api_write_page_cache($slug, $data);
    }
    return $data;
}
