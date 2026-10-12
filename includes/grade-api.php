<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/apis.php';

// includes/grade-api.php
// Reads from the shared cached API bundle (includes/apis.php) instead of
// making a separate curl call on every page load.
$json = $dps_api_bundle['grades_list'] ?? null;

if (is_array($json) && isset($json['status']) && $json['status'] === 'success' && isset($json['data'])) {
    return $json['data'];
}

return [];
