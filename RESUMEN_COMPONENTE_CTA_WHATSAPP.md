# Componente CTA WhatsApp Reutilizable

## ¿Qué es?
Componente amarillo rectangular compacto que muestra:
- Título principal (una línea)
- Ícono WhatsApp + texto descriptivo (una línea)
- Botón "ESCRIBINOS" con media anchura
- **Número de WhatsApp fijo para todo el sitio**

## Ubicación del archivo
```
/public_html/vistas/componentes/cta-whatsapp.php
```

## Parámetros requeridos

### `$titulo` (obligatorio)
- **Tipo:** string
- **Descripción:** Texto principal del CTA (ej: "¿Tenés dudas?")
- **Máximo recomendado:** 30 caracteres

### `$descripcion` (obligatorio)
- **Tipo:** string
- **Descripción:** Texto descriptivo (ej: "Escribinos por WhatsApp y te asesoramos sin costo.")
- **Nota:** Se muestra en una sola línea. Si es muy largo, se trunca con puntos suspensivos.
- **Máximo recomendado:** 60 caracteres

## Parámetros opcionales

### `$ancho` (opcional)
- **Tipo:** string (número en rem)
- **Default:** `"25"`
- **Descripción:** Ancho máximo del componente en rem
- **Rango recomendado:** 20-30 rem
- **Ejemplo:** `"22"` → max-width: 22rem

### `$margen_top` (opcional)
- **Tipo:** string (número en rem)
- **Default:** `"1.5"`
- **Descripción:** Margen superior del componente en rem
- **Rango recomendado:** 0.8-2 rem
- **Ejemplo:** `"1.2"` → margin-top: 1.2rem

## Número de WhatsApp
- **Valor fijo:** `5491124786144`
- **¿Dónde cambiarlo?** En la línea dentro del componente: `$numero_whatsapp = "5491124786144";`
- **Nota:** Es el mismo para todo el sitio. Si necesitas cambiarlo, edita el componente y se aplica a todas las invocaciones.

## Cómo invocar el componente

### Ejemplo básico (SOLO parámetros obligatorios)
```php
<?php 
    $titulo = "¿Tenés dudas?";
    $descripcion = "Escribinos por WhatsApp y te asesoramos sin costo.";
    include __DIR__ . '/../componentes/cta-whatsapp.php';
?>
```

### Ejemplo con parámetros personalizados
```php
<?php 
    $titulo = "¿No sabés si tu despido fue legal?";
    $descripcion = "Consultá con nosotros. Analizaremos tu caso sin costo.";
    $ancho = "22";
    $margen_top = "1.2";
    include __DIR__ . '/../componentes/cta-whatsapp.php';
?>
```

## Estilos y características

### Apariencia
- **Color de fondo:** Amarillo (`bg-amarillo`)
- **Esquinas redondeadas:** 20px (`border-radius-20`)
- **Botón:** Negro con texto amarillo
- **Ícono:** WhatsApp en negro

### Comportamiento
- **Título:** Font-size 1.2rem, weight 800, una línea
- **Descripción:** Font-size 0.85rem, una línea (truncada si es muy larga)
- **Ícono WhatsApp:** 2.2rem × 2.2rem (siempre a la izquierda, nunca baja)
- **Botón:** Media anchura del contenedor (50%), centrado, font-size 0.75rem
- **Altura:** Se ajusta automáticamente al contenido (sin aspect-ratio fijo)

### Responsivo (mobile)
- **Padding:** Se reduce a 1rem
- **Font-size título:** 1rem
- **Font-size descripción:** 0.7rem
- **Ícono:** Se reduce a 2rem × 2rem
- **Botón:** Font-size 0.65rem, mantiene media anchura

## Validaciones
- `$titulo` es obligatorio (error si está vacío)
- `$descripcion` es obligatorio (error si está vacío)
- Si faltan parámetros obligatorios, se muestra un warning

## Dónde está implementado actualmente
1. **Blog Sidebar** (`/public_html/vistas/blog/sidebar.php`)
   - Invocado después de los 10 enlaces de navegación del artículo
   - Config: titulo="¿Tenés dudas?", descripcion="Escribinos por WhatsApp y te asesoramos sin costo.", ancho=22, margen_top=1.2

## Personalización
Para ajustar estilos sin afectar otros componentes, edita el bloque `<style>` dentro de `cta-whatsapp.php`:
- Colores: busca `#000000` (negro), `#FFCC00` (amarillo)
- Tamaños: busca `font-size`, `padding`, `width`, `gap`
- Espaciado: busca `margin`, `gap`, `line-height`

Para cambiar el número de WhatsApp en todo el sitio:
- Edita la línea: `$numero_whatsapp = "5491124786144";`

## Ejemplo de invocación en diferentes contextos

### En un sidebar
```php
<?php 
    $titulo = "¿Dudas sobre tu caso?";
    $descripcion = "Contactanos ahora sin compromiso.";
    $ancho = "20";
    $margen_top = "1.5";
    include __DIR__ . '/../componentes/cta-whatsapp.php';
?>
```

### En un footer
```php
<?php 
    $titulo = "¿Necesitás ayuda?";
    $descripcion = "Escribi a nuestro equipo de asesores.";
    $ancho = "28";
    $margen_top = "2";
    include __DIR__ . '/../componentes/cta-whatsapp.php';
?>
```

### En una sección de contenido
```php
<?php 
    $titulo = "¿Tenés más preguntas?";
    $descripcion = "Habla con nuestros expertos.";
    $ancho = "24";
    $margen_top = "1.8";
    include __DIR__ . '/../componentes/cta-whatsapp.php';
?>
```
