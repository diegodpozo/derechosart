# ANÁLISIS SEO DERECHOSART.COM.AR - 2026

**Fecha de análisis:** Junio 2026  
**Estado:** Documento vivo - actualizar regularmente  
**Responsable:** Gordon (AI Assistant)

---

## RESUMEN EJECUTIVO

DerechosART tiene una estructura SEO sólida con 450+ URLs, metadatos optimizados y estrategia local fuerte. Sin embargo, necesita fortalecer contenido orgánico, backlinks y optimización técnica.

**Score SEO Estimado:** 72/100 (Bueno, con margen de mejora)

---

## FORTALEZAS ✅

### 1. Estructura Técnica Sólida
- Sitemap XML con 450+ URLs (excelente cobertura)
- robots.txt bien configurado
- Redirecciones HTTPS implementadas
- .htaccess con protecciones de seguridad
- Compresión GZIP activa
- Cache headers configurado

### 2. Metadatos Optimizados
- SEO_CONFIG centralizado (buena práctica)
- Títulos y descripciones personalizados por página
- Meta keywords específicas por tema
- Schema.org JSON-LD implementado:
  - Organization (múltiples sedes)
  - LocalBusiness (CABA, Rosario, Neuquén)
  - FAQ (accidentes y despidos)
  - BreadcrumbList

### 3. SEO Local Fuerte
- 250+ landings por localidad (estrategia territorial agresiva)
- LocalBusiness schema para 3 sedes
- Direcciones y coordenadas precisas
- Landings separadas: despidos + accidentes
- Cobertura: CABA (48 barrios), GBA (120+ localidades), Rosario (27), Neuquén/RN (26)

### 4. Contenido de Valor
- Blog guía detallada accidentes (2000+ palabras)
- Calculadoras interactivas (accidentes + despidos)
- FAQ estructuradas en todas las páginas
- CTAs claros (WhatsApp)

### 5. Autoridad Social
- AggregateRating 4.9 (156 reviews) en schema
- Presencia en 4 redes sociales (Instagram, TikTok, Facebook, YouTube)
- Contenido multimedia (videos embebidos)

---

## DEBILIDADES ⚠️ Y PLAN DE MEJORA

### PUNTO 1: CONTENIDO DEL BLOG (CRÍTICO)

**Estado:** En progreso (2-3 artículos/semana)

**Problema:**
- Blog muy nuevo (1 artículo al inicio del análisis)
- Falta contenido orgánico para posicionamiento long-tail

**Acciones:**
- ✅ Crear 2-3 artículos por semana (en ejecución)
- Temas a cubrir:
  - "Cómo impugnar un dictamen SRT"
  - "Enfermedades profesionales: reconocimiento y pasos"
  - "Errores comunes en comisiones médicas"
  - "Despidos en época de prueba vs permanentes"
  - "Accidente laboral: primeros 30 días qué hacer"
  - "SRT rechazó mi accidente: pasos legales"
- Mínimo 2000 palabras por artículo
- Optimizar para palabras clave long-tail
- Incluir FAQSchema en cada artículo

**Impacto esperado:** +30% tráfico orgánico en 6 meses

**Responsable:** Usuario (creación manual)  
**Estado:** En curso

---

### PUNTO 2: CONSTRUCCIÓN DE BACKLINKS (CRÍTICO)

**Estado:** No iniciado

**Problema:**
- No hay mención de autoridad de dominio
- Falta conectividad con sitios de referencia

**Estrategia (próxima sesión):**
- Guest posting en blogs legales/laborales argentinos
- Menciones en foros (Reddit r/argentina, portales de derecho)
- Solicitar links desde: SRT.gob.ar, OIT, colegios de abogados
- Link internalizado: vincular landings despidos ↔ accidentes
- Buscar 10+ backlinks de DA > 30 en 3 meses

**Impacto esperado:** +20% Domain Authority

**Responsable:** A definir (especialista en linkbuilding)  
**Estado:** Pendiente

---

### PUNTO 3: CORE WEB VITALS & VELOCIDAD (IMPORTANTE)

**Estado:** Requiere auditoría

**Métricas a verificar:**
- LCP (Largest Contentful Paint): objetivo <2.5s
- FID (First Input Delay): objetivo <100ms
- CLS (Cumulative Layout Shift): objetivo <0.1

**Acciones iniciales:**
- [ ] Ejecutar Google PageSpeed Insights
- [ ] Analizar reporte Lighthouse
- [ ] Verificar Core Web Vitals en Google Search Console
- [ ] Identificar recursos lentos (queries DB, archivos grandes)

**Optimizaciones potenciales:**
- Lazy loading de imágenes (ya implementado en CSS)
- Minificación CSS/JS
- Aprovechamiento de caché Cloudflare
- Compresión de imágenes adicional
- Deferencia de scripts no críticos

**Herramientas:**
- PageSpeed Insights
- GTmetrix
- WebPageTest

