# PUNTO 6: INTERNAL LINKING STRATEGY

**Fecha:** Junio 2026  
**Status:** Planificación + implementación  
**Responsable:** Gordon (estrategia + código), Usuario (validación)

---

## PARTE 1: ESTRATEGIA DE LINKING

### Objetivo
Distribuir Page Authority desde páginas principales (alta autoridad) a páginas secundarias (baja autoridad) usando anchor text relevante.

### Pirámide de Autoridad

```
NIVEL 1 (Autoridad ALTA - 90%+ de PA)
├─ /accidentes-de-trabajo (homepage de tema)
├─ /despidos (homepage de tema)
└─ /blog-guia-accidentes (contenido estrella)

    ↓ (Linking hacia abajo)

NIVEL 2 (Autoridad MEDIA - 60% PA)
├─ /calculadora-accidentes
├─ /calculadora-despidos
├─ /comisiones-medicas
├─ /enfermedades-profesionales
└─ /que-hacer

    ↓ (Linking hacia abajo)

NIVEL 3 (Autoridad BAJA - 30% PA)
├─ /landings/abogados-art-[localidad] (250+ landings)
└─ /landings/abogados-despidos-[localidad] (250+ landings)
```

---

## PARTE 2: MATRIZ DE INTERNAL LINKING

### Flujo de Linking Propuesto

| # | Página Origen | Enlazar A | Anchor Text | Keywords | Contexto | Orden |
|---|---|---|---|---|---|---|
| 1 | Inicio | Accidentes | "Reclamá tu accidente laboral" | accidente laboral | CTAssection hero | Primary |
| 2 | Inicio | Despidos | "¿Te despidieron?" | despido laboral | CTA section hero | Primary |
| 3 | Inicio | Blog | "Guía completa 2026" | guía accidentes | CTA blog preview | Primary |
| 4 | Blog Accidentes | Calculadora ART | "calcula tu indemnización" | calculadora ART | In-text | Secondary |
| 5 | Blog Accidentes | FAQ | "preguntas frecuentes" | faq accidentes | In-text | Secondary |
| 6 | Blog Accidentes | Contacto | "consulta gratuita" | consulta abogados | CTA bottom | Primary |
| 7 | Accidentes | Calculadora | "herramienta de cálculo" | calculadora indemnización | Section link | Secondary |
| 8 | Accidentes | Comisiones Médicas | "comisión médica SRT" | comisión médica | In-text | Secondary |
| 9 | Accidentes | Landings (muestra) | "abogados en [localidad]" | abogados art [provincia] | Geographic | Secondary |
| 10 | Despidos | Calculadora Despidos | "cálculo liquidación" | calculadora despidos | Section link | Secondary |
| 11 | Despidos | Contacto | "asesoramiento gratuito" | asesor laboral | CTA bottom | Primary |
| 12 | Despidos | Landing Despidos | "abogados despidos [zona]" | abogados despidos | Geographic | Secondary |
| 13 | Comisiones Médicas | Blog Accidentes | "leer guía completa" | accidente laboral SRT | In-text | Secondary |
| 14 | Comisiones Médicas | Landings (muestra) | "abogados SRT [localidad]" | abogados SRT [zona] | Geographic | Secondary |
| 15 | Calculadora ART | Contacto | "consultar caso" | consulta especializada | CTA bottom | Primary |
| 16 | FAQ | Blog | "artículos detallados" | guía accidentes | Cross-link | Secondary |
| 17 | Landing Accidentes [CABA] | Landing Despidos [CABA] | "también atendemos despidos" | despidos caba | Cross-sell | Secondary |
| 18 | Landing Despidos [GBA] | Calculadora Despidos | "calcular liquidación" | calculadora despidos | In-text | Secondary |
| 19 | Contacto | Blog | "lee nuestra guía" | accidentes laborales | Post-form | Secondary |
| 20 | Zonas Atención | Landings principales | "abogados en [zona]" | abogados art [provincia] | Regional hub | Primary |

---

## PARTE 3: IMPLEMENTACIÓN POR SECCIÓN

### 3.1 LINKS EN PÁGINA INICIO

**Ubicación:** Secciones hero / CTA principal

