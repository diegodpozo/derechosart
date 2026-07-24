# ANALISIS SEO & GEO COMPLETO - DerechosART.com.ar

**Fecha:** Junio-Julio 2026
**Evaluador:** Gordon (AI Assistant)
**Estado:** Auditoria viva - actualizar regularmente

---

## 1. AUDITORIA TECNICA SEO

### 1.1 Estructura y Configuracion

| Aspecto | Estado | Detalle |
|---------|--------|---------|
| HTTPS | IMPLEMENTADO | Redireccion 301 forzada en .htaccess |
| No-WWW | IMPLEMENTADO | Canonical a version sin www |
| Sitemap XML | IMPLEMENTADO | 450+ URLs incluidas (generado desde PaginasControlador) |
| Robots.txt | IMPLEMENTADO | Bloquea carpetas sensibles, permite rastreo |
| Compresion GZIP | IMPLEMENTADO | mod_deflate activo |
| Cache Navegador | IMPLEMENTADO | Headers Cache-Control por tipo de archivo |
| Security Headers | IMPLEMENTADO | X-Frame-Options, X-Content-Type-Options |

### 1.2 Ruteo y Redirecciones

| Reporte | Estado | Detalle |
|---------|--------|---------|
| URLs Amigables | IMPLEMENTADO | Rewrite rules correctas sin index.php |
| Redirecciones Legacy | IMPLEMENTADO | derechosartconsultas.com -> derechosart.com.ar (301) |
| Landing Consolidation | IMPLEMENTADO | /landings/abogados-art-* -> /abogados-art-* (301) |
| Bloqueo WordPress | IMPLEMENTADO | /wp-, /xmlrpc.php, /phpmyadmin bloqueados |
| Proteccion Archivos | IMPLEMENTADO | .env, .git, .aws bloqueados |

### 1.3 Metadatos Dinamicos

| Pagina | Titulo | Descripcion | Estado |
|--------|--------|-------------|--------|
| Inicio | "Especialistas en Accidentes y Despidos" | Descriptiva, 155 chars | OK |
| Quienes Somos | "Equipo de Especialistas" | Descriptiva, 145 chars | OK |
| Accidentes | "Reclama tu Indemnizacion a la ART" | Descriptiva, 148 chars | OK |
| Despidos | "Maximiza tu Indemnizacion" | Descriptiva, 140 chars | OK |
| FAQ | "Dudas Frecuentes sobre ART" | Descriptiva, 150 chars | OK |
| Blog | "Guia Accidentes 2026" | Descriptiva, 155 chars | OK |
| Contacto | "Consulta Legal Gratuita" | Descriptiva, 145 chars | OK |

---

## 2. AUDITORIA SCHEMA.ORG

### 2.1 Implementacion de Datos Estructurados

