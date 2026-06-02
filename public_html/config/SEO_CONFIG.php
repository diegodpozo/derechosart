<?php
/**
 * CONFIGURACION CENTRALIZADA DE SEO
 * Mantiene coherencia de metadatos, títulos y descripciones en todo el sitio
 */

define('SITE_NAME', 'DerechosART');
define('SITE_URL', 'https://derechosart.com.ar/');
define('SITE_LOGO', 'https://derechosart.com.ar/publico/img/Logo_negro-DerechosART.webp');
define('SITE_OG_IMAGE', 'https://derechosart.com.ar/publico/img/derechosart-og-image.jpg');
define('SITE_PHONE', '+5491124786144');
define('SITE_EMAIL', 'consultas@derechosart.com.ar');

// OFICINAS (PARA SCHEMA LOCALBUSINESS)
$OFFICES = [
    [
        'name' => 'Oficina CABA',
        'street' => 'Ayacucho 283',
        'city' => 'Buenos Aires',
        'region' => 'CABA',
        'phone' => '+5491124786144',
        'coordinates' => ['-34.6121', '-58.3789']
    ],
    [
        'name' => 'Oficina Rosario',
        'street' => 'Rioja 644',
        'city' => 'Rosario',
        'region' => 'Santa Fe',
        'phone' => '+5493412255968',
        'coordinates' => ['-32.9452', '-60.6523']
    ],
    [
        'name' => 'Oficina Neuquén',
        'street' => 'Independencia 258',
        'city' => 'Neuquén',
        'region' => 'Neuquén',
        'phone' => '+5492994294696',
        'coordinates' => ['-38.9516', '-68.0591']
    ]
];

