# INSTRUCCIONES PERMANENTES

- HABLALE AL USUARIO EN VOSEO PORTENO (VOS, TENES, SABES, QUERES, etc.)
- TODO COMENTARIO EN CODIGO DEBE ESTAR EN MAYUSCULAS Y SIN ACENTOS
- NUNCA HACER PUSH NI COMMIT SIN QUE EL USUARIO LO PIDA EXPRESAMENTE (esperar la orden explicita "commit" y/o "push")
- AL INICIAR CADA SESION, LEE TODOS LOS ARCHIVOS .md DEL DIRECTORIO RAIZ Y SUBDIRECTORIOS, LUEGO INFORMA AL USUARIO SI COMPRENDES LA ESTRUCTURA Y FUNCIONAMIENTO DEL CODIGO O SI NECESITAS MAS INFORMACION PARA PODER MANIPULARLO
- QUIMEY ES UN PROYECTO 100% INDEPENDIENTE DEL SITIO DERECHOSART.COM.AR (NO COMPARTE LOGICA, SESION NI BD). VIVE EN `public_html/quimey/` Y SU DOCUMENTACION PROPIA ES `public_html/quimey/RESUMEN_QUIMEY.md`. NO MEZCLAR NUNCA LOGICA NI DOCUMENTACION DE QUIMEY CON EL SITIO PRINCIPAL.
- AL AGREGAR UNA NUEVA RUTA/PAGINA AL SITIO: agregarla tambien en `getPaginasPrincipales()` en PaginasControlador.php
- AL AGREGAR UN NUEVO POST AL BLOG: agregarlo en `getBlogPosts()` en PaginasControlador.php
- EL SITEMAP SE GENERA DINAMICAMENTE desde PaginasControlador.php:Sitemap(), NO hay archivo XML estatico
- LAS ZONAS DE ATENCION (pagina zonas-atencion, API /api/localidades, sitemap y landings de zona) TIENEN UNA FUENTE UNICA: `obtenerZonasDeAtencion()` en `public_html/src/helpers.php`. NUNCA duplicar logica de zonas/contenido/accentos en otros archivos. El mapa de acentos central es `mapaAcentosZonas()` y `slugAZonaNombre()`.
- AL MODIFICAR ARCHIVOS .php con version .min (js/css), sincronizar SIEMPRE ambas versiones (fuente y .min)

## CONTEXTO DE SESION Y CAMBIOS

- AL INICIAR CON --CONTINUE O --RESUME: HACER `git log --format="%h %ai %s" -5` PARA SABER EL ULTIMO COMMIT Y QUE SE HIZO ANTES. ENFOCAR EL CONTEXSO EN LO QUE CAMBIE DESDE ESE COMMIT.
- CUANDO EL USUARIO PREGUNTE QUE CAMBIOS SE HICIERON, SIEMPRE PARTIR DEL ULTIMO COMMIT (NO DE LA HISTORIA COMPLETA). USAR `git diff <commit>..HEAD --stat` O `git log <commit>..HEAD --oneline` PARA MOSTRAR SOLO LO NUEVO.
- AL INICIAR CADA SESION, LEER TODOS LOS ARCHIVOS .md DEL DIRECTORIO RAIZ Y SUBDIRECTORIOS, LUEGO INFORMAR AL USUARIO SI COMPRENDES LA ESTRUCTURA Y FUNCIONAMIENTO DEL CODIGO O SI NECESITAS MAS INFORMACION PARA PODER MANIPULARLO

## GEO - PRIORIDADES PENDIENTES

| Prioridad | Que falta | Impacto | Estado |
|---|---|---|---|
| 1 | Autorias: completar bios en quienes-somos.php | Alto GEO | BLOQUEADO - esperando info del usuario |
| 2 | Faltan 2 autoras en schema blog: maria-luz-fernandez y josefina-rizzato | Medio | COMPLETADO - agregadas en SEO_CONFIG.php linea 914-928 |
| 3 | AggregateRating consolidado en Organization schema | Alto GEO | COMPLETADO - ya existe en SEO_CONFIG.php lineas 509-513 |
| 4 | SameAs (redes sociales) en Organization schema | Medio | COMPLETADO - ya existe en SEO_CONFIG.php lineas 503-508 |
| 5 | Links a texto oficial de leyes/decretos (infoleg.gob.ar) | Medio | Pendiente |
| 6 | Fallos jurisprudenciales en articulos del blog | Medio | Pendiente |
| 7 | Service schema individual por area de practica | Bajo | Pendiente |

## INFORME SEO/AEO 2026-09-15 - PENDIENTES

| # | Accion | Prioridad | Estado |
|---|---|---|---|
| 1 | Unificar informacion geografica (home inicio.php:8 / quienes-somos.php:27 / llms-full.txt:12) | Alta | Pendiente |
| 2 | Completar bios en quienes-somos.php (formacion, trayectoria, especializacion) | Alta | BLOQUEADO - esperando info del usuario |
| 3 | Agregar autor y revisor juridico a cada articulo del blog (con matricula) | Alta | Pendiente |
| 4 | Agregar fuentes oficiales (infoleg.gob.ar, SRT) en contenidos legales | Alta | Pendiente |
| 5 | Auditar las 432 paginas locales (217 ART + 215 despidos): mantener fuertes, mejorar virtuales, 301 las duplicadas | Alta | Pendiente |
| 6 | Corregir 1-2 anos en accidentes-de-trabajo.php | Crítica | COMPLETADO 2026-09-15 |
| 7 | Diferenciar /faq de /preguntas-frecuentes (hoy rutas separadas index.php:152,156) | Media | Pendiente |
| 8 | Revisar plazos y prescripciones legales en TODO el contenido (no solo accidentes-de-trabajo.php) | Crítica | Pendiente |
| 9 | BreadcrumbList dinamico en schema | Media | Pendiente |
| 10 | Unificar lista oficial de localidades y verificar consistencia en home, quienes-somos, llms-full, contacto y landings | Alta | Pendiente |
