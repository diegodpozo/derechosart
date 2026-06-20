# DerechosART — Kit GEO Completo
### Schema Markup + Banco de Preguntas para Blog
Preparado por: Claude (Anthropic) — Junio 2026

---

## PARTE 1 — SCHEMA MARKUP (Datos Estructurados)

> **Cómo usar estos códigos:**
> Pedile a tu desarrollador que pegue cada bloque dentro de la etiqueta `<head>` de la página correspondiente, dentro de una etiqueta `<script type="application/ld+json">`.
> Podés validarlos en: https://search.google.com/test/rich-results

---

### 📌 BLOQUE 1 — Organización General
**Página donde va:** Home (inicio)

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "@id": "https://derechosart.com.ar/#organization",
  "name": "DerechosART",
  "alternateName": "Derechos ART Abogados",
  "description": "Estudio jurídico especializado en accidentes laborales, accidentes in itinere, enfermedades profesionales y despidos. Más de 8 años defendiendo trabajadores en Argentina. Sin adelantos — solo cobramos si vos cobrás.",
  "url": "https://derechosart.com.ar",
  "logo": "https://derechosart.com.ar/publico/img/Logo_negro-DerechosART.webp",
  "image": "https://derechosart.com.ar/publico/img/derechosart-og-image.jpg",
  "telephone": "+5491124786144",
  "email": "consultas@derechosart.com.ar",
  "foundingDate": "2018",
  "slogan": "No tenés que resolver esto solo. Tenés derechos aunque no lo sepas.",
  "areaServed": [
    {
      "@type": "City",
      "name": "Ciudad Autónoma de Buenos Aires",
      "sameAs": "https://www.wikidata.org/wiki/Q1486"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Gran Buenos Aires"
    },
    {
      "@type": "City",
      "name": "Rosario",
      "sameAs": "https://www.wikidata.org/wiki/Q34820"
    },
    {
      "@type": "City",
      "name": "Neuquén",
      "sameAs": "https://www.wikidata.org/wiki/Q170072"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Río Negro"
    }
  ],
  "knowsAbout": [
    "Accidentes laborales Argentina",
    "Reclamos ART",
    "Ley de Riesgos del Trabajo 24557",
    "Accidente in itinere",
    "Enfermedades profesionales",
    "Comisión Médica SRT",
    "Incapacidad laboral permanente",
    "Despidos e indemnizaciones",
    "Decreto 549/2025",
    "Ley 27802"
  ],
  "sameAs": [
    "https://www.instagram.com/derechosart",
    "https://www.tiktok.com/@derechosart",
    "https://www.google.com/maps/place/Derechos+ART+Abogados"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Servicios Legales",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Reclamo por accidente laboral ante la ART",
          "description": "Asesoramiento y representación en reclamos por accidentes de trabajo ante la ART, Comisión Médica y SRT."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Reclamo por accidente in itinere",
          "description": "Representación en casos de accidentes ocurridos en el trayecto entre el domicilio y el lugar de trabajo."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Enfermedades profesionales",
          "description": "Reclamos por enfermedades causadas o agravadas por condiciones laborales."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Despidos e indemnizaciones laborales",
          "description": "Asesoramiento y representación en casos de despido con y sin causa, diferencias salariales y liquidaciones."
        }
      }
    ]
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "100",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>
```

---

### 📌 BLOQUE 2 — Sede CABA y GBA
**Página donde va:** `/landings/abogados-art-caba-y-gba`

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "@id": "https://derechosart.com.ar/landings/abogados-art-caba-y-gba#location",
  "name": "DerechosART — Abogados ART CABA y GBA",
  "url": "https://derechosart.com.ar/landings/abogados-art-caba-y-gba",
  "telephone": "+5491124786144",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Ayacucho 283",
    "addressLocality": "Ciudad Autónoma de Buenos Aires",
    "addressRegion": "Buenos Aires",
    "addressCountry": "AR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -34.6061376,
    "longitude": -58.3950228
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "09:00",
    "closes": "18:00"
  },
  "areaServed": ["Ciudad Autónoma de Buenos Aires", "Gran Buenos Aires"],
  "parentOrganization": {
    "@id": "https://derechosart.com.ar/#organization"
  },
  "sameAs": [
    "https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z"
  ]
}
</script>
```

---

