<?php
/**
 * BOOTSTRAP PARA LOCAL DEVELOPMENT
 * SIRVE ARCHIVOS ESTATICOS DESDE public_html/ O DERIVA AL FRONT CONTROLLER
 */
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// CALCULAR BASE PATH PARA QUITARLO DEL REQUEST
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\\/');
$request = substr($path, strlen($base));
$request = $request ?: '/';

// SI ES LA RAIZ, PASAR DIRECTAMENTE AL FRONT CONTROLLER
if ($request === '/') {
    require __DIR__ . '/public_html/index.php';
    return;
}

// VERIFICAR SI EXISTE EL ARCHIVO EN public_html/ Y NO ES PHP
$publicFile = __DIR__ . '/public_html' . str_replace('/', DIRECTORY_SEPARATOR, $request);
if (file_exists($publicFile) && !is_dir($publicFile) && pathinfo($publicFile, PATHINFO_EXTENSION) !== 'php') {
    $mimeTypes = [
        'css' => 'text/css',
        'js'  => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg',
        'gif' => 'image/gif', 'svg' => 'image/svg+xml',
        'webp'=> 'image/webp', 'ico' => 'image/x-icon',
        'woff2'=> 'font/woff2', 'woff' => 'font/woff',
        'ttf' => 'font/ttf', 'otf' => 'font/otf',
        'json'=> 'application/json', 'xml' => 'application/xml',
    ];
    $ext = pathinfo($publicFile, PATHINFO_EXTENSION);
    header('Content-Type: ' . ($mimeTypes[$ext] ?? 'application/octet-stream'));
    readfile($publicFile);
    return;
}

// PASAR AL FRONT CONTROLLER
$_SERVER['SCRIPT_NAME'] = rtrim($base, '\\/') . '/index.php';
require __DIR__ . '/public_html/index.php';
