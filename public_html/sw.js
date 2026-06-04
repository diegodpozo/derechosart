/* SERVICE WORKER - DERECHOS ART */
/* VERSION: 1.0 */
/* COMENTARIOS EN MAYUSCULAS Y SIN ACENTOS PARA CUMPLIR CON LAS NORMAS DEL PROYECTO */

const NOMBRE_CACHE = 'derechosart-cache-v1';
const ACTIVOS_ESTATICOS = [
    './',
    './publico/css/estilos.css?v=5.2',
    './publico/js/performance-optimization.js?v=1.0',
    './publico/js/ga4_events.js?v=1.0'
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