```html
<!-- DESPUÉS DE HERO 1 (Accidentes) -->
<section class="cta-accidentes">
    <h2>¿Tuviste un accidente laboral?</h2>
    <p>Podés reclamar una indemnización...</p>
    <a href="/accidentes-de-trabajo" class="btn btn-amarillo">
        Reclamá tu accidente laboral →
    </a>
</section>

<!-- DESPUÉS DE HERO 2 (Despidos) -->
<section class="cta-despidos">
    <h2>¿Te despidieron?</h2>
    <p>Tenés derecho a una indemnización...</p>
    <a href="/despidos" class="btn btn-amarillo">
        Maximizá tu indemnización por despido →
    </a>
</section>

<!-- BLOG PREVIEW -->
<section class="blog-preview">
    <h2>Guía Completa 2026</h2>
    <p>Todo lo que necesitás saber sobre...</p>
    <a href="/blog-guia-accidentes" class="btn btn-outline">
        Leer guía completa →
    </a>
</section>
```

### 3.2 LINKS EN BLOG ACCIDENTES

**Ubicación:** Dentro del contenido + bottom

```html
<!-- DENTRO DEL CONTENIDO (Sección 2: Calculadora) -->
<section class="seccion-bloque">
    <h2>Cómo calcular tu indemnización</h2>
    <p>El monto exacto depende de tu porcentaje de incapacidad, edad y sueldo. 
    Para una estimación rápida, <a href="/calculadora-accidentes" title="Calculadora ART 2026">
    calcula tu indemnización aquí</a> en 1 minuto.</p>
</section>

<!-- DENTRO DEL CONTENIDO (Sección 3: FAQ) -->
<section class="seccion-bloque">
    <h2>Preguntas que respondemos</h2>
    <p>Tenemos respuestas a más de 50 preguntas. 
    <a href="/faq#accidentes" title="FAQ - Accidentes laborales">
    Ver preguntas frecuentes</a></p>
</section>

<!-- BOTTOM: CTA FINAL -->
<div class="cierre-articulo">
    <h3>¿Necesitás ayuda con tu caso?</h3>
    <p>Escribinos por WhatsApp y te daremos una consulta gratuita.</p>
    <a href="https://wa.me/5491124786144" class="btn btn-amarillo">
        Consulta gratuita por WhatsApp →
    </a>
</div>
```

### 3.3 LINKS EN PÁGINA ACCIDENTES

**Ubicación:** Secciones temáticas

```html
<!-- SECCIÓN: CALCULADORA -->
<section class="seccion-herramientas">
    <h2>Calculadora de ART</h2>
    <p>¿Cuánto cobrás por tu lesión? Usá nuestra 
    <a href="/calculadora-accidentes" title="Calculadora ART">herramienta de cálculo</a> 
    basada en el baremo SRT 2026.</p>
</section>

<!-- SECCIÓN: SRT -->
<section class="seccion-srt">
    <h2>Comisión Médica SRT</h2>
    <p>Si disconformas con el dictamen, 
    <a href="/comisiones-medicas" title="Comisión Médica SRT Argentina">
    aprende cómo reclamar ante la Comisión Médica</a>.</p>
</section>

<!-- SECCIÓN: ABOGADOS POR ZONA -->
<section class="seccion-abogados">
    <h2>¿Dónde estamos?</h2>
    <p>Tenemos oficinas en múltiples ciudades. 
    <a href="/zonas-atencion" title="Abogados ART por zona">
    Encontrá tu abogado más cercano</a>.</p>
</section>
```

### 3.4 LINKS EN PÁGINA DESPIDOS

**Ubicación:** Similar a accidentes

```html
<!-- SECCIÓN: CALCULADORA -->
<section class="seccion-herramientas">
    <h2>¿Cuánto te corresponde?</h2>
    <p>Calcular la indemnización exacta es complejo. 
    Usá nuestra <a href="/calculadora-despidos" title="Calculadora despidos argentina">
    calculadora de indemnización por despido</a> 
    para saber cuánto debe pagarte tu empleador.</p>
</section>

<!-- SECCIÓN: CONTACTO -->
<div class="cta-contact">
    <h3>¿Recibiste una oferta? Revisala gratis</h3>
    <p>No firmes nada sin asesorarte. 
    <a href="/contacto" title="Contactar abogados despidos">
    Consulta a nuestros especialistas</a> sin costo.</p>
</div>
```

