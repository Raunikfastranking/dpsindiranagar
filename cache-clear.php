<?php

require_once __DIR__ . '/proxy/config.php';
require_once __DIR__ . '/includes/api-cache.php';

header('Content-Type: application/json');

$key = (string) ($_GET['key'] ?? '');
if (!hash_equals(dps_api_purge_key(), $key)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Forbidden']);
    exit;
}

$endpoints = include __DIR__ . '/includes/api-endpoints.php';

if (!empty($_GET['hard'])) {
    @unlink(dps_api_bundle_path());
    dps_api_clear_refresh_flag();
    dps_api_ping_warm();
    echo json_encode(['success' => true, 'mode' => 'hard', 'message' => 'Cache deleted, refresh triggered']);
    exit;
}

dps_api_invalidate(DPS_API_BASE_URL, $endpoints);
echo json_encode(['success' => true, 'mode' => 'soft', 'message' => 'Cache marked stale, refresh triggered']);
