<?php
/**
 * HELPER - IMG LAZY LOADING AUTOMATIZADO
 * Usa loading="lazy" nativo + fallback JavaScript
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
    
    $width_attr = $width ? "width=\"$width\"" : '';
    $height_attr = $height ? "height=\"$height\"" : '';
    $class_attr = $class ? "class=\"$class\"" : '';
    $fp_attr = $fetchpriority ? "fetchpriority=\"$fetchpriority\"" : '';
    $title_attr = $title ? 'title="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '"' : '';

    // SI ES SVG, NO NECESITA WEBP NI PICTURE COMPLEJO
    if ($ext === 'svg') {
        return "<img src=\"{$base_url_img}{$src}\" alt=\"$alt\" $title_attr $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
    }

    // SI EL ORIGEN YA ES WEBP, LO SERVIMOS DIRECTO
    if ($ext === 'webp') {
        return "<img src=\"{$base_url_img}{$src}\" alt=\"$alt\" $title_attr $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
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
            <img src="$original_src" alt="$alt" $title_attr $class_attr $width_attr $height_attr loading="$loading" decoding="async" $fp_attr>
        </picture>
        HTML;
    }

    // SI NO HAY WEBP, SERVIMOS LA IMAGEN ORIGINAL DIRECTAMENTE
    return "<img src=\"$original_src\" alt=\"$alt\" $title_attr $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
}

/**
 * RENDERIZAR IMAGEN RESPONSIVA CON SRCSET
 * 
 * @param string $mobile_src RUTA BASE DE IMAGEN MOVIL
 * @param string $desktop_src RUTA BASE DE IMAGEN ESCRITORIO
 * @param string $alt TEXTO ALTERNATIVO
 * @param string $class CLASES CSS
 * @param string|null $title TITULO DE LA IMAGEN
 */
function render_img_responsive($mobile_src, $desktop_src, $alt, $class = '', $title = null) {
    $base_path = BASE_URL . 'publico/img/';
    $class_attr = $class ? "class=\"$class\"" : '';
    $title_text = $title ?? $alt;
    $title_attr = $title_text ? 'title="' . htmlspecialchars($title_text, ENT_QUOTES, 'UTF-8') . '"' : '';
    
    return <<<HTML
    <picture>
        <source media="(max-width: 768px)" srcset="$base_path$mobile_src" type="image/webp">
        <source media="(min-width: 769px)" srcset="$base_path$desktop_src" type="image/webp">
        <img src="$base_path$desktop_src" alt="$alt" $title_attr $class_attr loading="lazy" decoding="async">
    </picture>
    HTML;
}

/**
 * Agregar script para soporte de Intersection Observer (lazy loading mejorado)
 * Se carga una sola vez en el footer
 */
function lazy_loading_script() {
    return <<<JS
    <script>
    // Lazy Loading con Intersection Observer (mejorado)
    if ('IntersectionObserver' in window) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        }, { rootMargin: '50px' });
        
        images.forEach(image => imageObserver.observe(image));
    }
    </script>
    JS;
}

// HELPER para agregar versioning a assets
function asset_url($path, $version = '2.9') {
    return BASE_URL . $path . '?v=' . $version;
}