### 📌 BLOQUE 3 — Sede Rosario
**Página donde va:** `/landings/abogados-art-rosario`

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "@id": "https://derechosart.com.ar/landings/abogados-art-rosario#location",
  "name": "DerechosART — Abogados ART Rosario",
  "url": "https://derechosart.com.ar/landings/abogados-art-rosario",
  "telephone": "+5491124786144",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Rioja 644",
    "addressLocality": "Rosario",
    "addressRegion": "Santa Fe",
    "addressCountry": "AR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -32.9488527,
    "longitude": -60.6322239
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "09:00",
    "closes": "18:00"
  },
  "areaServed": ["Rosario", "Gran Rosario", "Santa Fe"],
  "parentOrganization": {
    "@id": "https://derechosart.com.ar/#organization"
  },
  "sameAs": [
    "https://www.google.com.ar/maps/place/DerechosART+Rosario+Abogados"
  ]
}
</script>
```

---

### 📌 BLOQUE 4 — Sede Neuquén y Río Negro
**Página donde va:** `/landings/abogados-art-neuquen-y-rio-negro`

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "@id": "https://derechosart.com.ar/landings/abogados-art-neuquen-y-rio-negro#location",
  "name": "DerechosART — Abogados ART Neuquén y Río Negro",
  "url": "https://derechosart.com.ar/landings/abogados-art-neuquen-y-rio-negro",
  "telephone": "+5491124786144",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Fotheringham 516",
    "addressLocality": "Neuquén",
    "addressRegion": "Neuquén",
    "addressCountry": "AR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -38.949361,
    "longitude": -68.0691958
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "09:00",
    "closes": "18:00"
  },
  "areaServed": ["Neuquén", "Río Negro", "Patagonia"],
  "parentOrganization": {
    "@id": "https://derechosart.com.ar/#organization"
  },
  "sameAs": [
    "https://www.google.com/maps/place/DerechosART+Neuquén+Abogados"
  ]
}
</script>
```

---

