# PUNTO 3: AUDITORÍA CORE WEB VITALS & VELOCIDAD

**Fecha:** Junio 2026  
**Status:** Auditoría manual requerida  
**Responsable:** Usuario + Gordon

---

## PARTE 1: AUDITORÍA MANUAL - PASO A PASO

### Paso 1: PageSpeed Insights

**URL:** https://pagespeed.web.dev/

1. Ingresá `https://derechosart.com.ar/`
2. Selecciona "Dispositivos" → Prueba DESKTOP primero
3. Captura screenshot de:
   - Performance score (0-100)
   - LCP (Largest Contentful Paint)
   - FID (First Input Delay)
   - CLS (Cumulative Layout Shift)

**Criterios Google:**
- LCP: ✅ <2.5s (Bueno), ⚠️ 2.5-4s (Necesita mejora), ❌ >4s (Pobre)
- FID: ✅ <100ms, ⚠️ 100-300ms, ❌ >300ms
- CLS: ✅ <0.1, ⚠️ 0.1-0.25, ❌ >0.25

### Paso 2: Lighthouse (dentro de DevTools)

1. Chrome DevTools → Lighthouse
2. Selecciona "Performance"
3. Genera reporte

**Métricas clave en reporte:**
- First Contentful Paint (FCP)
- Largest Contentful Paint (LCP)
- Cumulative Layout Shift (CLS)
- Speed Index
- Total Blocking Time (TBT)

### Paso 3: Search Console - Core Web Vitals

1. Google Search Console → URL inspeccionador
2. Ingresá: `https://derechosart.com.ar/`
3. Desplázate a "Core Web Vitals"
4. Captura datos de DESKTOP y MOBILE

**Dato importante:** Search Console muestra datos de 28 días de usuarios reales

### Paso 4: GTmetrix (Alternativa/Complemento)

**URL:** https://gtmetrix.com/

1. Ingresá URL
2. Selecciona GTMETRIX Grade
3. Compara: Performance vs Structure

---

## PARTE 2: CHECKLIST DE OPTIMIZACIÓN

### ✅ Cosas que ya están implementadas

```
[X] Critical CSS inline
[X] Defer de scripts no críticos
[X] Lazy loading de imágenes
[X] WebP format support
[X] GZIP compression en .htaccess
[X] Cache headers en .htaccess
[X] CDN Cloudflare (probablemente)
[X] Iconos SVG inline (Font Awesome)
```

### ⚠️ Cosas a verificar/optimizar

| Ítem | Verificar | Acción si falla |
|---|---|---|
| **Imágenes** | ¿Hay PNG/JPG sin comprimir? | Convertir a WebP, reducir tamaño |
| **Fuentes** | ¿Carga todas las variantes? | Cargar solo Bold + Regular, rest WOFF2 |
| **CSS** | ¿Hay CSS no usado? | Usar PurgeCSS / Tailwind purge |
| **JS** | ¿Hay JS bloqueante? | Defer o async todos los scripts |
| **DOM** | ¿>1500 elementos? | Simplificar estructura HTML |
| **Requests** | ¿>100 requests? | Consolidar, reducir |
| **Tamaño total** | ¿>5MB? | Auditar con DevTools Network |
| **Fuentes externas** | ¿Google Fonts, Typekit? | Preconnect, font-display: swap |
| **Iframes** | ¿Instagram embeds en blog? | Lazy load con iframe-placeholder |
| **Queries DB** | ¿Consultas lentas? | Verificar con logs, optimizar queries |

---

## PARTE 3: RECOMENDACIONES ESPECÍFICAS PARA DERECHOSART

### 1. Imágenes del blog

**Problema potencial:** Imágenes grandes sin comprimir

**Solución:**
```php
<!-- ANTES (malo) -->
<img src="publico/img/accidente.jpg" alt="Accidente">

<!-- DESPUÉS (bueno) -->
<picture>
    <source srcset="publico/img/accidente.webp" type="image/webp">
    <source srcset="publico/img/accidente.jpg" type="image/jpeg">
    <img src="publico/img/accidente.jpg" alt="Accidente" loading="lazy" width="800" height="600">
</picture>
```

### 2. Instagram Embeds

**Problema:** Script de Instagram es pesado (~40KB)

**Ubicación en código:** `vistas/blog/cabecera-articulo.php` (línea final)
```html
<script async src="//www.instagram.com/embed.js"></script>
```

