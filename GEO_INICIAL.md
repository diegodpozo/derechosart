# OPTIMIZACIÓN GEO INICIAL - DERECHOS ART

ESTE DOCUMENTO REGISTRA LAS CONFIGURACIONES TÉCNICAS E INVISIBLES DE GENERATIVE ENGINE OPTIMIZATION (GEO) IMPLEMENTADAS PARA MEJORAR LA CITACIÓN Y EL ANÁLISIS DE NUESTRO SITIO POR PARTE DE MOTORES DE RESPUESTA DE INTELIGENCIA ARTIFICIAL (GEMINI, CHATGPT, PERPLEXITY).

---

## 📂 ARCHIVOS MODIFICADOS Y UBICACIONES

Los cambios se realizaron en archivos de configuración y ruteo interno, sin alterar el diseño visual ni la redacción del frontend:

1.  **`public_html/config/SEO_CONFIG.php`**
    *   *Ubicación:* Carpeta de configuración central en la raíz de la web pública.
    *   *Cambio:* Se enriqueció el esquema de organización (`generateOrganizationSchema`) inyectando campos de fundadores (`founder`) y equipo (`employee`) asociados a los nombres y cargos de las abogadas. Se creó la función `GenerarSchemaArticuloBlog` que construye la estructura de datos JSON-LD de tipo `BlogPosting` vinculando la autoría y especialidad.
2.  **`public_html/vistas/encabezado.php`**
    *   *Ubicación:* Carpeta de vistas (layout general) de la aplicación.
    *   *Cambio:* Se integró la inyección automática del script JSON-LD de `BlogPosting` de forma invisible en la etiqueta `<head>` de la página cuando las variables del blog están definidas.
3.  **`public_html/aplicacion/Controladores/PaginasControlador.php`**
    *   *Ubicación:* Carpeta de controladores de páginas del núcleo MVC.
    *   *Cambio:* Se configuraron las variables del post actual (fecha de publicación, modificación y autoría enlazada a la `Dra. Nair Chemes`) antes de que el controlador envíe los datos al encabezado.

---

## 🤖 DETALLE DE DATOS ESTRUCTURADOS GEO INYECTADOS

### A. Grafo de la Firma de Abogados (E-E-A-T)
Dentro de la estructura de la empresa se mapearon las entidades de tipo `Person` para establecer relaciones de autoridad. El motor de IA puede corroborar las abogadas asociadas al estudio:
*   **Dra. Romina Koñiuch** (Socia Fundadora - Especialista en Accidentes Laborales y ART)
*   **Dra. Athina B. Pereyra** (Socia Fundadora - Especialista en Despidos)
*   **Dra. Nair Chemes** (Abogada Asociada - Experta en Enfermedades Profesionales)
*   **Dra. María José Zalazar** (Abogada Asociada - Especialista en Accidentes Laborales)
*   **Dra. Carolina Estrada** (Abogada Asociada - Especialista en Accidentes Laborales - Salta)

### B. Mapeo de Artículos de Blog
Se publica la entidad `BlogPosting` para las notas del blog (iniciando con la guía de accidentes), indicando:
*   `headline`: El título optimizado para CTR.
*   `datePublished`: Fecha exacta de lanzamiento (14 de Mayo de 2026).
*   `dateModified`: Fecha de última depuración de estilos y optimización de LCP (3 de Junio de 2026).
*   `author`: Enlazado directo a los datos profesionales de la Dra. Nair Chemes.

---

## 📋 REGLAS DE DESARROLLO GEO PARA EL FUTURO

Cuando se agregue un nuevo artículo de blog en `PaginasControlador.php`, recordar declarar las variables correspondientes antes del encabezado:

```php
// EJEMPLO DE CONFIGURACION GEO PARA NUEVOS POSTS
$FechaPublicacionBlog = "AÑO-MES-DIA_T_HORA-03:00";
$FechaModificacionBlog = "AÑO-MES-DIA_T_HORA-03:00";
$AutorBlogSlug = "slug-de-la-abogada"; // DEFINIDA EN SEO_CONFIG.php
```

---

## ⚡ OPTIMIZACIONES DE RENDIMIENTO Y SEO ADICIONALES (INVISIBLES)

1.  **Resolución de Contenido Duplicado (Punto 5 del Plan):**
    *   *Problema:* Las landings locales (ej: `/landings/abogados-art-almagro`) cargaban en paralelo con la versión raíz (`/abogados-art-almagro`), ambas devolviendo 200 OK y declarándose a sí mismas como el enlace canonical.
    *   *Solución:* Se modificó la lógica en `PaginasControlador.php` para forzar que el canonical apunte siempre a la versión oficial mapeada en el sitemap (`/landings/abogados-art-[localidad]`). Para las páginas unificadas (despidos/accidentes), se fuerza a que apunte a la raíz.
2.  **Eliminación de Petición HTTP Redundante (Punto 3 del Plan):**
    *   *Problema:* `performance-optimization.js` cargaba dinámicamente el archivo `estilos.css?v=3.0` después del renderizado, pero la página ya lo cargaba de forma nativa como `estilos.css?v=6.1` desde `encabezado.php`. Esto provocaba que el navegador descargara dos veces la misma hoja de estilos, ralentizando la velocidad (LCP).
    *   *Solución:* Se removió la carga dinámica duplicada de `estilos.css` en el script JavaScript.
3.  **Sincronización del Caché del Service Worker (Punto 3 del Plan):**
    *   *Problema:* El archivo `sw.js` intentaba cachear versiones viejas de CSS (`v=5.2` en lugar de `v=6.1`) y JS (`v=1.0` en lugar de `v=1.2`), haciendo la caché obsoleta.
    *   *Solución:* Se actualizó el Service Worker a la versión de caché `derechosart-cache-v2` y se actualizaron los query strings de los recursos a cachear con las versiones en producción actuales para asegurar que se almacenen y sirvan correctamente en segundo plano.
