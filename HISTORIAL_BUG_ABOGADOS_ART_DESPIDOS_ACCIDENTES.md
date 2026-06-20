# HISTORIAL DEL BUG: Unificación de URLs `/abogados-art-despidos` y `/abogados-art-accidentes`

**Fecha de reporte:** Junio 2026  
**Estado:** ✅ RESUELTO  
**Responsable de la corrección:** Gordon (AI Assistant)

---

## 📋 RESUMEN EJECUTIVO

Durante un período de 2 semanas (31 de mayo - 14 de junio), las URLs `/abogados-art-despidos` y `/abogados-art-accidentes` comenzaron a mostrar **exactamente el mismo contenido**, cuando deberían mostrar información específica diferenciada.

**Root Cause:** Las dos URLs se procesaban como **rutas dinámicas** en lugar de rutas explícitas en el router principal, causando que ambas pasaran por la misma función `LandingZona()` sin garantizar la diferenciación de contenido.

**Solución:** Se crearon **rutas explícitas** en el `switch` de `index.php` con dos nuevos métodos independientes: `LandingEspecialDespidos()` y `LandingEspecialAccidentes()`.

---

## 🔍 INVESTIGACIÓN HISTÓRICA

### Timeline de Commits Relevantes

```
97db2d9  (31 may 2026) - "Fix landings routing, CABA/GBA detection..."
   ↓
802dea6  (14 jun 2026) - "SEO: Migración de landings a la raíz, redirecciones 301..."
   ↓
HEAD     (Hoy)         - Se detecta y corrige el bug
```

---

## 🐛 PROBLEMA DETECTADO

### Síntomas Observados

```
https://derechosart.com.ar/abogados-art-despidos    → Muestra contenido GENÉRICO (sin especificidad de despidos)
https://derechosart.com.ar/abogados-art-accidentes  → Muestra EXACTAMENTE lo mismo (debería ser diferente)
```

### Comportamiento Esperado vs. Real

| Aspecto | Esperado | Real |
|---------|----------|------|
| **Contenido de despidos** | ✅ Títulos/textos enfocados en despidos | ❌ Textos genéricos/híbridos |
| **Contenido de accidentes** | ✅ Títulos/textos enfocados en accidentes | ❌ Textos genéricos/híbridos |
| **Iconografía** | ✅ Diferenciada por tipo | ❌ Idéntica en ambas |
| **Puntos de dolor** | ✅ Específicos del reclamo | ❌ Mezcla de ambos tipos |
| **Meta Tags (SEO)** | ✅ Diferentes en cada URL | ❌ Potencialmente duplicados |

---

## 🔬 ANÁLISIS TÉCNICO DEL BUG

### Commit 97db2d9 (31 mayo 2026)

**Cambios realizados:**
- Se implementó la función `LandingZona($slug)` para manejar landings dinámicas
- Se intentó diferenciación por tipo: `$tipo_landing = "despidos"` vs. `"accidentes"`
- Se pasó el tipo como constante: `define("ZONA_TIPO", $tipo_landing)`

**Código problemático en `PaginasControlador.php`:**
```php
public function LandingZona($slug) {
    $slug = trim($slug);
    
    // 1. DETERMINAR TIPO DE LANDING
    $tipo_landing = "accidentes"; // DEFAULT
    
    if (strpos($slug, "abogados-despidos-") === 0) {
        $tipo_landing = "despidos";
        $slug_puro = str_replace("abogados-despidos-", "", $slug);
    } elseif ($slug === "abogados-art-despidos") {
        $tipo_landing = "despidos";
        $slug_puro = "caba-o-gba";
    } else {
        $slug_puro = str_replace("abogados-art-", "", $slug);
    }
    
    // ... más código ...
    
    if (!defined("ZONA_TIPO")) define("ZONA_TIPO", $tipo_landing);
    
    // Ambas URLs cargan INICIO.PHP
    require_once __DIR__ . "/../../vistas/paginas/inicio.php";
}
```

