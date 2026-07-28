<?php
$entries = [];

$entries[] = "[
    'id' => 'alta-medica-021',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿La ART me puede dar el alta si no terminé el tratamiento?',
    'respuesta_corta' => 'No debería, pero a veces ocurre. La ART debe esperar a que el tratamiento termine para declarar la estabilidad médica.',
    'respuesta_completa' => '<p>La ART no debería otorgar el alta si el tratamiento no está completo:</p><ul><li><strong>Tratamiento completo:</strong> la ART debe cubrir todo el tratamiento prescrito por el médico.</li><li><strong>Estabilidad:</strong> no se puede determinar la estabilidad médica sin haber completado el tratamiento.</li><li><strong>Impugnación:</strong> si te dieron el alta antes de tiempo, tenés argumentos para impugnar.</li></ul><p>Presentá los informes médicos que muestren que el tratamiento no está completo ante la Comisión Médica.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'tratamiento', 'estabilidad-medica'],
    'lesiones_relacionadas' => ['rodilla', 'hombro', 'columna'],
    'articulos_relacionados' => ['alta-medica-art', 'que-hacer', 'comisiones-medicas'],
],";
$entries[] = "[
    'id' => 'alta-medica-022',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Qué es la incapacidad temporal y cuándo se convierte en permanente?',
    'respuesta_corta' => 'La incapacidad temporal es la pérdida transitoria de tu capacidad de trabajo. Se convierte en permanente cuando alcanzás la estabilidad médica y quedan secuelas.',
    'respuesta_completa' => '<p>La incapacidad temporal es una prestación que recibís mientras estás imposibilitado de trabajar:</p><ul><li><strong>Temporal:</strong> es mientras te estás recuperando y no podés trabajar.</li><li><strong>Permanente:</strong> es cuando alcanzás la estabilidad médica y quedan secuelas.</li><li><strong>Cambio:</strong> la ART puede cambiar de temporal a permanente cuando considera que ya no vas a mejorar.</li></ul><p>Si la ART quiere cambiar tu incapacidad con un porcentaje bajo, podés impugnarlo ante la Comisión Médica.</p>',
    'definiciones_relacionadas' => ['incapacidad-temporal', 'incapacidad-permanente', 'estabilidad-medica'],
    'lesiones_relacionadas' => ['columna', 'lumbar', 'hombro', 'rodilla'],
    'articulos_relacionados' => ['alta-medica-art', 'tabla-incapacidad'],
],";
$entries[] = "[
    'id' => 'alta-medica-023',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Puedo seguir con el tratamiento después del alta médica?',
    'respuesta_corta' => 'Sí, la ART debe seguir cubriendo el tratamiento de las secuelas del accidente, incluso después del alta.',
    'respuesta_completa' => '<p>Después del alta médica, la ART sigue responsable del tratamiento de las secuelas:</p><ul><li><strong>Secuelas:</strong> si quedaron limitaciones, la ART debe cubrir el tratamiento.</li><li><strong>Fisioterapia:</strong> si necesitás seguir con kinesiología, la ART debe seguir cubriéndola.</li><li><strong>Medicación:</strong> si necesitás medicación para las secuelas, la ART debe proporcionarla.</li></ul><p>El alta médica no significa que la ART se lave las manos. Seguís teniendo derecho a recibir tratamiento para las consecuencias del accidente.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'tratamiento', 'secuelas'],
    'lesiones_relacionadas' => ['rodilla', 'hombro', 'columna', 'cervical'],
    'articulos_relacionados' => ['alta-medica-art', 'que-hacer'],
],";
$entries[] = "[
    'id' => 'alta-medica-024',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Me pueden despedir después del alta médica por la ART?',
    'respuesta_corta' => 'No, no pueden despedirte solo por haber tenido un accidente de trabajo. Es considerado despido discriminatorio.',
    'respuesta_completa' => '<p>El despido después del alta médica puede ser considerado discriminatorio:</p><ul><li><strong>Protección:</strong> la ley protege a los trabajadores que sufrieron accidentes de trabajo.</li><li><strong>Discriminación:</strong> si te despiden por el accidente, es un despido nulo.</li><li><strong>Reclamo:</strong> podés reclamar la reinstalación o una indemnización agravada.</li></ul><p>Si te despiden después del alta, documentá todo y consultá con un abogado especialista.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'despido', 'discriminacion'],
    'lesiones_relacionadas' => ['columna', 'lumbar', 'hombro', 'rodilla'],
    'articulos_relacionados' => ['alta-medica-art', 'que-hacer'],
],";
$entries[] = "[
    'id' => 'alta-medica-025',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Qué pasa si no estoy conforme con el porcentaje de incapacidad?',
    'respuesta_corta' => 'Podés impugnar el porcentaje ante la Comisión Médica dentro de los 10 días hábiles de notificación.',
    'respuesta_completa' => '<p>Si el porcentaje de incapacidad no te parece justo:</p><ul><li><strong>Impugnación:</strong> presentá la impugnación ante la Comisión Médica en 10 días hábiles.</li><li><strong>Perito:</strong> la Comisión designará un perito médico independiente.</li><li><strong>Audiencia:</strong> se realizará una audiencia para evaluar tu caso.</li><li><strong>Apelación:</strong> si no estás conforme, podés apelar ante la justicia.</li></ul><p>No aceptes un porcentaje bajo sin antes consultar con un abogado.</p>',
    'definiciones_relacionadas' => ['incapacidad', 'porcentaje-incapacidad', 'impugnacion'],
    'lesiones_relacionadas' => ['hombro', 'rodilla', 'columna', 'mano', 'muneca'],
    'articulos_relacionados' => ['tabla-incapacidad', 'baremo-lesion', 'comisiones-medicas'],
],";
$entries[] = "[
    'id' => 'alta-medica-026',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿La ART tiene obligación de avisarme antes de darme el alta?',
    'respuesta_corta' => 'Sí, la ART tiene la obligación de notificarte formalmente. Sin esa notificación, el alta no tiene efectos.',
    'respuesta_completa' => '<p>La notificación del alta médica es un requisito obligatorio:</p><ul><li><strong>Formalidad:</strong> la ART debe notificarte por escrito del alta.</li><li><strong>Plazo:</strong> recién después de la notificación empieza a correr el plazo para impugnar.</li><li><strong>Responsabilidad:</strong> si la ART no cumple con la notificación, comete una irregularidad.</li></ul><p>Guardá toda la documentación que recibas. La falta de notificación puede darte más tiempo para impugnar.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'notificacion', 'obligaciones-art'],
    'lesiones_relacionadas' => ['columna', 'lumbar', 'hombro'],
    'articulos_relacionados' => ['alta-medica-art', 'comisiones-medicas'],
],";
$entries[] = "[
    'id' => 'alta-medica-027',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Qué pasa si la ART me da el alta y después descubren otra lesión?',
    'respuesta_corta' => 'Si se descubre una lesión nueva relacionada con el accidente, la ART debe reabrir tu caso y cubrir el tratamiento.',
    'respuesta_completa' => '<p>Si después del alta se descubre una lesión no diagnosticada:</p><ul><li><strong>Nueva lesión:</strong> si está relacionada con el accidente original, la ART debe cubrirla.</li><li><strong>Reapertura:</strong> podés solicitar la reapertura del caso ante la Comisión Médica.</li><li><strong>Tratamiento:</strong> la ART debe proporcionar el tratamiento necesario.</li></ul><p>Documentá bien el diagnóstico nuevo y demuestre su relación con el accidente.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'nueva-lesion', 'reapertura'],
    'lesiones_relacionadas' => ['rodilla', 'hombro', 'columna', 'cervical'],
    'articulos_relacionados' => ['alta-medica-art', 'comisiones-medicas', 'que-hacer'],
],";
$entries[] = "[
    'id' => 'alta-medica-028',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Me pueden suspender del trabajo durante el alta médica?',
    'respuesta_corta' => 'El alta indica que estás apto para volver, pero si tenés limitaciones, tu empleador debe adecuar tu puesto.',
    'respuesta_completa' => '<p>Después del alta, tu empleador puede esperar que vuelvas al trabajo:</p><ul><li><strong>Vuelta obligatoria:</strong> el alta indica que estás apto para trabajar.</li><li><strong>Adecuación:</strong> si tenés limitaciones, el empleador debe adecuar el puesto.</li><li><strong>Suspensión:</strong> si te suspenden sin justificación, podés impugnar la decisión.</li></ul><p>Si te suspenden sin razón válida, comunicá la situación con un abogado.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'suspension', 'reincorporacion'],
    'lesiones_relacionadas' => ['columna', 'lumbar', 'hombro'],
    'articulos_relacionados' => ['alta-medica-art', 'que-hacer'],
],";
$entries[] = "[
    'id' => 'alta-medica-029',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Qué documentos necesito para impugnar el alta médica?',
    'respuesta_corta' => 'Necesitás el certificado de alta, informes médicos, y presentar la impugnación en 10 días hábiles ante la Comisión Médica.',
    'respuesta_completa' => '<p>Para impugnar el alta médica necesitás:</p><ul><li><strong>Certificado de alta:</strong> la notificación formal de la ART.</li><li><strong>Informes médicos:</strong> certificados que muestren tu estado actual.</li><li><strong>Formulario:</strong> el formulario de impugnación de la Comisión Médica.</li><li><strong>DNI:</strong> copia de tu documento de identidad.</li></ul><p>Actuá rápido, el plazo es de 10 días hábiles.</p>',
    'definiciones_relacionadas' => ['alta-medica', 'impugnacion', 'documentacion'],
    'lesiones_relacionadas' => ['hombro', 'rodilla', 'columna'],
    'articulos_relacionados' => ['alta-medica-art', 'comisiones-medicas', 'que-hacer'],
],";
$entries[] = "[
    'id' => 'alta-medica-030',
    'categoria' => 'Alta Médica',
    'pregunta' => '¿Qué pasa si la ART me paga la indemnización sin mi conformidad?',
    'respuesta_corta' => 'El pago no significa que aceptes el porcentaje. Podés reclamar un monto mayor.',
    'respuesta_completa' => '<p>Si la ART te deposita una indemnización sin que estés de acuerdo:</p><ul><li><strong>Aceptación:</strong> el simple depósito no implica aceptación del porcentaje.</li><li><strong>Reclamo:</strong> podés reclamar un monto mayor si el porcentaje es bajo.</li><li><strong>Plazo:</strong> tenés un plazo para impugnar la decisión.</li></ul><p>No retires el dinero sin antes consultar con un abogado.</p>',
    'definiciones_relacionadas' => ['indemnizacion', 'incapacidad', 'impugnacion'],
    'lesiones_relacionadas' => ['hombro', 'rodilla', 'columna', 'mano'],
    'articulos_relacionados' => ['tabla-incapacidad', 'calculadora-accidentes', 'baremo-lesion'],
],";

$handle = fopen(__DIR__ . '/preguntas_lote1_chunk1.php', 'w');
fwrite($handle, implode("\n", $entries));
fclose($handle);
echo "chunk1: " . count($entries) . " entries\n";
