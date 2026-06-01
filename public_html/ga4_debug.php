<?php
/**
 * GA4 Debug - Verificar que el tag está cargando correctamente
 * Accede a: https://derechosart.com.ar/ga4_debug.php
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GA4 Debug - DerechosART</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        .status { padding: 10px; margin: 10px 0; border-radius: 4px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        code { background: #f4f4f4; padding: 2px 6px; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 GA4 Debug - Verificación</h1>
        
        <div class="status info">
            <strong>ID de Medición esperado:</strong> <code>G-SBNESCYEYL</code>
        </div>

        <h2>Verificaciones:</h2>
        
        <div class="status success">
            ✓ <strong>GA4 Tag en HTML:</strong> El script debería estar en el &lt;head&gt;
        </div>

        <div class="status info">
            <strong>Instrucciones:</strong>
            <ol>
                <li>Abre DevTools (F12)</li>
                <li>Ve a la pestaña <strong>Network</strong></li>
                <li>Filtra por "gtag" o "googletagmanager"</li>
                <li>Deberías ver una solicitud a <code>googletagmanager.com/gtag/js?id=G-SBNESCYEYL</code></li>
                <li>Si la solicitud es <strong>200</strong> → GA4 está cargando ✓</li>
                <li>Si es <strong>404 o error</strong> → Hay un problema</li>
            </ol>
        </div>

        <h2>Console Test:</h2>
        <div class="status info">
            <strong>Abre DevTools (F12) → Console y ejecuta:</strong>
            <pre>gtag('event', 'test_event', {'event_category': 'test'})</pre>
        </div>

        <h2>Google Analytics Real-time:</h2>
        <div class="status info">
            Ve a: <a href="https://analytics.google.com" target="_blank">Google Analytics</a>
            <br>→ Reporting → Real-time
            <br>Deberías ver eventos que aparecen en tiempo real mientras navegas
        </div>

        <h2>Interacciones para testear:</h2>
        <div class="status info">
            <ul>
                <li><a href="https://wa.me/5491124786144">Haz click aquí (debe rastrear WhatsApp)</a></li>
                <li><a href="tel:5491124786144">O aquí (debe rastrear teléfono)</a></li>
                <li><a href="https://www.instagram.com/derechosart">O aquí (debe rastrear redes)</a></li>
            </ul>
        </div>

        <h2>Código de prueba (ejecutar en Console):</h2>
        <pre>
// Verificar que gtag está disponible
console.log('gtag disponible:', typeof gtag !== 'undefined');

// Verificar dataLayer
console.log('dataLayer:', window.dataLayer);

// Enviar evento de prueba
gtag('event', 'manual_test', {
    'event_category': 'debug',
    'event_label': 'prueba_manual'
});
        </pre>

        <hr>
        
        <div class="status success">
            <h3>✅ Si todo está bien, deberías ver:</h3>
            <ul>
                <li>En DevTools → Console: "GA4 Events script loaded successfully"</li>
                <li>En DevTools → Network: request a googletagmanager.com con estado 200</li>
                <li>En Google Analytics Real-time: eventos apareciendo mientras navegas</li>
                <li>Después de 24-48h: datos históricos en GA4</li>
            </ul>
        </div>

        <div class="status error">
            <h3>❌ Si algo falla:</h3>
            <ul>
                <li>Verifica que el archivo ga4_events.js está en: /publico/js/ga4_events.js</li>
                <li>Verifica que encabezado.php tiene el GA4 tag</li>
                <li>Limpia cache del navegador (Ctrl+Shift+Supr)</li>
                <li>Recarga la página (Ctrl+F5)</li>
                <li>Prueba en navegador privado (Incógnito)</li>
            </ul>
        </div>
    </div>

    <!-- GOOGLE ANALYTICS 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SBNESCYEYL"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-SBNESCYEYL', {
        'page_path': window.location.pathname,
        'page_title': document.title,
        'anonymize_ip': true
      });
      console.log('GA4 Debug Page - GA4 tag cargado');
    </script>

    <!-- ANALYTICS EVENTS -->
    <script>
        function trackEvent(eventName, eventData = {}) {
            if (typeof gtag !== 'undefined') {
                gtag('event', eventName, eventData);
                console.log('✓ Event tracked:', eventName, eventData);
            } else {
                console.warn('✗ gtag no disponible');
            }
        }
        console.log('GA4 Debug Page - Funciones disponibles');
    </script>
</body>
</html>