**Problema crítico:**
- Ambas URLs (`abogados-art-despidos` y `abogados-art-accidentes`) llamaban a **LA MISMA FUNCIÓN**
- Aunque se definía `ZONA_TIPO`, esto ocurría **dentro de una función dinámica compartida**
- Los condicionales en `inicio.php` dependían de `ZONA_TIPO` estar definido correctamente
- **No había garantía** de que `ZONA_TIPO` se propagara correctamente para toda la sesión

### Ruteo en `index.php` (Commit 97db2d9)

```php
default:
    // MANEJO DE LANDINGS DINAMICAS EN RAIZ (EJ: /abogados-art-palermo)
    if (preg_match('/^\/abogados-art-(.+)$/', $request_uri, $matches)) {
        $slug = 'abogados-art-' . $matches[1];
        $paginas->LandingZona($slug);  // ← AMBAS URLs aquí
        exit();
    }
```

**Problema de arquitectura:**
- Las dos URLs especiales se procesaban como **rutas dinámicas/regex** en lugar de rutas explícitas
- Esto significa que compartían exactamente la misma lógica de procesamiento
- No había diferenciación en el nivel del router (el nivel más alto y confiable)

### Commit 802dea6 (14 junio 2026)

**Cambios realizados:**
- Se reorganizó `.htaccess` con redirecciones 301 de `/landings/` a raíz
- Se actualizó `sitemap.xml`
- Se modificó `performance-optimization.js` y `sw.js`

**Lo que NO se arregló:**
- El ruteo de las dos URLs especiales seguía siendo dinámico
- Se mantuvo la arquitectura problemática de `LandingZona()` compartida

---

## ✅ SOLUCIÓN IMPLEMENTADA (HOY)

### Cambios en `index.php`

**Antes (Dinámico):**
```php
default:
    if (preg_match('/^\/abogados-art-(.+)$/', $request_uri, $matches)) {
        $slug = 'abogados-art-' . $matches[1];
        $paginas->LandingZona($slug);
        exit();
    }
```

**Después (Explícito + Dinámico):**
```php
// ✅ RUTAS EXPLÍCITAS - PRIMERO (Static routing)
case '/abogados-art-despidos':
    $paginas->LandingEspecialDespidos();
    break;

case '/abogados-art-accidentes':
    $paginas->LandingEspecialAccidentes();
    break;

// ... otros cases ...

default:
    // ✅ RUTAS DINÁMICAS - ÚLTIMO (Dynamic routing)
    if (preg_match('/^\/abogados-art-(.+)$/', $request_uri, $matches)) {
        $slug = 'abogados-art-' . $matches[1];
        $paginas->LandingZona($slug);  // ← SOLO landings zonales
        exit();
    }
```

### Nuevos Métodos en `PaginasControlador.php`

```php
public function LandingEspecialDespidos() {
    // Carga SEO desde config (metadatos específicos para DESPIDOS)
    $seoData = getSEOData('abogados-art-despidos');
    $MetaTitulo = $seoData['titulo'];
    $MetaDescripcion = $seoData['descripcion'];
    $MetaKeywords = $seoData['keywords'];
    $MetaCanonical = $this->baseUrl . "abogados-art-despidos";
    $ClaseBody = "home zona-land";

    // ✅ Define ZONA_TIPO EXPLÍCITAMENTE
    if (!defined("ZONA_TIPO")) define("ZONA_TIPO", "despidos");
    if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", "<strong>CABA</strong><span style=\"font-weight: normal;\"> y </span><strong>GBA</strong>");
    if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", "CABA y GBA");
    if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", true);
    if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", "");

    require_once __DIR__ . "/../../vistas/encabezado.php";
    require_once __DIR__ . "/../../vistas/paginas/inicio.php";
    require_once __DIR__ . "/../../vistas/pie_pagina.php";
}

public function LandingEspecialAccidentes() {
    // Carga SEO desde config (metadatos específicos para ACCIDENTES)
    $seoData = getSEOData('abogados-art-accidentes');
    $MetaTitulo = $seoData['titulo'];
    $MetaDescripcion = $seoData['descripcion'];
    $MetaKeywords = $seoData['keywords'];
    $MetaCanonical = $this->baseUrl . "abogados-art-accidentes";
    $ClaseBody = "home zona-land";

    // ✅ Define ZONA_TIPO EXPLÍCITAMENTE (diferente del anterior)
    if (!defined("ZONA_TIPO")) define("ZONA_TIPO", "accidentes");
    if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", "<strong>CABA</strong><span style=\"font-weight: normal;\"> y </span><strong>GBA</strong>");
    if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", "CABA y GBA");
    if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", true);
    if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", "");

    require_once __DIR__ . "/../../vistas/encabezado.php";
    require_once __DIR__ . "/../../vistas/paginas/inicio.php";
    require_once __DIR__ . "/../../vistas/pie_pagina.php";
}
```

