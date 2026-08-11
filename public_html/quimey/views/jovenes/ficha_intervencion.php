<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title><?php echo $EsNuevo ? 'REGISTRO DE INTERVENCION' : 'INTERVENCION'; ?> - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor" style="max-width: 800px;">
    <h1><?php echo $EsNuevo ? 'REGISTRO DE NUEVA INTERVENCION' : 'INTERVENCION / EDICION'; ?></h1>
    <h2 style="text-align: left; margin-top: 0;">JOVEN: <?php echo $Paciente['NombreApellido']; ?></h2>
    <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=intervenciones&id=<?php echo $Paciente['IdPaciente']; ?>" class="btn btn-azul" style="margin-bottom: 20px;">VOLVER A INTERVENCIONES</a>

    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=<?php echo $EsNuevo ? 'nueva_intervencion' : 'editar_intervencion'; ?>" method="POST">
        <input type="hidden" name="id_paciente" value="<?php echo $Paciente['IdPaciente']; ?>">
        <?php if (!$EsNuevo): ?>
            <input type="hidden" name="id_intervencion" value="<?php echo $Intervencion['IdIntervencion']; ?>">
        <?php endif; ?>

        <!-- ENTREVISTA -->
        <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px; margin-bottom: 15px;">
            <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px; margin-top: 0;">ENTREVISTA</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                <div class="grupo-form">
                    <label>FECHA:</label>
                    <input type="date" name="entrevista_fecha" value="<?php echo !$EsNuevo ? $Intervencion['EntrevistaFecha'] : ''; ?>">
                </div>
                <div class="grupo-form">
                    <label>PROFESIONAL A CARGO:</label>
                    <input type="text" name="entrevista_profesional" placeholder="EJ: LIC. PEREZ, ANA" value="<?php echo !$EsNuevo ? $Intervencion['EntrevistaProfesional'] : ''; ?>">
                </div>
            </div>
        </div>

        <!-- REUNION CON EQUIPO TERAPEUTICO -->
        <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px; margin-bottom: 15px;">
            <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px; margin-top: 0;">REUNION CON EQUIPO TERAPEUTICO</h2>
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px;">
                <div class="grupo-form">
                    <label>FECHA:</label>
                    <input type="date" name="reunion_fecha" value="<?php echo !$EsNuevo ? $Intervencion['ReunionFecha'] : ''; ?>">
                </div>
                <div class="grupo-form">
                    <label>PROFESIONALES (PUEDEN SER VARIOS):</label>
                    <textarea name="reunion_profesionales" rows="3" placeholder="EJ: PSICOLOGA - LIC. LOPEZ&#10;FONOAUDIOLOGA - LIC. RAMIREZ&#10;O SEPARADOS POR COMA"><?php echo !$EsNuevo ? $Intervencion['ReunionProfesionales'] : ''; ?></textarea>
                </div>
            </div>
        </div>

        <!-- ENTREVISTA EN DOMICILIO -->
        <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px; margin-bottom: 15px;">
            <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px; margin-top: 0;">ENTREVISTA EN DOMICILIO</h2>
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px;">
                <div class="grupo-form">
                    <label>FECHA:</label>
                    <input type="date" name="domicilio_fecha" value="<?php echo !$EsNuevo ? $Intervencion['DomicilioFecha'] : ''; ?>">
                </div>
                <div class="grupo-form">
                    <label>PROFESIONALES (PUEDEN SER VARIOS):</label>
                    <textarea name="domicilio_profesionales" rows="3" placeholder="EJ: TRABAJADORA SOCIAL - GOMEZ, C.&#10;O SEPARADOS POR COMA"><?php echo !$EsNuevo ? $Intervencion['DomicilioProfesionales'] : ''; ?></textarea>
                </div>
            </div>
        </div>

        <!-- INFORME SEMESTRAL -->
        <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px; margin-bottom: 15px;">
            <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px; margin-top: 0;">INFORME SEMESTRAL</h2>
            <div class="grupo-form">
                <textarea name="informe_semestral" rows="5" maxlength="500" placeholder="MAXIMO 500 CARACTERES" oninput="this.nextElementSibling.textContent = this.value.length + '/500'"><?php echo !$EsNuevo ? $Intervencion['InformeSemestral'] : ''; ?></textarea>
                <small style="color: #666;">0/500</small>
            </div>
        </div>

        <!-- LINEAS DE ACCION -->
        <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px; margin-bottom: 15px;">
            <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px; margin-top: 0;">LINEAS DE ACCION</h2>
            <div class="grupo-form">
                <textarea name="lineas_accion" rows="5" maxlength="500" placeholder="MAXIMO 500 CARACTERES" oninput="this.nextElementSibling.textContent = this.value.length + '/500'"><?php echo !$EsNuevo ? $Intervencion['LineasAccion'] : ''; ?></textarea>
                <small style="color: #666;">0/500</small>
            </div>
        </div>

        <button type="submit" class="btn btn-verde" style="width: 100%; padding: 15px; font-size: 16px;">GUARDAR INTERVENCION</button>
    </form>
</div>

</body>
</html>
