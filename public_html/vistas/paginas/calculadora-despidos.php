<?php
/**
 * VISTA: CALCULADORA DE DESPIDOS COMPLETA
 * LOGICA PIXEL-PERFECT BASADA EN DERECHOSART.COM.AR Y LEY 20.744
 */

// 1. INICIALIZACION DE VARIABLES
$ResultadoTotal = 0;
$DetalleRubros = [];
$Sueldo = "";
$FechaIngreso = "";
$FechaDespido = "";
$Preaviso = "si"; // POR DEFECTO SI (COMO EN LA CAPTURA DONDE PREAVISO ES 0)
$Errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SueldoRaw = str_replace("'", "", $_POST["sueldo"] ?? '');
    $Sueldo = filter_var($SueldoRaw, FILTER_VALIDATE_INT);
    $FechaIngreso = $_POST["fecha_ingreso"] ?? '';
    $FechaDespido = $_POST["fecha_despido"] ?? '';
    $Preaviso = $_POST["preaviso"] ?? 'si';

    if ($Sueldo === false || $Sueldo < 0) {
        $Errores[] = "EL SUELDO DEBE SER UN NUMERO ENTERO POSITIVO.";
    }
    if (empty($FechaIngreso) || empty($FechaDespido)) {
        $Errores[] = "LAS FECHAS SON OBLIGATORIAS.";
    }

    if (empty($Errores)) {
        $Inicio = new DateTime($FechaIngreso);
        $Fin = new DateTime($FechaDespido);
        
        if ($Fin < $Inicio) {
            $Errores[] = "LA FECHA DE DESPIDO NO PUEDE SER ANTERIOR A LA DE INGRESO.";
        } else {
            // A. ANTIGÜEDAD (ART. 245)
            $IntervaloTotal = $Inicio->diff($Fin);
            $AniosAntig = $IntervaloTotal->y;
            $MesesAntig = $IntervaloTotal->m;
            $DiasAntig = $IntervaloTotal->d;

            $Periodos = $AniosAntig;
            if ($MesesAntig > 3 || ($MesesAntig == 3 && $DiasAntig > 0)) {
                $Periodos++;
            }
            if ($Periodos == 0) $Periodos = 1;

            $IndemAntig = $Sueldo * $Periodos;
            $DetalleRubros['Indemnización por antigüedad'] = $IndemAntig;
            $DetalleRubros['SAC sobre indemnización'] = $IndemAntig / 12;

            // B. PREAVISO (SI NO SE OTORGO)
            if ($Preaviso === "no") {
                $MesesPre = ($AniosAntig < 5) ? 1 : 2;
                $MontoPre = $Sueldo * $MesesPre;
                $DetalleRubros['Preaviso'] = $MontoPre;
                $DetalleRubros['SAC sobre preaviso'] = $MontoPre / 12;
            } else {
                $DetalleRubros['Preaviso'] = 0;
                $DetalleRubros['SAC sobre preaviso'] = 0;
            }

            // C. INTEGRACION MES DE DESPIDO
            $UltimoDiaMes = (int)$Fin->format('t');
            $DiaDespido = (int)$Fin->format('d');
            $DiasIntegracion = $UltimoDiaMes - $DiaDespido;

            if ($DiasIntegracion > 0) {
                // LA WEB USA BASE 25 PARA EL CALCULO DIARIO
                $MontoIntegracion = ($Sueldo / 25) * $DiasIntegracion;
                $DetalleRubros['Integración mes de despido'] = $MontoIntegracion;
                $DetalleRubros['SAC sobre integración'] = $MontoIntegracion / 12;
            }

            // D. SUELDO POR DIAS TRABAJADOS (MES ACTUAL)
            $MontoDiasTrabajados = ($Sueldo / 25) * $DiaDespido;
            $DetalleRubros['Sueldo por días trabajados'] = $MontoDiasTrabajados;

            // E. SAC PROPORCIONAL (SEMESTRE ACTUAL)
            // CALCULAMOS DIAS DESDE EL 1 DE ENERO O FECHA DE INGRESO SI ES ESTE AÑO
            $InicioSemestre = new DateTime($Fin->format('Y') . '-01-01');
            if ($Inicio > $InicioSemestre) $InicioSemestre = $Inicio;
            
            $IntervaloSemestre = $InicioSemestre->diff($Fin);
            $DiasSemestre = $IntervaloSemestre->days + 1; // INCLUYE EL DIA DE DESPIDO

            // FORMULA DE LA WEB: (SUELDO / 12 / 30) * DIAS
            $SacProporcional = ($Sueldo / 360) * $DiasSemestre;
            $DetalleRubros['SAC proporcional'] = $SacProporcional;

            // F. VACACIONES PROPORCIONALES
            // DIAS TRABAJADOS EN EL AÑO + DIAS DE INTEGRACION
            $InicioAnio = new DateTime($Fin->format('Y') . '-01-01');
            if ($Inicio > $InicioAnio) $InicioAnio = $Inicio;
            $DiasTrabajadosAnio = ($InicioAnio->diff($Fin)->days + 1) + $DiasIntegracion;

            // DETERMINAR DIAS DE VACACIONES SEGUN ANTIGÜEDAD AL 31/12
            $FinAnio = new DateTime($Fin->format('Y') . '-12-31');
            $AntigAlCierre = $Inicio->diff($FinAnio)->y;
            
            $DiasDerecho = 14;
            if ($AntigAlCierre >= 5) $DiasDerecho = 21;
            if ($AntigAlCierre >= 10) $DiasDerecho = 28;
            if ($AntigAlCierre >= 20) $DiasDerecho = 35;

            $DiasVacProporcionales = ($DiasTrabajadosAnio / 365) * $DiasDerecho;
            $MontoVacaciones = ($Sueldo / 25) * $DiasVacProporcionales;
            $DetalleRubros['Vacaciones proporcionales'] = $MontoVacaciones;

            $ResultadoTotal = array_sum($DetalleRubros);
        }
    }
}
?>

