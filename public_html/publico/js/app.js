/**
 * APP.JS - DERECHOSART - SCRIPTS UNIFICADOS
 * VERSION: 1.0
 * CONSOLIDA: performance-optimization + navegacion + subrayado-dinamico + ga4-events
 * COMENTARIOS EN MAYUSCULAS Y SIN ACENTOS PARA CUMPLIR CON LAS NORMAS DEL PROYECTO
 */

/* ============================================================
   1. LOG CONTROLADO (SILENCIOSO EN PRODUCCION)
   ============================================================ */
var ES_LOCAL = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
window.logSistema = function(mensaje, datos) {
    if (ES_LOCAL) {
        if (datos) console.log(mensaje, datos);
        else console.log(mensaje);
    }
};

/* ============================================================
   2. GA4 - FUNCIONES WRAPPER (GLOBALES, SE USAN EN HTML INLINE)
   ============================================================ */
function trackEvent(eventName, eventData) {
    eventData = eventData || {};
    if (typeof gtag !== 'undefined') {
        gtag('event', eventName, eventData);
        if (typeof window.logSistema === 'function') {
            window.logSistema('GA4 EVENTO:', { nombre: eventName, datos: eventData });
        }
    }
}

function trackFormSubmit(formType, categoria) {
    trackEvent('form_submit', {
        'event_category': 'contacto',
        'form_type': formType,
        'categoria': categoria || '',
        'timestamp': new Date().toISOString()
    });
}

function trackPhoneCall(phone, source) {
    trackEvent('phone_call', {
        'event_category': 'contact',
        'phone_number': phone || '5491124786144',
        'source': source || 'header',
        'timestamp': new Date().toISOString()
    });
}

function trackWhatsAppClick(source) {
    trackEvent('whatsapp_click', {
        'event_category': 'contact',
        'platform': 'whatsapp',
        'source': source || 'header',
        'timestamp': new Date().toISOString()
    });
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        event: "generate_lead",
        lead_type: "whatsapp"
    });
    if (typeof reportConversionWhatsApp === 'function') {
        reportConversionWhatsApp();
    }
}

function trackExternalLink(platform, url) {
    trackEvent('external_link_click', {
        'event_category': 'engagement',
        'platform': platform,
        'url': url,
        'timestamp': new Date().toISOString()
    });
}

function trackCalculatorUsage(calculatorType, action) {
    trackEvent('calculator_usage', {
        'event_category': 'tools',
        'calculator_type': calculatorType,
        'action': action || 'open',
        'timestamp': new Date().toISOString()
    });
}

function trackCalculatorResult(calculatorType, resultado) {
    trackEvent('calculator_result', {
        'event_category': 'tools',
        'calculator_type': calculatorType,
        'result_value': resultado,
        'timestamp': new Date().toISOString()
    });
}

function trackSectionView(sectionName) {
    trackEvent('section_view', {
        'event_category': 'engagement',
        'section_name': sectionName,
        'timestamp': new Date().toISOString()
    });
}

function trackDownload(documentName, documentType) {
    trackEvent('file_download', {
        'event_category': 'engagement',
        'file_name': documentName,
        'file_type': documentType,
        'timestamp': new Date().toISOString()
    });
}

function trackVideoView(videoTitle, source) {
    trackEvent('video_view', {
        'event_category': 'engagement',
        'video_title': videoTitle,
        'source': source || '',
        'timestamp': new Date().toISOString()
    });
}

function track404Error(url) {
    trackEvent('page_not_found', {
        'event_category': 'error',
        'page_path': url,
        'timestamp': new Date().toISOString()
    });
}

function trackConversion(conversionType, conversionValue) {
    trackEvent('conversion', {
        'event_category': 'conversion',
        'conversion_type': conversionType,
        'value': conversionValue || 1,
        'currency': 'ARS',
        'timestamp': new Date().toISOString()
    });
}

/* ============================================================
   3. SERVICE WORKER REGISTRATION
   ============================================================ */
