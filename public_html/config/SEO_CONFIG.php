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
    ],
    [
        'name' => 'Oficina Salta',
        'street' => 'Gral. Martin Güemes 1548',
        'city' => 'Salta',
        'region' => 'Salta',
        'postal_code' => 'A4400',
        'phone' => '+5491124786144',
        'coordinates' => ['-24.7797', '-65.4058']
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
    'abogados-art-salta' => [
        'titulo' => 'Abogados de ART en Salta | Accidentes de Trabajo 2026',
        'descripcion' => 'Especialistas en accidentes de trabajo y reclamos de ART en Salta. Reclamá tu indemnización máxima. Asesoramiento gratuito en nuestra oficina local.',
        'keywords' => 'abogados art salta, abogados laboralistas salta, accidente de trabajo salta, indemnización art salta'
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
 * Genera el JSON-LD para breadcrumbs (CORREGIDO - Solo en páginas internas)
 */
function generateBreadcrumbSchema($canonical_url) {
    $base_url = 'https://derechosart.com.ar/';
    
    // SI ES UNA URL RELATIVA, CONVERTIRLA EN ABSOLUTA PARA LA LOGICA SIGUIENTE
    if (strpos($canonical_url, 'http') !== 0) {
        $canonical_url = rtrim($base_url, '/') . '/' . ltrim($canonical_url, '/');
    }
    
    // SANITIZAR canonical_url
    $canonical_url = filter_var($canonical_url, FILTER_VALIDATE_URL);
    if (!$canonical_url) {
        $canonical_url = $base_url;
    }
    
    // NORMALIZAR PARA COMPARACION (QUITAR SLASH FINAL)
    $canonical_norm = rtrim($canonical_url, '/');
    $base_norm = rtrim($base_url, '/');
    
    // NO GENERAR BREADCRUMB EN HOMEPAGE (GSC NO ACEPTA LISTAS VACIAS)
    if ($canonical_norm === $base_norm || $canonical_norm === $base_norm . '/inicio' || empty($canonical_url)) {
        return null;
    }
    
    // DETERMINAR EL NOMBRE DE LA PAGINA ACTUAL
    // PRIORIZAR CONSTANTES DE LANDINGS DINAMICAS SI EXISTEN
    if (defined('ZONA_NOMBRE_BUSQUEDA')) {
        $tipo = (defined('ZONA_TIPO') && ZONA_TIPO === 'despidos') ? 'Despidos' : 'Accidentes';
        $name = "Abogados $tipo en " . ZONA_NOMBRE_BUSQUEDA;
    } else {
        $slug = basename($canonical_norm);
        $name = ucwords(str_replace('-', ' ', $slug));
        
        // AJUSTES ESPECIALES DE NOMBRES PARA PAGINAS ESTATICAS Y BLOG
        if ($name === 'Abogados Art Despidos') $name = 'Abogados Despidos CABA y GBA';
        if ($name === 'Abogados Art Accidentes') $name = 'Abogados Accidentes CABA y GBA';
        if ($name === 'Abogados Art Rosario') $name = 'Abogados ART Rosario';
        if ($name === 'Abogados Art Neuquen') $name = 'Abogados ART Neuquén';
        if ($name === 'Accidente Laboral Guia 2026') $name = 'Guía Accidentes de Trabajo 2026';
    }
    
    $breadcrumbs = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Inicio',
            'item' => $base_url
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $name,
            'item' => $canonical_url
        ]
    ];
    
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
    
    // VARIABLES EN PASCALCASE EN ESPANOL Y SIN ACENTOS PARA CUMPLIR NORMAS DEL PROYECTO
    // FUNDADORES PARA E-E-A-T
    $FundadoresEstudio = [
        [
            '@type' => 'Person',
            'name' => 'Dra. Romina Koñiuch'
        ],
        [
            '@type' => 'Person',
            'name' => 'Dra. Athina B. Pereyra'
        ]
    ];

    // MIEMBROS DEL EQUIPO CON SUS TITULOS Y MATRICULAS
    $MiembrosEquipo = [
        [
            '@type' => 'Person',
            'name' => 'Dra. Romina Koñiuch',
            'jobTitle' => 'Socia Fundadora - Especialista en Accidentes Laborales y ART'
        ],
        [
            '@type' => 'Person',
            'name' => 'Dra. Athina B. Pereyra',
            'jobTitle' => 'Socia Fundadora - Especialista en Despidos'
        ],
        [
            '@type' => 'Person',
            'name' => 'Dra. Nair Chemes',
            'jobTitle' => 'Abogada Asociada - Experta en Enfermedades Profesionales'
        ],
        [
            '@type' => 'Person',
            'name' => 'Dra. María José Zalazar',
            'jobTitle' => 'Abogada Asociada - Especialista en Accidentes Laborales'
        ],
        [
            '@type' => 'Person',
            'name' => 'Dra. Carolina Estrada',
            'jobTitle' => 'Abogada Asociada - Especialista en Accidentes Laborales (Sede Salta)'
        ]
    ];

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
        'founder' => $FundadoresEstudio,
        'employee' => $MiembrosEquipo,
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
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
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
                    'text' => 'El plazo de prescripción para reclamar la indemnización por un accidente de trabajo o enfermedad profesional es de 2 años contados a partir de la fecha en que se determinó la incapacidad o se tuvo conocimiento de la misma. Sin embargo, se recomienda iniciar el trámite inmediatamente después del alta médica para evitar demoras administrativas.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué hacer ante un accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Los pasos fundamentales tras un accidente son: 1) Denuncia inmediata al empleador o a la ART. 2) Recibir la atención médica integral cubierta al 100% por la ART. 3) Iniciar el trámite ante la Comisión Médica (SRT) para fijar el porcentaje de incapacidad y cobrar la indemnización correspondiente. Se recomienda contar con patrocinio letrado desde el inicio.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿La ART paga el 100% de mi sueldo mientras estoy de baja médica?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Durante el período de Incapacidad Laboral Temporaria (ILT), la ART debe abonar una prestación equivalente a tu remuneración habitual, incluyendo el sueldo neto y los conceptos no remunerativos. Si la ART paga menos de lo que figura en tu recibo de sueldo, podés reclamar la diferencia.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué pasa si mi ART me da el alta y sigo con dolor?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Si recibís el alta médica pero continuás con secuelas o dolor, podés iniciar una "Divergencia en el Alta" ante la Comisión Médica dentro de un plazo muy corto (generalmente 5 días hábiles) para exigir que continúen las prestaciones médicas y de rehabilitación.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Puedo atenderme con mi obra social por un accidente de trabajo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'La obligación legal de brindar atención médica, farmacia y rehabilitación por accidentes laborales es exclusivamente de la ART. Si bien podés realizar una interconsulta con tu obra social de manera particular, todo el tratamiento oficial debe ser canalizado y cubierto por la ART.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué es el "Baremo" y cómo afecta mi indemnización?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El Baremo es la tabla oficial de porcentajes de incapacidad que usan los médicos de la SRT para medir el daño de cada lesión. Unos pocos puntos de diferencia en la aplicación del Baremo pueden representar una gran diferencia económica en tu indemnización, por lo que es vital el control de un abogado especialista.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué es el accidente in itinere?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Es el accidente que ocurre en el trayecto directo e inmediato entre tu domicilio y tu lugar de trabajo, por el camino habitual, siempre que no haya sido interrumpido o modificado por motivos personales. Está cubierto por la ART exactamente igual que un accidente dentro del trabajo.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Tengo derechos si trabajo en negro y me accidento?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Si trabajás sin registración ("en negro") y sufrís un accidente, tu empleador es el responsable directo de cubrir los gastos médicos y la indemnización. La falta de registración agrava la responsabilidad legal del empleador, habilitando reclamos con indemnizaciones superiores a las del sistema de ART.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Me llaman "abogados" que no conozco. ¿Cómo consiguieron mi número?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Existe un mercado ilegal de datos donde se filtran denuncias de accidentes a estudios jurídicos inescrupulosos. Si te contactan sin que los hayas llamado, desconfiá. Un profesional ético no compra datos de lesionados ni realiza acoso telefónico.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿La ART puede rechazar mi accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí, la ART puede rechazar la denuncia argumentando preexistencias o que la lesión no ocurrió en el trabajo. Este rechazo se puede impugnar e iniciar un trámite de "Rechazo de Siniestro" ante la Comisión Médica (SRT) para revertir la decisión con las pruebas correspondientes.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿El abogado puede cobrar la indemnización por mí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Absolutamente no. Por ley, la indemnización es personal e inalienable. El dinero se deposita siempre en una cuenta bancaria (CBU) a nombre exclusivo del trabajador. Los abogados nunca intermediamos en el cobro directo de tu dinero.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Puede el abogado acordar la indemnización sin mi presencia?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. Todo acuerdo económico ante la Comisión Médica o el SECLO requiere de tu consentimiento expreso y tu participación (presencial o virtual) en la audiencia de homologación para firmar la conformidad.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Puedo cambiar de abogado si no estoy conforme?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí, podés revocar el poder en cualquier momento y designar un nuevo profesional. La sustitución de patrocinio se realiza de forma legal y ética sin que el proceso de reclamo ante la ART o la justicia se detenga.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Tengo que pagar algún adelanto para iniciar mi reclamo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No, en absoluto. Trabajamos bajo la modalidad de "Cuota Litis" (o de resultado), lo que significa que solo cobramos honorarios profesionales si vos lográs cobrar tu indemnización. No hay gastos administrativos ni de consulta inicial.'
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
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
                    'text' => 'La indemnización por despido sin causa en Argentina incluye: antigüedad o indemnización por despido (1 mes de sueldo por año de servicio o fracción mayor a 3 meses), indemnización sustitutiva de preaviso, integración del mes de despido, vacaciones no gozadas con su respectivo SAC proporcional y SAC proporcional del año en curso.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué hacer si me envían un telegrama de despido?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No firmes ningún acuerdo de conformidad ni renuncia. Debés consultar de inmediato con un abogado laboralista para verificar si la causa alegada es legalmente válida, si el preaviso fue otorgado correctamente y si la liquidación final ofrecida respeta la totalidad de tus derechos según la Ley de Contrato de Trabajo (LCT).'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tiempo tengo para reclamar por un despido?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El plazo de prescripción para entablar una acción judicial o iniciar el reclamo administrativo ante el SECLO o el Ministerio de Trabajo por un despido, diferencias salariales o cobro de indemnizaciones es de 2 años, contados a partir de la fecha de extinción del contrato de trabajo.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué es el despido indirecto y cuándo se puede aplicar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El despido indirecto ocurre cuando el trabajador se ve obligado a dar por terminado el contrato de trabajo debido a un incumplimiento contractual grave por parte del empleador (como falta de pago de salarios, registración deficiente, maltrato o cambios unilaterales perjudiciales en las condiciones de trabajo). Previa intimación por telegrama colacionado, el trabajador se coloca en situación de despido indirecto y tiene derecho a reclamar las mismas indemnizaciones que en un despido directo sin causa.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué pasa si estoy trabajando en negro y me despiden?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Si trabajás sin estar registrado ("en negro") y te despiden, tenés el derecho legal de reclamar la totalidad de las indemnizaciones por despido sin causa, además de multas especiales por falta de registración. El reclamo se inicia mediante el envío de telegramas laborales gratuitos intimando al empleador a regularizar el vínculo laboral bajo apercibimiento de considerarse despedido.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cómo se calcula la indemnización por antigüedad en Argentina?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Según el Artículo 245 de la Ley de Contrato de Trabajo (LCT), la indemnización por antigüedad se calcula tomando un mes de sueldo por cada año de servicio o fracción mayor a 3 meses. La base de cálculo debe ser la mejor remuneración mensual, normal y habitual percibida durante el último año de servicios o tiempo de prestación.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué es el despido con causa y cómo funciona?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El despido con causa es la ruptura del contrato dispuesta por el empleador ante un incumplimiento contractual grave del trabajador (injuria laboral) que imposibilite la continuidad laboral. Para ser válido, debe notificarse por escrito con expresión clara de los motivos. Si los motivos invocados no son reales, son insuficientes o no están probados, el trabajador puede reclamar judicialmente la indemnización completa por despido sin causa.'
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
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
        'url' => SITE_URL . 'abogados-art-rosario',
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
        'url' => SITE_URL . 'abogados-art-neuquen',
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
/**
 * Generar Schema LocalBusiness para la sede Salta
 */
function generateLocalBusinessSchemaSalta() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'DerechosART Salta - Abogados ART y Despidos',
        'description' => 'Asesoramiento legal por accidentes de trabajo y despidos en Salta. Reclamá tu indemnización.',
        'url' => SITE_URL . 'abogados-art-salta',
        'image' => SITE_URL . 'publico/img/derechosart-og-image.jpg',
        'telephone' => '+5491124786144',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Gral. Martin Güemes 1548',
            'addressLocality' => 'Salta',
            'addressRegion' => 'Salta',
            'postalCode' => 'A4400',
            'addressCountry' => 'AR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '-24.7797087',
            'longitude' => '-65.4057814'
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
 * FUNCION: GenerarSchemaArticuloBlog
 * GENERA EL JSON-LD PARA UN ARTICULO DE BLOG PARA IMPULSAR EL GEO
 */
function GenerarSchemaArticuloBlog($Titulo, $Descripcion, $Canonical, $FechaPublicacion, $FechaModificacion, $AutorSlug) {
    // AUTORES ABOGADAS CON SUS CREDENCIALES PARA E-E-A-T EN GEO
    $AutoresAbogadas = [
        'romina-koniuch' => [
            '@type' => 'Person',
            'name' => 'Dra. Romina Koñiuch',
            'jobTitle' => 'Especialista en Accidentes Laborales y ART',
            'knowsAbout' => ['Derecho Laboral', 'Reclamos de ART', 'Accidentes de Trabajo']
        ],
        'athina-pereyra' => [
            '@type' => 'Person',
            'name' => 'Dra. Athina B. Pereyra',
            'jobTitle' => 'Especialista en Despidos e Indemnizaciones',
            'knowsAbout' => ['Derecho Laboral', 'Cálculo de Indemnizaciones', 'Despidos']
        ],
        'nair-chemes' => [
            '@type' => 'Person',
            'name' => 'Dra. Nair Chemes',
            'jobTitle' => 'Experta en Accidentes y Enfermedades Profesionales',
            'knowsAbout' => ['Derecho Laboral', 'Enfermedades Profesionales', 'Comisiones Médicas']
        ],
        'maria-jose-zalazar' => [
            '@type' => 'Person',
            'name' => 'Dra. María José Zalazar',
            'jobTitle' => 'Especialista en Accidentes Laborales',
            'knowsAbout' => ['Derecho Laboral', 'Accidentes Laborales', 'SRT']
        ],
        'carolina-estrada' => [
            '@type' => 'Person',
            'name' => 'Dra. Carolina Estrada',
            'jobTitle' => 'Abogada en Salta Especialista en Accidentes Laborales',
            'knowsAbout' => ['Derecho Laboral', 'Accidentes Laborales']
        ]
    ];

    // SI EL AUTOR NO EXISTE EN LA LISTA, SE USA LA ORGANIZACION POR DEFECTO
    $DatosAutor = isset($AutoresAbogadas[$AutorSlug]) ? $AutoresAbogadas[$AutorSlug] : [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'logo' => SITE_LOGO
    ];

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => $Titulo,
        'description' => $Descripcion,
        'url' => $Canonical,
        'datePublished' => $FechaPublicacion,
        'dateModified' => $FechaModificacion,
        'author' => $DatosAutor,
        'publisher' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => SITE_LOGO
            ]
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => $Canonical
        ],
        'image' => SITE_OG_IMAGE
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * FUNCION: generateTeamSchema
 * GENERA EL SCHEMA LD+JSON DETALLADO CON MATRICULAS PROFESIONALES DE LAS SOCIAS (E-E-A-T)
 */
