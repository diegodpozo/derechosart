<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO DE JOVEN - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor" style="max-width: 700px;">
    <h1>REGISTRO DE NUEVO JOVEN</h1>
    <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=lista" class="btn btn-azul" style="margin-bottom: 20px;">CANCELAR Y VOLVER</a>

    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=nuevo" method="POST">
        
        <div class="grupo-form">
            <label>NOMBRE Y APELLIDO:</label>
            <input type="text" name="nombre" required placeholder="EJ: PEREZ, JUAN">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <div class="grupo-form">
                <label>DNI (MAX 8 NUMEROS):</label>
                <input type="text" name="dni" maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required placeholder="SOLO NUMEROS">
            </div>
            <div class="grupo-form">
                <label>CUIL:</label>
                <input type="text" name="cuil" placeholder="EJ: 20123456789">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <div class="grupo-form">
                <label>FECHA DE NACIMIENTO:</label>
                <input type="date" name="fecha_nac">
            </div>
            <div class="grupo-form">
                <label>LOCALIDAD:</label>
                <input type="text" name="localidad" placeholder="EJ: PADUA">
            </div>
        </div>

        <div class="grupo-form">
            <label>DIAGNOSTICO (DX):</label>
            <textarea name="diagnostico" rows="3" placeholder="EJ: RETRASO MENTAL MODERADO"></textarea>
        </div>

        <button type="submit" class="btn btn-verde" style="width: 100%; padding: 15px; font-size: 16px;">GUARDAR REGISTRO</button>
    </form>
</div>

</body>
</html>