| Schema | Pagina | Estado |
|--------|--------|--------|
| Organization | Home (encabezado.php) | IMPLEMENTADO - 95% |
| LocalBusiness CABA | /abogados-art-despidos, /abogados-art-accidentes | IMPLEMENTADO |
| LocalBusiness Rosario | /abogados-art-rosario | IMPLEMENTADO |
| LocalBusiness Neuquen | /abogados-art-neuquen | IMPLEMENTADO |
| LocalBusiness Salta | /abogados-art-salta | IMPLEMENTADO |
| LocalBusiness Cordoba | /abogados-art-cordoba | IMPLEMENTADO (20/06/2026) |
| LocalBusiness Mendoza | /abogados-art-mendoza | IMPLEMENTADO (20/06/2026) |
| Team/Person (7 abogadas) | /quienes-somos | IMPLEMENTADO |
| FAQ | /faq, landings con ZONA_TIPO | IMPLEMENTADO |
| BlogPosting | /blog/* | IMPLEMENTADO - articleBody incluido |
| BreadcrumbList | Todas las paginas excepto home | IMPLEMENTADO |

### 2.2 Calidad del Schema (E-E-A-T)

**Organization:**
- Nombre, logo, contacto
- 6 direcciones fisicas (CABA, Rosario, Neuquen, Salta, Cordoba, Mendoza)
- 7 miembros del equipo (founders + associates)
- Agregated Rating: 4.9/5 (156 reviews)
- Servicios (4 categorias)
- Social media (Instagram, TikTok, Facebook, YouTube)

**LocalBusiness (por sede):**
- Coordenadas geograficas precisas (Google Maps compatible)
- Horarios de atencion (Lunes-Viernes, 09:00-20:00)
- Rating agregado (4.9 stars)
- Telefono local por sede

**Team (7 abogadas):**
1. Romina Konluch (CABA y GBA) - 2 matriculas
2. Athina B. Pereyra (CABA y GBA) - 2 matriculas
3. Nair Chemes (Rosario) - 2 matriculas
4. Maria Jose Zalazar (Neuquen y Rio Negro) - 3 matriculas
5. Carolina Estrada (Salta) - 1 matricula
6. Maria Luz Fernandez (Cordoba) - 1 matricula
7. Josefina Rizzato (Mendoza) - 1 matricula

---

## 3. GEO - GENERATIVE ENGINE OPTIMIZATION

### 3.1 Implementacion GEO (Hecho - 20/06/2026)

| Componente | Estado | Detalle |
|------------|--------|---------|
| Preguntas Frecuentes (500 QA) | IMPLEMENTADO | preguntas_ia.php - 500 entradas, 12 categorias, 807KB |
| Respuestas completas (500+ chars) | IMPLEMENTADO | Todos expandidos a 1000+ chars promedio para citacion IA |
| Correccion legal | IMPLEMENTADO | Todos los % verificados con Ley 24.557, Decreto 549/2025 |
| Acentos espanoles | IMPLEMENTADO | 617 correcciones de tilde aplicadas |
| articleBody en BlogPosting | IMPLEMENTADO | Extraccion automatica de 5000 chars desde vista del blog |
| Rutas FAQ | IMPLEMENTADO | /faq, /faq/{categoria} via PaginasControlador |
| SEO FAQ | IMPLEMENTADO | FAQPage JSON-LD dinamico por categoria |
| Sitemap | IMPLEMENTADO | /faq incluido dinamicamente |

### 3.2 Categorias de Preguntas (500 total)

| # | Categoria | Cantidad |
|---|-----------|----------|
| 1 | Accidentes de trabajo | 68 |
| 2 | Tipos de incapacidad | 38 |
| 3 | Enfermedades profesionales | 36 |
| 4 | Despidos | 61 |
| 5 | Accidente in itinere | 56 |
| 6 | Comision medica SRT | 56 |
| 7 | Calculo de indemnizacion | 30 |
| 8 | Tramites y documentacion | 30 |
| 9 | Derechos del trabajador | 38 |
| 10 | ART y cobertura | 26 |
| 11 | Rehabilitacion | 28 |
| 12 | Temas varios | 33 |
| | **TOTAL** | **500** |

### 3.3 Reglas para Nuevos Posts GEO

```php
// CONFIGURACION GEO PARA NUEVOS POSTS
$FechaPublicacionBlog = "ANO-MES-DIA_T_HORA-03:00";
$FechaModificacionBlog = "ANO-MES-DIA_T_HORA-03:00";
$AutorBlogSlug = "slug-de-la-abogada"; // DEFINIDA EN SEO_CONFIG.php
```

El articleBody se genera automaticamente desde el archivo de vista.

---

## 4. COBERTURA GEOGRAFICA

### 4.1 Sedes Fisicas (Con LocalBusiness Schema)

| Sede | Direccion | Schema |
|------|-----------|--------|
| CABA | Ayacucho 283 | IMPLEMENTADO |
| Rosario | Rioja 644 | IMPLEMENTADO |
| Neuquen | Independencia 258 | IMPLEMENTADO |
| Salta | Gral. Martin Guemes 1548 | IMPLEMENTADO |
| Cordoba | 27 de Abril 276 | IMPLEMENTADO (20/06/2026) |
| Mendoza | Patricias Mendocinas 539, piso 2, of. B | IMPLEMENTADO (20/06/2026) |

### 4.2 Landings Territoriales

| Zona | Cantidad | Formato |
|------|----------|---------|
| CABA (barrios) | 48 | /abogados-art-{barrio} |
| GBA (localidades) | 120+ | /abogados-art-{localidad} |
| Rosario/Santa Fe | 27 | /abogados-art-{localidad} |
| Neuquen/Rio Negro | 26 | /abogados-art-{localidad} |
| Despidos por localidad | 150+ | /abogados-despidos-{localidad} |
| Multi-zona | 3 | /abogados-art-despidos, /abogados-art-accidentes, /abogados-art-neuquen |

**Total URLs en Sitemap: 450+**

### 4.3 Contenido Unico por Zona (IMPLEMENTADO)

- `config/contenido_zonas.json` con 212 entradas
- Cubre: CABA (46 barrios), GBA, Rosario, Neuquen, Rio Negro, Cordoba, Mendoza, Salta
- Cada entrada tiene `parrafo_local` unico de 2-3 oraciones
- PaginasControlador.php::LandingZona() carga el JSON y define ZONA_CONTENIDO_UNICO
- Se elimino la restriccion $es_caba_gba, funciona para TODAS las zonas
- No referencia datos falsos (comisiones medicas, direcciones)

---

## 5. INTERNAL LINKING (IMPLEMENTADO)

### 5.1 Links Implementados (20/06/2026)

| Pagina Origen | Link A | Anchor | Estado |
|---------------|--------|--------|--------|
| Inicio | /accidentes-de-trabajo | "Accidentes laborales" | IMPLEMENTADO |
| Inicio | /despidos | "Enfermedades profesionales" | IMPLEMENTADO |
| Inicio | /accidentes-de-trabajo | Cross-link landings tipo accidentes | IMPLEMENTADO |
| Inicio | /despidos | Cross-link landings tipo despidos | IMPLEMENTADO |
| accidentes-de-trabajo | /calculadora-accidentes | "calcular el monto de tu indemnizacion" | IMPLEMENTADO |
| despidos | /contacto | "asesoramiento legal inmediato" | IMPLEMENTADO |
| despidos | /calculadora-despidos | "indemnizacion completa por antiguedad" | IMPLEMENTADO |
| blog-guia-accidentes | /accidentes-de-trabajo | "accidente laboral" | IMPLEMENTADO |
| blog-guia-accidentes | /comisiones-medicas | "Comision Medica" | IMPLEMENTADO |
| blog-guia-accidentes | /calculadora-accidentes | "calculadora de indemnizacion" | IMPLEMENTADO |
| blog-guia-accidentes | /faq | Pregunta frecuente seccion 10 | IMPLEMENTADO |

**Total: ~12 enlaces internos estrategicos**

### 5.2 Piramide de Autoridad

```
NIVEL 1 (Autoridad ALTA)
  /accidentes-de-trabajo
  /despidos
  /blog-guia-accidentes

NIVEL 2 (Autoridad MEDIA)
  /calculadora-accidentes
  /calculadora-despidos
  /comisiones-medicas
  /enfermedades-profesionales
  /faq

NIVEL 3 (Autoridad BAJA - Landings)
  /abogados-art-{localidad} (250+ landings)
  /abogados-despidos-{localidad} (150+ landings)
```

### 5.3 Anchor Text Distribution Recomendada

- 40% keyword exacto ("accidente laboral")
- 30% keyword long-tail ("como reclamo accidente")
- 20% branded ("DerechosART", "aqui")
- 10% generico ("leer mas", "continuar")

---

## 6. DUPLICATE CONTENT (RESUELTO)

### 6.1 Solucion Implementada

- `config/contenido_zonas.json` con 212 entradas unicas por zona
- Cada landing recibe parrafo_local dinamico
- Template base (~70%) + contenido unico (~30%) por landing
- Funciona para TODAS las zonas (CABA, GBA, Rosario, Sur, Cordoba, Mendoza, Salta)

### 6.2 Estandares de Contenido Unico

| Criterio | Estado |
|----------|--------|
| Minimo 20% contenido unico por landing | CUMPLE |
| Datos locales (direccion, telefono) | CUMPLE |
| Parrafo_local unico por zona | CUMPLE (212 zonas) |
| Canonical tags correctos | CUMPLE |
| Meta tags dinamicos por localidad | CUMPLE |
| H1 dinamico por localidad | CUMPLE |
| Schema LocalBusiness unico por zona | CUMPLE |

---

## 7. CORE WEB VITALS

### 7.1 Estado Actual

| Metrica | Objetivo | Estado |
|---------|----------|--------|
| LCP (Largest Contentful Paint) | <2.5s | REQUIERE AUDITORIA |
| FID (First Input Delay) | <100ms | REQUIERE AUDITORIA |
| CLS (Cumulative Layout Shift) | <0.1 | REQUIERE AUDITORIA |

### 7.2 Cosas Ya Implementadas

```
[X] Critical CSS inline
[X] Defer de scripts no criticos
[X] Lazy loading de imagenes
[X] WebP format support
[X] GZIP compression en .htaccess
[X] Cache headers en .htaccess
[X] CDN Cloudflare
[X] Iconos SVG inline (Font Awesome)
[X] embed.js solo en blogs que lo usan (NO global)
```

### 7.3 Cosas a Verificar/Optimizar

| Item | Verificar | Accion si falla |
|------|-----------|-----------------|
| Imagenes | PNG/JPG sin comprimir? | Convertir a WebP, reducir tamano |
| Fuentes | Carga todas las variantes? | Cargar solo Bold + Regular, rest WOFF2 |
| CSS | CSS no usado? | PurgeCSS / Tailwind purge |
| JS | JS bloqueante? | Defer o async todos los scripts |
| DOM | >1500 elementos? | Simplificar estructura HTML |
| Requests | >100 requests? | Consolidar, reducir |
| Tamano total | >5MB? | Auditar con DevTools Network |
| Fuentes externas | Google Fonts? | Preconnect, font-display: swap |
| Iframes | Instagram embeds? | Lazy load (ya implementado condicionalmente) |
| Queries DB | Consultas lentas? | Verificar con logs, optimizar queries |

### 7.4 Herramientas de Auditoria

| Herramienta | URL | Uso |
|-------------|-----|-----|
| PageSpeed Insights | pagespeed.web.dev | Score + metricas |
| GTmetrix | gtmetrix.com | Performance + estructura |
| Chrome DevTools | F12 -> Lighthouse | Reporte detallado |
| Search Console | search-console | Datos de usuarios reales (28 dias) |

### 7.5 Optimizaciones Especificas

**Imagenes del blog:**
```php
<!-- DESPUES (bueno) -->
<picture>
    <source srcset="publico/img/accidente.webp" type="image/webp">
    <source srcset="publico/img/accidente.jpg" type="image/jpeg">
    <img src="publico/img/accidente.jpg" alt="Accidente" loading="lazy" width="800" height="600">
</picture>
```

**Versioning de assets (encabezado.php):**
```php
<?php $css_version = filemtime('publico/css/estilos.css'); ?>
<link rel="stylesheet" href="publico/css/estilos.css?v=<?php echo $css_version; ?>">
```

---

## 8. BLOG

### 8.1 Estado Actual

| Articulo | URL | Fecha | Schema |
|----------|-----|-------|--------|
| Indice del blog | /blog | - | Blog (lista) |
| Guia Accidentes Laborales 2026 | /blog-guia-accidentes | Reciente | BlogPosting + articleBody |
| Que hacer si te dan el alta con dolor | /blog-alta-medica-dolor | Reciente | BlogPosting + articleBody |
| Que pasa si la ART rechaza tu caso | /blog-art-rechazo | Reciente | BlogPosting + articleBody |

**Total: 4 articulos** (1 indice + 3 posts)

### 8.2 Temas Pendientes para Futuros Posts

- "Como impugnar un dictamen SRT"
- "Enfermedades profesionales: reconocimiento y pasos"
- "Errores comunes en comisiones medicas"
- "Despidos en epoca de prueba vs permanentes"
- "Accidente laboral: primeros 30 dias que hacer"
- "SRT rechazo mi accidente: pasos legales"

---

## 9. MATRIZ DE PRIORIZACION

### Implementado

| Mejora | Estado | Fecha |
|--------|--------|-------|
| Contenido unico landings (contenido_zonas.json) | COMPLETADO | 20/06/2026 |
| BlogPosting Schema (articleBody) | COMPLETADO | 20/06/2026 |
| LocalBusiness Cordoba/Mendoza | COMPLETADO | 20/06/2026 |
| Internal linking | COMPLETADO | 20/06/2026 |
| 500 preguntas GEO | COMPLETADO | Julio 2026 |
| Correccion legal preguntas | COMPLETADO | Julio 2026 |
| Expansion respuestas 500+ chars | COMPLETADO | Julio 2026 |
| Correccion acentos espanoles | COMPLETADO | Julio 2026 |

### Pendiente

| Mejora | Impacto | Esfuerzo | Prioridad |
|--------|---------|----------|-----------|
| Core Web Vitals audit | Muy alto | Medio | ALTA |
| FAQ por Localidad (regionales) | Medio | Medio | MEDIA |
| Backlinks y autoridad de dominio | Muy alto | Alto | MEDIA |
| YouTube y contenido multimedia | Alto | Alto | BAJA |
| UTM Tracking y conversiones | Medio | Bajo | BAJA |
| Reviews dinamicas Google | Alto | Bajo | BAJA |
| E-E-A-T mejorado (biografia abogadas) | Alto | Bajo | MEDIA |

---

## 10. FORTALEZAS ACTUALES

1. **Tecnica solida:** HTTPS, robots.txt, sitemap 450+ URLs, .htaccess optimizado
2. **Schema completo:** Organization, LocalBusiness (6 sedes), Team (7 abogadas), FAQ, BlogPosting con articleBody, BreadcrumbList
3. **Cobertura GEO agresiva:** 450+ URLs en 7 regiones geograficas
4. **Metadatos dinamicos:** Titulos y descripciones personalizados por pagina
5. **Mobile-first:** Responsive design, imagen WebP
6. **Social signals:** Instagram, TikTok, Facebook, YouTube
7. **E-E-A-T:** Team schema con credenciales profesionales
8. **Seguridad:** Headers de seguridad, bloqueo de accesos sensibles
9. **GEO motor IA:** 500 preguntas con respuestas expandidas, articleBody para citacion
10. **Contenido unico:** 212 zonas con parrafo_local dinamico

---

## 11. DEBILIDADES RESTANTES

1. Core Web Vitals no auditado formalmente
2. FAQ centralizada (no adaptada por region/localidad)
3. Backlinks no documentados/estrategia pendiente
4. Blog limitado (4 articulos, necesita cadencia)
5. Sin UTM tracking
6. Reviews hardcodeadas (no dinamicas desde Google)
7. YouTube sin contenido activo

---

## 12. PROXIMOS PASOS RECOMENDADOS

### Prioridad ALTA
1. Ejecutar auditoria PageSpeed Insights (Desktop + Mobile)
2. Crear 2-3 articulos blog/semana
3. Estrategia de backlinks (guest posting, directorios legales)

### Prioridad MEDIA
4. FAQ dinamico por region/localidad
5. Biografia detallada de abogadas (E-E-A-T)
6. UTM tracking basico

### Prioridad BAJA
7. YouTube: primeros 3 videos
8. Reviews dinamicas desde Google
9. AMP o mobile speed mejorado

---

## 13. METRICAS A MONITOREAR

### Semanal
- Posiciones top 20 keywords principales
- Tráfico organico (sesiones)
- Indice de rastreo en GSC (errores 404)

### Mensual
- CTR organico en Search Console
- Conversiones (consultas WhatsApp)
- Cobertura de paginas indexadas

### Trimestral
- Domain Authority (Ahrefs)
- Backlinks nuevos
- Core Web Vitals score

---

**Documento consolidado:** Junio-Julio 2026
**Fuentes originales:** GEO_INICIAL.md, SEO_ANALYSIS_2026.md, PUNTO_3_CORE_WEB_VITALS.md, PUNTO_5_DUPLICATE_CONTENT.md, PUNTO_6_INTERNAL_LINKING.md
**Validacion Schema:** https://search.google.com/test/rich-results
**Auditoria Velocidad:** https://pagespeed.web.dev/