### 📌 BLOQUE 5 — Equipo (Person)
**Página donde va:** `/quienes-somos`

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Equipo de Abogadas — DerechosART",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@type": "Person",
        "name": "Romina Koñiuch",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada Laboralista — Especialista en Accidentes de Trabajo y ART",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "C.P.A.C.F. T° 124 F° 403"
          },
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "C.A.S.I. T° 53 F° 331"
          }
        ],
        "knowsAbout": [
          "Accidentes laborales",
          "Reclamos ART",
          "Comisión Médica SRT",
          "Ley de Riesgos del Trabajo",
          "Decreto 549/2025"
        ],
        "url": "https://derechosart.com.ar/quienes-somos"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@type": "Person",
        "name": "Athina B. Pereyra",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada Laboralista — Especialista en Despidos e Indemnizaciones",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "C.P.A.C.F. T° 124 F° 846"
          },
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "C.A.S.I. T° 49 F° 269"
          }
        ],
        "knowsAbout": [
          "Despidos laborales",
          "Indemnizaciones",
          "LCT Ley 20744",
          "SECLO",
          "Ley de Modernización Laboral"
        ]
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@type": "Person",
        "name": "Nair Chemes",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada — Especialista en Enfermedades Profesionales",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "Colegio de Abogados de Rosario — Libro 47 F° 365"
          },
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Federal",
            "name": "T° 404 F° 503"
          }
        ],
        "knowsAbout": [
          "Enfermedades profesionales",
          "Accidentes laborales Rosario",
          "Comisión Médica Rosario"
        ]
      }
    },
    {
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@type": "Person",
        "name": "María José Zalazar",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada Laboralista — Especialista en Accidentes Laborales Neuquén y Río Negro",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "CAYPN (Neuquén) Mat. N° 4235"
          },
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "CAAVO (Río Negro) Mat. N° 6507"
          },
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Federal",
            "name": "T° 145 F° 188"
          }
        ],
        "knowsAbout": [
          "Accidentes laborales Neuquén",
          "Reclamos ART Río Negro",
          "Comisión Médica Neuquén"
        ]
      }
    },
    {
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@type": "Person",
        "name": "Carolina Estrada",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada Laboralista — Especialista en Accidentes Laborales",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "M.P. 6792"
          }
        ],
        "knowsAbout": [
          "Accidentes laborales Salta",
          "Reclamos ART",
          "Comisión Médica Salta"
        ]
      }
    },
    {
      "@type": "ListItem",
      "position": 6,
      "item": {
        "@type": "Person",
        "name": "Maria Luz Fernandez",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada Laboralista — Especialista en Accidentes Laborales",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "M.P. 1-43441"
          }
        ],
        "knowsAbout": [
          "Accidentes laborales Córdoba",
          "Reclamos ART",
          "Comisión Médica Córdoba"
        ]
      }
    },
    {
      "@type": "ListItem",
      "position": 7,
      "item": {
        "@type": "Person",
        "name": "Josefina Rizzato",
        "honorificPrefix": "Dra.",
        "jobTitle": "Abogada Laboralista — Especialista en Accidentes Laborales",
        "worksFor": { "@id": "https://derechosart.com.ar/#organization" },
        "hasCredential": [
          {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "Matrícula Profesional",
            "name": "M.P 12.058 SCJM"
          }
        ],
        "knowsAbout": [
          "Accidentes laborales Mendoza",
          "Reclamos ART",
          "Comisión Médica Mendoza"
        ]
      }
    }
  ]
}
</script>
```

---

### 📌 BLOQUE 6 — FAQ Schema
**Página donde va:** `/faq`

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuánto tiempo tengo para reclamar un accidente a la ART?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El plazo de prescripción para reclamar la indemnización por un accidente de trabajo o enfermedad profesional es de 2 años contados desde que se determinó la incapacidad o se tuvo conocimiento de la misma. Se recomienda iniciar el trámite inmediatamente después del alta médica."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué hacer ante un accidente laboral?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Los pasos son: 1) Denunciar inmediatamente al empleador o directamente a la ART. 2) Recibir atención médica 100% cubierta por la ART. 3) Iniciar trámite ante la Comisión Médica para determinar el porcentaje de incapacidad. Es fundamental contar con patrocinio letrado desde el primer momento."
      }
    },
    {
      "@type": "Question",
      "name": "¿La ART paga el 100% de mi sueldo mientras estoy de baja médica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí. Durante el período de Incapacidad Laboral Temporaria (ILT), la ART debe abonar una prestación equivalente a tu remuneración habitual, incluyendo sueldo neto y conceptos no remunerativos. Si la ART paga menos de lo que figura en tu recibo, podés reclamar la diferencia."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué pasa si mi ART me da el alta y sigo con dolor?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Podés iniciar una 'Divergencia en el Alta' ante la Comisión Médica. Tenés un plazo muy corto (generalmente 5 días hábiles) para cuestionar el alta y solicitar que continúen las prestaciones médicas. El alta no cierra tu derecho a reclamar."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué es el accidente in itinere?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Es el accidente que ocurre en el trayecto entre tu domicilio y tu lugar de trabajo, por el camino habitual. Está cubierto por la ART igual que un accidente dentro del trabajo. Tenés derecho a atención médica completa e indemnización si quedaron secuelas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué es el Baremo y cómo afecta mi indemnización?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El Baremo es la tabla oficial de porcentajes de incapacidad que usan los médicos de la SRT para medir el daño sufrido. Unos pocos puntos de diferencia pueden representar miles de pesos en la indemnización. Un abogado especialista puede asegurar que el Baremo se aplique correctamente."
      }
    },
    {
      "@type": "Question",
      "name": "¿Puedo cambiar de abogado si no estoy conforme?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí. Podés revocar el poder en cualquier momento y designar un nuevo profesional. La sustitución de patrocinio se realiza legalmente sin que tu proceso se detenga."
      }
    },
    {
      "@type": "Question",
      "name": "¿Tengo que pagar algo por adelantado para iniciar el reclamo?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. En DerechosART trabajamos bajo la modalidad de Cuota Litis: solo cobramos honorarios si vos lográs cobrar tu indemnización. No hay adelantos ni gastos iniciales."
      }
    },
    {
      "@type": "Question",
      "name": "¿La ART puede rechazar mi accidente laboral?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, pero un rechazo no es definitivo. Puede impugnarse ante la Superintendencia de Riesgos del Trabajo (SRT) y ante la Comisión Médica Central. Muchas decisiones de rechazo terminan revirtiéndose con el asesoramiento legal correcto."
      }
    },
    {
      "@type": "Question",
      "name": "¿Tengo derechos si trabajo en negro y me accidento?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí. Si trabajabas sin registración y sufriste un accidente, el empleador es responsable directo. Podés reclamar judicialmente una indemnización mayor a la del sistema ART, ya que la falta de registración agrava la responsabilidad del empleador."
      }
    }
  ]
}
</script>
```

---

## PARTE 2 — BANCO DE PREGUNTAS PARA EL BLOG

