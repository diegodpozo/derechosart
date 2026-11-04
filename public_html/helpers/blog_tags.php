<?php
/**
 * HELPERS PARA ETIQUETAS DEL BLOG
 * FUENTE UNICA: config/blog-tag-colors.php
 */

function obtenerColoresTagBlog(string $categoria): array {
    static $mapa = null;
    if ($mapa === null) {
        $ruta = __DIR__ . '/../config/blog-tag-colors.php';
        $mapa = require $ruta;
    }

    if (!isset($mapa[$categoria]['class'])) {
        throw new InvalidArgumentException('Categoria de blog sin color configurado: ' . $categoria);
    }

    return $mapa[$categoria];
}

function renderTagBlog(string $categoria): string {
    $cfg = obtenerColoresTagBlog($categoria);
    $catLimpia = htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8');
    return '<span class="blog-card-tag ' . htmlspecialchars($cfg['class'], ENT_QUOTES, 'UTF-8') . '">' . $catLimpia . '</span>';
}