// CONFIGURACION DE PAGINAS - METADATOS
$SEO_PAGES = [
    'inicio' => [
        'titulo' => 'Abogados Especialistas en ART – ¿Accidente de Trabajo? Consultá Gratis',
        'descripcion' => '¿Tuviste un accidente laboral? Reclamá la indemnización que te corresponde. Abogados expertos en ART y SRT. Consultas gratuitas en CABA, Rosario, Neuquén y GBA. ¡No firmes nada sin asesorarte!',
        'keywords' => 'abogados accidentes de trabajo, reclamos art, ART argentina, estudio juridico laboral, especialistas en ART'
    ],
    'quienes-somos' => [
        'titulo' => 'Nuestro Equipo de Abogadas – Especialistas en Reclamos de ART',
        'descripcion' => 'Conocé a las expertas de DerechosART. Más de 8 años defendiendo a trabajadores accidentados en reclamos ante la SRT y juicios contra las ART. Transparencia y resultados.',
        'keywords' => 'abogadas especialistas ART, equipo juridico laboral, expertos en reclamos SRT'
    ],
    'accidentes-de-trabajo' => [
        'titulo' => 'Accidentes de Trabajo – Reclamá tu Indemnización a la ART con Expertos',
        'descripcion' => 'Si sufriste un accidente laboral, tenés derecho a una indemnización. Te ayudamos con la denuncia, el alta médica y el cálculo de incapacidad. Consulta 100% gratuita.',
        'keywords' => 'abogado accidente de trabajo, reclamo ART, comisiones medicas, incapacidad laboral'
    ],
    'despidos' => [
        'titulo' => 'Abogados de Despidos – Maximizá tu Indemnización por Despido',
        'descripcion' => '¿Te despidieron? No aceptes menos de lo que marca la ley. Calculamos tu liquidación y defendemos tus derechos en despidos sin causa o mal registrados. Consultá ahora.',
        'keywords' => 'abogados despidos, indemnización despido, despido injustificado, indemnización laboral'
    ],
    'enfermedades-profesionales' => [
        'titulo' => 'Enfermedades Profesionales – Tu Salud es tu Derecho | Reclamos ART',
        'descripcion' => 'Hernias de disco, túnel carpiano, problemas de audición y más. Si tu trabajo te enfermó, la ART debe indemnizarte. Asesoramiento legal especializado sin costo inicial.',
        'keywords' => 'enfermedades profesionales, enfermedades ocupacionales, reclamo enfermedad del trabajo'
    ],
    'calculadora-accidentes' => [
        'titulo' => 'Calculadora ART 2026 – Calculá tu Indemnización por Accidente',
        'descripcion' => '¿Cuánto paga la ART por tu lesión? Usá nuestra calculadora actualizada con el Baremo SRT. Estimá tu indemnización en 1 minuto de forma gratuita y online.',
        'keywords' => 'calculadora indemnización ART, calculo incapacidad laboral, baremo SRT'
    ],
    'calculadora-despidos' => [
        'titulo' => 'Calculadora de Despidos – ¿Cuánto te corresponde por liquidación?',
        'descripcion' => 'Cálculo exacto de indemnización por despido, preaviso y vacaciones. Evitá errores en tu liquidación final con nuestra herramienta legal gratuita.',
        'keywords' => 'calculadora despido, calculo indemnización despido, liquidacion despido'
    ],
    'comisiones-medicas' => [
        'titulo' => 'Comisiones Médicas SRT – Cómo Reclamar tu Incapacidad a la ART',
        'descripcion' => '¿Disconforme con el dictamen de la SRT? Te ayudamos en el trámite ante la Comisión Médica para asegurar tu máxima indemnización. Expertos en determinación de incapacidad y apelaciones.',
        'keywords' => 'comisiones medicas, SRT, superintendencia riesgos del trabajo, reclamo comision medica, apelar dictamen SRT, porcentaje incapacidad'
    ],
    'abogados-art-rosario' => [
        'titulo' => 'Abogados de ART en Rosario | Accidentes y Despidos 2026',
        'descripcion' => 'Especialistas en accidentes de trabajo y despidos en Rosario. Reclamá tu indemnización máxima ante la ART. Consulta gratuita en nuestra oficina de Rosario.',
        'keywords' => 'abogados art rosario, abogados laboralistas rosario, accidente de trabajo rosario, indemnizacion art rosario'
    ],
    'abogados-art-neuquen' => [
        'titulo' => 'Abogados de ART en Neuquén y Río Negro | Consultas 2026',
        'descripcion' => 'Asesoramiento legal para accidentes laborales en Neuquén y Cipolletti. Maximizá tu indemnización de ART con expertos. Consultá gratis hoy.',
        'keywords' => 'abogados art neuquen, abogados art cipolletti, accidente de trabajo neuquen, abogado laboralista neuquen'
    ],
    'que-hacer' => [
        'titulo' => 'Guía: Qué hacer ante un Accidente – Pasos para cobrar la ART',
        'descripcion' => 'Primeros pasos tras un accidente laboral: desde la denuncia hasta la atención médica. Evitá errores comunes que pueden perjudicar tu reclamo futuro.',
        'keywords' => 'que hacer accidente trabajo, denuncia ART, procedimiento accidente laboral'
    ],
    'cual-es-mi-art' => [
        'titulo' => 'Consultar mi ART – Averiguá tu Aseguradora con CUIL (Gratis)',
        'descripcion' => '¿No sabés qué ART tenés? Consultá aquí cómo verificar tu aseguradora y encontrá todos los números de emergencia actualizados para hacer tu denuncia.',
        'keywords' => 'como saber mi ART, consultar ART por CUIL, aseguradoras de riesgos del trabajo'
    ],
    'faq' => [
        'titulo' => 'Dudas Frecuentes sobre ART – Todo lo que necesitás saber',
        'descripcion' => 'Respondemos tus preguntas sobre accidentes, enfermedades, plazos de reclamo y pagos de la ART. Información clara y legal para el trabajador argentino.',
        'keywords' => 'preguntas frecuentes ART, dudas indemnización, consultas accidente trabajo'
    ],
    'contacto' => [
        'titulo' => 'Consulta Legal Gratuita – Hablá con un Abogado de ART ahora',
        'descripcion' => 'Sacate las dudas hoy mismo. Envianos tu consulta por WhatsApp o formulario. Analizamos tu caso sin cargo en todo el país. Respuesta inmediata.',
        'keywords' => 'contacto abogados ART, consulta gratuita, contactar estudio juridico'
    ],
    'zonas-atencion' => [
        'titulo' => 'Abogados ART cerca tuyo – Cobertura en CABA, GBA y Provincias',
        'descripcion' => 'Brindamos asesoramiento en Buenos Aires, Rosario, Neuquén, Río Negro y más de 200 localidades. Encontrá tu oficina de DerechosART más cercana.',
        'keywords' => 'zonas atencion, cobertura servicios, abogados por provincia'
    ],
    'abogados-art-despidos' => [
        'titulo' => 'Abogados de Despidos en CABA y GBA | Calculá tu Indemnización 2026',
        'descripcion' => '¿Te despidieron en CABA o GBA? Defendemos tus derechos para que cobres la indemnización máxima por despido injustificado. Consulta gratuita y personalizada.',
        'keywords' => 'abogados despidos caba, abogados despidos gba, indemnizacion por despido, calcular indemnizacion despido, abogado laboralista despidos'
    ],
    'abogados-art-accidentes' => [
        'titulo' => 'Abogados de ART en CABA y GBA | Reclamá tu Indemnización 2026',
        'descripcion' => '¿Sufriste un accidente laboral en CABA o GBA? Te ayudamos a cobrar la máxima indemnización de la ART. Expertos en SRT y accidentes de trabajo. Consultá gratis.',
        'keywords' => 'abogados art caba, abogados art gba, accidente de trabajo caba, indemnizacion art, abogado laboralista accidentes'
    ]
];