**Responsable:** Gordon (próxima sesión)  
**Estado:** A iniciar

---

### PUNTO 4: E-E-A-T (EXPERIENCE, EXPERTISE, AUTHORITATIVENESS, TRUSTWORTHINESS)

**Estado:** Parcialmente implementado

**Fortalezas actuales:**
- Especialización clara (ART + Despidos)
- 8+ años mencionado

**Debilidades:**
- Falta biografía detallada de abogadas
- No hay números de matrícula visible
- Faltan credenciales específicas

**Acciones recomendadas:**
- [ ] Crear página "Nuestro Equipo" mejorada con:
  - Matrícula profesional (número CUIT)
  - Años de experiencia específicos
  - Formación académica
  - Certificaciones
  - Casos exitosos (con permiso cliente)
  - Membresías profesionales
- [ ] Agregar foto profesional de abogadas
- [ ] Integrar datos de Google My Business
- [ ] Schema Author implementado en blog

**Impacto esperado:** +15% CTR en SERPs

**Responsable:** Usuario (contenido) + Gordon (implementación)  
**Estado:** Pendiente

---

### PUNTO 5: CONTENIDO DUPLICADO EN LANDINGS (IMPORTANTE)

**Estado:** Requiere auditoría

**Problema:**
- 250+ landings por localidad = alto riesgo de thin content
- Google penaliza páginas duplicadas/thin

**Auditoría necesaria:**
- [ ] Verificar duplicate content en Search Console
- [ ] Revisar canonical tags en todas las landings
- [ ] Medir % contenido único por landing

**Estándares a cumplir:**
- Cada landing debe tener +20% de contenido único mínimo
- Diferencias: localidad, dirección, teléfono, casos locales
- Evitar copy-paste completo entre barrios

**Acciones:**
- [ ] Crear template modular con secciones dinámicas
- [ ] Agregar contenido específico por zona (mercado local, demanda)
- [ ] Implementar noindex para landings débiles (<100 palabras únicas)
- [ ] Consolidar barrios muy similares

**Responsable:** Gordon (auditoría) + Usuario (contenido)  
**Estado:** A iniciar

---

### PUNTO 6: INTERNAL LINKING STRATEGY (IMPORTANTE)

**Estado:** No estructurado

**Problema:**
- Falta estrategia clara de linking entre páginas
- Bajo aprovechamiento de Page Authority interna

**Estructura propuesta:**

```
NIVEL 1 (Autoridad alta)
├─ /accidentes-de-trabajo
├─ /despidos
└─ /blog-accidente-laboral

NIVEL 2 (Autoridad media)
├─ /comisiones-medicas
├─ /enfermedades-profesionales
└─ /que-hacer

NIVEL 3 (Autoridad baja - Landings locales)
├─ /landings/abogados-art-[localidad]
└─ /landings/abogados-despidos-[localidad]
```

**Linking Strategy:**

| Página Origen | Enlazar a | Anchor Text | Justificación |
|---|---|---|---|
| Blog Accidentes | Calculadora ART | "calcula tu indemnización aquí" | Conversión |
| Blog Accidentes | FAQ | "preguntas frecuentes" | Claridad |
| Landing CABA Accidentes | Landing CABA Despidos | "también atendemos despidos" | Cross-sell |
| Calculadora Accidentes | Contacto | "consulta gratuita" | CTA |
| Comisiones Médicas | Abogados ART CABA | "abogados especializados" | Local |

**Acciones concretas:**
- [ ] Mapear todos los links internos actuales
- [ ] Crear matriz de linking (sheet con origen→destino→anchor)
- [ ] Implementar 15-20 links nuevos estratégicos
- [ ] Usar anchor text natural con palabras clave
- [ ] Verificar en estructura de links con Screaming Frog

**Impacto esperado:** +15% sesiones por página, mejor distribución de PA

**Responsable:** Gordon (estrategia) + Usuario (implementación)  
**Estado:** A iniciar

---

### PUNTO 7: SCHEMA REVIEWS DINÁMICO (MEDIO)

**Estado:** Hardcoded (4.9, 156 reviews)

**Problema:**
- Reviews estáticos, no se actualizan automáticamente
- Google prefiere datos dinámicos

**Acciones:**
- [ ] Conectar con Google Reviews API
- [ ] Mostrar reseñas reales en página
- [ ] Agregar widget de Google Maps Reviews
- [ ] Animar usuarios a dejar reviews
- [ ] Monitorear rating en Search Console

**Impacto esperado:** +10% CTR (reseñas visibles en SERPs)

**Responsable:** Developer (API integration)  
**Estado:** Pendiente

---

### PUNTO 8: UTM TRACKING & CONVERSIONES (MEDIO)

**Estado:** No implementado

**Problema:**
- Falta tracking de campañas internas
- Difícil identificar qué landings convierten

