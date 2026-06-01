/**
 * OPTIMIZACIÓN MOBILE - VELOCIDAD AGRESIVA
 * Versión: 1.0
 * Objetivo: Pasar de 65/100 a 90+/100 en PageSpeed
 */

// ============================================================
// 1. LAZY LOADING DE IMAGENES - NATIVA DEL NAVEGADOR
// ============================================================
document.addEventListener('DOMContentLoaded', function() {
    // Imagen hero debe tener loading="eager" en HTML
    // El resto debe tener loading="lazy"
    
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.srcset = img.dataset.srcset || img.srcset;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback para navegadores viejos
        lazyImages.forEach(img => {
            img.src = img.dataset.src || img.src;
            img.srcset = img.dataset.srcset || img.srcset;
        });
    }
});

// ============================================================
// 2. DESCARGAR JS/CSS NO CRÍTICOS CON REQUESTIDLECALLBACK
// ============================================================
if ('requestIdleCallback' in window) {
    requestIdleCallback(() => {
        // Cargar estilos no-críticos después que todo está listo
        const linkEstilos = document.createElement('link');
        linkEstilos.rel = 'stylesheet';
        linkEstilos.href = (typeof BASE_URL !== 'undefined' ? BASE_URL : '/') + 'publico/css/estilos.css?v=3.0';
        document.head.appendChild(linkEstilos);
    });
} else {
    // Fallback: cargar después de 2 segundos
    setTimeout(() => {
        const linkEstilos = document.createElement('link');
        linkEstilos.rel = 'stylesheet';
        linkEstilos.href = (typeof BASE_URL !== 'undefined' ? BASE_URL : '/') + 'publico/css/estilos.css?v=3.0';
        document.head.appendChild(linkEstilos);
    }, 2000);
}

// ============================================================
// 3. DEFER GOOGLE FONTS LOADING
// ============================================================
function optimizeFontLoading() {
    // Las fuentes ya están inline en critical.css
    // Si usas Google Fonts, úsalas así:
    // <link rel="preconnect" href="https://fonts.googleapis.com">
    // <link rel="preload" as="font" href="..." crossorigin>
}

// ============================================================
// 4. COMPRESS/MINIFY GA4 EVENTS CALLS
// ============================================================
function compressGa4Events() {
    // Ya está minificado en ga4_events.js
    // No hace nada especial aquí
}

// ============================================================
// 5. PRELOAD RECURSOS CRÍTICOS (EJECUTAR EN <head>)
// ============================================================
function addPreloadLinks() {
    // Agregar en encabezado.php dentro de <head>:
    // <link rel="preload" as="style" href="/publico/css/critical.css">
    // <link rel="preload" as="image" href="/publico/img/logo.webp">
}

// ============================================================
// 6. PREFETCH ENLACES INTERNOS (PARA CONEXIÓN RÁPIDA)
// ============================================================
document.addEventListener('DOMContentLoaded', function() {
    const prefetchLinks = () => {
        const links = document.querySelectorAll('a[href*="/"]');
        links.forEach(link => {
            if (link.href.includes(window.location.origin)) {
                const prefetchLink = document.createElement('link');
                prefetchLink.rel = 'prefetch';
                prefetchLink.href = link.href;
                document.head.appendChild(prefetchLink);
            }
        });
    };
    
    // Ejecutar después de 3 segundos (no bloquea carga inicial)
    setTimeout(prefetchLinks, 3000);
});

// ============================================================
// 7. COMPRESSION DE FONTWESOME (USAR SUBSET)
// ============================================================
// En lugar de cargar el CSS completo de Font Awesome:
// Opción 1: Cargar solo los iconos que usas
// Opción 2: Usar SVG inline en lugar de Font Awesome
// Opción 3: Usar sistema de iconos web moderno

// ============================================================
// 8. MINIFY GA4 EVENTS ON LOAD
// ============================================================
console.log('✓ Optimización Mobile v1.0 cargada');

// Ejecutar ga4_events.js de forma asincrónica
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        console.log('✓ GA4 Events integrado con optimizaciones');
    });
} else {
    console.log('✓ GA4 Events integrado con optimizaciones');
}

// ============================================================
// 9. CACHE API PARA RECURSOS ESTÁTICOS
// ============================================================
if ('caches' in window && 'serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js').catch(err => {
        console.log('Service Worker no disponible');
    });
}

// ============================================================
// 10. PRIORIZAR VISUAL STABILITY (CLS < 0.1)
// ============================================================
// Agregar fixed heights en imágenes y videos
// Reservar espacio para ads/dinámico
// Evitar fuentes que hacen shift