/**
 * FUNCTION: getSEOData
 * Retorna los metadatos de una pagina segun su slug
 */
function getSEOData($page_slug) {
    global $SEO_PAGES;
    return isset($SEO_PAGES[$page_slug]) ? $SEO_PAGES[$page_slug] : null;
}

/**
 * FUNCTION: generateBreadcrumbSchema
 * Genera el JSON-LD para breadcrumbs
 */
function generateBreadcrumbSchema($canonical_url) {
    $base_url = 'https://derechosart.com.ar/';
    $breadcrumbs = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Inicio',
            'item' => $base_url
        ]
    ];
    
    // Si no es la homepage, agregar pagina actual
    if ($canonical_url !== $base_url && $canonical_url !== $base_url . 'inicio') {
        $name = ucwords(str_replace('-', ' ', basename($canonical_url)));
        if ($name === 'Abogados Art Despidos') $name = 'Abogados Despidos CABA y GBA';
        
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $name,
            'item' => $canonical_url
        ];
    }
    
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumbs
    ]);
}

/**
 * FUNCTION: generateOrganizationSchema
 * Genera el JSON-LD para Organization con multiples sedes
 */
function generateOrganizationSchema() {
    global $OFFICES;
    
    $address_array = array_map(function($office) {
        return [
            '@type' => 'PostalAddress',
            'streetAddress' => $office['street'],
            'addressLocality' => $office['city'],
            'addressRegion' => $office['region'],
            'addressCountry' => 'AR',
            'telephone' => $office['phone']
        ];
    }, $OFFICES);
    
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => SITE_NAME,
        'description' => 'Estudio Jurídico especializado en accidentes laborales, despidos y enfermedades profesionales en Argentina. Expertos en reclamos de ART y trámites ante la SRT.',
        'url' => SITE_URL,
        'logo' => SITE_LOGO,
        'image' => SITE_OG_IMAGE,
        'telephone' => SITE_PHONE,
        'email' => SITE_EMAIL,
        'address' => $address_array,
        'priceRange' => '$$',
        'openingHours' => 'Mo-Fr 09:00-20:00',
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Buenos Aires'],
            ['@type' => 'City', 'name' => 'Rosario'],
            ['@type' => 'City', 'name' => 'Neuquén'],
            ['@type' => 'City', 'name' => 'Cipolletti'],
            ['@type' => 'State', 'name' => 'Buenos Aires'],
            ['@type' => 'State', 'name' => 'Santa Fe'],
            ['@type' => 'State', 'name' => 'Neuquén'],
            ['@type' => 'State', 'name' => 'Río Negro']
        ],
        'sameAs' => [
            'https://www.instagram.com/derechosart/',
            'https://www.tiktok.com/@derechosart',
            'https://www.facebook.com/Derechosart',
            'https://www.youtube.com/@DerechosART'
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '156'
        ]
    ]);
}