> **Cómo usar este banco:**
> Cada pregunta es el título de un artículo de blog. El artículo debe empezar con la respuesta directa en las primeras dos líneas, y desarrollar el tema con ejemplos concretos, datos de la ley y un CTA final para consultar por WhatsApp. Priorizá las marcadas con 🔥 porque son las de mayor volumen de búsqueda en IAs hoy.

---

### 🔴 GRUPO 1 — Lo básico (alta demanda, mucha gente empieza acá)

🔥 ¿Qué hago si tuve un accidente de trabajo?
🔥 ¿Me corresponde indemnización por un accidente laboral?
🔥 ¿Qué cubre la ART después de un accidente de trabajo?
🔥 ¿Cómo denuncio un accidente laboral?
🔥 ¿Puedo reclamar si me accidenté yendo al trabajo?
🔥 ¿Qué es un accidente in itinere y qué derechos tengo?
🔥 ¿Cuánto tarda una indemnización por accidente laboral en Argentina?
🔥 ¿Necesito un abogado para reclamar a la ART?
    ¿Qué es la Comisión Médica y para qué sirve?
    ¿Cómo sé cuál es mi ART?

---

### 🔴 GRUPO 2 — El alta médica (momento crítico para el trabajador)

🔥 Me dieron el alta médica y sigo con dolor. ¿Qué puedo hacer?
🔥 ¿Qué es el alta médica con incapacidad y qué significa para mi reclamo?
🔥 Me dieron el alta sin incapacidad. ¿Pierdo el derecho a cobrar?
    ¿Puedo pedir revisión del alta médica de la ART?
    ¿Qué es la divergencia en el alta y cuánto tiempo tengo para pedirla?
    ¿El alta médica cierra el reclamo de forma definitiva?

---

### 🔴 GRUPO 3 — Rechazo de la ART (mucho volumen, mucha angustia del trabajador)

🔥 La ART rechazó mi accidente. ¿Qué hago?
🔥 ¿Qué significa que la ART rechazó el siniestro?
🔥 ¿Puedo apelar el rechazo de la ART?
    ¿Por qué la ART rechaza los accidentes de trabajo?
    ¿Qué pruebas necesito para revertir un rechazo de la ART?
    La ART dice que mi enfermedad no es laboral. ¿Qué puedo hacer?

---

### 🔴 GRUPO 4 — Indemnización y cálculo (preguntas con intención de consulta)

🔥 ¿Cuánto dinero me corresponde por un accidente laboral en Argentina?
🔥 ¿Cómo se calcula la indemnización por accidente de trabajo?
🔥 ¿Qué es el porcentaje de incapacidad y cómo afecta mi indemnización?
🔥 ¿Qué es el Baremo en los accidentes de trabajo?
    ¿Qué es la Incapacidad Laboral Permanente Parcial (ILPP)?
    ¿Qué es la Incapacidad Laboral Permanente Total (ILPT)?
    ¿Qué diferencia hay entre cobrar por ART y demandar civilmente?
    ¿Puedo reclamar por daño moral además de la indemnización de la ART?
    ¿Cómo afecta mi sueldo al monto de la indemnización?
    ¿Cuánto tiempo después del alta tengo para iniciar el trámite de incapacidad?

---

### 🔴 GRUPO 5 — Situaciones especiales (nichos con alta demanda)

🔥 ¿Tengo derechos si trabajo en negro y me accidento?
🔥 ¿Qué pasa si me accidento siendo empleado doméstico?
🔥 ¿Puedo reclamar si sufro una enfermedad por el trabajo (lumbago, tendinitis, hipoacusia)?
🔥 ¿Qué pasa si me accidenté hace más de un año? ¿Prescribió el reclamo?
    ¿Qué pasa si me accidento durante el período de prueba?
    ¿Puede el empleador despedirme mientras estoy de baja por la ART?
    ¿Qué pasa si soy monotributista y tengo un accidente de trabajo?
    ¿Los trabajadores rurales tienen cobertura de ART?
    ¿Los repartidores de aplicaciones (Rappi, PedidosYa) tienen cobertura laboral?
    ¿Qué pasa si tengo un accidente laboral y además me despiden?

---

### 🔴 GRUPO 6 — El proceso legal (preguntas de alguien que ya está en trámite)

