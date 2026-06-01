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
                        <article class="p-20 mb-20 border-radius-20" style="background-color: #fee2e2; color: #b91c1c; border: 1px solid #f87171;">
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
                            CALCULAR MI INDEMNIZACION
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
                                   <i class="fab fa-whatsapp mr-10"></i> CONSULTANOS GRATIS
                                </a>
                            </article>
                        </article>
                    <?php else: ?>
                        <article class="info-bloque b-none">
                            <h3 class="mb-20">¿Cómo funciona el cálculo?</h3>
                            <p class="txt-gris mb-15">La indemnización por accidente de trabajo en Argentina se calcula mediante una fórmula polinómica que tiene en cuenta:</p>
                            <ul class="flex-column gap-15 txt-gris fs-09">
                                <li><i class="fas fa-check txt-amarillo mr-10"></i> <b>El IBM:</b> Tu ingreso base mensual promedio del último año.</li>
                                <li><i class="fas fa-check txt-amarillo mr-10"></i> <b>La Incapacidad:</b> El porcentaje de limitación física tras el accidente.</li>
                                <li><i class="fas fa-check txt-amarillo mr-10"></i> <b>La Edad:</b> Se pondera la edad al momento del hecho (a menor edad, mayor coeficiente).</li>
                                <li><i class="fas fa-check txt-amarillo mr-10"></i> <b>Pago Adicional:</b> Si el accidente fue dentro del trabajo, se suma un 20% extra.</li>
                            </ul>
                        </article>
                    <?php endif; ?>
                </article>

            </section>
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
