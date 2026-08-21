<?php

// Font Awesome 6.5.1 + 7.2.0 SVG Files - Cargados desde archivos físicos en el servidor
// Esto sincroniza perfectamente con la versión de producción

define('FA_SVG_PATH', __DIR__ . '/../publico/font-awesome-svgs/solid/');

function render_icon($Nombre, $Clase = '', $Estilo = '', $Color = '') {
    static $cacheSvg = [];

    if (!isset($cacheSvg[$Nombre])) {
        $ArchivoSVG = FA_SVG_PATH . $Nombre . '.svg';
        if (file_exists($ArchivoSVG)) {
            $cacheSvg[$Nombre] = preg_replace('/fill="[^"]*"/', '', file_get_contents($ArchivoSVG));
        } else {
            error_log("Icono no encontrado: $Nombre en $ArchivoSVG");
            $cacheSvg[$Nombre] = '';
        }
    }

    $ContenidoSVG = $cacheSvg[$Nombre];
    if ($ContenidoSVG === '') return '';

    if ($Color) {
        $Estilo = rtrim($Estilo, ';') . '; fill: ' . htmlspecialchars($Color) . ';';
    }

    return str_replace(
        '<svg ',
        '<svg class="svg-inline ' . $Clase . '" ' . ($Estilo ? 'style="' . $Estilo . '" ' : ''),
        $ContenidoSVG
    );
}