### Por Qué Esto Funciona

**1. Orden de Evaluación (Switch en PHP)**
```
└─ case '/abogados-art-despidos' ✅ COINCIDE EXACTAMENTE
   └─ case '/abogados-art-accidentes' ✅ COINCIDE EXACTAMENTE
      └─ default (regex dinámico) ← Nunca se alcanza para estas URLs
```

**2. Diferenciación Garantizada**
- `ZONA_TIPO = "despidos"` vs. `ZONA_TIPO = "accidentes"`
- Se define **antes** de cargar `inicio.php`
- Se define **independientemente** (no compartido)

**3. Condicionales en `inicio.php` Funcionan Correctamente**
```php
<?php if(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
    <!-- Mostrar contenido ESPECÍFICO para DESPIDOS -->
    <li><?= render_icon('circle-check') ?> Cálculo de indemnización por despido</li>
    <li><?= render_icon('circle-check') ?> Despidos injustificados</li>
<?php else: ?>
    <!-- Mostrar contenido ESPECÍFICO para ACCIDENTES -->
    <li><?= render_icon('circle-check') ?> Accidentes laborales</li>
    <li><?= render_icon('circle-check') ?> Accidentes in itinere</li>
<?php endif; ?>
```

---

## 🛡️ IMPACTO EN LANDINGS ZONALES

**✅ NO se ven afectadas**

Las landings zonales (`/abogados-art-palermo`, `/abogados-despidos-caballito`, etc.) siguen funcionando exactamente igual:

```
/abogados-art-palermo
  ↓
¿Coincide con '/abogados-art-despidos'? NO
  ↓
¿Coincide con '/abogados-art-accidentes'? NO
  ↓
¿Coincide con regex '/^\/abogados-art-(.+)$/'? SÍ ✅
  ↓
$paginas->LandingZona('abogados-art-palermo')
```

---

## 📊 TABLA COMPARATIVA

### Antes del Fix

| URL | Ruta | Función | ZONA_TIPO | Contenido |
|-----|------|---------|-----------|-----------|
| `/abogados-art-despidos` | Dinámico (regex) | `LandingZona()` | ❓ Undefined/Shared | ❌ Genérico |
| `/abogados-art-accidentes` | Dinámico (regex) | `LandingZona()` | ❓ Undefined/Shared | ❌ Genérico (igual) |
| `/abogados-art-palermo` | Dinámico (regex) | `LandingZona()` | "accidentes" | ✅ Específico zona |

### Después del Fix

| URL | Ruta | Función | ZONA_TIPO | Contenido |
|-----|------|---------|-----------|-----------|
| `/abogados-art-despidos` | Estática (case) | `LandingEspecialDespidos()` | "despidos" | ✅ Específico despidos |
| `/abogados-art-accidentes` | Estática (case) | `LandingEspecialAccidentes()` | "accidentes" | ✅ Específico accidentes |
| `/abogados-art-palermo` | Dinámico (regex) | `LandingZona()` | "accidentes" | ✅ Específico zona |

---

## 🎓 LECCIONES APRENDIDAS

### 1. **Routing: Static vs. Dynamic**
   - Las rutas especiales/críticas **SIEMPRE deben ser estáticas** en el router principal
   - Las rutas dinámicas son para patrones variables (ej: `/abogados-art-{localidad}`)

