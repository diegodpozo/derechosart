<?php
error_reporting(E_ALL);
mb_internal_encoding('UTF-8');

// LOS 3 NOMBRES QUE DEBERIAN MATCHEAR (FOTO REGLA: PRIMERA PALABRA)
$resenas = [
    ['nombre' => 'María José Vitta',  'foto' => '', 'estrellas' => 5.0],
    ['nombre' => 'Jonatan Fernández', 'foto' => '', 'estrellas' => 5.0],
    ['nombre' => 'Victoria Aguilar',  'foto' => '', 'estrellas' => 4.9],
];
$resenas_directorio_fotos = 'rosario';
$resenas_h2_html       = 'Opiniones';
$resenas_maps_url      = 'https://maps.google.com/';
$resenas_promedio_global = 4.9;
$resenas_total_global  = '10';

// FUNCIONES QUE EL PARCIAL LLAMA (REEMPLAZOS PARA NO DEPENDER DEL SITIO)
if (!function_exists('render_img')) {
    function render_img($src, $alt, $options = []) {
        return '<img src="' . $src . '" alt="' . $alt . '" class="' . ($options['class'] ?? '') . '" width="' . ($options['width'] ?? '') . '">';
    }
}
if (!function_exists('render_icon')) {
    function render_icon($n) { return '[i:' . $n . ']'; }
}

// INCLUIR EL PARCIAL REAL (SCOPE IDENTICO AL DE landing-zona.php)
include __DIR__ . '/vistas/partials/resenas-google.php';

foreach ($resenas as $resena) {
    $nombre = $resena['nombre'];
    $primera = trim(explode(' ', $nombre)[0] ?? '');
    $slug = mb_strtolower($primera, 'UTF-8');
    $slug = trim(preg_replace('/[^a-z0-9]+/', '-', strtr($slug, ['á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u', 'ü' => 'u', 'ñ' => 'n'])), '-');
    $relativa = $resenas_directorio_fotos . '/' . $slug . '.webp'; // rosario/maria.webp
    $fisica   = __DIR__ . '/publico/img/' . $relativa;            // public_html/publico/img/rosario/maria.webp
    echo "RESENA: $nombre" . PHP_EOL;
    echo "  primera_palabra=[$primera] slug=[$slug]" . PHP_EOL;
    echo "  ruta_relativa (para render_img)  = $relativa" . PHP_EOL;
    echo "  ruta_fisica  (file_exists)       = $fisica" . PHP_EOL;
    echo "  file_exists => " . (file_exists($fisica) ? 'SI' : 'NO') . PHP_EOL;
    echo PHP_EOL;
}
