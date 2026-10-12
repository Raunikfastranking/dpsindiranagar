<?php
/**
 * Background cache warmer.
 *
 * Triggered automatically (non-blocking ping) whenever a page request finds
 * the API bundle stale, or by a server cron for guaranteed freshness:
 *     curl "https://dpsindiranagar.com/cache-warm.php?key=<PURGE_KEY>"
 * or CLI:
 *     php cache-warm.php --cli-key=<PURGE_KEY>
 *
 * Optional: &page=<slug> refreshes only that dynamic page's cache.
 */
require_once __DIR__ . '/proxy/config.php';
require_once __DIR__ . '/includes/api-cache.php';

$key = '';
if (PHP_SAPI === 'cli') {
    foreach ($argv as $arg) {
        if (strpos($arg, '--cli-key=') === 0) {
            $key = substr($arg, 10);
        }
    }
} else {
    $key = (string) ($_GET['key'] ?? '');
}

if (!hash_equals(dps_api_purge_key(), $key)) {
    http_response_code(403);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Forbidden']);
    exit;
}

ignore_user_abort(true);
set_time_limit(300);

$endpoints = include __DIR__ . '/includes/api-endpoints.php';

$page = isset($_GET['page']) ? trim((string) $_GET['page']) : '';
if ($page !== '' && PHP_SAPI !== 'cli') {
    $page = basename(preg_replace('/\.php$/i', '', $page));
    if ($page !== '') {
        dps_api_warm_page(DPS_API_BASE_URL, $page);
    }
}

dps_api_warm_bundle(DPS_API_BASE_URL, $endpoints);

if (PHP_SAPI !== 'cli') {
    header('Content-Type: application/json');
}
echo json_encode(['success' => true, 'warmed_at' => time()]);
