<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/apis.php';


$json = $dps_api_bundle['sessions_list'] ?? null;

if (!is_array($json) || !isset($json['status']) || $json['status'] !== 'success') {
    return [];
}


return $json['data']['data'] ?? [];
