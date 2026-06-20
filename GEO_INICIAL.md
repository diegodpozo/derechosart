# OPTIMIZACION GEO INICIAL - DERECHOS ART

ESTE DOCUMENTO REGISTRA LAS CONFIGURACIONES TECNICAS E INVISIBLES DE GENERATIVE ENGINE OPTIMIZATION (GEO) IMPLEMENTADAS PARA MEJORAR LA CITACION Y EL ANALISIS DE NUESTRO SITIO POR PARTE DE MOTORES DE RESPUESTA DE INTELIGENCIA ARTIFICIAL (GEMINI, CHATGPT, PERPLEXITY).

LAS MEJORAS SE ORGANIZAN EN 6 PUNTOS CRITICOS IDENTIFICADOS EN EL AUDIT INICIAL. CADA UNA LLEVA FECHA Y HORA DE IMPLEMENTACION.

---

## ESTADO GENERAL DE LAS 6 MEJORAS CRITICAS

| # | MEJORA | ESTADO | FECHA |
|---|--------|--------|-------|
| 1 | **Internal linking** entre paginas principales y landings | ✅ IMPLEMENTADO | 20/06/2026 15:30 ART |
| 2 | **Blog insuficiente** (solo 1 articulo, necesita mas contenido) | ❌ POR IMPLEMENTAR | - |
| 3 | **articleBody en BlogPosting** schema para GEO | ✅ IMPLEMENTADO | 20/06/2026 16:00 ART |
| 4 | **LocalBusiness Cordoba/Mendoza** (schema faltante) | ✅ IMPLEMENTADO | 20/06/2026 17:30 ART |
| 5 | **Duplicate content en landings** (thin content 70% repetido) | ⏳ EN PROCESO (CABA+GBA+Rosario+Sur listo) | 20/06/2026 18:00 ART |
| 6 | **embed.js global** (carga innecesaria en todas las paginas) | ❌ POR IMPLEMENTAR | - |

---

## DETALLE POR MEJORA

### MEJORA #1: Internal Linking (IMPLEMENTADO 20/06/2026 15:30 ART)

**Archivos modificados:**

1. **`public_html/vistas/paginas/inicio.php`**
   - Homepage: "Accidentes laborales" en lista de servicios → link a `/accidentes-de-trabajo`
   - Homepage: "Enfermedades profesionales" en lista de servicios → link a `/enfermedades-profesionales`
   - Landings tipo accidentes: parrafo de cierre → cross-link a `/despidos`
   - Landings tipo despidos: parrafo de cierre → cross-link a `/accidentes-de-trabajo`

2. **`public_html/vistas/paginas/accidentes-de-trabajo.php`**
   - "calcular el monto de tu indemnizacion" → link a `/calculadora-accidentes`

3. **`public_html/vistas/paginas/despidos.php`**
   - "asesoramiento legal inmediato" → link a `/contacto`
   - "indemnizacion completa por antiguedad (Art. 245 LCT)" → link a `/calculadora-despidos`

4. **`public_html/vistas/paginas/blog-guia-accidentes.php`**
   - "accidente laboral" en seccion 1 → link a `/accidentes-de-trabajo`
   - "Comision Medica" en alerta de no aceptar primer numero → link a `/comisiones-medicas`
   - "calculadora de indemnizacion" en misma alerta → link a `/calculadora-accidentes`
   - "revertir esa decision" en seccion ART rechaza → link a `/comisiones-medicas`
   - "cuestionar ante la Comision Medica" en FAQ ART rechaza → link a `/comisiones-medicas`
   - Parrafo nuevo en FAQ seccion 10 con link a `/faq`

**Total de enlaces internos agregados:** ~12

---

### MEJORA #2: Blog Insuficiente (PENDIENTE)

