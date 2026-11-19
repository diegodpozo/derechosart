<?php
/**
 * VISTA: CALCULADORA DE INDEMNIZACION POR ACCIDENTE (ART)
 * LOGICA EXTRAIDA Y ADAPTADA DE SISTEMA ANTERIOR
 */

// 1. INICIALIZACION DE VARIABLES Y LOGICA DE CALCULO
$Resultado = "";
$Sueldo = "";
$Incapacidad = "";
$Edad = "";
$EnTrabajo = "";
$Errores = [];

if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    // LIMPIEZA DE SEPARADORES DE MILES (APOSTROFES)
    $SueldoRaw = str_replace("'", "", $_POST["sueldo"] ?? '');
    $Sueldo = filter_var($SueldoRaw, FILTER_VALIDATE_INT);
    $Incapacidad = filter_input(INPUT_POST, "incapacidad", FILTER_VALIDATE_INT);
    $Edad = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);
    $EnTrabajo = $_POST["enTrabajo"] ?? '';

    // 2. VALIDACIONES
    if ($Sueldo === false || $Sueldo < 0) {
        $Errores[] = "EL SUELDO DEBE SER UN NÚMERO ENTERO POSITIVO.";
    }
    if ($Incapacidad === false || $Incapacidad < 0 || $Incapacidad > 100) {
        $Errores[] = "LA INCAPACIDAD DEBE SER UN NÚMERO ENTRE 0 Y 100.";
    }
    if ($Edad === false || $Edad <= 0) {
        $Errores[] = "LA EDAD DEBE SER UN NÚMERO ENTERO POSITIVO.";
    }
    if ($EnTrabajo !== "trabajo" && $EnTrabajo !== "trayecto") {
        $Errores[] = "DEBE SELECCIONAR UNA OPCION VALIDA EN EL LUGAR DEL HECHO.";
    }

    // 3. FORMULA DE CALCULO (LEY DE RIESGOS DEL TRABAJO)
    if (empty($Errores)) {
        // FORMULA: (53 * % INCAPACIDAD * SUELDO * (65 / EDAD)) / 100
        $ValorBase = (53 * $Incapacidad * $Sueldo * (65 / $Edad)) / 100;
        
        // ADICIONAL DEL 20% SI FUE EN EL LUGAR DE TRABAJO (NO IN ITINERE)
        if ($EnTrabajo === "trabajo") {
            $ValorBase *= 1.20;
        }
        
        // FORMATEO FINAL
        $Resultado = "$" . number_format($ValorBase, 0, ",", "'");
    }
}
?>