### 3.5 LINKS EN LANDINGS LOCALES

**Ubicación:** Bottom de landing (cross-sell)

```html
<!-- Dentro de landing /landings/abogados-art-palermo -->

<!-- CROSS-SELL: Si es ACCIDENTE → DESPIDO -->
<?php if (strpos($url, 'accidente') !== false): ?>
    <section class="cross-sell">
        <h3>¿También te despidieron?</h3>
        <p>Además de accidentes laborales, también defendemos 
        <a href="/landings/abogados-despidos-palermo" title="Abogados despidos Palermo">
        reclamos por despido en <?php echo $localidad; ?></a>.</p>
    </section>
<?php endif; ?>

<!-- CROSS-SELL: Si es DESPIDO → ACCIDENTE -->
<?php if (strpos($url, 'despido') !== false): ?>
    <section class="cross-sell">
        <h3>¿Sufriste un accidente laboral?</h3>
        <p>También asesoramos en reclamos por 
        <a href="/landings/abogados-art-<?php echo $slug_localidad; ?>" title="Abogados ART <?php echo $localidad; ?>">
        accidentes de trabajo en <?php echo $localidad; ?></a>.</p>
    </section>
<?php endif; ?>

<!-- BOTTOM: CTA GENERAL -->
<div class="cta-final">
    <a href="/contacto" class="btn btn-amarillo">
        Consulta gratuita en <?php echo $localidad; ?> →
    </a>
</div>
```

### 3.6 LINKS EN FAQ

**Ubicación:** Referencias cruzadas dentro de respuestas

```html
<!-- Dentro de FAQ -->
<details>
    <summary>¿Cuánto tiempo tengo para reclamar?</summary>
    <p>El plazo de prescripción es 2 años. 
    Para más información, <a href="/blog-guia-accidentes#plazos">
    ver nuestra guía completa</a>.</p>
</details>

<details>
    <summary>¿Cómo sé si la ART cubrirá mi caso?</summary>
    <p>La ART cubre accidentes durante la jornada laboral e 
    <a href="/accidentes-de-trabajo" title="Accidentes laborales ART">
    in itinere (camino al trabajo)</a>.</p>
</details>
```

---

## PARTE 4: CÓDIGO PHP PARA IMPLEMENTAR

### Función Helper: Generar Link Interno

```php
<?php
/**
 * Función para generar links internos consistentes
 * Uso: link_interno('accidentes-de-trabajo', 'Accidente laboral', 'accidente laboral')
 */
function link_interno($slug, $text, $title = '', $class = '') {
    $base_url = 'https://derechosart.com.ar/';
    $href = $base_url . $slug;
    $title_attr = !empty($title) ? " title=\"{$title}\"" : '';
    $class_attr = !empty($class) ? " class=\"{$class}\"" : '';
    
    return "<a href=\"{$href}\"{$title_attr}{$class_attr}>{$text}</a>";
}

// Uso:
echo link_interno('accidentes-de-trabajo', 'Accidente laboral', 'Accidentes laborales Argentina', 'link-primary');
// Output: <a href="https://derechosart.com.ar/accidentes-de-trabajo" title="Accidentes laborales Argentina" class="link-primary">Accidente laboral</a>
?>
```

### Agregar a encabezado.php o config

Esto permite:
- Mantener URLs centralizadas
- Cambiar URLs sin romper links
- Tracking consistente de anchor text

---

## PARTE 5: AUDITORÍA DE LINKS ACTUALES

### Verificar Links Existentes

**Comando (Screaming Frog o similar):**
```
Sitio → Tools → List All → Internal Links
```

**Analizar:**
- ¿Cuántos links internos hay actualmente?
- ¿Qué páginas NUNCA son enlazadas? (Orfanadas)
- ¿Qué páginas tienen SOLO links de entrada? (Islands)

**Orfanadas típicas a revisar:**
- Landings remotas (sin linked desde homepage)
- Página "Qué Hacer" (no visible en nav principal)
- FAQ (puede estar oculta)

---

## PARTE 6: ANCHOR TEXT BEST PRACTICES

