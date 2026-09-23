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
        $Errores[] = "EL SUELDO DEBE SER UN NÚMERO ENTERO POSITIVO.";
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
                            CALCULAR MI LIQUIDACIÓN
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
                                   <?= render_icon('whatsapp', '', 'transform: scale(2.0);') ?> CONSULTANOS AHORA
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

<!-- SECCION EDUCATIVA: TIPOS DE DESPIDO -->
<section class="seccion-texto">
    <section class="contenedor">
        <h2 class="titulo-seccion">Tipos de <span class="subrayado-amarillo">Despido</span></h2>
        <p class="txt-gris mb-40" style="max-width: 62.5rem; margin-left: auto; margin-right: auto; font-size: 1.1rem;">Existen dos formas de finalizar una relación laboral. Conocé las diferencias y cómo actuar en cada caso.</p>

        <!-- GRID DOS COLUMNAS -->
        <div class="grid-info-doble mt-40">
            
            <!-- DESPIDO DIRECTO -->
            <article class="info-bloque b-none bl-8-amarillo">
                <div style="display: flex; align-items: center; gap: 0.9375rem; margin-bottom: 1.5625rem;">
                    <div style="width: 2.5rem; height: 2.5rem; background: var(--amarillo); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <?= render_icon('envelope', '', 'width: 1.3rem; height: 1.3rem;', '#000000') ?>
                    </div>
                    <h3 class="m-0" style="font-size: 1.4rem; font-weight: 800;">Despido Directo</h3>
                </div>
                
                <p class="txt-gris mb-20">El empleador te envía una <strong>carta documento</strong> al domicilio real notificando que prescinde de tus tareas laborales. En el telegrama debe especificar la fecha a partir de la cual quedás despedido.</p>
                
                <div class="p-20 bg-gris border-radius-15 mb-20">
                    <p class="m-0 fs-09"><strong>⚠️ Importante:</strong> Si hay irregularidades (trabajo en negro, horas extras no pagadas, vacaciones no gozadas), es crucial que consultes con un abogado. Debés contestar en tiempo y forma.</p>
                </div>

                <h4 class="mb-15" style="font-size: 1.1rem; font-weight: 800;">Modalidades:</h4>
                
                <div class="lista-faq" style="max-width: 100%; margin-bottom: 1.5625rem;">
                    
                    <!-- DESPIDO CON CAUSA -->
                    <details class="mb-15 bg-gris p-20 border-radius-15">
                        <summary class="fw-700 pointer" style="font-size: 0.95rem; cursor: pointer;">✅ Despido con causa</summary>
                        <div class="respuesta mt-15">
                            <p class="txt-gris fs-09">El despido con causa es cuando el empleador notifica la rescisión del contrato alegando justa causa.</p>
                            <p class="txt-gris fs-09 mt-10">Esto genera que perdás el derecho de obtener una indemnización laboral.</p>
                            <!-- MODIFICACION DE ESTILOS DE FUENTE PARA UNIFICACION DE TAMANOS -->
                            <p class="txt-gris fs-09 mt-15"><strong>⚠️ Es importante saber que:</strong> Esta misiva debe contestarse negando la causa, a fin de tener alguna posibilidad de revertir dicho despido.</p>
                        </div>
                    </details>

                    <!-- DESPIDO SIN CAUSA -->
                    <details class="mb-15 bg-gris p-20 border-radius-15">
                        <summary class="fw-700 pointer" style="font-size: 0.95rem; cursor: pointer;">💰 Despido sin causa</summary>
                        <div class="respuesta mt-15">
                            <p class="txt-gris fs-09">El despido sin causa queda configurado cuando no se alega justa causa en la misiva enviada por el empleador.</p>
                            <p class="txt-gris fs-09 mt-10">En este caso, te convertís en acreedor de una indemnización laboral, la cual se calculará teniendo en consideración:</p>
                            <ul class="flex-column gap-10 mt-15 fs-09">
                                <li><span style="display: inline-block; background: var(--amarillo); color: var(--negro); padding: 0.25rem 0.5rem; border-radius: 0.3125rem; font-weight: 700; margin-right: 0.5rem; font-size: 0.8rem;">📌</span> Los años de antigüedad</li>
                                <li><span style="display: inline-block; background: var(--amarillo); color: var(--negro); padding: 0.25rem 0.5rem; border-radius: 0.3125rem; font-weight: 700; margin-right: 0.5rem; font-size: 0.8rem;">📌</span> El salario mensual</li>
                                <li><span style="display: inline-block; background: var(--amarillo); color: var(--negro); padding: 0.25rem 0.5rem; border-radius: 0.3125rem; font-weight: 700; margin-right: 0.5rem; font-size: 0.8rem;">📌</span> Los rubros indemnizatorios adeudados por el empleador</li>
                            </ul>
                        </div>
                    </details>

                </div>

                <div class="mt-20 p-20 border-radius-15" style="background-color: #fffbeb; border: 0.0625rem solid #fbbf24;">
                    <p class="m-0 fs-09"><strong>💡 Consejo:</strong> Si recibís un despido por causa, es fundamental que lo niegues en la contestación del telegrama para tener posibilidades de revertirlo.</p>
                </div>
            </article>

            <!-- DESPIDO INDIRECTO -->
            <article class="info-bloque b-none bl-8-amarillo">
                <div style="display: flex; align-items: center; gap: 0.9375rem; margin-bottom: 1.5625rem;">
                    <div style="width: 2.5rem; height: 2.5rem; background: var(--amarillo); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <?= render_icon('scale-balanced', '', 'width: 1.3rem; height: 1.3rem;', '#000000') ?>
                    </div>
                    <h3 class="m-0" style="font-size: 1.4rem; font-weight: 800;">Despido Indirecto</h3>
                </div>
                
                <p class="txt-gris mb-20">Sucede cuando vos realizas una <strong>intimación</strong> al empleador para regularizar una situación laboral y, vencido el plazo sin cambios, podés considerarte despedido con causa.</p>
                
                <div class="p-20 bg-gris border-radius-15 mb-20">
                    <p class="m-0 fs-09"><strong>✅ Beneficio:</strong> Esto te permite obtener la <strong>indemnización por antigüedad (Art. 245)</strong> de la Ley de Contrato de Trabajo.</p>
                </div>

                <h4 class="mb-15" style="font-size: 1.1rem; font-weight: 800;">Variables principales:</h4>
                
                <div class="lista-faq" style="max-width: 100%;">
                    
                    <!-- NEGATIVA DE TAREAS -->
                    <details class="mb-15 bg-gris p-20 border-radius-15">
                        <summary class="fw-700 pointer" style="font-size: 0.95rem; cursor: pointer;">🚫 Negativa de Tareas</summary>
                        <div class="respuesta mt-15">
                            <p class="txt-gris fs-09">Si acudís a tu lugar habitual de trabajo y el empleador te niega el ingreso, impidiéndote cumplir tu horario y tareas, debés:</p>
                            <ul class="flex-column gap-10 mt-15 fs-09">
                                <li><strong>Contactar a un abogado</strong> para redactar un telegrama laboral notificando la negativa de tareas.</li>
                                <li><strong>Esto te permite considerarte despedido</strong> y acceder a indemnizaciones.</li>
                            </ul>
                        </div>
                    </details>

                    <!-- CAMBIO EN CONDICIONES -->
                    <details class="mb-15 bg-gris p-20 border-radius-15">
                        <summary class="fw-700 pointer" style="font-size: 0.95rem; cursor: pointer;">🔄 Cambio en las Condiciones de Trabajo</summary>
                        <div class="respuesta mt-15">
                            <p class="txt-gris fs-09">El empleador puede introducir cambios en la forma y modalidad de prestación, siempre que:</p>
                            <ul class="flex-column gap-10 mt-15 mb-15 fs-09">
                                <li><span style="display: inline-block; background: var(--amarillo); color: var(--negro); padding: 0.25rem 0.5rem; border-radius: 0.3125rem; font-weight: 700; margin-right: 0.5rem; font-size: 0.8rem;">✓</span> No importe un ejercicio irrazonable de esa facultad</li>
                                <li><span style="display: inline-block; background: var(--amarillo); color: var(--negro); padding: 0.25rem 0.5rem; border-radius: 0.3125rem; font-weight: 700; margin-right: 0.5rem; font-size: 0.8rem;">✓</span> No alteren modalidades esenciales del contrato</li>
                                <li><span style="display: inline-block; background: var(--amarillo); color: var(--negro); padding: 0.25rem 0.5rem; border-radius: 0.3125rem; font-weight: 700; margin-right: 0.5rem; font-size: 0.8rem;">✓</span> No causen perjuicio a tu persona</li>
                            </ul>
                            <!-- MODIFICACION DE ESTILOS DE FUENTE PARA UNIFICACION DE TAMANOS -->
                            <p class="txt-gris fs-09" style="margin: 0.75rem 0 0 0;"><strong>⚠️ Si el ejercicio es abusivo:</strong> Podés considerarte despedido o reclamar el restablecimiento de las condiciones originales.</p>
                        </div>
                    </details>

                    <!-- INCUMPLIMIENTO SALARIAL -->
                    <details class="mb-15 bg-gris p-20 border-radius-15">
                        <summary class="fw-700 pointer" style="font-size: 0.95rem; cursor: pointer;">💵 Incumplimiento en el Pago del Salario</summary>
                        <div class="respuesta mt-15">
                            <p class="txt-gris fs-09">La obligación principal del empleador es pagarte el salario en tiempo y forma según lo estipulado en el contrato.</p>
                            <p class="txt-gris fs-09 mt-15"><strong>¿Qué hacer?</strong> Debés <strong>intimar a regularizar</strong> la situación bajo apercibimiento de considerarte despedido con causa.</p>
                            <!-- MODIFICACION DE ESTILOS DE FUENTE PARA UNIFICACION DE TAMANOS -->
                            <p class="txt-gris fs-09 mt-15"><strong>⚠️ Nota importante:</strong> Esta intimación debe realizarse mediante telegrama laboral para que quede registro de la notificación.</p>
                        </div>
                    </details>

                    <!-- DIFERENCIAS SALARIALES -->
                    <details class="mb-15 bg-gris p-20 border-radius-15">
                        <summary class="fw-700 pointer" style="font-size: 0.95rem; cursor: pointer;">📉 Diferencias Salariales</summary>
                        <div class="respuesta mt-15">
                            <p class="txt-gris fs-09">Si percibís un sueldo inferior al establecido en el Convenio Colectivo de Trabajo según tu rubro, podés intimar para cobrar diferencias salariales.</p>
                            <ul class="flex-column gap-10 mt-15 fs-09">
                                <li><strong>Si no te lo abonen correctamente:</strong> Podés considerarte despedido con causa.</li>
                                <li><strong>Plazo de reclamo:</strong> Las diferencias solo pueden reclamarse respecto de los <strong>últimos 2 años</strong> de relación laboral.</li>
                            </ul>
                        </div>
                    </details>

                </div>
            </article>

        </div>

        <!-- CTA FINAL -->
        <?php 
            $titulo = "¿No sabés si tu despido fue legal?";
            $descripcion = "Consultá con nosotros. Analizamos tu caso sin costo.";
            $numero = "5491124786144";
            $texto_boton = "ESCRIBINOS";
            $ancho = "25";
            include __DIR__ . '/../componentes/cta-whatsapp.php';
        ?>
    </section>
</section>

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
