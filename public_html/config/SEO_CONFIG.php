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
        'postal_code' => '1425',
        'phone' => '+5491124786144',
        'coordinates' => ['-34.6121', '-58.3789']
    ],
    [
        'name' => 'Oficina Rosario',
        'street' => 'Rioja 644',
        'city' => 'Rosario',
        'region' => 'Santa Fe',
        'postal_code' => '2000',
        'phone' => '+5493412255968',
        'coordinates' => ['-32.9452', '-60.6523']
    ],
    [
        'name' => 'Oficina Neuquén',
        'street' => 'Independencia 258',
        'city' => 'Neuquén',
        'region' => 'Neuquén',
        'postal_code' => '8300',
        'phone' => '+5492994294696',
        'coordinates' => ['-38.9516', '-68.0591']
    ]
];

// CONFIGURACION DE PAGINAS - METADATOS
$SEO_PAGES = [
    'inicio' => [
        'titulo' => 'Abogados Especialistas en Accidentes de Trabajo y Despidos',
        'descripcion' => '¿Tuviste un accidente laboral o te despidieron? Reclamá tu indemnización con abogados expertos en ART y derecho laboral. Consulta gratuita en todo el país.',
        'keywords' => 'abogados accidentes de trabajo, reclamos art, abogados despidos, indemnización laboral argentina, especialistas en ART'
    ],
    'quienes-somos' => [
        'titulo' => 'Nuestro Equipo | Abogadas Especialistas en Reclamos de ART',
        'descripcion' => 'Conocé a las expertas de DerechosART. Más de 8 años defendiendo trabajadores en reclamos ante la SRT y juicios contra las ART. Transparencia y resultados.',
        'keywords' => 'abogadas especialistas ART, equipo jurídico laboral, expertos en reclamos SRT'
    ],
    'accidentes-de-trabajo' => [
        'titulo' => 'Accidentes de Trabajo | Reclamá tu Indemnización a la ART',
        'descripcion' => 'Si sufriste un accidente laboral, tenés derecho a una indemnización. Te ayudamos con la denuncia, alta médica y cálculo de incapacidad. Consulta gratuita.',
        'keywords' => 'abogado accidente de trabajo, reclamo ART, comisiones médicas, incapacidad laboral'
    ],
    'despidos' => [
        'titulo' => 'Abogados de Despidos | Maximizá tu Indemnización Laboral',
        'descripcion' => '¿Te despidieron? No aceptes menos de lo que marca la ley. Calculamos tu liquidación y defendemos tus derechos en despidos injustificados. Consultá ahora.',
        'keywords' => 'abogados despidos, indemnización despido, despido injustificado, indemnización laboral'
    ],
    'enfermedades-profesionales' => [
        'titulo' => 'Enfermedades Profesionales | Reclamos y Derechos ART',
        'descripcion' => 'Hernias, túnel carpiano y más. Si tu trabajo te enfermó, la ART debe indemnizarte. Asesoramiento legal especializado sin costo inicial. ¡Informate aquí!',
        'keywords' => 'enfermedades profesionales, enfermedades ocupacionales, reclamo enfermedad del trabajo'
    ],
    'calculadora-accidentes' => [
        'titulo' => 'Calculadora ART 2026 | Calculá tu Indemnización por Accidente',
        'descripcion' => '¿Cuánto paga la ART por tu lesión? Estimá tu indemnización en 1 minuto con nuestra calculadora actualizada según el Baremo SRT. ¡Gratis y online!',
        'keywords' => 'calculadora indemnización ART, cálculo incapacidad laboral, baremo SRT'
    ],
    'calculadora-despidos' => [
        'titulo' => 'Calculadora de Despidos | ¿Cuánto te corresponde por liquidación?',
        'descripcion' => 'Cálculo exacto de indemnización por despido, preaviso y vacaciones. Evitá errores en tu liquidación final con nuestra herramienta legal gratuita.',
        'keywords' => 'calculadora despido, cálculo indemnización despido, liquidación despido'
    ],
    'comisiones-medicas' => [
        'titulo' => 'Comisiones Médicas SRT | Cómo Reclamar tu Incapacidad a la ART',
        'descripcion' => '¿Disconforme con el dictamen SRT? Te ayudamos ante la Comisión Médica para asegurar tu máxima indemnización. Expertos en determinación de incapacidad.',
        'keywords' => 'comisiones médicas, SRT, superintendencia riesgos del trabajo, reclamo comisión médica, apelar dictamen SRT, porcentaje incapacidad'
    ],
    'abogados-art-rosario' => [
        'titulo' => 'Abogados de ART en Rosario | Accidentes y Despidos 2026',
        'descripcion' => 'Especialistas en accidentes de trabajo y despidos en Rosario. Reclamá tu indemnización máxima ante la ART. Consulta gratuita en nuestra oficina local.',
        'keywords' => 'abogados art rosario, abogados laboralistas rosario, accidente de trabajo rosario, indemnización art rosario'
    ],
    'abogados-art-neuquen' => [
        'titulo' => 'Abogados de ART en Neuquén y Río Negro | Consultas 2026',
        'descripcion' => 'Asesoramiento legal para accidentes laborales en Neuquén y Cipolletti. Maximizá tu indemnización de ART con expertos. Consultá gratis hoy mismo.',
        'keywords' => 'abogados art neuquén, abogados art cipolletti, accidente de trabajo neuquén, abogado laboralista neuquén'
    ],
    'que-hacer' => [
        'titulo' => 'Qué hacer ante un Accidente | Guía para cobrar la ART',
        'descripcion' => 'Pasos clave tras un accidente laboral: desde la denuncia hasta la atención médica. Evitá errores que pueden perjudicar tu reclamo futuro.',
        'keywords' => 'qué hacer accidente trabajo, denuncia ART, procedimiento accidente laboral'
    ],
    'cual-es-mi-art' => [
        'titulo' => 'Consultar mi ART | Averiguá tu Aseguradora con CUIL (Gratis)',
        'descripcion' => '¿No sabés qué ART tenés? Consultá aquí cómo verificar tu aseguradora y encontrá todos los números de emergencia actualizados para denuncias.',
        'keywords' => 'cómo saber mi ART, consultar ART por CUIL, aseguradoras de riesgos del trabajo'
    ],
    'faq' => [
        'titulo' => 'Dudas Frecuentes sobre ART | Información Legal para el Trabajador',
        'descripcion' => 'Respondemos tus preguntas sobre accidentes, enfermedades, plazos y pagos de la ART. Información clara y profesional para trabajadores argentinos.',
        'keywords' => 'preguntas frecuentes ART, dudas indemnización, consultas accidente trabajo'
    ],
    'contacto' => [
        'titulo' => 'Consulta Legal Gratuita | Hablá con un Abogado de ART ahora',
        'descripcion' => 'Sacate las dudas hoy mismo. Envianos tu consulta por WhatsApp o formulario. Analizamos tu caso sin cargo en todo el país. Respuesta inmediata.',
        'keywords' => 'contacto abogados ART, consulta gratuita, contactar estudio jurídico'
    ],
    'zonas-atencion' => [
        'titulo' => 'Abogados ART cerca tuyo | Cobertura en CABA, GBA y Provincias',
        'descripcion' => 'Brindamos asesoramiento en Buenos Aires, Rosario, Neuquén y más de 200 localidades. Encontrá tu oficina de DerechosART más cercana.',
        'keywords' => 'zonas atención, cobertura servicios, abogados por provincia'
    ],
    'abogados-art-despidos' => [
        'titulo' => 'Abogados de Despidos en CABA y GBA | Liquidación 2026',
        'descripcion' => '¿Te despidieron en CABA o GBA? Defendemos tus derechos para que cobres la indemnización máxima por despido injustificado. Consulta gratuita.',
        'keywords' => 'abogados despidos caba, abogados despidos gba, indemnización por despido, calcular indemnización despido, abogado laboralista despidos'
    ],
    'abogados-art-accidentes' => [
        'titulo' => 'Abogados de ART en CABA y GBA | Reclamá tu Indemnización',
        'descripcion' => '¿Sufriste un accidente laboral en CABA o GBA? Te ayudamos a cobrar la máxima indemnización de la ART. Expertos en SRT. Consultá gratis.',
        'keywords' => 'abogados art caba, abogados art gba, accidente de trabajo caba, indemnización art, abogado laboralista accidentes'
    ],
    'blog-accidente-laboral' => [
        'titulo' => 'Accidente laboral: Qué hacer y cómo reclamar | Guía 2026',
        'descripcion' => 'Si sufriste un accidente laboral o in itinere, esta guía te explica cómo denunciarlo, qué cubre el tratamiento y cómo cobrar tu indemnización.',
        'keywords' => 'accidente laboral qué hacer, accidente in itinere indemnización, ART, riesgos del trabajo, SRT, Comisión Médica, incapacidad laboral'
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
 * Genera el JSON-LD para breadcrumbs (CORREGIDO)
 */
function generateBreadcrumbSchema($canonical_url) {
    $base_url = 'https://derechosart.com.ar/';
    
    // Sanitizar canonical_url
    $canonical_url = filter_var($canonical_url, FILTER_VALIDATE_URL);
    if (!$canonical_url) {
        $canonical_url = $base_url; // Fallback si la URL es inválida
    }
    
    $breadcrumbs = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Inicio',
            'item' => $base_url
        ]
    ];
    
    // Si no es la homepage, agregar página actual
    if ($canonical_url !== $base_url && $canonical_url !== $base_url . 'inicio') {
        $name = ucwords(str_replace('-', ' ', basename(rtrim($canonical_url, '/'))));
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
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
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
            'postalCode' => $office['postal_code'],
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
            'postalCode' => $caba['postal_code'],
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
