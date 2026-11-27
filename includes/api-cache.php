<?php

if (!defined('DPS_API_CACHE_DIR')) {
    define('DPS_API_CACHE_DIR', __DIR__ . '/cache');
}
if (!defined('DPS_API_CACHE_TTL')) {
    // 60 seconds (1 minute): guarantees any CMS updates reflect on website within 1-2 minutes
    define('DPS_API_CACHE_TTL', 60); 
}
if (!defined('DPS_API_CONNECT_TIMEOUT')) {
    define('DPS_API_CONNECT_TIMEOUT', 3);
}
if (!defined('DPS_API_TIMEOUT')) {
    define('DPS_API_TIMEOUT', 10);
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

/* ---------------------------------------------------------- main entry point */

/**
 * Get the full endpoint->data map.
 * Fast cache return (< 5ms). When expired (> 60s), performs in-process refresh
 * with non-blocking locking so concurrent requests never hang.
 */
function dps_api_get_bundle(string $baseUrl, array $endpoints, bool $forceRefresh = false): array
{
    $hash = dps_api_endpoints_hash($endpoints);
    $bundle = dps_api_read_bundle();

    if (!$forceRefresh && (isset($_GET['nocache']) || isset($_GET['clear_cache']) || isset($_GET['refresh']))) {
        $forceRefresh = true;
    }

    // 1. Fresh cache exists (< 60s) and no force refresh requested -> return immediately (< 5ms)
    if (!$forceRefresh && $bundle !== null && $bundle['hash'] === $hash) {
        $age = time() - $bundle['fetched_at'];
        if ($age <= DPS_API_CACHE_TTL) {
            return $bundle['data'];
        }
    }

    // 2. Cache expired (> 60s), missing, or forceRefresh requested:
    dps_api_cache_ensure_dir();
    $lockFh = @fopen(dps_api_warm_lock_path(), 'c');
    $hasExistingCache = ($bundle !== null && !empty($bundle['data']));

    if ($hasExistingCache && !$forceRefresh) {
        // Expired cache exists: try non-blocking lock.
        // If another request is currently refreshing, serve the existing cache immediately without waiting!
        if ($lockFh && !flock($lockFh, LOCK_EX | LOCK_NB)) {
            fclose($lockFh);
            return $bundle['data'];
        }
    } else {
        // Cold cache (no cache file yet) or forced refresh: blocking lock
        if ($lockFh) {
            flock($lockFh, LOCK_EX);
            // Re-read bundle in case another process just finished while we were waiting
            $bundle = dps_api_read_bundle();
            if (!$forceRefresh && $bundle !== null && $bundle['hash'] === $hash && (time() - $bundle['fetched_at']) <= DPS_API_CACHE_TTL) {
                flock($lockFh, LOCK_UN);
                fclose($lockFh);
                return $bundle['data'];
            }
        }
    }

    // Fetch fresh data from CMS API
    $fresh = dps_api_fetch_all($baseUrl, $endpoints);

    // Safety: check if at least some endpoints returned valid data
    $successCount = 0;
    foreach ($fresh as $val) {
        if ($val !== null) {
            $successCount++;
        }
    }

    if ($successCount > 0) {
        $merged = dps_api_merge_stale($fresh, $bundle['data'] ?? null);
        dps_api_write_bundle($hash, $merged);
        $dataToReturn = $merged;
    } else {
        // Total API network failure: keep stale cache if available and advance fetched_at by 30s
        if ($hasExistingCache) {
            $bundle['fetched_at'] = time() - DPS_API_CACHE_TTL + 30;
            @file_put_contents(dps_api_bundle_path(), json_encode($bundle), LOCK_EX);
            $dataToReturn = $bundle['data'];
        } else {
            $dataToReturn = $fresh;
        }
    }

    if ($lockFh) {
        flock($lockFh, LOCK_UN);
        fclose($lockFh);
    }

    return $dataToReturn;
}

/** Invalidate cache bundle so the next request immediately refreshes it. */
function dps_api_invalidate(string $baseUrl, array $endpoints): void
{
    $bundle = dps_api_read_bundle();
    if ($bundle !== null) {
        $bundle['fetched_at'] = 0;
        dps_api_cache_ensure_dir();
        @file_put_contents(dps_api_bundle_path(), json_encode($bundle), LOCK_EX);
    }
}

/** Clear all cache files (bundle and dynamic page caches). */
function dps_api_clear_all_cache(): int
{
    dps_api_cache_ensure_dir();
    $count = 0;
    $files = glob(DPS_API_CACHE_DIR . '/*.json');
    if (is_array($files)) {
        foreach ($files as $file) {
            if (basename($file) === 'grades_cache.json') {
                continue;
            }
            if (@unlink($file)) {
                $count++;
            }
        }
    }
    @unlink(dps_api_flag_path());
    @unlink(dps_api_warm_lock_path());
    return $count;
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
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response === false || $response === '' || $httpCode !== 200) {
        return null;
    }
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

/**
 * Get a dynamic CMS page with 60-second caching.
 * Returns decoded API response array, or null if not found.
 */
function dps_api_page_get(string $baseUrl, string $slug, bool $forceRefresh = false)
{
    $file = dps_api_page_cache_path($slug);
    $cached = null;
    if (is_file($file)) {
        $decoded = json_decode((string) @file_get_contents($file), true);
        if (is_array($decoded) && array_key_exists('data', $decoded)) {
            $cached = $decoded;
        }
    }

    if (!$forceRefresh && (isset($_GET['nocache']) || isset($_GET['clear_cache']) || isset($_GET['refresh']))) {
        $forceRefresh = true;
    }

    // 1. Fresh cache exists (< 60s)
    if (!$forceRefresh && $cached !== null && $cached['data'] !== null) {
        $age = time() - (int) ($cached['fetched_at'] ?? 0);
        if ($age <= DPS_API_CACHE_TTL) {
            return $cached['data'];
        }
    }

    // 2. Fetch fresh page data
    $fresh = dps_api_fetch_page($baseUrl, $slug);
    if ($fresh !== null && isset($fresh['data']) && !empty($fresh['data'])) {
        dps_api_write_page_cache($slug, $fresh);
        return $fresh;
    }

    // Fallback to cached data if CMS API failed
    if ($cached !== null && $cached['data'] !== null) {
        return $cached['data'];
    }

    return $fresh;
}
