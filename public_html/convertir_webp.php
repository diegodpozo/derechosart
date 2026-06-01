<?php
/**
 * SCRIPT DE CONVERSION MASIVA A WEBP (OPTIMIZADO)
 * Escanea la carpeta de imagenes y convierte JPG/PNG a WebP si no existen.
 */

require_once __DIR__ . '/src/helpers.php'; // Para BASE_URL si fuera necesario

$imgDir = __DIR__ . '/publico/img/';
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imgDir));

echo "=== INICIANDO CONVERSION A WEBP ===\n\n";

$convertidos = 0;
$omitidos = 0;
$errores = 0;

foreach ($files as $file) {
    if (!$file->isFile()) continue;
    
    $path = $file->getPathname();
    $ext = strtolower($file->getExtension());
    
    if (!in_array($ext, ['jpg', 'jpeg', 'png'])) continue;
    
    $webpPath = pathinfo($path, PATHINFO_DIRNAME) . '/' . pathinfo($path, PATHINFO_FILENAME) . '.webp';
    
    if (file_exists($webpPath)) {
        $omitidos++;
        continue;
    }
    
    echo "Convirtiendo: " . basename($path) . "... ";
    
    try {
        if ($ext === 'png') {
            $image = imagecreatefrompng($path);
            imagepalettetotruecolor($image);
        } else {
            $image = imagecreatefromjpeg($path);
        }
        
        if ($image) {
            // Calidad 80% para un buen equilibrio peso/calidad
            if (imagewebp($image, $webpPath, 80)) {
                echo "OK!\n";
                $convertidos++;
            } else {
                echo "FALLO AL GUARDAR\n";
                $errores++;
            }
            imagedestroy($image);
        } else {
            echo "ERROR AL CARGAR\n";
            $errores++;
        }
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage() . "\n";
        $errores++;
    }
}

echo "\n=== RESULTADO ===\n";
echo "Convertidos: $convertidos\n";
echo "Omitidos (ya existian): $omitidos\n";
echo "Errores: $errores\n";
echo "==========================\n";
