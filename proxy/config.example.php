<?php
// Central config for API base URL, branch ID, and JWT auth
// Copy this file to proxy/config.php and fill in real values (config.php is gitignored).
define('API_BASE_URL', 'https://example.com');
define('DPS_INDIRANAGAR_BRANCH_ID', 0);
define('API_JWT_TOKEN', 'YOUR_JWT_TOKEN_HERE');

if (!function_exists('api_auth_headers')) {
    /**
     * @param string[] $extra e.g. ['Content-Type: application/json']
     * @return string[]
     */
    function api_auth_headers(array $extra = []): array
    {
        $headers = ['Authorization: Bearer ' . API_JWT_TOKEN];
        foreach ($extra as $header) {
            $headers[] = $header;
        }
        return $headers;
    }
}