<main class="fade-in">
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Calculadora de <span class="subrayado-amarillo"><strong>Indemnización por Despido</strong></span></h1>
            <p class="subtitulo-hero">Liquidación final detallada según la Ley de Contrato de Trabajo y criterios de DerechosART.</p>
        </section>
    </section>

    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <section class="grid-info-doble mt-0 al-inicio">
                
                <article class="info-bloque b-none bl-8-amarillo">
                    <h2 class="mb-30">Datos de tu <span class="subrayado-amarillo">empleo</span></h2>
                    
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
                            <label class="fw-700 fs-09 mb-10 display-block">MEJOR SUELDO BRUTO MENSUAL:</label>
                            <input type="text" id="sueldo" name="sueldo" class="input-fiel" 
                                   value="<?php echo htmlspecialchars($Sueldo ? number_format((int)$Sueldo, 0, ",", "'") : ''); ?>" 
                                   placeholder="Ej: 30'000" required>
                        </article>

                        <section class="flex-between gap-20">
                            <article class="form-group flex-1">
                                <label class="fw-700 fs-09 mb-10 display-block">FECHA DE INGRESO:</label>
                                <input type="date" name="fecha_ingreso" class="input-fiel" 
                                       value="<?php echo htmlspecialchars($FechaIngreso); ?>" required>
                            </article>
                            <article class="form-group flex-1">
                                <label class="fw-700 fs-09 mb-10 display-block">FECHA DE DESPIDO:</label>
                                <input type="date" name="fecha_despido" class="input-fiel" 
                                       value="<?php echo htmlspecialchars($FechaDespido); ?>" required>
                            </article>
                        </section>

                        <article class="form-group">
                            <label class="fw-700 fs-09 mb-10 display-block">¿TE DIERON PREAVISO?:</label>
                            <select name="preaviso" class="input-fiel" required style="cursor: pointer;">
                                <option value="si" <?php if ($Preaviso==="si") echo "selected"; ?>>SÍ (ESTABA PREAVISADO)</option>
                                <option value="no" <?php if ($Preaviso==="no") echo "selected"; ?>>NO (DESPIDO SORPRESIVO)</option>
                            </select>
                        </article>

                        <button type="submit" class="btn btn-amarillo mt-10">
                            CALCULAR MI LIQUIDACION
                        </button>
                    </form>
                </article>

                <article>
                    <?php if ($ResultadoTotal > 0): ?>
                        <article class="info-bloque b-none bl-8-amarillo" id="resultado-final">
                            <h3 class="txt-amarillo mb-10">TOTAL A COBRAR:</h3>
                            <p class="fs-30 fw-800 txt-negro">$<?php echo number_format($ResultadoTotal, 0, ",", "'"); ?> *</p>
                            
                            <section class="mt-30 border-top pt-20">
                                <h4 class="mb-15 fs-09">DETALLE DE LA LIQUIDACIÓN:</h4>
                                <ul class="flex-column gap-10">
                                    <?php foreach ($DetalleRubros as $nombre => $monto): ?>
                                        <?php if ($monto > 0): ?>
                                        <li class="flex-between fs-09">
                                            <span><?= render_icon('thumbtack', 'mr-10') ?> <?php echo $nombre; ?>:</span>
                                            <span class="fw-700">$<?php echo number_format($monto, 0, ",", "'"); ?></span>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </section>

                            <p class="mt-30 fs-09 txt-gris"><i>* El cálculo es una estimación orientativa. Los valores finales pueden variar según multas por empleo no registrado o convenios específicos.</i></p>
                            
                            <article class="mt-40 p-30 border-radius-20 bg-gris">
                                <h4 class="mb-15">¿Querés reclamar este monto?</h4>
                                <p class="fs-09 mb-20">Somos expertos en despidos. Revisamos tu caso gratis y te ayudamos a cobrar lo que te corresponde.</p>
                                <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-outline w-100">
                                   <?= render_icon('whatsapp', 'mr-20', 'transform: scale(2.0);') ?> CONSULTANOS AHORA
                                </a>
                            </article>
                        </article>
                    <?php else: ?>
                        <article class="info-bloque b-none">
                            <h3 class="mb-20">¿Qué conceptos integran tu liquidación por despido?</h3>
                            <p class="txt-gris mb-15">Nuestra calculadora desglosa todos los rubros exigidos por la <b>Ley de Contrato de Trabajo (LCT)</b> para un despido sin justa causa en Argentina:</p>
                            <ul class="flex-column gap-15 txt-gris fs-09">
                                <li><?= render_icon('check', 'mr-10') ?> <b>Indemnización por Antigüedad (Art. 245):</b> Te corresponde un mes de sueldo por cada año de servicio o fracción mayor a tres meses.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Falta de Preaviso:</b> Si no te avisaron con un mes de antelación (o dos si tenés más de 5 años), deben abonarte esos salarios.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Integración del Mes:</b> Te deben pagar los días restantes hasta completar el mes calendario en que ocurrió el despido.</li>
                                <li><?= render_icon('check', 'mr-10') ?> <b>Vacaciones y SAC Proporcional:</b> El pago de los días de descanso no gozados y el aguinaldo acumulado hasta la fecha.</li>
                            </ul>

                        </article>
                    <?php endif; ?>
                </article>

            </section>
        </section>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
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

    const resFinal = document.getElementById('resultado-final');
    if (resFinal) {
        resFinal.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>