function generateTeamSchema() {
    $MiembrosEquipo = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'item' => [
                '@type' => 'Person',
                'name' => 'Romina Koñiuch',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada Laboralista - Especialista en Accidentes de Trabajo y ART',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'C.P.A.C.F. T° 124 F° 403'
                    ],
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'C.A.S.I. T° 53 F° 331'
                    ]
                ],
                'knowsAbout' => [
                    'Accidentes laborales',
                    'Reclamos ART',
                    'Comisión Médica SRT',
                    'Ley de Riesgos del Trabajo',
                    'Decreto 549/2025'
                ],
                'url' => SITE_URL . 'quienes-somos'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'item' => [
                '@type' => 'Person',
                'name' => 'Athina B. Pereyra',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada Laboralista - Especialista en Despidos e Indemnizaciones',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'C.P.A.C.F. T° 124 F° 846'
                    ],
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'C.A.S.I. T° 49 F° 269'
                    ]
                ],
                'knowsAbout' => [
                    'Despidos laborales',
                    'Indemnizaciones',
                    'LCT Ley 20744',
                    'SECLO',
                    'Ley de Modernización Laboral'
                ],
                'url' => SITE_URL . 'quienes-somos'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'item' => [
                '@type' => 'Person',
                'name' => 'Nair Chemes',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada - Especialista en Enfermedades Profesionales',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'Colegio de Abogados de Rosario - Libro 47 F° 365'
                    ],
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Federal',
                        'name' => 'T° 404 F° 503'
                    ]
                ],
                'knowsAbout' => [
                    'Enfermedades profesionales',
                    'Accidentes laborales Rosario',
                    'Comisión Médica Rosario'
                ],
                'url' => SITE_URL . 'quienes-somos'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 4,
            'item' => [
                '@type' => 'Person',
                'name' => 'María José Zalazar',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada Laboralista - Especialista en Accidentes Laborales Neuquén y Río Negro',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'CAYPN (Neuquén) Mat. N° 4235'
                    ],
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'CAAVO (Río Negro) Mat. N° 6507'
                    ],
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Federal',
                        'name' => 'T° 145 F° 188'
                    ]
                ],
                'knowsAbout' => [
                    'Accidentes laborales Neuquén',
                    'Reclamos ART Río Negro',
                    'Comisión Médica Neuquén'
                ],
                'url' => SITE_URL . 'quienes-somos'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 5,
            'item' => [
                '@type' => 'Person',
                'name' => 'Carolina Estrada',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada Asociada - Especialista en Accidentes Laborales (Sede Salta)',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'M.P. 6792 (Salta)'
                    ]
                ],
                'knowsAbout' => [
                    'Accidentes laborales Salta',
                    'Reclamos ART Salta',
                    'Comisión Médica Salta'
                ],
                'url' => SITE_URL . 'quienes-somos'
            ]
        ]
    ];

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => 'Equipo de Abogadas - ' . SITE_NAME,
        'itemListElement' => $MiembrosEquipo
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
?>