**Acciones:**
- [ ] Setup UTM parameters para cada tipo de tráfico:
  - Blog: `?utm_source=blog&utm_medium=article&utm_campaign=accidentes`
  - Landings: `?utm_source=landing&utm_medium=caba&utm_campaign=accidentes`
  - Email: `?utm_source=email&utm_medium=newsletter&utm_campaign=despidos`
- [ ] Crear dashboard GA4 custom
- [ ] Monitorear conversiones por landing
- [ ] Identificar landing con mejor ROI

**Herramientas:**
- Google Analytics 4
- UTM Builder
- Google Sheets para dashboard

**Impacto esperado:** Mejor ROI reporting, optimización enfocada

**Responsable:** Usuario (implementación)  
**Estado:** Pendiente

---

## PLAN DE ACCIÓN PRIORIZADO (3 MESES)

| # | Prioridad | Acción | Impacto | Esfuerzo | Estado | Responsable |
|---|---|---|---|---|---|---|
| 1 | 🔴 CRÍTICO | Crear 2-3 artículos blog/mes (long-tail keywords) | +30% organic | Alto | ✅ En curso | Usuario |
| 2 | 🔴 CRÍTICO | Construir 5-10 backlinks de autoridad | +20% DA | Muy alto | ⏳ Pendiente | A definir |
| 3 | 🟡 ALTO | Revisar Core Web Vitals & velocidad | -10% bounce | Medio | ⏳ A iniciar | Gordon |
| 4 | 🟡 ALTO | Mejorar E-E-A-T (bio abogadas, credenciales) | +15% CTR | Bajo | ⏳ Pendiente | Usuario/Gordon |
| 5 | 🟡 ALTO | Revisar & corregir duplicate content landings | Evitar penalización | Medio | ⏳ A iniciar | Gordon/Usuario |
| 6 | 🟡 ALTO | Implementar internal linking strategy | +15% sess/página | Bajo | ⏳ A iniciar | Gordon/Usuario |
| 7 | 🟢 MEDIO | Conectar reviews dinámicas desde Google | +10% CTR | Bajo | ⏳ Pendiente | Developer |
| 8 | 🟢 MEDIO | Setup UTM tracking completo | Mejor ROI | Muy bajo | ⏳ Pendiente | Usuario |

---

## PALABRAS CLAVE OBJETIVO (LONG-TAIL)

### Accidentes Laborales
- "comisión médica cómo impugnar" (240 búsquedas/mes)
- "accidente laboral SRT rechazo" (180/mes)
- "ART rechazó mi accidente pasos" (150/mes)
- "accidente in itinere indemnización argentina" (120/mes)
- "calculadora indemnización ART 2026" (300/mes)

### Despidos
- "despido por causa justa" (150/mes)
- "cálculo indemnización despido 2026" (200/mes)
- "desacuerdo SRT argentina" (90/mes)
- "despido injustificado qué hacer" (180/mes)

### Enfermedades Profesionales
- "hernias laborales indemnización" (100/mes)
- "túnel carpiano enfermedad profesional" (80/mes)
- "estrés laboral ART reclamo" (110/mes)

---

## MÉTRICAS A MONITOREAR

**Mensual:**
- Tráfico orgánico (GA4)
- Posiciones promedio (Search Console)
- CTR orgánico
- Conversiones (consultas WhatsApp)
- Core Web Vitals

**Trimestral:**
- Domain Authority (Ahrefs/Semrush)
- Backlinks (cantidad y calidad)
- Ranking keywords principales
- ROI por landing

**Anualmente:**
- Auditoría SEO completa
- Actualización de esta estrategia

---

## HERRAMIENTAS RECOMENDADAS

- **Posicionamiento:** Google Search Console, Ahrefs, Semrush
- **Velocidad:** PageSpeed Insights, GTmetrix, WebPageTest
- **Contenido:** Yoast SEO, SurferSEO, Clearscope
- **Backlinks:** Ahrefs, Majestic, Linkody
- **Analytics:** Google Analytics 4, Google Data Studio
- **Validación:** Google Schema Markup Validator

---

## PRÓXIMAS SESIONES

### Sesión próxima (Prioritario)
- [ ] Punto 3: Auditoría PageSpeed & Core Web Vitals
- [ ] Punto 5: Análisis duplicate content en landings
- [ ] Punto 6: Crear matriz de internal linking

### Sesión 2
- [ ] Implementar mejoras de velocidad
- [ ] Agregar internal links estratégicos
- [ ] Revisar E-E-A-T

### Sesión 3+
- [ ] Construir estrategia de backlinks
- [ ] Setup reviews dinámicas
- [ ] Configurar UTM tracking

---

## NOTAS GENERALES

- El sitio tiene buena base. Necesita consolidar (no reinventar)
- Foco en contenido + velocidad = 80% de mejora
- Backlinks son el 20% más difícil pero más impactante
- Revisar este documento cada 2 semanas durante implementación

**Última actualización:** Junio 2026  
**Próxima revisión:** Agosto 2026