**Optimización:**
```html
<!-- Cargalo solo en blog, no en todas las páginas -->
<?php if ($current_page === 'blog-guia-accidentes'): ?>
    <script async src="//www.instagram.com/embed.js" defer></script>
<?php endif; ?>
```

### 3. Google Fonts

**Verificar:** ¿Se carga desde Google Fonts?

**Si sí:**
```html
<!-- ANTES -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">

<!-- DESPUÉS (preconnect + optimizado) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
```

### 4. Minificación CSS/JS

**Verificar:**
- `publico/css/estilos.css` - ¿Está minificado?
- `publico/js/` - ¿Scripts están minificados?

**Si no:**
```bash
# En Hostinger o usando tools locales
npm install -g cssnano
cssnano publico/css/estilos.css -o publico/css/estilos.min.css
```

### 5. Usar versioning de assets

**Problemas:** Cache viejo cuando actualizas CSS

**Solución (en encabezado.php):**
```php
<?php
$css_version = filemtime('publico/css/estilos.css'); // timestamp del archivo
?>
<link rel="stylesheet" href="publico/css/estilos.css?v=<?php echo $css_version; ?>">
```

---

## PARTE 4: SCRIPT PARA AUDITAR VELOCIDAD (MANUAL)

### Auditoría de Network (Chrome DevTools)

1. Chrome → F12 → Network tab
2. Recarga página (`Cmd+Shift+R` / `Ctrl+Shift+R`)
3. Ordena por "Size" descendente
4. Identifica top 5 recursos más pesados

**Esperado:**
- HTML principal: <100KB
- CSS crítico inline: <50KB
- JS principal: <100KB (después minificación)
- Imágenes hero: <200KB cada una

### Auditoría de Waterfall (Timing)

1. Descarga la página completa con DevTools abierto
2. Captura el "Waterfall" (orden de descarga)
3. Busca:
   - ❌ Scripts que bloquean ("Red bar" rojo largo)
   - ❌ Imágenes que cargan secuencial (deberían paralelo)
   - ✅ Google Fonts que cargan con preconnect

---

## PARTE 5: REPORTE A COMPLETAR (Después de auditoría)

```markdown
## REPORTE DE VELOCIDAD - [FECHA]

### Desktop Performance
- PageSpeed Score: __/100
- LCP: ___ms (✅/⚠️/❌)
- FID: ___ms (✅/⚠️/❌)
- CLS: ___  (✅/⚠️/❌)

### Mobile Performance
- PageSpeed Score: __/100
- LCP: ___ms
- FID: ___ms
- CLS: ___

### Top Issues Detectadas
1. [Problema 1]
2. [Problema 2]
3. [Problema 3]

### Acciones Inmediatas
- [ ] Acción 1
- [ ] Acción 2
- [ ] Acción 3

### Impacto Esperado
- Reducción bounce rate: __% → ___%
- Mejora conversiones: __% → ___%
```

---

## PARTE 6: PRÓXIMOS PASOS (Después de auditoría)

### Si LCP > 4s (CRÍTICO)
1. Identifica qué elemento es "Largest Contentful Paint"
2. Tipicamente es:
   - Imagen hero del banner
   - Texto de encabezado
   - Video embebido
3. Solución:
   - Precargar imagen: `<link rel="preload" as="image" href="img.jpg">`
   - Optimizar tamaño imagen
   - Diferir carga de elementos secundarios

### Si FID > 100ms (ALTO)
1. Instala web-vitals para monitorear en producción:
```php
<script src="https://web-vitals.web.dev/base.js"></script>
```
2. Probable causa: JS que se ejecuta en main thread
3. Soluciones:
   - Breakdown JS en tareas más pequeñas
   - Usar requestIdleCallback() para tareas no críticas

### Si CLS > 0.1 (MEDIO)
1. Busca elementos que "saltan" durante carga:
   - Ads que cargan tarde
   - Imágenes sin height/width
   - Fuentes que cambian de tamaño
2. Solución: Especifica width/height en imágenes
```html
<img src="..." width="800" height="600" loading="lazy">
```

---

## REFERENCIAS

- [Web Vitals Google](https://web.dev/vitals/)
- [PageSpeed Insights](https://pagespeed.web.dev/)
- [Chrome DevTools Performance](https://developer.chrome.com/docs/devtools/performance/)
- [Core Web Vitals Guide](https://web.dev/vitals/)

---

**Próximo paso:** Completar esta auditoría y reportar resultados a Gordon para optimización específica.