### ✅ BUENO (Variado, keyword relevante, natural)
```html
<a href="/accidentes-de-trabajo">accidente laboral</a>
<a href="/accidentes-de-trabajo">lesiones en el trabajo</a>
<a href="/accidentes-de-trabajo">reclamá tu ART</a>
<a href="/accidentes-de-trabajo">aquí</a>
```

### ❌ MALO (Over-optimized, keyword stuffing)
```html
<a href="/accidentes-de-trabajo">accidente laboral accidente trabajo ART</a>
<a href="/accidentes-de-trabajo">click aquí</a> (sin contexto)
<a href="/accidentes-de-trabajo">abogados especialistas ART indemnización</a>
```

### 📊 DISTRIBUCIÓN RECOMENDADA

- 40% keyword exacto ("accidente laboral")
- 30% keyword long-tail ("cómo reclamo accidente")
- 20% branded ("DerechosART", "aquí")
- 10% generic ("leer más", "continuar")

---

## PARTE 7: CHECKLIST DE IMPLEMENTACIÓN

### Fase 1: Auditoría (Semana 1)
- [ ] Mapear links actuales con Screaming Frog
- [ ] Identificar páginas orfanadas
- [ ] Analizar anchor text actual

### Fase 2: Planificación (Semana 1-2)
- [ ] Revisar matriz de linking (Punto 6 Part 2)
- [ ] Priorizar top 20 links a agregar
- [ ] Crear lista de páginas a mejorar

### Fase 3: Implementación (Semana 2-3)
- [ ] Agregar función helper link_interno()
- [ ] Implementar links en Inicio
- [ ] Implementar links en Blog
- [ ] Implementar links en páginas principales

### Fase 4: Validación (Semana 4)
- [ ] QA manual (verificar todos links funcionan)
- [ ] Crawl con Screaming Frog post-implementación
- [ ] Verificar en Search Console (reindexación)

### Fase 5: Monitoreo (Continuo)
- [ ] Rankings de keywords target
- [ ] Posiciones promedio
- [ ] CTR y conversiones por landing

---

## PARTE 8: HERRAMIENTAS ÚTILES

| Herramienta | Propósito | Link |
|---|---|---|
| Screaming Frog SEO Spider | Auditar links internos | https://www.screamingfrog.co.uk/ |
| Google Search Console | Ver links indexados | https://search.google.com/ |
| Ahrefs | Analizar link juice | https://ahrefs.com/ |
| Moz | Mostrar internal links | https://moz.com/ |
| LinkResearchTools | Visualizar estructura links | https://www.linkresearchtools.com/ |

---

## PARTE 9: EXPECTED IMPACT

### Antes de Implementación
- Muchas landings orfanadas (sin links)
- Baja distribucion de PA
- Usuarios no descubren contenido relacionado

### Después de Implementación (3 meses)
- ✅ +15% sesiones por página (descubrimiento)
- ✅ -10% bounce rate (relevancia)
- ✅ +20% conversiones (CTAs mejor distribuidos)
- ✅ Mejor rastreo Google (robots navegan más fácil)

---

## PARTE 10: TEMPLATE MARKDOWN PARA DOCUMENTAR

```markdown
## INTERNAL LINKING - REGISTRO DE IMPLEMENTACIÓN

### Links Agregados - [FECHA]

| # | Página Origen | Link A | Anchor | Estado | Notas |
|---|---|---|---|---|---|
| 1 | Inicio | Accidentes | "Reclamá accidente" | ✅ Implementado | Live |
| 2 | Blog | Calculadora | "calcula aquí" | ✅ Implementado | Live |
| 3 | Accidentes | Comisiones | "Comisión Médica" | ⏳ Testing | UAT |

### Auditoría Post-Implementación
- Total links nuevos: 15
- Links verificados: 15/15 ✅
- Broken links: 0
- Date de rastreo Google: [Fecha]

### Métricas (30 días post-implementación)
- Sesiones adicionales: [#]
- Bounce rate: [X]% → [Y]%
- Conversiones: [#] → [#]
```

---

**Próximos pasos:** Gordon implementará Punto 6 en próxima sesión. Usuario valida funcionamiento.

Responsable: Gordon (código) + Usuario (QA)
