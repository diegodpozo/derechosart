<?php

$_SERVER['REQUEST_URI'] = '/landings/abogados-art-neuquen-y-rio-negro';
$_SERVER['SCRIPT_NAME'] = '/index.php';

$script_name = $_SERVER['SCRIPT_NAME'];
$base_path = str_replace(['index.php', 'INDEX.PHP'], '', $script_name);

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_path);
}

$request_uri = strtok($_SERVER['REQUEST_URI'], '?');

if ($base_path !== '/' && strpos($request_uri, $base_path) === 0) {
    $request_uri = substr($request_uri, strlen($base_path));
}

$request_uri = '/' . ltrim($request_uri, '/');
if ($request_uri !== '/') {
    $request_uri = rtrim($request_uri, '/');
}

$request_uri = str_replace('/index.php', '', $request_uri);
if (empty($request_uri)) $request_uri = '/';

echo "Parsed REQUEST_URI: $request_uri\n";
echo "BASE_URL: " . BASE_URL . "\n";

if (preg_match('/^\/landings\/(.+)$/', $request_uri, $matches)) {
    echo "LANDING REGEX MATCH! Slug: " . $matches[1] . "\n";
} else {
    echo "NO MATCH\n";
}