if ('caches' in window && 'serviceWorker' in navigator) {
    var swUrl = (typeof BASE_URL !== 'undefined' ? BASE_URL : '/') + 'sw.js';
    navigator.serviceWorker.register(swUrl).catch(function() {
        logSistema('SW: SERVICE WORKER NO DISPONIBLE');
    });
}

/* ============================================================
   4. DOM READY - LOGICA PRINCIPAL
   ============================================================ */
document.addEventListener('DOMContentLoaded', function() {

    /* --------------------------------------------------------
       4a. MENU MOVIL (NAVEGACION.JS)
       -------------------------------------------------------- */
    var menuToggle = document.getElementById('menu-toggle');
    var menuMovil = document.getElementById('menu-movil');

    if (menuToggle && menuMovil) {
        menuToggle.addEventListener('click', function() {
            var estaAbierto = menuMovil.classList.toggle('activo');
            var icon = menuToggle.querySelector('i, svg');
            if (icon) {
                if (estaAbierto) {
                    if (icon.tagName.toLowerCase() === 'svg') {
                        icon.style.transform = 'rotate(90deg)';
                        icon.innerHTML = '<path fill="#000000" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>';
                    } else {
                        icon.className = 'fas fa-times';
                    }
                } else {
                    if (icon.tagName.toLowerCase() === 'svg') {
                        icon.style.transform = 'rotate(0deg)';
                        icon.innerHTML = '<path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                }
            }
        });

        /* CERRAR MENU AL HACER CLICK FUERA */
        document.addEventListener('click', function(evento) {
            var esClickDentroMenu = menuMovil.contains(evento.target);
            var esClickBotonToggle = menuToggle.contains(evento.target);
            if (!esClickDentroMenu && !esClickBotonToggle && menuMovil.classList.contains('activo')) {
                menuMovil.classList.remove('activo');
                var icon = menuToggle.querySelector('i, svg');
                if (icon) {
                    if (icon.tagName.toLowerCase() === 'svg') {
                        icon.style.transform = 'rotate(0deg)';
                        icon.innerHTML = '<path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                }
            }
        });

        /* DROPDOWNS MOVILES */
        var dropdownPairs = [
            { trigger: 'trigger-accidentes', dropdown: 'dropdown-accidentes' },
            { trigger: 'trigger-despidos', dropdown: 'dropdown-despidos' }
        ];
        dropdownPairs.forEach(function(pair) {
            var trigger = document.getElementById(pair.trigger);
            var dropdown = document.getElementById(pair.dropdown);
            if (trigger && dropdown) {
                trigger.addEventListener('click', function(e) {
                    e.preventDefault();
                    dropdown.classList.toggle('activo');
                    this.parentElement.classList.toggle('abierto');
                });
            }
        });
    }

    /* --------------------------------------------------------
       4b. SLIDER DE RESEÑAS
       -------------------------------------------------------- */
    var track = document.getElementById('reseñas-track');
    var prevBtn = document.getElementById('prev-btn');
    var nextBtn = document.getElementById('next-btn');
    if (track && prevBtn && nextBtn) {
        var scrollAmount = 400;
        nextBtn.onclick = function() {
            track.scrollTo({ left: track.scrollLeft + scrollAmount, behavior: 'smooth' });
        };
        prevBtn.onclick = function() {
            track.scrollTo({ left: track.scrollLeft - scrollAmount, behavior: 'smooth' });
        };
    }

    /* --------------------------------------------------------
       4c. SUBRAYADO DINAMICO
       -------------------------------------------------------- */
    requestAnimationFrame(function() {
        var elementos = document.querySelectorAll('.subrayado-amarillo, .resaltado-prolongado');
        if (!elementos.length) return;
        var mediciones = Array.from(elementos).map(function(el) {
            return {
                el: el,
                fontSize: parseFloat(window.getComputedStyle(el).fontSize) || 16
            };
        });
        requestAnimationFrame(function() {
            mediciones.forEach(function(item) {
                item.el.classList.remove('size-md', 'size-lg', 'size-xl');
                if (item.fontSize >= 28) {
                    item.el.classList.add('size-xl');
                } else if (item.fontSize >= 20) {
                    item.el.classList.add('size-lg');
                } else if (item.fontSize >= 16) {
                    item.el.classList.add('size-md');
                }
            });
        });
    });

    /* --------------------------------------------------------
       4d. GA4 - AUTO-TRACK EVENTOS
       -------------------------------------------------------- */

    /* WHATSAPP CLICKS */
    document.querySelectorAll('a[href*="wa.me"], .whatsapp-flotante a').forEach(function(link) {
        link.addEventListener('click', function() {
            var source = this.closest('.navbar-superior') ? 'header' :
                         this.closest('.whatsapp-flotante') ? 'floating_button' :
                         this.closest('footer') ? 'footer' : 'other';
            trackWhatsAppClick(source);
        });
    });

    /* TELEFONO */
    document.querySelectorAll('a[href^="tel:"], .phone-link').forEach(function(link) {
        link.addEventListener('click', function() {
            var phone = this.href.replace('tel:', '');
            var source = this.closest('.navbar-superior') ? 'header' :
                         this.closest('footer') ? 'footer' : 'other';
            trackPhoneCall(phone, source);
        });
    });

    /* REDES SOCIALES */
    document.querySelectorAll('.red-social, .social_bookmarks a').forEach(function(link) {
        link.addEventListener('click', function() {
            var href = this.href;
            var platform = 'unknown';
            if (href.includes('instagram')) platform = 'instagram';
            else if (href.includes('facebook')) platform = 'facebook';
            else if (href.includes('tiktok')) platform = 'tiktok';
            else if (href.includes('youtube')) platform = 'youtube';
            else if (href.includes('twitter') || href.includes('x.com')) platform = 'twitter';
            trackExternalLink(platform, href);
        });
    });

    /* CALCULADORAS */
    document.querySelectorAll('a[href*="calculadora"]').forEach(function(link) {
        link.addEventListener('click', function() {
            var calcType = 'unknown';
            if (this.href.includes('accidentes')) calcType = 'accidentes';
            else if (this.href.includes('despidos')) calcType = 'despidos';
            else if (this.href.includes('indemnizacion')) calcType = 'indemnizacion';
            trackCalculatorUsage(calcType, 'click');
        });
    });

    logSistema('APP.JS: TODOS LOS MODULOS CARGADOS');

    /* --------------------------------------------------------
       4e. GA4 - PAGE LOADED EVENT
       -------------------------------------------------------- */
    if (typeof gtag !== 'undefined') {
        gtag('event', 'page_loaded', {
            'event_category': 'engagement',
            'page_location': window.location.href,
            'page_title': document.title
        });
    }
});

/* ============================================================
   5. GA4 - SCROLL DEPTH (FUERA DE DOMContentLoaded, PASIVO)
   ============================================================ */
var scrollTracked = false;
window.addEventListener('scroll', function() {
    if (scrollTracked) return;
    requestAnimationFrame(function() {
        if (scrollTracked) return;
        var scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        if (scrollPercentage > 25) {
            scrollTracked = true;
            trackEvent('scroll_depth', {
                'event_category': 'engagement',
                'scroll_percentage': Math.round(scrollPercentage)
            });
        }
    });
}, { passive: true });

/* ============================================================
   6. GA4 - ENGAGEMENT TIME (FUERA DE DOMContentLoaded)
   ============================================================ */
var engagementTimer;
document.addEventListener('mousedown', function() {
    clearTimeout(engagementTimer);
    engagementTimer = setTimeout(function() {
        trackEvent('page_engagement', {
            'event_category': 'engagement',
            'engagement_type': 'user_active',
            'time_on_page': Math.round((Date.now() - performance.timing.navigationStart) / 1000)
        });
    }, 10000);
});
