<?php

// Font Awesome 6.5.1 + 7.2.0 SVG Files - Cargados desde archivos físicos en el servidor
// Esto sincroniza perfectamente con la versión de producción

define('FA_SVG_PATH', __DIR__ . '/../publico/font-awesome-svgs/solid/');

// DETECTA COLORES MONOCROMATICOS (NEGRO O CASI NEGRO) PARA QUE SIGAN AL TEMA
// MODO OSCURO: LOS ICONOS NEGROS PASAN A BLANCOS, LOS DE COLOR DE MARCA NO SE TOCAN
function color_es_monocromatico($Color) {
    $c = strtolower(trim((string) $Color));
    if ($c === '' || $c === 'black') return true;
    if (!preg_match('/^#([0-9a-f]{3}|[0-9a-f]{6})$/', $c, $m)) return false;
    $h = $m[1];
    if (strlen($h) === 3) $h = $h[0] . $h[0] . $h[1] . $h[1] . $h[2] . $h[2];
    $r = hexdec(substr($h, 0, 2)) / 255;
    $g = hexdec(substr($h, 2, 2)) / 255;
    $b = hexdec(substr($h, 4, 2)) / 255;
    $lin = function ($v) { return $v <= 0.04045 ? $v / 12.92 : pow(($v + 0.055) / 1.055, 2.4); };
    return (0.2126 * $lin($r) + 0.7152 * $lin($g) + 0.0722 * $lin($b)) < 0.02;
}

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
        $Fill = color_es_monocromatico($Color) ? 'var(--icon-color)' : htmlspecialchars($Color);
        $Estilo = rtrim($Estilo, ';') . '; fill: ' . $Fill . ';';
    }

    return str_replace(
        '<svg ',
        '<svg class="svg-inline ' . $Clase . '" ' . ($Estilo ? 'style="' . $Estilo . '" ' : ''),
        $ContenidoSVG
    );
}
