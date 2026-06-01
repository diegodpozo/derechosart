<?php
/**
 * SCRIPT DE AUDITORIA DE IMAGENES
 * Analiza tamaño, formato y recomendaciones de optimización
 */

$imgDir = __DIR__ . '/publico/img/';
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imgDir));

$imageStats = [
    'total_size' => 0,
    'file_count' => 0,
    'by_format' => [],
    'large_files' => [],
    'all_files' => []
];

foreach ($files as $file) {
    if (!$file->isFile()) continue;
    
    $ext = strtolower($file->getExtension());
    $allowedExts = ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg'];
    
    if (!in_array($ext, $allowedExts)) continue;
    
    $size = $file->getSize();
    $filename = $file->getFilename();
    $path = $file->getPathname();
    
    $imageStats['total_size'] += $size;
    $imageStats['file_count']++;
    
    if (!isset($imageStats['by_format'][$ext])) {
        $imageStats['by_format'][$ext] = ['count' => 0, 'size' => 0];
    }
    $imageStats['by_format'][$ext]['count']++;
    $imageStats['by_format'][$ext]['size'] += $size;
    
    // Registrar archivos grandes
    if ($size > 100000) { // > 100KB
        $imageStats['large_files'][] = [
            'file' => $filename,
            'size_kb' => round($size / 1024, 2),
            'ext' => $ext,
            'path' => $path
        ];
    }
    
    $imageStats['all_files'][] = [
        'file' => $filename,
        'size_kb' => round($size / 1024, 2),
        'ext' => $ext
    ];
}

// Ordenar archivos grandes
usort($imageStats['large_files'], function($a, $b) {
    return $b['size_kb'] <=> $a['size_kb'];
});

echo "=== AUDITORIA DE IMAGENES ===\n\n";
echo "Total de archivos: " . $imageStats['file_count'] . "\n";
echo "Tamaño total: " . round($imageStats['total_size'] / 1024 / 1024, 2) . " MB\n\n";

echo "=== POR FORMATO ===\n";
foreach ($imageStats['by_format'] as $ext => $stats) {
    echo "$ext: {$stats['count']} archivos, " . round($stats['size'] / 1024, 2) . " KB\n";
}

echo "\n=== ARCHIVOS GRANDES (> 100KB) ===\n";
if (!empty($imageStats['large_files'])) {
    foreach ($imageStats['large_files'] as $file) {
        echo "{$file['file']}: {$file['size_kb']} KB ({$file['ext']})\n";
    }
} else {
    echo "Ninguno detectado\n";
}

echo "\n=== RECOMENDACIONES ===\n";
echo "1. Convertir PNG/JPG a WebP (ahorro: ~30-40%)\n";
echo "2. Implementar lazy loading nativo (loading='lazy')\n";
echo "3. Usar responsive images (<picture> + srcset)\n";
echo "4. Comprimir con ImageOptim o TinyPNG\n";
echo "5. Servir desde CDN o cache headers agresivos\n";