🔥 ¿Qué pasa si la ART no me llama después del alta?
🔥 ¿Qué es la Cuota Litis y cuánto cobra el abogado en accidentes laborales?
🔥 ¿Puedo cambiar de abogado si no estoy conforme?
    ¿Qué es el SECLO y para qué sirve en accidentes de trabajo?
    ¿Cuándo conviene ir a juicio y cuándo aceptar el acuerdo de la Comisión Médica?
    ¿Qué documentación necesito juntar desde el primer día del accidente?
    ¿Qué es la audiencia en la Comisión Médica y cómo me preparo?
    ¿Puedo ir solo a la Comisión Médica sin un abogado?
    ¿Qué pasa si firmé un acuerdo y después me di cuenta que cobré poco?

---

### 🔴 GRUPO 7 — Por ciudad/zona (SEO geográfico — muy importante para GEO)

🔥 Accidente laboral en Buenos Aires — qué hacer y cómo reclamar
🔥 Abogados para accidentes de trabajo en CABA — guía 2026
🔥 Accidente laboral en Rosario — derechos del trabajador
🔥 Accidente laboral en Neuquén — cómo reclamar a la ART
🔥 Accidente in itinere en el GBA — qué hacer paso a paso
    Comisión Médica en Buenos Aires — cómo funciona y dónde queda
    Comisión Médica en Rosario — guía completa para el trabajador
    Comisión Médica en Neuquén (CM 9) — qué esperar y cómo ir preparado
    Abogados laboralistas en Río Negro — accidentes y reclamos ART

---

### 🔴 GRUPO 8 — Comparativas y desconfianza (preguntas de alguien que duda)

🔥 ¿La ART siempre te paga lo que corresponde?
🔥 ¿Qué es un "carancho" en accidentes laborales y cómo evitarlos?
🔥 ¿Cómo sé si cobré poco por mi accidente?
🔥 ¿Puedo reclamar más si ya cobré por la ART?
    ¿Qué diferencia hay entre la ART y una demanda laboral?
    ¿Por qué el abogado de la empresa no me conviene para mi reclamo de ART?
    Me llamaron abogados que no conozco después de mi accidente. ¿Es normal?

---

### 🔴 GRUPO 9 — Legislación actualizada (posicionamiento de autoridad)

🔥 ¿Qué cambió en los reclamos laborales con el Decreto 549/2025?
🔥 ¿Qué dice la Ley 27802 sobre indemnizaciones laborales?
🔥 ¿Cómo afecta la Ley de Modernización Laboral a los trabajadores accidentados?
    ¿Qué es la Ley 24557 y cómo me protege si me accidento en el trabajo?
    ¿Qué dice la LCT (Ley 20744) sobre accidentes laborales?
    ¿Cómo se actualiza la indemnización por inflación en Argentina?
    ¿Qué es el RIPTE y para qué sirve en un reclamo de ART?

---

## PARTE 3 — CHECKLIST DE IMPLEMENTACIÓN GEO

Usá esta lista para llevar el control de lo que ya está hecho:

### Semana 1-2
- [ ] Pegar Bloque 1 (Organización) en el `<head>` de la Home
- [ ] Pegar Bloque 6 (FAQ Schema) en `/faq`
- [ ] Pegar Bloque 5 (Equipo) en `/quienes-somos`
- [ ] Registrar DerechosART en **Lawzana.com** (gratis — es la fuente que más citan las IAs para abogados AR)
- [ ] Verificar que robots.txt no bloquee a GPTBot ni a Google-Extended

### Semana 3-4
- [ ] Pegar Bloques 2, 3 y 4 (sedes) en sus páginas de landing correspondientes
- [ ] Publicar primer artículo nuevo del banco de preguntas (recomendado: "¿Qué hago si me dieron el alta y sigo con dolor?")
- [ ] Registrar en **Justia.com** (directorio legal internacional indexado por IAs)

### Mes 2
- [ ] Publicar 2 artículos del Grupo 7 (por ciudad): "Accidente laboral en Rosario" + "Accidente laboral en Neuquén"
- [ ] Convertir los mejores carousels de Instagram en notas de blog
- [ ] Agregar el perfil de LinkedIn de Romina Koñiuch y linkearlo en el Schema `Person`

### Mes 3
- [ ] Tener al menos 8 artículos de blog publicados
- [ ] Comenzar publicaciones en YouTube (aunque sea voz + imagen fija)
- [ ] Hacer prueba en ChatGPT: preguntar "abogados accidente laboral Buenos Aires" y evaluar si aparece DerechosART

---

*Generado para DerechosART — derechosart.com.ar*
*Todos los Schema deben validarse en https://search.google.com/test/rich-results antes de publicar*
