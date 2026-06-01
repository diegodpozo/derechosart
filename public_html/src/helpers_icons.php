<?php

// Font Awesome 6.5.1 + 7.2.0 SVG Files - Cargados desde archivos físicos en el servidor
// Esto sincroniza perfectamente con la versión de producción

define('FA_SVG_PATH', __DIR__ . '/../publico/font-awesome-svgs/solid/');

function render_icon($Nombre, $Clase = '', $Estilo = '', $Color = '') {
    $ArchivoSVG = FA_SVG_PATH . $Nombre . '.svg';
    
    // Si el archivo existe, cargarlo
    if (file_exists($ArchivoSVG)) {
        $ContenidoSVG = file_get_contents($ArchivoSVG);
        
        // Eliminamos cualquier fill hardcodeado en el SVG (paths) para que herede el del padre o use el parametro
        $ContenidoSVG = preg_replace('/fill="[^"]*"/', '', $ContenidoSVG);
        
        // Si se especifica un color, lo agregamos al estilo
        if ($Color) {
            $Estilo = rtrim($Estilo, ';') . '; fill: ' . htmlspecialchars($Color) . ';';
        }
        
        // Aseguramos que el SVG tenga las clases correctas y el estilo dinámico
        $ContenidoSVG = str_replace(
            '<svg ',
            '<svg class="svg-inline ' . $Clase . '" ' . ($Estilo ? 'style="' . $Estilo . '" ' : ''),
            $ContenidoSVG
        );
        
        return $ContenidoSVG;
    }
    
    // Fallback: si no existe, retornar vacío o un SVG de error
    error_log("Icono no encontrado: $Nombre en $ArchivoSVG");
    return '';
}
