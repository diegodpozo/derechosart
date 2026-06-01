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
    
    // Construir path base URL
    $base_url_img = BASE_URL . 'publico/img/';
    // Construir path fisico para verificacion
    $fisico_base = __DIR__ . '/../publico/img/';
    
    // Obtener informacion del archivo sin destruir la ruta
    $path_info = pathinfo($src);
    $dirname = ($path_info['dirname'] === '.') ? '' : $path_info['dirname'] . '/';
    $filename = $path_info['filename'];
    $ext = strtolower($path_info['extension'] ?? '');
    
    $width_attr = $width ? "width=\"$width\"" : '';
    $height_attr = $height ? "height=\"$height\"" : '';
    $class_attr = $class ? "class=\"$class\"" : '';
    $fp_attr = $fetchpriority ? "fetchpriority=\"$fetchpriority\"" : '';

    // Si es SVG, no necesita WebP ni picture complejo
    if ($ext === 'svg') {
        return "<img src=\"{$base_url_img}{$src}\" alt=\"$alt\" $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
    }

    // Si el origen ya es webp, lo servimos directo
    if ($ext === 'webp') {
        return "<img src=\"{$base_url_img}{$src}\" alt=\"$alt\" $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
    }

    // Rutas para WebP y Original
    $webp_relativa = $dirname . $filename . '.webp';
    $webp_fisico = $fisico_base . $webp_relativa;
    
    $original_src = $base_url_img . $src;
    
    // Solo usamos <picture> si el WebP existe fisicamente
    if (file_exists($webp_fisico)) {
        $webp_src = $base_url_img . $webp_relativa;
        return <<<HTML
        <picture>
            <source srcset="$webp_src" type="image/webp">
            <img src="$original_src" alt="$alt" $class_attr $width_attr $height_attr loading="$loading" decoding="async" $fp_attr>
        </picture>
        HTML;
    }

    // Si no hay WebP, servimos la imagen original directamente
    return "<img src=\"$original_src\" alt=\"$alt\" $class_attr $width_attr $height_attr loading=\"$loading\" decoding=\"async\" $fp_attr>";
}

/**
 * Renderizar imagen responsiva con srcset
 * 
 * @param string $src Ruta base de imagen
 * @param array $sizes Array con rutas: ['mobile' => 'img-mobile.webp', 'desktop' => 'img.webp']
 * @param string $alt Texto alternativo
 */
function render_img_responsive($mobile_src, $desktop_src, $alt, $class = '') {
    $base_path = BASE_URL . 'publico/img/';
    $class_attr = $class ? "class=\"$class\"" : '';
    
    return <<<HTML
    <picture>
        <source media="(max-width: 768px)" srcset="$base_path$mobile_src" type="image/webp">
        <source media="(min-width: 769px)" srcset="$base_path$desktop_src" type="image/webp">
        <img src="$base_path$desktop_src" alt="$alt" $class_attr loading="lazy" decoding="async">
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
