# PUNTO 5: AUDITORÍA DUPLICATE CONTENT EN LANDINGS

**Fecha:** Junio 2026  
**Status:** Auditoría + planificación  
**Responsable:** Gordon + Usuario

---

## CONTEXTO

DerechosART tiene **250+ landings por localidad** (CABA, GBA, Rosario, Neuquén). Alto riesgo de:
- ❌ Thin content (páginas muy similares)
- ❌ Penalización Google por contenido duplicado
- ❌ Dilución de authority entre URLs similares
- ❌ Crawl budget desperdiciado

**Beneficio de arreglarlo:** +30% mejor indexación, sin penalizaciones

---

## PARTE 1: CLASIFICACIÓN DE LANDINGS

### Tipo A: LANDINGS "ZONA" (Barrios/Localidades individuales)
```
/landings/abogados-art-palermo
/landings/abogados-art-recoleta
/landings/abogados-art-caballito
... (150+ landings CABA + GBA)
```

**Contenido típico:** 60% duplicado, 40% único

**Problema:** Google ve como "thin pages" si son muy similares

### Tipo B: LANDINGS "CATEGORÍA" (Despidos/Accidentes por zona)
```
/landings/abogados-despidos-palermo
/landings/abogados-despidos-recoleta
/landings/abogados-art-accidentes
... (150+ landings)
```

**Contenido típico:** 70% duplicado, 30% único

**Problema:** Aún más duplicado que Tipo A

### Tipo C: LANDINGS "ESPECIALES" (Multi-zona, eventos)
```
/landings/abogados-art-despidos (CABA y GBA unificado)
/landings/abogados-art-accidentes (CABA y GBA unificado)
```

**Contenido típico:** 50% duplicado, 50% único (mejor)

---

## PARTE 2: PROBLEMAS IDENTIFICADOS

| Problema | Ejemplo | Impacto | Severidad |
|---|---|---|---|
| **Meta duplicado** | Title/Description idéntico entre Palermo y Recoleta | ❌ CTR bajo | 🔴 Alto |
| **Contenido cuerpo** | Mismo texto, solo cambia nombre barrio | ❌ Thin content | 🔴 Alto |
| **Sin canonical tag** | Landings locales apuntan entre sí | ❌ Confusión Google | 🟡 Medio |
| **H1 genérico** | H1 igual en 50+ landings | ❌ Baja relevancia | 🟡 Medio |
| **Sin data local** | No menciona dirección, teléfono | ❌ Google Local ignorado | 🟡 Medio |
| **Schema duplicado** | LocalBusiness idéntico en múltiples landings | ⚠️ No malo pero ineficiente | 🟢 Bajo |

---

## PARTE 3: ESTÁNDAR DE CONTENIDO ÚNICO

### Mínimo 20% de contenido ÚNICO por landing

**Ejemplo - Landing PALERMO vs RECOLETA:**

```
PALERMO
------
Total: 1200 palabras
Duplicado (template): 800 palabras (67%)
ÚNICO: 400 palabras (33%) ✅ CUMPLE (>20%)

Contenido único:
- Historia de Palermo como zona
- Demanda local (comercios, oficinas)
- Casos de éxito en Palermo
- Dirección específica + horarios
- Teléfono local
- Google Maps embed Palermo

RECOLETA
--------
Total: 1200 palabras
Duplicado (template): 800 palabras (67%)
ÚNICO: 400 palabras (33%) ✅ CUMPLE (>20%)

Contenido único:
- Historia de Recoleta como zona
- Demanda local (abogados, escribanías cercanas)
- Casos de éxito en Recoleta
- Dirección específica + horarios
- Teléfono local
- Google Maps embed Recoleta
```

---

## PARTE 4: AUDITORÍA MANUAL - CHECKLIST

### Paso 1: Google Search Console

1. Ingresá a Search Console
2. Cobertura → Búsqueda de duplicados:
   ```
   Google reporta: "X URLs con contenido duplicado"
   ```
3. Descarga el reporte
4. Analiza patrones de duplicado

### Paso 2: Verificación de 3 Landings Sample

