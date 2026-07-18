/* SERVICE WORKER - DERECHOS ART */
/* VERSION: 1.1 */
/* COMENTARIOS EN MAYUSCULAS Y SIN ACENTOS PARA CUMPLIR CON LAS NORMAS DEL PROYECTO */

const NOMBRE_CACHE = 'derechosart-cache-v3';
const ACTIVOS_ESTATICOS = [
    './',
    './publico/css/estilos.css?v=6.1',
    './publico/css/resenyas-responsive.css?v=2.1',
    './publico/css/subrayado-fix.css?v=2.0',
    './publico/css/iconos-fix.css?v=1.1',
    './publico/js/performance-optimization.js?v=1.2'
];

// INSTALACION: CACHE DE ACTIVOS ESTATICOS
self.addEventListener('install', evento => {
    evento.waitUntil(
        caches.open(NOMBRE_CACHE)
            .then(cache => {
                console.log('SW: CACHE ABIERTO');
                return cache.addAll(ACTIVOS_ESTATICOS);
            })
            .then(() => self.skipWaiting())
    );
});

// ACTIVACION: LIMPIEZA DE CACHES ANTIGUOS
self.addEventListener('activate', evento => {
    evento.waitUntil(
        caches.keys().then(nombresCache => {
            return Promise.all(
                nombresCache.map(nombre => {
                    if (nombre !== NOMBRE_CACHE) {
                        console.log('SW: BORRANDO CACHE ANTIGUO', nombre);
                        return caches.delete(nombre);
                    }
                })
            );
        }).then(() => self.clients.claim())
    );
});

// FETCH: ESTRATEGIA STALE-WHILE-REVALIDATE (SIRVE CACHE Y ACTUALIZA EN SEGUNDO PLANO)
self.addEventListener('fetch', evento => {
    // SOLO MANEJAR PETICIONES GET
    if (evento.request.method !== 'GET') return;

    // EVITAR ERRORES CON ESQUEMAS NO SOPORTADOS (CHROME-EXTENSION, DATA, BLOB, ETC.)
    if (evento.request.url.startsWith('chrome-extension://')) return;

    // EVITAR INTERCEPTAR NAVEGACIONES DE PAGINA PARA PREVENIR CONFLICTOS CON REDIRECCIONES SEO (301/302) Y ACCESO A SESIONES
    if (evento.request.mode === 'navigate') return;

    evento.respondWith(
        caches.match(evento.request)
            .then(respuestaCache => {
                const fetchPromesa = fetch(evento.request).then(respuestaRed => {
                    // ACTUALIZAR EL CACHE CON LA NUEVA RESPUESTA
                    if (respuestaRed && respuestaRed.status === 200) {
                        const copiaRespuesta = respuestaRed.clone();
                        caches.open(NOMBRE_CACHE).then(cache => {
                            cache.put(evento.request, copiaRespuesta);
                        });
                    }
                    return respuestaRed;
                }).catch(() => {
                    // SI FALLA LA RED Y NO HAY CACHE, PODRIAMOS DEVOLVER UNA PAGINA OFFLINE
                });

                return respuestaCache || fetchPromesa;
            })
    );
});