- **Problema:** El sitio tiene solo 1 articulo de blog (`blog-guia-accidentes.php`). Los motores GEO priorizan sitios con contenido actualizado frecuentemente.
- **Impacto:** Menor autoridad tematica y menos oportunidades de citacion en respuestas de IA.
- **Solucion propuesta:** Publicar 2-3 articulos semanales usando el banco de preguntas del kit GEO (ej: "Que hacer si te dan el alta con dolor", "Accidente laboral en Rosario", "Cuanto tiempo tengo para reclamar a la ART").
- **Archivos involucrados:** `vistas/paginas/`, `config/SEO_CONFIG.php`, `aplicacion/Controladores/PaginasControlador.php`

---

### MEJORA #3: articleBody en BlogPosting Schema (IMPLEMENTADO 20/06/2026 16:00 ART)

**Problema:** El schema `BlogPosting` existente no incluia `articleBody`, propiedad que los motores GEO (Gemini, ChatGPT, Perplexity) usan para extraer y citar el contenido del articulo directamente.

**Solucion:** Se agrego la propiedad `articleBody` con un extracto de 5000 caracteres del texto plano del articulo.

**Archivos modificados:**

1. **`public_html/config/SEO_CONFIG.php`**
   - Funcion `GenerarSchemaArticuloBlog()`: agregado parametro `$CuerpoArticulo = ''`
   - JSON-LD: agregado campo `'articleBody' => $CuerpoArticulo`

2. **`public_html/aplicacion/Controladores/PaginasControlador.php`**
   - Lectura del archivo de vista del blog
   - Stripping de PHP tags y HTML tags
   - Normalizacion de espacios
   - Truncado a 5000 caracteres via `mb_substr()`
   - Asignacion a variable `$CuerpoArticuloBlog`

3. **`public_html/vistas/encabezado.php`**
   - Pase de `$CuerpoArticuloBlog ?? ''` como 7mo parametro a `GenerarSchemaArticuloBlog()`

---

### MEJORA #4: LocalBusiness Cordoba/Mendoza (IMPLEMENTADO 20/06/2026 17:30 ART)

**Archivos modificados:**

1. **`public_html/config/SEO_CONFIG.php`**
   - Nueva funcion `generateLocalBusinessSchemaCordoba()` con direccion 27 de Abril 276, Cordoba
   - Nueva funcion `generateLocalBusinessSchemaMendoza()` con direccion Patricias Mendocinas 539, piso 2, of. B, Mendoza
   - Ambas incluyen: coordenadas geograficas, horarios, telefono, url y descripcion

2. **`public_html/vistas/encabezado.php`**
   - Nuevos bloques condicionales `elseif` para detectar "cordoba" y "mendoza" en la URL canonical
   - Inyeccion automatica del schema correspondiente en esas paginas

---

### MEJORA #5: Duplicate Content en Landings (EN PROCESO - 20/06/2026 18:00 ART)

- **Problema:** Las 250+ landings comparten ~70% del mismo template. Google puede interpretarlas como "thin content" y penalizar el posicionamiento del sitio.
- **Impacto:** Riesgo de baja indexacion y perdida de rankings locales.
- **Solucion implementada:**
  - Se creo `config/contenido_zonas.json` con ~230 entradas cubriendo:
    - 48 CABA barrios
    - 109 GBA localidades
    - 31 Rosario y area metropolitana
    - 30 Sur/Patagonia (Neuquen + Rio Negro)
    - 1 Cordoba
    - 1 Mendoza
  - Cada entrada tiene un `parrafo_local` unico de 2-3 oraciones mencionando la zona especifica
  - Se modifico `PaginasControlador.php::LandingZona()` para cargar el JSON y definir `ZONA_CONTENIDO_UNICO`
  - Se modifico `inicio.php` para mostrar el parrafo en la seccion de texto dinamico
  - Funciona para TODAS las zonas (se elimino la restriccion `$es_caba_gba`)
  - No referencia datos falsos (comisiones medicas, direcciones)
- **Archivos involucrados:** `config/contenido_zonas.json` (NUEVO), `aplicacion/Controladores/PaginasControlador.php`, `vistas/paginas/inicio.php`

---

### MEJORA #6: embed.js Global (PENDIENTE)