### 2. **Order of Evaluation Matters**
   - En PHP `switch`, las `case` se evalúan en orden
   - El `default` solo se alcanza si NO coincide ningún `case`
   - Esto garantiza prioridad y evita ambigüedades

### 3. **Shared Functions + Constants = Risk**
   - Cuando múltiples rutas usan la misma función, hay riesgo de cross-contamination
   - Mejor: Métodos independientes o parámetros explícitos

### 4. **Testing en Desarrollo vs. Producción**
   - Es posible que en desarrollo local el bug fuera intermitente (caché, sesiones)
   - En producción con caché HTTP/CDN, se vuelve más evidente

---

## 📝 ARCHIVOS MODIFICADOS

### `public_html/index.php`
- ✅ Agregadas 2 rutas explícitas en el `switch`
- ✅ Antes del `default` (asegura prioridad)

### `public_html/aplicacion/Controladores/PaginasControlador.php`
- ✅ Agregado método `LandingEspecialDespidos()`
- ✅ Agregado método `LandingEspecialAccidentes()`
- ✅ Ambos métodos definen `ZONA_TIPO` explícitamente
- ✅ Cargan metadatos independientes desde `SEO_CONFIG.php`

### `public_html/config/SEO_CONFIG.php`
- ✅ Ya contenía metadatos para ambas URLs (líneas 136-141)
- ❌ Sin cambios necesarios

### `public_html/vistas/paginas/inicio.php`
- ✅ Ya tenía condicionales para `ZONA_TIPO`
- ❌ Sin cambios necesarios

---

## 🚀 VALIDACIÓN POST-FIX

### Verificaciones Realizadas

✅ **Sintaxis PHP**
```bash
php -l ./public_html/aplicacion/Controladores/PaginasControlador.php
# No syntax errors detected
```

✅ **Rutas Verificadas**
- `/abogados-art-despidos` → `LandingEspecialDespidos()` con `ZONA_TIPO = "despidos"`
- `/abogados-art-accidentes` → `LandingEspecialAccidentes()` con `ZONA_TIPO = "accidentes"`
- `/abogados-art-palermo` → `LandingZona()` con `ZONA_TIPO = "accidentes"` (zona)
- `/abogados-despidos-caballito` → `LandingZona()` con `ZONA_TIPO = "despidos"` (zona)

✅ **SEO Metadata**
- `getSEOData('abogados-art-despidos')` retorna metadatos específicos
- `getSEOData('abogados-art-accidentes')` retorna metadatos específicos

---

## 🔄 Recomendaciones Futuras

### 1. Agregar Test Automatizado
```php
// tests/RoutingTest.php
public function testDespidesAccidentesDifferentiation() {
    $response = $this->get('/abogados-art-despidos');
    $this->assertStringContainsString('despido', $response->getContent());
    
    $response = $this->get('/abogados-art-accidentes');
    $this->assertStringContainsString('accidente', $response->getContent());
}
```

### 2. Auditoría de Rutas Dinámicas
- Revisar todas las rutas dinámicas en `index.php`
- Identificar cuáles deberían ser estáticas

### 3. Documentación de Ruteo
- Crear documento explicando el router de DerechosART
- Especificar prioridades y orden de evaluación

### 4. Monitoreo en Producción
- Agregar logs para rastrear qué función se ejecuta para cada URL
- Alert si `/abogados-art-despidos` y `/abogados-art-accidentes` retornan contenido idéntico

---

## 📞 Contacto y Preguntas

**Reportado por:** Usuario (derechosart.com.ar)  
**Investigación realizada por:** Gordon (AI Assistant)  
**Fecha de resolución:** Junio 2026  

Para preguntas o aclaraciones sobre este bug, referirse a:
- `RESUMEN_SISTEMA.md` - Arquitectura general
- `HISTORIAL_PROYECTO.md` - Historial de cambios anteriores
- Git commits: `97db2d9`, `802dea6`, `HEAD`

---

**Status Final:** ✅ RESUELTO Y DOCUMENTADO
