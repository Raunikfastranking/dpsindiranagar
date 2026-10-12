<?php
// Router for PHP's built-in server — mirrors the rewrite rules in web.config.
// Usage: php -S localhost:8000 router.php

$root = __DIR__;
$uri  = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = $root . $uri;

$staticExt = '#\.(jpg|jpeg|png|gif|css|js|pdf|svg|ico|webp|apk|zip|rar|txt|xml|json|mp4|webm|ogg|map|woff|woff2|ttf|eot)$#i';

// Serve real files directly
if ($uri !== '/' && is_file($path)) {
    return false;
}

// Homepage
if ($uri === '/' || preg_match('#^/(home|index)/?$#i', $uri)) {
    require $root . '/index.php';
    exit;
}

// Strip trailing slash on extensionless URLs (skip real directories)
if (substr($uri, -1) === '/' && !is_dir($path)) {
    header('Location: ' . rtrim($uri, '/'), true, 301);
    exit;
}

// /proxy/name -> /proxy/name.php
if (preg_match('#^/proxy/([A-Za-z0-9_-]+)/?$#i', $uri, $m) && is_file("$root/proxy/{$m[1]}.php")) {
    require "$root/proxy/{$m[1]}.php";
    exit;
}

// Subfolder directory indexes (e.g. /admissions-open-2026-27 -> .../index.php)
$trimmed = rtrim($uri, '/');
if ($trimmed !== '' && is_file("$root$trimmed/index.php")) {
    require "$root$trimmed/index.php";
    exit;
}

// /blog/slug -> detail.php?slug=
if (preg_match('#^/blog/([A-Za-z0-9-]+)/?$#i', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require $root . '/detail.php';
    exit;
}

// /view/slug -> detail-view.php?slug=
if (preg_match('#^/view/([A-Za-z0-9-]+)/?$#i', $uri, $m) && is_file($root . '/detail-view.php')) {
    $_GET['slug'] = $m[1];
    require $root . '/detail-view.php';
    exit;
}

// Clean URL -> existing .php file (e.g. /smart-classrooms -> smart-classrooms.php)
if (!is_dir($path) && is_file("$root$uri.php") && !preg_match($staticExt, $uri)) {
    require "$root$uri.php";
    exit;
}

// CMS pages when no local .php stub exists -> page-template.php?page=
if (preg_match('#^/([^/]+)/?$#', $uri, $m) && !preg_match($staticExt, $m[1])) {
    $_GET['page'] = $m[1];
    require $root . '/page-template.php';
    exit;
}

// Everything else -> custom 404
http_response_code(404);
require $root . '/404.php';