- **Problema:** El sitio carga `embed.js` (Meta Pixel u otro script de terceros) en TODAS las paginas, incluyendo las que no lo necesitan. Esto afecta velocidad y Core Web Vitals.
- **Impacto:** Mayor tiempo de carga innecesario en paginas simples.
- **Solucion propuesta:** Cargar `embed.js` solo en paginas donde se necesita (home, contacto, gestion) en lugar de incluirlo globalmente en el encabezado.
- **Archivos involucrados:** `vistas/encabezado.php`

---

## ARCHIVOS MODIFICADOS (HISTORIAL COMPLETO)

### 20/06/2026 - Internal Linking + articleBody

| Archivo | Cambio |
|---------|--------|
| `public_html/vistas/paginas/inicio.php` | Links en lista de servicios + cross-link landings |
| `public_html/vistas/paginas/accidentes-de-trabajo.php` | Link a calculadora-accidentes |
| `public_html/vistas/paginas/despidos.php` | Links a contacto y calculadora-despidos |
| `public_html/vistas/paginas/blog-guia-accidentes.php` | 6 enlaces internos + parrafo nuevo con link a FAQ |
| `public_html/config/SEO_CONFIG.php` | Parametro $CuerpoArticulo + campo articleBody en BlogPosting |
| `public_html/aplicacion/Controladores/PaginasControlador.php` | Lectura y extraccion de 5000 chars para articleBody |
| `public_html/vistas/encabezado.php` | Pase de variable $CuerpoArticuloBlog al schema |
| `public_html/config/contenido_zonas.json` | NUEVO - 157 entradas con contenido unico por zona CABA+GBA |
| `public_html/aplicacion/Controladores/PaginasControlador.php` | Carga de JSON y definicion de ZONA_CONTENIDO_UNICO |
| `public_html/vistas/paginas/inicio.php` | Visualizacion de ZONA_CONTENIDO_UNICO en seccion de texto dinamico |
| `public_html/config/contenido_zonas.json` | Extension con ~230 entradas (Rosario + Sur + Cordoba + Mendoza) |
| `public_html/aplicacion/Controladores/PaginasControlador.php` | Eliminada restriccion $es_caba_gba para ZONA_CONTENIDO_UNICO |
| `public_html/config/SEO_CONFIG.php` | Funciones generateLocalBusinessSchemaCordoba y Mendoza |
| `public_html/vistas/encabezado.php` | Condicionales para inyectar schema Cordoba y Mendoza |

### FECHA ANTERIOR (DOCUMENTACION PREVIA)

| Archivo | Cambio | Fecha |
|---------|--------|-------|
| `public_html/config/SEO_CONFIG.php` | Schema Organization con fundadores y equipo, funcion GenerarSchemaArticuloBlog | PREVIO |
| `public_html/vistas/encabezado.php` | Inyeccion automatica de BlogPosting JSON-LD en <head> | PREVIO |
| `public_html/aplicacion/Controladores/PaginasControlador.php` | Variables de fecha y autor para schema del blog | PREVIO |

---

## REGLAS DE DESARROLLO GEO PARA EL FUTURO

Cuando se agregue un nuevo articulo de blog en `PaginasControlador.php`, recordar declarar las variables correspondientes antes del encabezado:

```php
// EJEMPLO DE CONFIGURACION GEO PARA NUEVOS POSTS
$FechaPublicacionBlog = "ANO-MES-DIA_T_HORA-03:00";
$FechaModificacionBlog = "ANO-MES-DIA_T_HORA-03:00";
$AutorBlogSlug = "slug-de-la-abogada"; // DEFINIDA EN SEO_CONFIG.php
```

El `articleBody` se genera automaticamente desde el archivo de vista, no requiere configuracion adicional.

---

## PROXIMOS PASOS RECOMENDADOS

1. **LocalBusiness Cordoba/Mendoza** (Mejora #4) - Prioridad alta, esfuerzo bajo
2. **embed.js condicional** (Mejora #6) - Prioridad media, esfuerzo bajo
3. **Blog content plan** (Mejora #2) - Prioridad alta, esfuerzo medio
4. **Duplicate content landings** (Mejora #5) - Prioridad alta, esfuerzo alto
