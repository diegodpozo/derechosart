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
        'titulo' => 'Abogados de ART en CABA y GBA | DerechosART',
        'descripcion' => 'Abogados especialistas en accidentes de trabajo y despidos en CABA y GBA. Reclamá tu indemnización con expertos en ART. Consulta gratuita.',
        'keywords' => 'abogados art caba, abogados art capital federal, abogados art gba, abogados accidentes de trabajo caba, reclamos art, indemnización laboral argentina'
    ],
    'quienes-somos' => [
        'titulo' => 'Nuestro Equipo | Abogadas Especialistas en Reclamos de ART',
        'descripcion' => 'Conocé a las expertas de DerechosART. Más de 8 años defendiendo trabajadores en reclamos ante la SRT y juicios contra las ART. Transparencia y resultados.',
        'keywords' => 'abogadas especialistas ART, equipo jurídico laboral, expertos en reclamos SRT'
    ],
    'accidentes-de-trabajo' => [
        'titulo' => 'Accidentes de Trabajo: Tipos, Plazos y Cómo Reclamar tu Indemnización ART',
        'descripcion' => 'Guía completa sobre accidentes de trabajo en Argentina: qué es, tipos, qué cubre la ART, plazos clave y pasos para reclamar tu indemnización. Consulta gratuita.',
        'keywords' => 'accidente de trabajo, accidente laboral, reclamo ART, indemnización accidente, in itinere, comisiones médicas, incapacidad laboral, ley de riesgos del trabajo'
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
        'titulo' => 'Qué hacer ante un Accidente Laboral o de Trabajo | Guía para cobrar la ART',
        'descripcion' => 'Pasos clave tras un accidente laboral o accidente de trabajo: desde la denuncia hasta la atención médica. Evitá errores que pueden perjudicar tu reclamo futuro.',
        'keywords' => 'accidente laboral, accidente de trabajo, qué hacer accidente trabajo, denuncia ART, procedimiento accidente laboral'
    ],
    'cual-es-mi-art' => [
        'titulo' => 'Consultar mi ART | Averiguá tu Aseguradora con CUIL (Gratis)',
        'descripcion' => '¿No sabés qué ART tenés? Consultá aquí cómo verificar tu aseguradora y encontrá todos los números de emergencia actualizados para denuncias.',
        'keywords' => 'cómo saber mi ART, consultar ART por CUIL, aseguradoras de riesgos del trabajo'
    ],
    'tabla-incapacidad' => [
        'titulo' => 'Nuevo Baremo ART 2026 | Tabla de Incapacidades y Porcentajes',
        'descripcion' => 'Tabla actualizada del nuevo Baremo ART 2026 (Decreto 549/2025). Consultá los porcentajes de incapacidad laboral por lesión y calculá tu indemnización.',
        'keywords' => 'baremo 2026, nuevo baremo art, decreto 549/2025, tabla incapacidad, porcentaje incapacidad laboral, cómo saber mi porcentaje de incapacidad, baremo srt 2026, incapacidad laboral, tabla lesiones art, calculo incapacidad art, indemnización por incapacidad'
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
        'titulo' => 'Abogados de ART en CABA y GBA | Accidentes de Trabajo',
        'descripcion' => 'Abogados especialistas en accidentes de trabajo, ART y accidentes laborales en CABA, Capital Federal y GBA. Reclamá tu indemnización. Consulta gratis.',
        'keywords' => 'abogados art caba, abogados art capital federal, abogados art gba, accidentes art, art accidentes, accidente laboral, accidente de trabajo, abogados accidentes de trabajo, abogado de art, reclamos art caba, estudio jurídico art, indemnización accidente laboral, abogado laboral caba, abogado srt, comisión médica abogado'
    ],
    'blog-index' => [
        'titulo' => 'Blog de DerechosART | Guías sobre Accidentes Laborales y ART',
        'descripcion' => 'Guías claras y actualizadas sobre accidentes laborales, ART, despidos y derechos del trabajador en Argentina. Información sin palabras difíciles.',
        'keywords' => 'blog accidentes laborales, guía ART Argentina, derechos laborales blog, abogados laborales blog'
    ],
    'blog-accidente-laboral' => [
        'titulo' => 'Accidente laboral: Qué hacer y cómo reclamar | Guía 2026',
        'descripcion' => 'Si sufriste un accidente laboral o in itinere, esta guía te explica cómo denunciarlo, qué cubre el tratamiento y cómo cobrar tu indemnización.',
        'keywords' => 'accidente laboral qué hacer, accidente in itinere indemnización, ART, riesgos del trabajo, SRT, Comisión Médica, incapacidad laboral'
    ],
    'blog-art-rechazo' => [
        'titulo' => 'La ART Rechazó Mi Accidente Laboral: Qué Hacer Paso a Paso (2026) | DerechosART',
        'descripcion' => 'Si la ART rechazó tu accidente laboral, el caso no está perdido. Conocé los pasos para impugnar el rechazo, los plazos que tenés y cómo reclamar tu indemnización.',
        'keywords' => 'ART rechazó accidente laboral, rechazo ART qué hacer, impugnar rechazo ART, accidente de trabajo rechazado, Comisión Médica rechazo, reclamo ART Argentina 2026'
    ],
    'blog-alta-medica-dolor' => [
        'titulo' => 'Me Dieron el Alta de la ART pero Sigo con Dolor: Qué Hacer | DerechosART',
        'descripcion' => '¿Te dieron el alta médica de la ART pero seguís con dolor o limitaciones físicas? Guía paso a paso sobre cómo impugnar ante la SRT e iniciar la divergencia.',
        'keywords' => 'alta de la art con dolor, divergencia en el alta, alta medica art, impugnar alta art, comision medica alta art, reclamo art alta'
    ],
    'blog-baremo-2026' => [
        'titulo' => 'Baremo Laboral 2026 explicado con los porcentajes reales del Decreto 549/2025 | DerechosART',
        'descripcion' => 'El Baremo Laboral 2026 (Decreto 549/2025) cambió cómo se mide tu incapacidad. Te explicamos con los porcentajes reales de la norma cómo se calcula tu indemnización.',
        'keywords' => 'baremo laboral 2026, decreto 549/2025, tabla de incapacidades, porcentaje incapacidad ART, baremo accidente de trabajo, calculo indemnizacion ART'
    ],
    'rechazo-del-siniestro' => [
        'titulo' => 'Rechazo del Siniestro ART | Qué Hacer Cuando la ART No Reconoce tu Accidente',
        'descripcion' => 'Si la ART no reconoce tu accidente laboral o enfermedad, te explicamos cómo reclamar ante la Comisión Médica. Asesoramiento legal sin cargo.',
        'keywords' => 'rechazo siniestro ART, ART no reconoce accidente, impugnar rechazo ART'
    ],
    'rechazo-de-enfermedad-no-listada' => [
        'titulo' => 'Rechazo de Enfermedad No Listada | Reclamá ante la Comisión Médica',
        'descripcion' => 'Enfermedades no incluidas en el Decreto 658/96 pero causadas por el trabajo: cómo reclamar tu indemnización con abogados especialistas.',
        'keywords' => 'enfermedad no listada, decreto 658/96, enfermedad profesional no listada, reclamo ART'
    ],
    'divergencia-en-el-alta-medica' => [
        'titulo' => 'Divergencia en el Alta Médica | Impugná el Alta de la ART',
        'descripcion' => 'Si no estás de acuerdo con el alta médica de la ART, podés iniciar una divergencia. Te explicamos cómo hacerlo paso a paso.',
        'keywords' => 'divergencia alta médica, impugnar alta ART, alta médica disconforme, reclamo ART'
    ],
    'divergencia-en-las-prestaciones' => [
        'titulo' => 'Divergencia en las Prestaciones | Cuando la ART No Te Brinda Tratamiento',
        'descripcion' => 'Si la ART no te brinda el tratamiento médico adecuado, iniciá una divergencia en las prestaciones. Asesoramiento legal gratuito.',
        'keywords' => 'divergencia prestaciones ART, ART no brinda tratamiento, negación tratamiento ART'
    ],
    'reingreso-al-tratamiento' => [
        'titulo' => 'Reingreso al Tratamiento ART | Volvé a la Cobertura Médica',
        'descripcion' => 'Si necesitás volver a la cobertura médica de la ART, te explicamos cómo solicitar el reingreso al tratamiento. Consulta gratuita.',
        'keywords' => 'reingreso tratamiento ART, volver a cobertura ART, reingreso ART'
    ],
    'divergencia-en-la-incapacidad' => [
        'titulo' => 'Divergencia en la Incapacidad | Porcentaje Injusto de la ART',
        'descripcion' => 'Si el porcentaje de incapacidad fijado por la ART es injusto, peleamos por una reevaluación. Abogados especialistas en comisiones médicas.',
        'keywords' => 'divergencia incapacidad, porcentaje incapacidad injusto, impugnar incapacidad ART'
    ],
    'determinacion-de-incapacidad' => [
        'titulo' => 'Determinación de Incapacidad | Que la SRT Fije tu Grado',
        'descripcion' => 'Trámite ante la Comisión Médica para que la SRT determine tu grado de incapacidad permanente. Te acompañamos en todo el proceso.',
        'keywords' => 'determinación incapacidad, grado incapacidad SRT, incapacidad permanente ART'
    ],
    'valoracion-de-dano' => [
        'titulo' => 'Valoración de Daño | Homologación Previa al Cobro de Indemnización',
        'descripcion' => 'Homologación previa al cobro de la indemnización ante la Comisión Médica. Gestionamos todo el trámite por vos.',
        'keywords' => 'valoración daño ART, homologación indemnización, cobro indemnización ART'
    ],
    'fallecimiento-del-trabajador' => [
        'titulo' => 'Fallecimiento del Trabajador | Indemnización para Derechohabientes',
        'descripcion' => 'Si un trabajador falleció por un accidente laboral o enfermedad profesional, los derechohabientes tienen derecho a cobrar la indemnización.',
        'keywords' => 'fallecimiento trabajador ART, indemnización derechohabientes, muerte accidente laboral'
    ],
    'baremo-fracturas-vertebrales' => [
        'titulo' => '🦴 Fracturas Vertebrales: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Conoce los porcentajes de incapacidad por fracturas vertebrales segun el Baremo Laboral 2026. Compresion, estallido, luxacion y más. Consulta gratuita.',
        'keywords' => 'fractura vertebral incapacidad, baremo 2026 columna, compresion vertebral porcentaje, estallido vertebral, luxacion vertebral, columna lumbar accidente trabajo'
    ],
    'baremo-lesion-hombro' => [
        'titulo' => '🏋️ Lesiones de Hombro: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas, protesis, luxaciones y lesiones del manguito rotador del hombro. Todos los porcentajes del Baremo 2026. Consulta gratuita.',
        'keywords' => 'lesion hombro incapacidad, baremo 2026 hombro, manguito rotador porcentaje, protesis hombro, luxacion hombro, fractura humero'
    ],
    'baremo-lesion-rodilla' => [
        'titulo' => '🦵 Lesiones de Rodilla: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas, protesis, lesiones de ligamentos y meniscos de la rodilla. Porcentajes del Baremo 2026. Consulta gratuita.',
        'keywords' => 'lesion rodilla incapacidad, baremo 2026 rodilla, protesis rodilla porcentaje, ligamento cruzado, menisco, fractura rotula'
    ],
    'baremo-lesion-mano-dedo' => [
        'titulo' => '✋ Lesiones de Mano y Dedos: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas, amputaciones, sindrome del tunel carpiano y lesiones de la mano. Porcentajes del Baremo 2026. Consulta gratuita.',
        'keywords' => 'lesion mano incapacidad, baremo 2026 mano, tunel carpiano, fractura mano, amputacion dedo, incapacidad mano'
    ],
    'baremo-lesion-femur' => [
        'titulo' => '🦵 Fractura de Femur: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fractura de femur: porcentajes de incapacidad segun el Baremo Laboral 2026. Sin secuelas, con secuelas y pseudoartrosis. Consulta gratuita.',
        'keywords' => 'fractura femur incapacidad, baremo 2026 femur, cuello femoral, diafisis femoral, pseudoartrosis femur'
    ],
    'baremo-lesion-tibia-perone' => [
        'titulo' => '🦯 Fractura de Tibia y Perone: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas de tibia y perone: porcentajes del Baremo 2026. Sin secuelas, con secuelas y pseudoartrosis. Consulta gratuita.',
        'keywords' => 'fractura tibia perone incapacidad, baremo 2026 tibia, fractura pierna porcentaje, pseudoartrosis tibia'
    ],
    'baremo-lesion-tobillo' => [
        'titulo' => '🦶 Lesiones de Tobillo: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas, esguinces y luxaciones del tobillo. Porcentajes de incapacidad del Baremo 2026. Consulta gratuita.',
        'keywords' => 'lesion tobillo incapacidad, baremo 2026 tobillo, fractura tobillo, esguince tobillo, malaleo, astragalo'
    ],
    'baremo-amputaciones-miembro-superior' => [
        'titulo' => '💪 Amputaciones del Miembro Superior: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Amputaciones del brazo, antebrazo y mano. Porcentajes de incapacidad del Baremo 2026. Consulta gratuita.',
        'keywords' => 'amputacion brazo incapacidad, baremo 2026 amputacion, amputacion mano, amputacion dedo, miembro superior'
    ],
    'baremo-lesion-brazo-radio-cubito' => [
        'titulo' => '💪 Fracturas de Brazo (Radio y Cubito): porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas de radio y cubito en el brazo. Porcentajes de incapacidad del Baremo 2026. Consulta gratuita.',
        'keywords' => 'fractura radio cubito, baremo 2026 brazo, fractura antebrazo, radio cubito incapacidad'
    ],
    'baremo-lesion-cadera' => [
        'titulo' => '🦴 Fractura de Cadera: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas de cadera: cuello femoral, pertrocanterea y acetabulo. Porcentajes del Baremo 2026. Consulta gratuita.',
        'keywords' => 'fractura cadera incapacidad, baremo 2026 cadera, cuello femoral, pertrocanterea, protesis cadera'
    ],
    'baremo-lesion-dedos-pie' => [
        'titulo' => '🦶 Lesiones de Dedos del Pie: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Fracturas y amputaciones de dedos del pie. Porcentajes de incapacidad del Baremo 2026. Consulta gratuita.',
        'keywords' => 'lesion dedos pie incapacidad, baremo 2026 dedos pie, fractura dedo pie, amputacion dedo pie'
    ],
    'baremo-cicatrices-rostro' => [
        'titulo' => '😶 Cicatrices en Rostro y Cuero Cabelludo: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Cicatrices en el rostro y cuero cabelludo: porcentajes de incapacidad segun el Baremo 2026. Consulta gratuita.',
        'keywords' => 'cicatriz rostro incapacidad, baremo 2026 cicatrices, scalp, cicatriz cuero cabelludo, cicatriz fea'
    ],
    'baremo-lesiones-oculares' => [
        'titulo' => '👁️ Lesiones Oculares: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Lesiones oculares: perdida de vision, enucleacion y trauma ocular. Porcentajes del Baremo 2026. Consulta gratuita.',
        'keywords' => 'lesion ocular incapacidad, baremo 2026 ojos, perdida de vision, enucleacion, trauma ocular'
    ],
    'baremo-enfermedades-profesionales' => [
        'titulo' => '🦠 Enfermedades Profesionales: porcentajes de incapacidad | DerechosART',
        'descripcion' => 'Enfermedades profesionales: hernia discal, tunel carpiano, asma ocupacional y más. Porcentajes del Baremo 2026. Consulta gratuita.',
        'keywords' => 'enfermedad profesional incapacidad, baremo 2026 enfermedades, hernia discal, asma ocupacional, enfermedades listadas'
    ],
    'baremo-gran-invalidez' => [
        'titulo' => '🏥 Gran Invalidez: porcentajes y prestaciones | DerechosART',
        'descripcion' => 'Que es la gran invalidez, quien la determina y que prestaciones otorga. Informacion segun la Ley de Riesgos del Trabajo. Consulta gratuita.',
        'keywords' => 'gran invalidez, incapacidad permanente total, asistencia permanente ajena, tercera persona'
    ],
    'baremo-pisos-minimos-indemnizacion' => [
        'titulo' => '⚖️ Pisos Minimos de Indemnizacion | DerechosART',
        'descripcion' => 'Pisos minimos de indemnizacion por accidente de trabajo segun el Baremo 2026. Consulta gratuita.',
        'keywords' => 'pisos minimos indemnizacion, baremo 2026 pisos, minimo indemnizacion ART'
    ],
    'baremo-fallecimiento-trabajador' => [
        'titulo' => '💔 Fallecimiento del Trabajador: indemnizacion para derechohabientes | DerechosART',
        'descripcion' => 'Si un trabajador fallece por accidente laboral, los derechohabientes tienen derecho a cobrar la indemnizacion. Consulta gratuita.',
        'keywords' => 'fallecimiento trabajador, indemnizacion derechohabientes, muerte accidente laboral, prestaciones fallecimiento'
    ],
    'preguntas-frecuentes' => [
        'titulo' => '500 Preguntas sobre ART y Accidentes de Trabajo | DerechosART',
        'descripcion' => 'Respondemos tus dudas sobre ART, accidentes laborales, comisiones medicas, indemnizaciones y baremo 2026. Informacion clara para trabajadores argentinos.',
        'keywords' => 'preguntas frecuentes ART, dudas accidente trabajo, consultas ART, indemnizacion ART, baremo 2026 preguntas'
    ],
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

        // BREADCRUMB JERARQUICO PARA PAGINAS DE TRAMITES DE COMISIONES MEDICAS
        $tramitesSlugs = [
            'tramites-srt' => 'Trámites SRT',
            'rechazo-del-siniestro' => 'Rechazo del Siniestro',
            'rechazo-de-enfermedad-no-listada' => 'Rechazo de Enfermedad No Listada',
            'divergencia-en-el-alta-medica' => 'Divergencia en el Alta Médica',
            'divergencia-en-las-prestaciones' => 'Divergencia en las Prestaciones',
            'reingreso-al-tratamiento' => 'Reingreso al Tratamiento',
            'divergencia-en-la-incapacidad' => 'Divergencia en la Incapacidad',
            'determinacion-de-incapacidad' => 'Determinación de Incapacidad',
            'valoracion-de-dano' => 'Valoración de Daño',
            'fallecimiento-del-trabajador' => 'Fallecimiento del Trabajador'
        ];
        if (array_key_exists($slug, $tramitesSlugs)) {
            $name = $tramitesSlugs[$slug];
            $parentPage = [
                'name' => 'Comisiones Médicas',
                'item' => $base_url . 'comisiones-medicas'
            ];
        }
    }
    
    $breadcrumbs = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Inicio',
            'item' => $base_url
        ]
    ];
    if (isset($parentPage)) {
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $parentPage['name'],
            'item' => $parentPage['item']
        ];
    }
    $breadcrumbs[] = [
        '@type' => 'ListItem',
        'position' => isset($parentPage) ? 3 : 2,
        'name' => $name,
        'item' => $canonical_url
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
function GenerarSchemaArticuloBlog($Titulo, $Descripcion, $Canonical, $FechaPublicacion, $FechaModificacion, $AutorSlug, $CuerpoArticulo = '') {
    // AUTORES ABOGADAS CON SUS CREDENCIALES PARA E-E-A-T EN GEO
    $AutoresAbogadas = [
        'romina-koniuch' => [
            '@type' => 'Person',
            'name' => 'Dra. Romina Koñiuch',
            'honorificPrefix' => 'Dra.',
            'jobTitle' => 'Abogada Laboralista - Especialista en Accidentes de Trabajo y ART',
            'url' => SITE_URL . 'quienes-somos',
            'image' => SITE_URL . 'publico/img/equipo/romi.webp',
            'knowsAbout' => ['Derecho Laboral', 'Reclamos de ART', 'Accidentes de Trabajo', 'Comisiones Médicas SRT', 'Ley de Riesgos del Trabajo'],
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
            'worksFor' => [
                '@type' => 'LegalService',
                'name' => SITE_NAME,
                'url' => SITE_URL
            ]
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
        ],
        'maria-luz-fernandez' => [
            '@type' => 'Person',
            'name' => 'Dra. María Luz Fernández',
            'jobTitle' => 'Abogada en Córdoba Especialista en Derecho Laboral',
            'knowsAbout' => ['Derecho Laboral', 'Accidentes Laborales', 'Despidos']
        ],
        'josefina-rizzato' => [
            '@type' => 'Person',
            'name' => 'Dra. Josefina Rizzato',
            'jobTitle' => 'Abogada Laboralista en Mendoza',
            'knowsAbout' => ['Derecho Laboral', 'Accidentes Laborales', 'Enfermedades Profesionales']
        ]
    ];

    // SI EL AUTOR NO EXISTE, ASIGNAMOS POR DEFECTO A LA DRA. ROMINA KOÑIUCH COMO FIRMA PRINCIPAL
    $DatosAutor = isset($AutoresAbogadas[$AutorSlug]) ? $AutoresAbogadas[$AutorSlug] : $AutoresAbogadas['romina-koniuch'];

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
        'image' => SITE_OG_IMAGE,
        'articleBody' => $CuerpoArticulo
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * FUNCION: generateLocalBusinessSchemaCordoba
 * GENERA EL JSON-LD PARA LA SEDE FISICA DE CORDOBA
 */
function generateLocalBusinessSchemaCordoba() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'DerechosART Córdoba - Abogados ART y Despidos',
        'description' => 'Asesoramiento legal por accidentes de trabajo y despidos en Córdoba Capital y provincia.',
        'url' => SITE_URL . 'abogados-art-cordoba',
        'image' => SITE_OG_IMAGE,
        'telephone' => '+5491124786144',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '27 de Abril 276',
            'addressLocality' => 'Córdoba',
            'addressRegion' => 'Córdoba',
            'postalCode' => 'X5000AEF',
            'addressCountry' => 'AR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '-31.4147',
            'longitude' => '-64.1869'
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
 * FUNCION: generateLocalBusinessSchemaMendoza
 * GENERA EL JSON-LD PARA LA SEDE FISICA DE MENDOZA
 */
function generateLocalBusinessSchemaMendoza() {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'DerechosART Mendoza - Abogados ART y Despidos',
        'description' => 'Asesoramiento legal por accidentes de trabajo y despidos en Mendoza Capital y provincia.',
        'url' => SITE_URL . 'abogados-art-mendoza',
        'image' => SITE_OG_IMAGE,
        'telephone' => '+5491124786144',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Patricias Mendocinas 539, piso 2, of. B',
            'addressLocality' => 'Mendoza',
            'addressRegion' => 'Mendoza',
            'postalCode' => '5500',
            'addressCountry' => 'AR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '-32.8833',
            'longitude' => '-68.8397'
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
        ],
        [
            '@type' => 'ListItem',
            'position' => 6,
            'item' => [
                '@type' => 'Person',
                'name' => 'Maria Luz Fernandez',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada Asociada - Especialista en Accidentes Laborales (Sede Córdoba)',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'M.P. 1-43441 (Córdoba)'
                    ]
                ],
                'knowsAbout' => [
                    'Accidentes laborales Córdoba',
                    'Reclamos ART Córdoba',
                    'Comisión Médica Córdoba'
                ],
                'url' => SITE_URL . 'quienes-somos'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 7,
            'item' => [
                '@type' => 'Person',
                'name' => 'Josefina Rizzato',
                'honorificPrefix' => 'Dra.',
                'jobTitle' => 'Abogada Laboralista - Especialista en Accidentes Laborales (Sede Mendoza)',
                'worksFor' => [
                    '@type' => 'LegalService',
                    'name' => SITE_NAME,
                    'url' => SITE_URL
                ],
                'hasCredential' => [
                    [
                        '@type' => 'EducationalOccupationalCredential',
                        'credentialCategory' => 'Matrícula Profesional',
                        'name' => 'M.P 12.058 SCJM (Mendoza)'
                    ]
                ],
                'knowsAbout' => [
                    'Accidentes laborales Mendoza',
                    'Reclamos ART Mendoza',
                    'Comisión Médica Mendoza'
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

// ============================================================
// FUNCION: GENERAR SCHEMA WebSite CON SearchAction (BUSQUEDA)
// ============================================================
function generateWebSiteSchema(): string {
    $url = BASE_URL;
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => SITE_NAME,
        'url' => $url,
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => $url . 'buscar?q={search_term_string}'
            ],
            'query-input' => 'required name=search_term_string'
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

// ============================================================
// FUNCION: GENERAR Review Schema INDIVIDUAL PARA CADA TESTIMONIO
// ============================================================
function generateReviewSchemas(): string {
    $reviews = [
        ['author' => 'Agus Bebi', 'text' => 'Excelente atención, muy profesionales y humanos. Me ayudaron con todo mi trámite de ART.'],
        ['author' => 'Emanuel Galecki', 'text' => 'Super recomendables. Me explicaron todo claro y me acompañaron en cada paso del reclamo.'],
        ['author' => 'Daiana Serrano', 'text' => 'Muy conforme con el trato y el resultado. Se encargaron de todo y siempre me mantuvieron informada.'],
        ['author' => 'Ivan Brunello', 'text' => 'Grandes profesionales. Te dan la tranquilidad que necesitás en momentos difíciles.'],
        ['author' => 'Paula Tesseyre', 'text' => 'Increíble el equipo de abogadas. Muy eficientes y dedicadas al trabajador.'],
        ['author' => 'Tico Molina', 'text' => 'Excelente estudio. Transparencia total desde el primer día. Los recomiendo sin dudar.'],
        ['author' => 'Valentina López', 'text' => 'Muy agradecida por la paciencia y la calidez humana. Excelentes abogadas.'],
        ['author' => 'Nico Fontán', 'text' => 'Resolvieron mi caso mucho más rápido de lo que esperaba. Muy profesionales.'],
        ['author' => 'Stella Maris', 'text' => 'Excelente asesoramiento legal. Me sentí muy protegida por el equipo.'],
        ['author' => 'Rodri Nahuel', 'text' => 'Atención de diez. Saben mucho y te explican para que uno entienda bien.'],
        ['author' => 'Maria Buktenica', 'text' => 'Muy profesionales y responsables. Cumplieron con todo lo acordado.'],
        ['author' => 'Jose Cerda', 'text' => 'Los mejores en accidentes laborales. No perdí tiempo y obtuve mi indemnización.'],
        ['author' => 'Kiara Zuviria', 'text' => 'Excelente trato y gestión. Se nota la experiencia que tienen.'],
        ['author' => 'Carlos Santacruz', 'text' => 'Muy recomendables por su honestidad y compromiso con el cliente.'],
        ['author' => 'Sandra Birgy', 'text' => 'Impecable la atención de las abogadas. Muy humanas y claras.'],
        ['author' => 'Agustín Sanlar', 'text' => 'Excelente equipo. Me ayudaron a cobrar lo que me correspondía por ley.'],
        ['author' => 'Norma Navarro', 'text' => 'Muy agradecida con Derechos ART por su excelente trabajo y acompañamiento.'],
        ['author' => 'Ernesto Allesandrini', 'text' => 'Muy buena experiencia. Me asesoraron gratis y me guiaron en todo el proceso.'],
        ['author' => 'Rebeca Fuertes', 'text' => 'Atención profesional y personalizada. Muy conformes con el resultado final.'],
        ['author' => 'Mora Mendez', 'text' => 'Excelente gestión de mi caso. Son abogadas muy capacitadas y amables.']
    ];

    $graph = [
        '@context' => 'https://schema.org',
        '@graph' => []
    ];

    foreach ($reviews as $r) {
        $graph['@graph'][] = [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => $r['author']
            ],
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => '5',
                'bestRating' => '5'
            ],
            'reviewBody' => $r['text'],
            'itemReviewed' => [
                '@type' => 'LegalService',
                'name' => SITE_NAME,
                'telephone' => SITE_PHONE,
                'url' => SITE_URL
            ]
        ];
    }

    return json_encode($graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

// ============================================================
// FUNCION: GENERAR WebApplication Schema PARA CALCULADORAS
// ============================================================
function generateWebApplicationSchema(string $tipo = 'accidentes'): string {
    if ($tipo === 'despidos') {
        $name = 'Calculadora de Indemnización por Despido';
        $desc = 'Calculá de forma orientativa cuánto te corresponde cobrar por tu despido laboral.';
        $url = SITE_URL . 'calculadora-despidos';
    } else {
        $name = 'Calculadora de Indemnización por Accidente ART';
        $desc = 'Calculá de forma orientativa cuánto te corresponde cobrar por tu accidente laboral o enfermedad profesional.';
        $url = SITE_URL . 'calculadora-accidentes';
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebApplication',
        'name' => $name,
        'description' => $desc,
        'url' => $url,
        'applicationCategory' => 'FinanceApplication',
        'operatingSystem' => 'Web',
        'browserRequirements' => 'Requiere JavaScript',
        'author' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'url' => SITE_URL
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

// ============================================================
// FUNCION: GENERAR HowTo Schema PARA CALCULADORAS
// ============================================================
function generateHowToSchema(string $tipo = 'accidentes'): string {
    if ($tipo === 'despidos') {
        $steps = [
            ['name' => 'Ingresá tu sueldo', 'text' => 'Completá tu sueldo bruto mensual promedio.'],
            ['name' => 'Ingresá los años trabajados', 'text' => 'Indicá los años y meses que trabajaste en la empresa.'],
            ['name' => 'Seleccioná el tipo de despido', 'text' => 'Elegí si fue un despido sin causa, con causa o indirecto.'],
            ['name' => 'Calculá tu indemnización', 'text' => 'Hacé clic en Calcular para ver el resultado estimado.']
        ];
    } else {
        $steps = [
            ['name' => 'Ingresá tu sueldo', 'text' => 'Completá tu sueldo bruto mensual promedio.'],
            ['name' => 'Ingresá el porcentaje de incapacidad', 'text' => 'Indicá el porcentaje de incapacidad determinado por la SRT.'],
            ['name' => 'Ingresá tu edad', 'text' => 'Indicá tu edad al momento del accidente.'],
            ['name' => 'Seleccioná el lugar del hecho', 'text' => 'Elegí si fue en tu lugar de trabajo o in itinere.'],
            ['name' => 'Calculá tu indemnización', 'text' => 'Hacé clic en Calcular para ver el resultado estimado.']
        ];
    }

    $itemList = [];
    foreach ($steps as $i => $s) {
        $itemList[] = [
            '@type' => 'HowToStep',
            'position' => $i + 1,
            'name' => $s['name'],
            'text' => $s['text']
        ];
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => ($tipo === 'despidos') ? 'Cómo calcular tu indemnización por despido' : 'Cómo calcular tu indemnización por accidente',
        'description' => 'Pasos para calcular tu indemnización usando nuestra calculadora online.',
        'step' => $itemList
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

// ============================================================
// FUNCION: GENERAR Speakable Schema (PARA ASISTENTES DE VOZ)
// ============================================================
function generateSpeakableSchema(string $url, array $cssSelectors = []): string {
    $defaultSelectors = [
        'h1',
        '.titulo-hero',
        '.articulo-lead',
        '.articulo-titulo'
    ];
    $selectors = !empty($cssSelectors) ? $cssSelectors : $defaultSelectors;

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => $url . '#speakable',
        'speakable' => [
            '@type' => 'SpeakableSpecification',
            'cssSelector' => $selectors
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

// ============================================================
// FUNCION: GENERAR ItemList Schema CON FAQs PARA EL BLOG
// ============================================================
function generateBlogFAQSchema(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tiempo tengo para denunciar un accidente laboral a la ART?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No hay un plazo fijo para el trabajador, pero lo ideal es hacerlo el mismo día o al día siguiente. Cuanto antes avises, más fácil es demostrar que el accidente ocurrió mientras trabajabas.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Puedo reclamar si ya me dieron el alta médica?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. El alta no cierra tu derecho a reclamar. Si quedaron secuelas, la ART tiene que evaluar tu incapacidad y pagarte la indemnización que corresponda, aunque ya hayas vuelto a trabajar.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué pasa si la ART rechaza mi accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No lo aceptes como definitivo. Un rechazo se puede cuestionar ante la Comisión Médica y otras instancias de la SRT. Lo importante es actuar rápido y tener documentación.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tarda una indemnización por accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Depende de cada caso: el tipo de lesión, cuánto dura el tratamiento, cuándo te dan el alta y cuándo la ART avanza con la evaluación de incapacidad.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Un accidente in itinere tiene los mismos derechos que uno laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Si te accidentaste yendo o volviendo del trabajo por el recorrido de siempre, tenés derecho a atención médica completa y a la indemnización si quedaron secuelas.'
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

function generateBlogFAQSchemaRechazo(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Si la ART rechazó mi accidente laboral, puedo igual reclamar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. El rechazo de la ART no es una resolución definitiva ni cierra tus derechos. Podés impugnar ese rechazo iniciando el trámite de Determinación de la Incapacidad ante la Comisión Médica Jurisdiccional. Si la Comisión confirma que el accidente existió y generó incapacidad, la ART queda obligada a dar cobertura y pagar la indemnización correspondiente.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿La ART tiene plazo para rechazar un accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. La Ley 24.557 establece que la ART tiene 10 días hábiles desde que recibe la denuncia para rechazar o aceptar la cobertura. Si no responde en ese plazo, el silencio se interpreta como aceptación tácita del accidente. Un rechazo emitido fuera de ese plazo puede cuestionarse legalmente.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tiempo tengo para impugnar el rechazo de la ART?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El plazo de prescripción es de 2 años contados desde la fecha del accidente o desde que el derecho pudo ser exigido, conforme al artículo 44 de la Ley 24.557. Sin embargo, actuar lo antes posible es siempre más conveniente: mientras más tiempo pasa, más difícil resulta reunir pruebas y testigos.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué argumentos usa la ART para rechazar un accidente laboral?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Los argumentos más comunes son: que el accidente no ocurrió en ocasión del trabajo, que no existe nexo causal entre el hecho y la lesión, que la lesión era preexistente, que la enfermedad profesional no figura en el listado oficial, o que el trabajador alteró el trayecto habitual (casos in itinere).'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué pasa si me rechazaron un accidente camino al trabajo o de regreso?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Los accidentes in itinere —los que ocurren entre el domicilio y el trabajo, o viceversa— también están cubiertos por la ART bajo la Ley 24.557. Si te rechazaron alegando que alteraste el trayecto habitual, ese rechazo puede impugnarse ante la Comisión Médica igual que cualquier otro rechazo.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => '¿Necesito un abogado para impugnar el rechazo de la ART?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí, es obligatorio contar con patrocinio letrado para iniciar el trámite ante la Comisión Médica por rechazo de la contingencia. La ART siempre llega con su equipo de abogados y médicos especializados; tener representación letrada especializada marca una diferencia clave en el resultado del caso.'
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

?>