<main class="fade-in">
    <!-- HERO DE LA PAGINA -->
    <section class="hero-interna">
        <section class="contenedor">
            <?= renderBadgeResenas(null, 'mb-15') ?>
            <h1>Calculadora de <span class="subrayado-amarillo"><strong>Indemnización ART</strong></span></h1>
            <p class="subtitulo-hero">Calculá de forma orientativa cuánto te corresponde cobrar por tu accidente laboral o enfermedad profesional.</p>

        </section>
    </section>

    <!-- CUERPO DE LA CALCULADORA -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <section class="grid-info-doble mt-0 al-inicio">
                
                <!-- FORMULARIO -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h2 class="mb-30">Ingresá tus <span class="subrayado-amarillo">datos</span></h2>
                    
                    <?php if (!empty($Errores)): ?>
                        <article class="p-20 mb-20 border-radius-20" style="background-color: #fee2e2; color: #b91c1c; border: 0.0625rem solid #f87171;">
                            <ul class="m-0">
                                <?php foreach ($Errores as $e): ?>
                                    <li class="fs-09"><b><?php echo $e; ?></b></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    <?php endif; ?>

                    <form id="formCalculadoraAccidentes" method="POST" class="flex-column gap-20">
                        <article class="form-group" style="padding: 0.5rem 0;">
                            <label class="fw-700 fs-09 mb-10 display-block">TU SUELDO BRUTO (PROMEDIO MENSUAL):</label>
                            <input type="text" id="sueldo" name="sueldo" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Sueldo ? number_format((int)$Sueldo, 0, ",", "'") : ''); ?>" 
                                   placeholder="Ej: 850'000" required>
                        </article>

                        <article class="form-group" style="padding: 0.5rem 0;">
                            <label class="fw-700 fs-09 mb-10 display-block">PORCENTAJE DE INCAPACIDAD (%):</label>
                            <input type="number" name="incapacidad" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Incapacidad); ?>" 
                                   placeholder="Ej: 15" required min="0" max="100">
                        </article>

                        <article class="form-group" style="padding: 0.5rem 0;">
                            <label class="fw-700 fs-09 mb-10 display-block">TU EDAD AL MOMENTO DEL ACCIDENTE:</label>
                            <input type="number" name="edad" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Edad); ?>" 
                                   placeholder="Ej: 35" required min="18" max="100">
                        </article>

                        <article class="form-group" style="padding: 0.5rem 0;">
                            <label class="fw-700 fs-09 mb-10 display-block">¿DÓNDE OCURRIÓ EL HECHO?:</label>
                            <select name="enTrabajo" class="input-fiel" required style="cursor: pointer;">
                                <option value="trabajo" <?php if ($EnTrabajo==="trabajo") echo "selected"; ?>>EN EL LUGAR DE TRABAJO (SUMA +20%)</option>
                                <option value="trayecto" <?php if ($EnTrabajo==="trayecto") echo "selected"; ?>>IN ITINERE (YENDO O VOLVIENDO)</option>
                            </select>
                        </article>

                        <button type="submit" class="btn btn-amarillo" style="margin-top: 1.875rem !important;">
                            CALCULAR MI INDEMNIZACIÓN
                        </button>
                    </form>
                </article>

                <!-- RESULTADO O EXPLICACION -->
                <article>
                    <?php if ($Resultado !== ""): ?>
                        <article class="info-bloque b-none bl-8-amarillo" id="resultado-final">
                            <h3 class="txt-amarillo mb-10">RESULTADO ESTIMADO:</h3>
                            <p class="fs-30 fw-800 txt-negro"><?php echo $Resultado; ?> *</p>
                            <p class="mt-20 fs-09 txt-gris"><i>* Este cálculo es una liquidación orientativa basada en los valores ingresados. No garantiza el cobro efectivo de dicho monto, ya que depende de la pericia médica y legal.</i></p>
                            <div class="mt-15 p-15 border-radius-15 bg-blanco fs-085 txt-gris">
                                <strong>⚖️ Piso mínimo de ley:</strong> Si la fórmula matemática da un valor inferior al piso legal fijado por la SRT y la Secretaría de Seguridad Social para tu porcentaje de incapacidad, la ART debe abonar el piso mínimo actualizado por RIPTE. <a href="<?= BASE_URL ?>baremo/pisos-minimos-indemnizacion" class="txt-amarillo fw-700">Ver pisos mínimos vigentes</a>.
                            </div>
                            
                            <article class="mt-40 p-30 border-radius-20 bg-gris">
                                <h4 class="mb-15">¿Querés cobrar este monto?</h4>
                                <p class="fs-09 mb-20">Analizamos tu caso sin costo para asegurarnos de que la ART te pague lo que corresponde por ley.</p>
                                <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-outline w-100">
                                   <?= render_icon('whatsapp', '', 'transform: scale(2.0);') ?> CONSULTANOS GRATIS
                                </a>
                            </article>
                        </article>
                    <?php else: ?>
                        <article class="info-bloque b-none">
                            <h3 class="mb-20">¿Cómo funciona el cálculo de indemnización por ART?</h3>
                            <p class="txt-gris mb-15">La indemnización por accidente de trabajo en Argentina se rige por la <b>Ley de Riesgos del Trabajo</b> y utiliza una fórmula polinómica que protege al trabajador accidentado. El cálculo tiene en cuenta:</p>
                            <ul class="flex-column gap-15 txt-gris fs-09">
                                <li><?= render_icon('check', 'mr-10') ?> <b>El IBM (Ingreso Base Mensual):</b> Es el promedio de tus sueldos del último año, ajustado por RIPTE para que no pierda valor frente a la inflación.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>El Porcentaje de Incapacidad:</b> Determinado por el <b>Nuevo Baremo Laboral (Decreto 549/2025)</b>. Lesiones como <b>hernias de disco</b>, meniscos o fracturas tienen porcentajes oficiales específicos.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Factor Edad:</b> La fórmula (65 dividido tu edad) beneficia a los trabajadores más jóvenes, otorgándoles un coeficiente mayor.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Pago Adicional del 20%:</b> Si el accidente ocurrió en tu lugar de trabajo o por el cumplimiento de tus tareas, se suma una compensación extra por "daño moral".</li>
                            </ul>

                        </article>
                    <?php endif; ?>
                </article>

            </section>
        </section>
    </section>

    <!-- SECCION LINKS: CONSULTA TU LESION -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <section class="grid-info-doble mt-0" style="align-items: flex-start;">

                <article class="info-bloque b-none bl-8-amarillo">
                    <h2 class="mb-30">Consultá tu <span class="subrayado-amarillo">lesión</span></h2>
                    <div class="lista-lesiones-simples">
                        <a href="<?= BASE_URL ?>baremo/fracturas-vertebrales">🦴 Fracturas vertebrales: porcentajes de incapacidad <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-hombro">🏋️ Lesiones de hombro y cintura escapular <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-rodilla">🦵 Lesiones de rodilla: fracturas, ligamentos y meniscos <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-mano-dedo">✋ Lesiones de mano y muñeca: fracturas, amputaciones y tendones <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-femur">🦵 Fractura de fémur: porcentajes de incapacidad <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-tibia-perone">🦯 Fracturas de tibia y peroné <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-tobillo">🦶 Fracturas de tobillo <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-cadera">🦴 Lesiones de cadera: fracturas y prótesis <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-brazo-radio-cubito">💪 Fracturas de brazo: radio y cúbito <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesion-dedos-pie">🦶 Lesiones de los dedos del pie <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                    </div>
                </article>

                <article class="info-bloque b-none bl-8-amarillo">
                    <div class="espaciador-lista-lesiones"></div>
                    <div class="lista-lesiones-simples">
                        <a href="<?= BASE_URL ?>baremo/amputaciones-miembro-superior">💪 Amputaciones del miembro superior <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/cicatrices-rostro">😶 Cicatrices en rostro y cuero cabelludo <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/lesiones-oculares">👁️ Lesiones oculares: porcentajes de incapacidad <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/enfermedades-profesionales">🦠 Enfermedades profesionales: túnel carpiano, hernias y más <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/gran-invalidez">🏥 Gran invalidez: qué es y cómo se reclama <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/pisos-minimos-indemnizacion">⚖️ Pisos mínimos de indemnización <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                        <a href="<?= BASE_URL ?>baremo/fallecimiento-trabajador">💔 Fallecimiento del trabajador: indemnización <?= render_icon('chevron-right', 'arrow-icon') ?></a>
                    </div>
                </article>

            </section>
        </section>
    </section>

    <style>
    .espaciador-lista-lesiones { height: 3.7rem; }
    @media (max-width: 48rem) {
        .espaciador-lista-lesiones { display: none; }
    }
    .lista-lesiones-simples { margin-top: 1.5rem; }
    .lista-lesiones-simples a { display: flex; align-items: center; gap: 0.75rem; padding: 0.6rem 0; font-size: 1rem; font-weight: 600; color: #000; border-bottom: 1px solid #ddd; text-decoration: none; }
    .lista-lesiones-simples a:last-child { border-bottom: none; }
    .lista-lesiones-simples a:hover { color: #e6b800; }
    .lista-lesiones-simples a:hover .arrow-icon { transform: translateX(3px); }
    .lista-lesiones-simples .arrow-icon { width: 0.75rem; height: 0.75rem; color: #666; margin-left: auto; transition: transform 0.2s; flex-shrink: 0; }
    /* MODO OSCURO: el color literal #000 y el borde #ddd estan calibrados para
       fondo blanco. En oscuro se pisan con tokens semanticos. El modo claro
       NO se toca: estas reglas solo aplican bajo [data-tema="oscuro"]. */
    [data-tema="oscuro"] .lista-lesiones-simples a { color: var(--text); border-bottom-color: var(--border); }
    [data-tema="oscuro"] .lista-lesiones-simples .arrow-icon { color: var(--text-mute); }
    </style>

    <!-- SECCION EDUCATIVA: BAREMO Y DECRETO 549/2025 -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion">Cálculo de <span class="subrayado-amarillo">Incapacidad</span></h2>
            <p class="txt-gris mb-40" style="max-width: 62.5rem; margin-left: auto; margin-right: auto; font-size: 1.1rem; text-align: center;">Conocé cómo determinan los médicos de la SRT el porcentaje de incapacidad tras un accidente o enfermedad laboral.</p>

            <!-- GRID DOS COLUMNAS -->
            <div class="grid-info-doble mt-40">
                
                <!-- TABLA OFICIAL -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <div style="display: flex; align-items: center; gap: 0.9375rem; margin-bottom: 1.5625rem;">
                        <div style="width: 2.5rem; height: 2.5rem; background: var(--amarillo); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <?= render_icon('stethoscope-solid', '', 'width: 1.3rem; height: 1.3rem;', '#000000') ?>
                        </div>
                        <h3 class="m-0" style="font-size: 1.4rem; font-weight: 800;">Tabla de Incapacidad</h3>
                    </div>
                    
                    <p class="txt-gris mb-20">Para calcular el porcentaje de incapacidad los médicos de la SRT (Superintendencia de Riesgos del Trabajo) utilizan una tabla oficial que contiene el porcentaje de incapacidad que dejó un accidente laboral o una enfermedad profesional.</p>
                    <p class="txt-gris mb-20">Esa tabla sirve para determinar cuánto afectó ese daño la capacidad de una persona para trabajar.</p>
                    
                    <div class="p-20 bg-gris border-radius-15">
                        <p class="m-0 fs-09">Está establecido por el Poder Ejecutivo Nacional según lo dispuesto en la Ley 24.557.</p>
                    </div>
                </article>

                <!-- DECRETO 549/2025 -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <div style="display: flex; align-items: center; gap: 0.9375rem; margin-bottom: 1.5625rem;">
                        <div style="width: 2.5rem; height: 2.5rem; background: var(--amarillo); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <?= render_icon('scale-balanced', '', 'width: 1.3rem; height: 1.3rem;', '#000000') ?>
                        </div>
                        <h3 class="m-0" style="font-size: 1.4rem; font-weight: 800;">Decreto 549/2025</h3>
                    </div>
                    
                    <p class="txt-gris mb-20">El Decreto 549/2025 fue publicado el 6 de agosto de 2025 en el Boletín Oficial y comenzó a aplicarse el 1° de febrero de 2026.</p>
                    
                    <div class="p-20 bg-gris border-radius-15">
                        <p class="m-0 fs-09">Desde esa fecha, el nuevo Baremo debe usarse obligatoriamente en todos los casos donde todavía no se haya determinado la incapacidad, tanto en expedientes administrativos como judiciales.</p>
                    </div>
                </article>

            </div>
        </section>
    </section>

    <!-- SECCION CASOS REALES Y CONSULTAS FRECUENTES -->
    <section class="seccion-texto py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">Casos y consultas reales de <span class="subrayado-amarillo"><strong>trabajadores accidentados</strong></span></h2>
            <p class="txt-gris mb-40 max-w-800 mx-auto centro fs-11">Liquidaciones, divergencias médicas y reclamos resueltos según cada tipo de lesión y la aplicación de la Ley de Riesgos del Trabajo.</p>

            <div class="grid-info-doble mt-40">
                <!-- CASO 1: HERNIA DE DISCO -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-15 fs-12">Hernia de disco lumbar operada con rechazo inicial de la ART</h3>
                    <p class="txt-gris fs-09 mb-15"><strong>Consulta del trabajador:</strong> Operario de logística que sufrió lumbociatalgia aguda tras esfuerzo de carga. La ART pretendía rechazar el caso alegando que se trataba de una <em>"patología preexistente degenerativa e inculpable"</em>.</p>
                    <div class="p-15 bg-gris border-radius-15 fs-085 txt-gris">
                        <strong>Resolución legal:</strong> Se inició el trámite de <strong>divergencia en el rechazo</strong> ante la Comisión Médica acreditando el nexo causal con el esfuerzo laboral. Tras la cirugía de microdiscectomía, se le asignó el <strong>5% de incapacidad fija según el Baremo 2026 (Decreto 549/2025)</strong>, garantizando el cobro íntegro del piso mínimo legal garantizado actualizado por índice RIPTE más el adicional del 20% previsto en la Ley 26.773.
                    </div>
                </article>

                <!-- CASO 2: MENISCOS Y LIGAMENTOS -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-15 fs-12">Rotura de menisco operado e inestabilidad con alta médica en 0%</h3>
                    <p class="txt-gris fs-09 mb-15"><strong>Consulta del trabajador:</strong> Chofer de distribución con torsión de rodilla al descender del camión. Fue intervenido quirúrgicamente por artroscopía (meniscectomía) y la ART le dio el alta médica asignándole <strong>0% de incapacidad</strong>.</p>
                    <div class="p-15 bg-gris border-radius-15 fs-085 txt-gris">
                        <strong>Resolución legal:</strong> Ante secuelas de dolor y limitación funcional, se impugnó el alta con perito médico de parte ante la SRT. Conforme al Baremo 2026 (Decreto 549/2025), la meniscectomía fija un 4% y, al comprobarse inestabilidad ligamentaria residual, la Comisión Médica dictaminó un <strong>9% de incapacidad física</strong> (dentro del rango oficial de 4% a 11% para afecciones de rodilla), cobrando la indemnización correspondiente en sede administrativa sin ir a juicio.
                    </div>
                </article>

                <!-- CASO 3: FRACTURA DE RADIO / MUÑECA -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-15 fs-12">Fractura de muñeca (radio distal) en accidente in itinere</h3>
                    <p class="txt-gris fs-09 mb-15"><strong>Consulta del trabajador:</strong> Empleada de comercio que sufrió una caída en la vía pública en el trayecto de regreso a su hogar (accidente in itinere), requiriendo yeso y rehabilitación prolongada.</p>
                    <div class="p-15 bg-gris border-radius-15 fs-085 txt-gris">
                        <strong>Resolución legal:</strong> La aseguradora pretendía liquidar aplicando un salario desactualizado. Con patrocinio letrado, se intimó el recálculo del <strong>Ingreso Base Mensual (IBM)</strong> actualizando las 12 remuneraciones previas por índice RIPTE (Art. 12 Ley 24.557), cobrando la indemnización correcta por el <strong>6% de incapacidad</strong> determinado por el Baremo 2026 para secuela flexo-extensora de muñeca.
                    </div>
                </article>

                <!-- CASO 4: AMPUTACION DE DEDO -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-15 fs-12">Amputación de falange en dedo índice (mano hábil)</h3>
                    <p class="txt-gris fs-09 mb-15"><strong>Consulta del trabajador:</strong> Operario metalúrgico que sufrió atrapamiento de falange en maquinaria en planta. La ART pretendía liquidar la lesión sin computar el plus por mano hábil ni el adicional por hecho en el trabajo.</p>
                    <div class="p-15 bg-gris border-radius-15 fs-085 txt-gris">
                        <strong>Resolución legal:</strong> Se aplicó el Baremo 2026 fijando un <strong>6% de incapacidad permanente</strong> por pérdida de falange distal en mano dominante, y se exigió el adicional del <strong>20% de compensación integral</strong> previsto en el artículo 3 de la Ley 26.773 por haber ocurrido en el establecimiento laboral.
                    </div>
                </article>

                <!-- CASO 5: TUNEL CARPIANO -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-15 fs-12">Síndrome del túnel carpiano bilateral en tareas de empaque</h3>
                    <p class="txt-gris fs-09 mb-15"><strong>Consulta del trabajador:</strong> Trabajadora con adormecimiento nocturno y pérdida de fuerza en ambas manos por movimientos repetitivos continuos en línea de producción.</p>
                    <div class="p-15 bg-gris border-radius-15 fs-085 txt-gris">
                        <strong>Resolución legal:</strong> Se denunció como <strong>enfermedad profesional</strong> (Decreto 658/96). Mediante electromiograma (EMG) se constató compresión del nervio mediano, garantizando la cobertura de la cirugía de descompresión y una indemnización del <strong>5% de incapacidad integral</strong> conforme a las tablas del Decreto 549/2025.
                    </div>
                </article>

                <!-- CASO 6: FRACTURA VERTEBRAL / LUMBALGIA -->
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-15 fs-12">Aplastamiento vertebral en caída de altura en la construcción</h3>
                    <p class="txt-gris fs-09 mb-15"><strong>Consulta del trabajador:</strong> Albañil que cayó de un andamio sufriendo traumatismo lumbar con acuñamiento de vértebra L1. La ART pretendía cerrar el caso sin considerar la pérdida de altura del cuerpo vertebral.</p>
                    <div class="p-15 bg-gris border-radius-15 fs-085 txt-gris">
                        <strong>Resolución legal:</strong> Con estudios de tomografía se acreditó una reducción de altura del cuerpo vertebral menor al 50%. La Comisión Médica dictaminó un <strong>12% de incapacidad</strong> según el Baremo 2026 (Decreto 549/2025), sumando los factores de ponderación laboral por edad y dificultad para tareas pesadas.
                    </div>
                </article>
            </div>
        </section>
    </section>

    <!-- SECCION INFO EXTRA -->
    <section class="py-60 bg-blanco">
        <section class="contenedor centro">
            <h2 class="titulo-seccion">No dejes que la ART <span class="subrayado-amarillo"><strong>decida por vos</strong></span></h2>
            <p class="max-w-600 mx-auto txt-gris">A veces la ART ofrece montos menores a los que corresponden por ley o te otorga un alta médica sin haberte recuperado totalmente. <b>Consultanos <span class="subrayado-amarillo">antes de firmar</span> cualquier acuerdo.</b></p>
        </section>
    </section>

    <!-- SECCION PREGUNTAS FRECUENTES -->
    <section class="py-60 bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion">Preguntas frecuentes sobre el <span class="subrayado-amarillo"><strong>cálculo de indemnización</strong></span></h2>
            <section class="max-w-900 mx-auto mt-40">
                <section class="lista-faq mt-0">
                    <details>
                        <summary><h3>¿La ART me cubre si me desvié del camino habitual para buscar a mi hijo a la escuela o ir al médico?</h3></summary>
                        <article class="respuesta">
                            <p>Sí. El artículo 6 de la <strong>Ley 24.557</strong> establece que el trayecto entre el trabajo y el domicilio no se interrumpe si el desvío ocurre por razones de fuerza mayor, asistencia médica o auxilio familiar debidamente justificado. Si la aseguradora te rechazó el siniestro alegando que te apartaste del camino, tenés derecho a iniciar el trámite de <strong>divergencia en el rechazo</strong> ante la Comisión Médica de la SRT con patrocinio letrado gratuito para revocar la negativa y exigir la cobertura y el cobro de la indemnización.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué pasa si me asaltan en la parada del colectivo o sufro un choque en moto yendo a trabajar?</h3></summary>
                        <article class="respuesta">
                            <p>Los asaltos violentos en la vía pública y los siniestros viales durante el recorrido laboral son genuinos accidentes <em>in itinere</em> protegidos por la ley. La aseguradora debe cubrir la totalidad de la asistencia médica, medicamentos, cirugías y, fundamentalmente, la terapia psicológica o psiquiátrica por trauma. Si te quedan secuelas físicas o pánico (estrés postraumático), la Comisión Médica debe cuantificar el porcentaje de incapacidad física y psíquica para cobrar la indemnización correspondiente.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>Hice fuerza levantando peso en el trabajo, me quedé duro de la cintura y la ART dice que es 'degenerativo inculpable'. ¿Tienen razón?</h3></summary>
                        <article class="respuesta">
                            <p>No. Catalogar hernias de disco o lumbalgias agudas como <em>"patologías inculpables preexistentes"</em> es la maniobra habitual de las ART para denegar la cobertura. Si el esfuerzo físico laboral desencadenó o agravó la afección, se inicia la divergencia ante la SRT acreditando el nexo de causalidad laboral. Conforme al nuevo Baremo Laboral (Decreto 549/2025), una hernia de disco operada fija un <strong>5% de incapacidad</strong> garantizando el cobro íntegro del piso mínimo de ley más el 20% adicional de la Ley 26.773.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Cuánto es lo mínimo garantizado que tiene que pagarme la ART si mi sueldo o mi edad dan un monto bajo?</h3></summary>
                        <article class="respuesta">
                            <p>La ley protege al trabajador mediante un <strong>piso mínimo legal obligatorio</strong> que se actualiza periódicamente por la variación del índice RIPTE (Secretaría de Seguridad Social). Aunque por la fórmula matemática el cálculo arrojara una cifra menor debido a un salario bajo o edad avanzada, la aseguradora está obligada a abonar como mínimo el piso legal garantizado para tu porcentaje de incapacidad, más el adicional del 20% de compensación integral si el accidente ocurrió en el lugar de trabajo. Podés revisar los valores vigentes en nuestra sección de <a href="<?= BASE_URL ?>baremo/pisos-minimos-indemnizacion">pisos mínimos de indemnización</a>.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>La ART me dio el alta médica diciendo que tengo 0% de incapacidad pero me sigue doliendo y no puedo trabajar. ¿Qué hago?</h3></summary>
                        <article class="respuesta">
                            <p>No prestes conformidad con el alta médica. Las aseguradoras suelen emitir altas precipitadas para cortar el pago de prestaciones dinerarias. Dentro de los plazos legales, tenés derecho a interponer un trámite de <strong>divergencia en el alta médica</strong> ante la Comisión Médica de la SRT. Con intervención de un perito médico de parte y patrocinio legal, se exige la continuidad del tratamiento o la apertura del expediente de determinación de incapacidad para fijar el porcentaje real que te corresponde cobrar.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Tengo que pagarle honorarios a un abogado para que me defienda ante la Comisión Médica de la SRT?</h3></summary>
                        <article class="respuesta">
                            <p>No. El artículo 1 de la <strong>Ley 27.348</strong> establece que el patrocinio letrado ante las comisiones médicas es obligatorio y <strong>100% gratuito para el trabajador accidentado</strong>, quedando los honorarios profesionales a cargo exclusivo de las ART. En DerechosART no cobramos ningún adelanto ni consulta: solo percibimos honorarios si vos cobrás efectivamente tu indemnización.</p>
                        </article>
                    </details>
                </section>
            </section>
        </section>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FORMATEO DE MILES EN TIEMPO REAL (USA APOSTROFES PARA EL SUELDO)
    const sueldoInput = document.getElementById("sueldo");
    if (sueldoInput) {
        sueldoInput.addEventListener("input", function(e) {
            let valor = sueldoInput.value.replace(/'/g, "").replace(/[^0-9]/g, "");
            if (valor) {
                sueldoInput.value = new Intl.NumberFormat("es-AR", {useGrouping:true}).format(valor).replace(/\./g,"'");
            } else {
                sueldoInput.value = "";
            }
        });
    }

    // SCROLL AL RESULTADO
    const resFinal = document.getElementById('resultado-final');
    if (resFinal) {
        resFinal.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>
