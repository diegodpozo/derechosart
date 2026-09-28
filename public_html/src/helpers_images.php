<?php
/**
 * HELPER - RENDER DE IMAGENES
 * Usa loading="lazy" nativo
 * Genera <picture> tags con WebP y fallback
 */

/**
 * Renderizar imagen con lazy loading nativo
 * 
 * @param string $src Ruta de la imagen (sin extension, se asume .webp si existe)
 * @param string $alt Texto alternativo
 * @param array $options ['class', 'width', 'height', 'loading', 'srcset']
 */
function render_img($src, $alt, $options = []) {
    $class = $options['class'] ?? '';
    $width = $options['width'] ?? '';
    $height = $options['height'] ?? '';
    $loading = $options['loading'] ?? 'lazy';
    $fetchpriority = $options['fetchpriority'] ?? null;
    $title = $options['title'] ?? $alt;
    
    // CONSTRUIR PATH BASE URL
    $base_url_img = BASE_URL . 'publico/img/';
    // CONSTRUIR PATH FISICO PARA VERIFICACION
    $fisico_base = __DIR__ . '/../publico/img/';
    
    // OBTENER INFORMACION DEL ARCHIVO SIN DESTRUIR LA RUTA
    $path_info = pathinfo($src);
    $dirname = ($path_info['dirname'] === '.') ? '' : $path_info['dirname'] . '/';
    $filename = $path_info['filename'];
    $ext = strtolower($path_info['extension'] ?? '');
    
    // ESCAPAR SIEMPRE EL TEXTO QUE VA DENTRO DE UN ATRIBUTO HTML
    // (SI NO, UN " EN EL TEXTO ROMPE EL ATRIBUTO O INYECTA ATRIBUTOS EXTRA)
    $alt_safe = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $width_attr = $width ? "width=\"$width\"" : '';
    $height_attr = $height ? "height=\"$height\"" : '';
    $class_attr = $class ? "class=\"$class\"" : '';
    $fp_attr = $fetchpriority ? "fetchpriority=\"$fetchpriority\"" : '';
    $title_attr = $title ? 'title="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '"' : '';

    // SI ES SVG, NO NECESITA WEBP NI PICTURE COMPLEJO
    if ($ext === 'svg') {
        return "<img src=\"{$base_url_img}{$src}\" alt=\"$alt_safe\" $title_attr $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
    }

    // SI EL ORIGEN YA ES WEBP, LO SERVIMOS DIRECTO
    if ($ext === 'webp') {
        return "<img src=\"{$base_url_img}{$src}\" alt=\"$alt_safe\" $title_attr $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
    }

    // RUTAS PARA WEBP Y ORIGINAL
    $webp_relativa = $dirname . $filename . '.webp';
    $webp_fisico = $fisico_base . $webp_relativa;
    
    $original_src = $base_url_img . $src;
    
    // SOLO USAMOS PICTURE SI EL WEBP EXISTE FISICAMENTE
    if (file_exists($webp_fisico)) {
        $webp_src = $base_url_img . $webp_relativa;
        return <<<HTML
        <picture>
            <source srcset="$webp_src" type="image/webp">
            <img src="$original_src" alt="$alt_safe" $title_attr $class_attr $width_attr $height_attr loading="$loading" decoding="async" $fp_attr>
        </picture>
        HTML;
    }

    // SI NO HAY WEBP, SERVIMOS LA IMAGEN ORIGINAL DIRECTAMENTE
    return "<img src=\"$original_src\" alt=\"$alt_safe\" $title_attr $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
}
