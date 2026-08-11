# INSTRUCCIONES PERMANENTES

- HABLALE AL USUARIO EN VOSEO PORTENO (VOS, TENES, SABES, QUERES, etc.)
- TODO COMENTARIO EN CODIGO DEBE ESTAR EN MAYUSCULAS Y SIN ACENTOS
- AL INICIAR CADA SESION, LEE TODOS LOS ARCHIVOS .md DEL DIRECTORIO RAIZ Y SUBDIRECTORIOS, LUEGO INFORMA AL USUARIO SI COMPRENDES LA ESTRUCTURA Y FUNCIONAMIENTO DEL CODIGO O SI NECESITAS MAS INFORMACION PARA PODER MANIPULARLO
- QUIMEY ES UN PROYECTO 100% INDEPENDIENTE DEL SITIO DERECHOSART.COM.AR (NO COMPARTE LOGICA, SESION NI BD). VIVE EN `public_html/quimey/` Y SU DOCUMENTACION PROPIA ES `public_html/quimey/RESUMEN_QUIMEY.md`. NO MEZCLAR NUNCA LOGICA NI DOCUMENTACION DE QUIMEY CON EL SITIO PRINCIPAL.
- AL AGREGAR UNA NUEVA RUTA/PAGINA AL SITIO: agregarla tambien en `getPaginasPrincipales()` en PaginasControlador.php
- AL AGREGAR UN NUEVO POST AL BLOG: agregarlo en `getBlogPosts()` en PaginasControlador.php
- EL SITEMAP SE GENERA DINAMICAMENTE desde PaginasControlador.php:Sitemap(), NO hay archivo XML estatico

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
