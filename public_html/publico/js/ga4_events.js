/**
 * Google Analytics 4 - Eventos Personalizados
 * Versión: 1.0
 * Descripción: Tracking de eventos específicos para DerechosART
 */

// ============================================================
// FUNCIÓN WRAPPER PARA EVENTOS GA4
// ============================================================
function trackEvent(eventName, eventData = {}) {
    if (typeof gtag !== 'undefined') {
        gtag('event', eventName, eventData);
        console.log('GA4 Event:', eventName, eventData);
    } else {
        console.warn('GA4 gtag no cargado');
    }
}

// ============================================================
// EVENTO: ENVÍO DE FORMULARIO DE CONTACTO
// ============================================================
function trackFormSubmit(formType, categoria = '') {
    trackEvent('form_submit', {
        'event_category': 'contacto',
        'form_type': formType,
        'categoria': categoria,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: LLAMADA TELEFÓNICA
// ============================================================
function trackPhoneCall(phone = '5491124786144', source = 'header') {
    trackEvent('phone_call', {
        'event_category': 'contact',
        'phone_number': phone,
        'source': source,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: MENSAJE WHATSAPP
// ============================================================
function trackWhatsAppClick(source = 'header') {
    trackEvent('whatsapp_click', {
        'event_category': 'contact',
        'platform': 'whatsapp',
        'source': source,
        'timestamp': new Date().toISOString()
    });

    // Google Ads Conversion
    if (typeof reportConversionWhatsApp === 'function') {
        reportConversionWhatsApp();
    }
}

// ============================================================
// EVENTO: CLICK EN ENLACE EXTERNO (REDES SOCIALES, ETC)
// ============================================================
function trackExternalLink(platform, url) {
    trackEvent('external_link_click', {
        'event_category': 'engagement',
        'platform': platform,
        'url': url,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: USO DE CALCULADORA
// ============================================================
function trackCalculatorUsage(calculatorType, action = 'open') {
    trackEvent('calculator_usage', {
        'event_category': 'tools',
        'calculator_type': calculatorType,
        'action': action,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: RESULTADO DE CALCULADORA
// ============================================================
function trackCalculatorResult(calculatorType, resultado) {
    trackEvent('calculator_result', {
        'event_category': 'tools',
        'calculator_type': calculatorType,
        'result_value': resultado,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: LECTURA DE SECCIÓN (SCROLL)
// ============================================================
function trackSectionView(sectionName) {
    trackEvent('section_view', {
        'event_category': 'engagement',
        'section_name': sectionName,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: DESCARGA DE DOCUMENTO
// ============================================================
function trackDownload(documentName, documentType) {
    trackEvent('file_download', {
        'event_category': 'engagement',
        'file_name': documentName,
        'file_type': documentType,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: VIDEO VIEW
// ============================================================
function trackVideoView(videoTitle, source = '') {
    trackEvent('video_view', {
        'event_category': 'engagement',
        'video_title': videoTitle,
        'source': source,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// EVENTO: PÁGINA NO ENCONTRADA (404)
// ============================================================
function track404Error(url) {
    trackEvent('page_not_found', {
        'event_category': 'error',
        'page_path': url,
        'timestamp': new Date().toISOString()
    });
}

// ============================================================
// AUTO-TRACK: ENLACES TELEFÓNICOS Y WHATSAPP
// ============================================================
document.addEventListener('DOMContentLoaded', function() {
    // Track WhatsApp clicks
    document.querySelectorAll('a[href*="wa.me"], .whatsapp-flotante a').forEach(link => {
        link.addEventListener('click', function(e) {
            const source = this.closest('.navbar-superior') ? 'header' :
                          this.closest('.whatsapp-flotante') ? 'floating_button' :
                          this.closest('footer') ? 'footer' : 'other';
            trackWhatsAppClick(source);
        });
    });

    // Track phone calls
    document.querySelectorAll('a[href^="tel:"], .phone-link').forEach(link => {
        link.addEventListener('click', function(e) {
            const phone = this.href.replace('tel:', '');
            const source = this.closest('.navbar-superior') ? 'header' :
                          this.closest('footer') ? 'footer' : 'other';
            trackPhoneCall(phone, source);
        });
    });

    // Track external links (redes sociales)
    document.querySelectorAll('.red-social, .social_bookmarks a').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.href;
            let platform = 'unknown';
            if (href.includes('instagram')) platform = 'instagram';
            else if (href.includes('facebook')) platform = 'facebook';
            else if (href.includes('tiktok')) platform = 'tiktok';
            else if (href.includes('youtube')) platform = 'youtube';
            else if (href.includes('twitter') || href.includes('x.com')) platform = 'twitter';
            
            trackExternalLink(platform, href);
        });
    });

    // Track calculadora clicks
    document.querySelectorAll('a[href*="calculadora"]').forEach(link => {
        link.addEventListener('click', function(e) {
            let calcType = 'unknown';
            if (this.href.includes('accidentes')) calcType = 'accidentes';
            else if (this.href.includes('despidos')) calcType = 'despidos';
            else if (this.href.includes('indemnizacion')) calcType = 'indemnizacion';
            
            trackCalculatorUsage(calcType, 'click');
        });
    });
});

// AUTO-TRACK: SCROLL DEPTH (Porcentaje de página leída)
let scrollTracked = false;
window.addEventListener('scroll', function() {
    if (scrollTracked) return;
    
    const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
    
    if (scrollPercentage > 25) {
        trackEvent('scroll_depth', {
            'event_category': 'engagement',
            'scroll_percentage': Math.round(scrollPercentage)
        });
        scrollTracked = true;
    }
});

// ============================================================
// TRACK: TIEMPO EN PÁGINA (Page engagement time)
// ============================================================
let engagementTimer;
document.addEventListener('mousedown', function() {
    clearTimeout(engagementTimer);
    engagementTimer = setTimeout(function() {
        trackEvent('page_engagement', {
            'event_category': 'engagement',
            'engagement_type': 'user_active',
            'time_on_page': Math.round((Date.now() - performance.timing.navigationStart) / 1000)
        });
    }, 10000); // 10 segundos de inactividad para registrar engagement
});

// ============================================================
// TRACK: CONVERSIÓN (Para usar en landing pages)
// ============================================================
function trackConversion(conversionType, conversionValue = 1) {
    trackEvent('conversion', {
        'event_category': 'conversion',
        'conversion_type': conversionType,
        'value': conversionValue,
        'currency': 'ARS',
        'timestamp': new Date().toISOString()
    });
}

console.log('GA4 Events script loaded successfully');

// AUTO-ENVIAR EVENTO DE PÁGINA CARGADA
if (typeof gtag !== 'undefined') {
    gtag('event', 'page_loaded', {
        'event_category': 'engagement',
        'page_location': window.location.href,
        'page_title': document.title
    });
    console.log('✓ Event enviado: page_loaded');
}
