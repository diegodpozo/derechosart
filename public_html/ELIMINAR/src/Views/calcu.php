<?php
// Inicializar variables
$resultado = "";
$sueldo = "";
$incapacidad = "";
$edad = "";
$enTrabajo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Quitar separadores de miles (apóstrofes) antes de validar
    $sueldoRaw = str_replace("'", "", $_POST["sueldo"] ?? '');
    $sueldo = filter_var($sueldoRaw, FILTER_VALIDATE_INT);
    $incapacidad = filter_input(INPUT_POST, "incapacidad", FILTER_VALIDATE_INT);
    $edad = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);
    $enTrabajo = $_POST["enTrabajo"] ?? '';

    $errores = [];

    if ($sueldo === false || $sueldo < 0) {
        $errores[] = "EL SUELDO DEBE SER UN NUMERO ENTERO POSITIVO.";
    }
    if ($incapacidad === false || $incapacidad < 0 || $incapacidad > 100) {
        $errores[] = "LA INCAPACIDAD DEBE SER UN NUMERO ENTRE 0 Y 100.";
    }
    if ($edad === false || $edad <= 0) {
        $errores[] = "LA EDAD DEBE SER UN NUMERO ENTERO POSITIVO.";
    }
    if ($enTrabajo !== "trabajo" && $enTrabajo !== "trayecto") {
        $errores[] = "DEBE SELECCIONAR UNA OPCION VALIDA EN 'EN EL TRABAJO'.";
    }

    if (empty($errores)) {
        // Cálculo
        $valor = (53 * $incapacidad * $sueldo * (65 / $edad)) / 100;
        if ($enTrabajo === "trabajo") {
            $valor *= 1.20;
        }
        // Formatear con separadores de miles usando apóstrofe
        $resultado = "$" . number_format($valor, 0, ",", "'");
    }
}
?>

<style>
    .contenedor-calcu { 
        max-width: 500px; 
        margin: 50px auto; 
        background-color: #3C3C3C; 
        padding: 40px; 
        border-radius: 8px; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
    }

    .contenedor-calcu h1 { 
        text-align: center; 
        font-weight: 700; 
        margin-bottom: 30px; 
        font-size: 1.35em; 
        color: #ffffff; 
        text-transform: uppercase;
    }

    .form-group-calcu { 
        margin-bottom: 20px; 
    }

    .contenedor-calcu label { 
        display: block; 
        margin-bottom: 4px; 
        font-weight: 400; 
        font-size: 0.81em; 
        color: #ffffff; 
    }

    .contenedor-calcu input, .contenedor-calcu select {
        width: 100%; 
        padding: 10px; 
        border: 1px solid #444444; 
        background-color: #222222; 
        color: #ffffff; 
        border-radius: 4px; 
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    .contenedor-calcu input:focus, .contenedor-calcu select:focus {
        outline: none;
        border-color: #666666;
    }

    .boton-calcu {
        width: 100%; 
        padding: 13.5px; 
        background-color: #000000; 
        color: #ffffff; 
        border: none; 
        border-radius: 4px; 
        font-family: 'Montserrat', sans-serif; 
        font-weight: 700; 
        font-size: 0.9em; 
        cursor: pointer; 
        text-transform: uppercase; 
        text-align: center; 
        display: inline-block; 
        text-decoration: none; 
        transition: background-color 0.3s;
        margin-top: 10px;
    }

    .boton-calcu:hover { 
        background-color: #444444; 
    }

    .resultado-seccion {
        max-width: 500px;
        margin: 0 auto 50px;
        text-align: center;
    }

    .resultado-label {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
        text-transform: uppercase;
    }

    .resultado-valor {
        background-color: #3C3C3C;
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .leyenda-calcu {
        text-align: center;
        font-size: 11px;
        color: #666;
        margin-top: 15px;
        line-height: 1.4;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .boton-consulta-verde {
        display: inline-block;
        width: 50%;
        margin: 15px auto 0;
        padding: 10px;
        background-color: #28a745;
        color: #ffffff;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.8em;
        border-radius: 4px;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }

    .boton-consulta-verde:hover {
        background-color: #218838;
    }

    .errores-calcu {
        background-color: #e74c3c;
        color: white;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
        font-size: 0.85em;
        font-weight: bold;
    }
    
    .errores-calcu p {
        margin: 5px 0;
    }
</style>

<div class="contenedor-calcu">
    <h1>CALCULAR INDEMNIZACION</h1>
    
    <form method="post">
        <?php if (!empty($errores)): ?>
            <div class="errores-calcu">
                <?php foreach ($errores as $e): ?>
                    <p><?php echo $e; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="form-group-calcu">
            <label for="sueldo">SUELDO:</label>
            <input type="text" id="sueldo" name="sueldo" value="<?php echo htmlspecialchars($sueldo ? number_format((int)$sueldo, 0, ",", "'") : ''); ?>" placeholder="0">
        </div>

        <div class="form-group-calcu">
            <label for="incapacidad">INCAPACIDAD (%):</label>
            <input type="text" id="incapacidad" name="incapacidad" value="<?php echo htmlspecialchars($incapacidad); ?>" 
                   oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="0">
        </div>

        <div class="form-group-calcu">
            <label for="edad">EDAD:</label>
            <input type="text" id="edad" name="edad" value="<?php echo htmlspecialchars($edad); ?>" 
                   oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="0">
        </div>

        <div class="form-group-calcu">
            <label for="enTrabajo">¿OCURRIO EN EL TRABAJO O TRAYECTO?:</label>
            <select id="enTrabajo" name="enTrabajo">
                <option value="trabajo" <?php if ($enTrabajo==="trabajo") echo "selected"; ?>>TRABAJO</option>
                <option value="trayecto" <?php if ($enTrabajo==="trayecto") echo "selected"; ?>>IN ITINERE</option>
            </select>
        </div>

        <button type="submit" class="boton-calcu">CALCULAR</button>
    </form>
</div>

<?php if ($resultado !== ""): ?>
    <div class="resultado-seccion" id="resultado-final">
        <div class="resultado-label">TOTAL DE INDEMNIZACION CALCULADA</div>
        <div class="resultado-valor"><?php echo $resultado; ?> *</div>
        <div class="leyenda-calcu">* LIQUIDACION ORIENTATIVA CALCULADA SEGUN VALORES INGRESADOS POR EL USUARIO. NO SE GARANTIZA EL COBRO DE DICHO MONTO.</div>
        <a href="https://derechosartconsultas.com/" class="boton-consulta-verde">HACE TU CONSULTA</a>
    </div>
<?php endif; ?>

<script>
    // Formatear sueldo con separadores de miles (apóstrofe) mientras se escribe
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

    // Scroll automatico al resultado si existe
    window.addEventListener('load', function() {
        const resultadoFinal = document.getElementById('resultado-final');
        if (resultadoFinal) {
            resultadoFinal.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });
</script>