/**
 * FUNCTION: generateFAQSchema
 * Genera el JSON-LD para FAQ (Accidentes/ART)
 */
function generateFAQSchema() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tiempo tengo para reclamar un accidente a la ART?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El plazo de prescripción para reclamar la indemnización por un accidente de trabajo o enfermedad profesional es de 2 años contados a partir de la fecha en que se determinó la incapacidad o se tuvo conocimiento de la misma.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué hacer ante un accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Debés denunciar el hecho a tu empleador o a la ART inmediatamente, recibir las prestaciones médicas hasta el alta y luego iniciar el reclamo por la indemnización correspondiente según el grado de incapacidad ante la SRT.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿La ART paga el 100% de mi sueldo mientras estoy de baja médica?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Durante el período de Incapacidad Laboral Temporaria (ILT), la ART debe abonar una prestación equivalente a tu remuneración habitual, incluyendo el sueldo neto y conceptos no remunerativos.'
                ]
            ]
        ]
    ]);
}

/**
 * FUNCTION: generateFAQSchemaDespidos
 * Genera el JSON-LD para FAQ específico de Despidos
 */
function generateFAQSchemaDespidos() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué rubros incluye la indemnización por despido?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'La indemnización por despido sin causa incluye: antigüedad (1 mes de sueldo por año trabajado), preaviso, integración del mes de despido, vacaciones no gozadas y SAC proporcional.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué hacer si me envían un telegrama de despido?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No firmes nada sin asesorarte. Debés consultar con un abogado laboralista para verificar que la causa (si la hay) sea real y que la liquidación final que te ofrecen sea la correcta.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tiempo tengo para reclamar por un despido?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El plazo para iniciar un reclamo judicial por despido o diferencias salariales es de 2 años desde que finalizó la relación laboral.'
                ]
            ]
        ]
    ]);
}

/**
 * FUNCTION: generateLocalBusinessSchema
 * Genera el JSON-LD para la sede física de CABA
 */
function generateLocalBusinessSchema() {
    global $OFFICES;
    $caba = $OFFICES[0]; // Sede CABA
    
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'DerechosART - Abogados Laboralistas CABA',
        'image' => SITE_OG_IMAGE,
        '@id' => SITE_URL . '#localbusiness',
        'url' => SITE_URL,
        'telephone' => $caba['phone'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $caba['street'],
            'addressLocality' => $caba['city'],
            'addressRegion' => $caba['region'],
            'addressCountry' => 'AR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $caba['coordinates'][0],
            'longitude' => $caba['coordinates'][1]
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '20:00'
            ]
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '156'
        ]
    ]);
}

/**
 * Generar Schema LocalBusiness para la sede Rosario
 */
function generateLocalBusinessSchemaRosario() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'DerechosART Rosario - Abogados Accidentes de Trabajo',
        'description' => 'Estudio Jurídico especialista en accidentes laborales y enfermedades profesionales en Rosario y Santa Fe.',
        'url' => SITE_URL . 'landings/abogados-art-rosario',
        'image' => SITE_URL . 'publico/img/derechosart-og-image.jpg',
        'telephone' => '+5493412255968',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Rioja 644',
            'addressLocality' => 'Rosario',
            'addressRegion' => 'Santa Fe',
            'postalCode' => '2000',
            'addressCountry' => 'AR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '-32.9477033',
            'longitude' => '-60.6385108'
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '20:00'
            ]
        ]
    ]);
}

/**
 * Generar Schema LocalBusiness para la sede Neuquén
 */
function generateLocalBusinessSchemaNeuquen() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'DerechosART Neuquén - Abogados ART y Despidos',
        'description' => 'Asesoramiento legal por accidentes de trabajo en Neuquén, Cipolletti y Alto Valle.',
        'url' => SITE_URL . 'landings/abogados-art-neuquen',
        'image' => SITE_URL . 'publico/img/derechosart-og-image.jpg',
        'telephone' => '+5492994294696',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Independencia 258',
            'addressLocality' => 'Neuquén',
            'addressRegion' => 'Neuquén',
            'postalCode' => '8300',
            'addressCountry' => 'AR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '-38.9517173',
            'longitude' => '-68.0591523'
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '20:00'
            ]
        ]
    ]);
}
?>
