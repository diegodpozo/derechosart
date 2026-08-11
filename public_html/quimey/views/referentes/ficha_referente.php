<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title><?php echo $EsNuevo ? 'REGISTRO DE REFERENTE' : 'FICHA DE REFERENTE'; ?> - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor" style="max-width: 700px;">
    <h1><?php echo $EsNuevo ? 'REGISTRO DE NUEVO REFERENTE' : 'FICHA DETALLADA / EDICION DE REFERENTE'; ?></h1>
    <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=referentes" class="btn btn-azul" style="margin-bottom: 20px;">VOLVER A FICHAS DE REFERENTES</a>

    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=<?php echo $EsNuevo ? 'nuevo_referente' : 'editar_referente'; ?>" method="POST">
        <?php if (!$EsNuevo): ?>
            <input type="hidden" name="id_referente" value="<?php echo $Referente['IdReferente']; ?>">
        <?php endif; ?>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <div class="grupo-form">
                <label>NOMBRE:</label>
                <input type="text" name="nombre" required placeholder="EJ: MARIA" value="<?php echo !$EsNuevo ? $Referente['Nombre'] : ''; ?>">
            </div>
            <div class="grupo-form">
                <label>APELLIDO:</label>
                <input type="text" name="apellido" placeholder="EJ: PEREZ" value="<?php echo !$EsNuevo ? $Referente['Apellido'] : ''; ?>">
            </div>
        </div>

        <div class="grupo-form">
            <label>ESPECIALIDAD:</label>
            <input type="text" name="especialidad" placeholder="EJ: PSICOPEDAGOGA / MEDICA / PROFESORA" value="<?php echo !$EsNuevo ? $Referente['Especialidad'] : ''; ?>">
        </div>

        <div class="grupo-form">
            <label>TELEFONO:</label>
            <input type="text" name="telefono" placeholder="EJ: 11 2345-6789" value="<?php echo !$EsNuevo ? $Referente['Telefono'] : ''; ?>">
        </div>

        <button type="submit" class="btn btn-verde" style="width: 100%; padding: 15px; font-size: 16px;">GUARDAR REFERENTE</button>
    </form>
</div>

</body>
</html>