Selecciona 3 landings de diferentes zonas:
- Landing A: `/landings/abogados-art-palermo`
- Landing B: `/landings/abogados-art-recoleta`
- Landing C: `/landings/abogados-despidos-caballito`

**Para cada una:**

```markdown
## Landing A: abogados-art-palermo

### Meta Tags
- Title: [copiar]
- Description: [copiar]

### H1
- Contenido: [copiar]

### Body
- Primeras 200 palabras: [copiar]
- ¿Mencionan "Palermo"? [sí/no]
- ¿Dirección específica? [sí/no]

### Schema
- LocalBusiness name: [copiar]
- LocalBusiness address: [copiar]
- LocalBusiness phone: [copiar]

### Similarities
- Similitud con Landing B: [%]
- Similitud con Landing C: [%]

### Contenido único
- Tiene datos locales: [sí/no]
- Menciona casos locales: [sí/no]
- Totales palabras: [#]
- Palabras únicas: [#]
```

**Usar herramienta:** [Copyscape](https://www.copyscape.com/) o [Grammarly Plagiarism Checker](https://www.grammarly.com/plagiarism-checker)

### Paso 3: Verificar Canonical Tags

Abre cada landing en navegador:
```html
<!-- Debería estar en <head> -->
<link rel="canonical" href="https://derechosart.com.ar/landings/abogados-art-palermo">
```

**Verificar con DevTools:**
1. F12 → Elements
2. Busca: `<link rel="canonical"`
3. ¿Cada página apunta a SÍ MISMA? ✅ Correcto
4. ¿O apuntan todas a URL base? ❌ Problema

---

## PARTE 5: PLAN DE CONSOLIDACIÓN

### Opción 1: MANTENER TODAS (Recomendado para SEO Local)

**Ventaja:** Cada barrio tiene presencia local

**Requisito:** Mínimo 20% contenido único POR LANDING

**Estructura a implementar:**

```html
<!-- TEMPLATE MODULAR -->

<!-- SECCIÓN COMPARTIDA (70%) -->
<section class="template-base">
    <h2>¿Qué cubre la ART?</h2>
    <p>La Aseguradora de Riesgos del Trabajo (ART) cubre...</p>
    [Contenido genérico]
</section>

<!-- SECCIÓN ÚNICA (30%) -->
<section class="contenido-local">
    <h2>Abogados de ART en {{ LOCALIDAD }}</h2>
    <p>En {{ LOCALIDAD }}, la demanda de reclamos por...</p>
    <h3>¿Qué nos diferencia en {{ LOCALIDAD }}?</h3>
    <ul>
        <li>Oficina física en {{ LOCALIDAD }}</li>
        <li>Casos exitosos en {{ ZONA_COMERCIAL }}</li>
        <li>{{ DATO_LOCAL_1 }}</li>
        <li>{{ DATO_LOCAL_2 }}</li>
    </ul>
</section>
```

**Variables dinámicas necesarias:**
- `{{ LOCALIDAD }}` - Nombre del barrio/zona
- `{{ ZONA_COMERCIAL }}` - Centro de negocios nearby
- `{{ DATO_LOCAL_1 }}`, `{{ DATO_LOCAL_2 }}` - Hechos únicos
- `{{ DIRECCION }}` - Dirección oficina
- `{{ TELEFONO }}` - Tel local
- `{{ HORARIOS }}` - Horarios atencion

### Opción 2: CONSOLIDAR A 50 LANDINGS (Más conservador)

**Ventaja:** Menos URLs, más fácil de mantener

**Consolidación:**
- CABA: 5 landings (por zona: Norte, Centro, Sur, Este, Oeste)
- GBA: 10 landings (por partido: norte, sur, oeste)
- Rosario: 2 landings
- Neuquén: 2 landings

**Desventaja:** Pierdes relevancia local para barrios pequeños

---

## PARTE 6: MEJORAS TÉCNICAS A IMPLEMENTAR

### Mejora 1: Canonical Tags

**Verificar que cada landing tenga:**

```html
<head>
    <link rel="canonical" href="https://derechosart.com.ar/landings/{{ SLUG }}">
</head>
```

**En PHP (encabezado.php):**
```php
<?php
$current_url = $_SERVER['REQUEST_URI'];
$canonical = 'https://derechosart.com.ar' . $current_url;
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
```

### Mejora 2: Actualizar Meta Tags

**ANTES (Malo - igual en todas):**
```html
<title>Abogados ART - Reclamá tu indemnización</title>
<meta name="description" content="Especialistas en accidentes laborales...">
```

**DESPUÉS (Bueno - dinámico):**
```php
<?php
$localidad = 'Palermo'; // De URL
$title = "Abogados de ART en {$localidad} | DerechosART";
$description = "Especialistas en accidentes laborales en {$localidad}. Reclamá tu indemnización a la ART. Oficina en {$localidad}. Consulta gratuita.";
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
```

### Mejora 3: H1 Dinámico

**ANTES:**
```html
<h1>Abogados Especialistas en Accidentes Laborales</h1>
```

**DESPUÉS:**
```html
<h1>Abogados de Accidentes Laborales en <?php echo $localidad; ?></h1>
```

### Mejora 4: LocalBusiness Schema Único

**ANTES (igual en todas):**
```json
{
  "@type": "LocalBusiness",
  "name": "DerechosART",
  "address": "Ayacucho 283, CABA"
}
```

**DESPUÉS (dinámico por localidad):**
```php
<?php
$schema = [
    '@type' => 'LocalBusiness',
    'name' => "DerechosART - {$localidad}",
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $direccion_local,
        'addressLocality' => $localidad,
        'addressRegion' => $provincia,
        'addressCountry' => 'AR'
    ]
];
echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
?>
```

### Mejora 5: Noindex para Landings Muy Débiles

Si después de auditoría encuentras landings con <100 palabras únicas:

```html
<meta name="robots" content="noindex, follow">
```

**Nota:** Mantiene el link juice pero no indexa página pobre

---

## PARTE 7: REPORTE DE AUDITORÍA (A completar)

```markdown
## REPORTE DUPLICATE CONTENT - [FECHA]

### Resumen
- Total landings: 250+
- Landings auditadas (sample): 3
- Promedio duplicado: [X]%
- Promedio único: [X]%

### Hallazgos
1. Meta tags duplicados: [Sí/No] → Afecta [#] landings
2. H1 genérico: [Sí/No] → Afecta [#] landings
3. Sin datos locales: [Sí/No] → Afecta [#] landings
4. Sin canonical tags: [Sí/No] → Crítico

### Recomendación
[ ] Opción 1: Mantener todas + mejorar contenido único
[ ] Opción 2: Consolidar a 50 landings
[ ] Opción 3: Híbrido (60 landings principales + canonical a principales)

### Acciones Inmediatas
- [ ] Implementar canonical tags
- [ ] Actualizar meta tags (dinámicos)
- [ ] H1 dinámico por localidad
- [ ] Schema LocalBusiness único
- [ ] Agregar contenido local único (20%+)

### Timeline
- Semana 1-2: Template modular
- Semana 3-4: Cargar datos locales (dirección, teléfono)
- Semana 5-6: QA y testing
```

---

## PARTE 8: HERRAMIENTAS PARA AUDITORÍA

| Herramienta | Propósito | Link |
|---|---|---|
| Screaming Frog | Detectar duplicados en crawl | https://www.screamingfrog.co.uk/seo-spider/ |
| Copyscape | Comparar contenido entre URLs | https://www.copyscape.com/ |
| Google Search Console | Ver duplicados reportados | https://search.google.com/search-console |
| Siteliner | Analizar thin content | https://www.siteliner.com/ |
| Ahrefs | Ver competing keywords | https://ahrefs.com/ |

---

## PARTE 9: PRÓXIMAS SESIONES

1. **Sesión 1:** Completar auditoría (3-5 landings sample)
2. **Sesión 2:** Decidir Opción 1, 2 o 3
3. **Sesión 3:** Implementar template modular + dinámico
4. **Sesión 4:** Cargar datos locales únicos
5. **Sesión 5:** QA y revalidación con Search Console

---

**Responsable próximos pasos:** Usuario (auditoría manual) + Gordon (implementación)
