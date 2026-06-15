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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LIMPIEZA DE SEPARADORES DE MILES (APOSTROFES)
    $SueldoRaw = str_replace("'", "", $_POST["sueldo"] ?? '');
    $Sueldo = filter_var($SueldoRaw, FILTER_VALIDATE_INT);
    $Incapacidad = filter_input(INPUT_POST, "incapacidad", FILTER_VALIDATE_INT);
    $Edad = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);
    $EnTrabajo = $_POST["enTrabajo"] ?? '';

    // 2. VALIDACIONES
    if ($Sueldo === false || $Sueldo < 0) {
        $Errores[] = "EL SUELDO DEBE SER UN NUMERO ENTERO POSITIVO.";
    }
    if ($Incapacidad === false || $Incapacidad < 0 || $Incapacidad > 100) {
        $Errores[] = "LA INCAPACIDAD DEBE SER UN NUMERO ENTRE 0 Y 100.";
    }
    if ($Edad === false || $Edad <= 0) {
        $Errores[] = "LA EDAD DEBE SER UN NUMERO ENTERO POSITIVO.";
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

                    <form method="POST" class="flex-column gap-20">
                        <article class="form-group">
                            <label class="fw-700 fs-09 mb-10 display-block">TU SUELDO BRUTO (PROMEDIO MENSUAL):</label>
                            <input type="text" id="sueldo" name="sueldo" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Sueldo ? number_format((int)$Sueldo, 0, ",", "'") : ''); ?>" 
                                   placeholder="Ej: 850'000" required>
                        </article>

                        <article class="form-group">
                            <label class="fw-700 fs-09 mb-10 display-block">PORCENTAJE DE INCAPACIDAD (%):</label>
                            <input type="number" name="incapacidad" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Incapacidad); ?>" 
                                   placeholder="Ej: 15" required min="0" max="100">
                        </article>

                        <article class="form-group">
                            <label class="fw-700 fs-09 mb-10 display-block">TU EDAD AL MOMENTO DEL ACCIDENTE:</label>
                            <input type="number" name="edad" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Edad); ?>" 
                                   placeholder="Ej: 35" required min="18" max="100">
                        </article>

                        <article class="form-group">
                            <label class="fw-700 fs-09 mb-10 display-block">¿DÓNDE OCURRIÓ EL HECHO?:</label>
                            <select name="enTrabajo" class="input-fiel" required style="cursor: pointer;">
                                <option value="trabajo" <?php if ($EnTrabajo==="trabajo") echo "selected"; ?>>EN EL LUGAR DE TRABAJO (SUMA +20%)</option>
                                <option value="trayecto" <?php if ($EnTrabajo==="trayecto") echo "selected"; ?>>IN ITINERE (YENDO O VOLVIENDO)</option>
                            </select>
                        </article>

                        <button type="submit" class="btn btn-amarillo mt-10">
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
                            
                            <article class="mt-40 p-30 border-radius-20 bg-gris">
                                <h4 class="mb-15">¿Querés cobrar este monto?</h4>
                                <p class="fs-09 mb-20">Analizamos tu caso sin costo para asegurarnos de que la ART te pague lo que corresponde por ley.</p>
                                <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-outline w-100">
                                   <?= render_icon('whatsapp', 'mr-20', 'transform: scale(2.0);') ?> CONSULTANOS GRATIS
                                </a>
                            </article>
                        </article>
                    <?php else: ?>
                        <article class="info-bloque b-none">
                            <h3 class="mb-20">¿Cómo funciona el cálculo de indemnización por ART?</h3>
                            <p class="txt-gris mb-15">La indemnización por accidente de trabajo en Argentina se rige por la <b>Ley de Riesgos del Trabajo</b> y utiliza una fórmula polinómica que protege al trabajador accidentado. El cálculo tiene en cuenta:</p>
                            <ul class="flex-column gap-15 txt-gris fs-09">
                                <li><?= render_icon('check', 'mr-10') ?> <b>El IBM (Ingreso Base Mensual):</b> Es el promedio de tus sueldos del último año, ajustado por RIPTE para que no pierda valor frente a la inflación.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>El Porcentaje de Incapacidad:</b> Determinado por el <b>Baremo Oficial (Decreto 659/96)</b>. Lesiones comunes como las <b>fracturas</b>, golpes severos o túnel carpiano tienen puntajes específicos.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Factor Edad:</b> La fórmula (65 dividido tu edad) beneficia a los trabajadores más jóvenes, otorgándoles un coeficiente mayor.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Pago Adicional del 20%:</b> Si el accidente ocurrió en tu lugar de trabajo o por el cumplimiento de tus tareas, se suma una compensación extra por "daño moral".</li>
                            </ul>

                        </article>
                    <?php endif; ?>
                </article>

            </section>
        </section>
    </section>

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

    <!-- SECCION INFO EXTRA -->
    <section class="py-60 bg-blanco">
        <section class="contenedor centro">
            <h2 class="titulo-seccion">No dejes que la ART <span class="subrayado-amarillo"><strong>decida por vos</strong></span></h2>
            <p class="max-w-600 mx-auto txt-gris">A veces la ART ofrece montos menores a los que corresponden por ley o te otorga un alta médica sin haberte recuperado totalmente. <b>Consultanos <span class="subrayado-amarillo">antes de firmar</span> cualquier acuerdo.</b></p>
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
>

>
