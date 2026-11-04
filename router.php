<?php
// Dev router for `php -S` that mirrors the .htaccess rewrite rules.

// Mirror the .htaccess mod_headers CORS block.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'OPTIONS') {
    http_response_code(204);
    return true;
}

$uri  = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$root = __DIR__;

if ($uri === '' || $uri === 'home') {
    require $root . '/index.php';
    return true;
}

if (preg_match('#^blog/([A-Za-z0-9-]+)$#', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require $root . '/detail.php';
    return true;
}

if (preg_match('#^view/([A-Za-z0-9-]+)$#', $uri, $m) && is_file($root . '/detail-view.php')) {
    $_GET['slug'] = $m[1];
    require $root . '/detail-view.php';
    return true;
}

$path = $root . '/' . $uri;

// Existing files/dirs are served (or executed) by the built-in server.
if (is_file($path) || is_dir($path)) {
    return false;
}

// Clean URL -> <uri>.php
if (!str_ends_with($uri, '.php') && is_file($path . '.php')) {
    require $path . '.php';
    return true;
}

// Dynamic CMS page fallback: /<page> -> page-template.php?page=<page>
if (preg_match('#^[^/]+$#', $uri)) {
    $_GET['page'] = $uri;
    require $root . '/page-template.php';
    return true;
}

http_response_code(404);
require $root . '/404.php';
return true;
