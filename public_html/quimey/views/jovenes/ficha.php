<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>FICHA Y EDICION - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>FICHA DETALLADA / EDICION DE JOVEN</h1>
    <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=lista" class="btn btn-azul" style="margin-bottom: 20px;">VOLVER AL LISTADO</a>

    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=editar" method="POST">
        <input type="hidden" name="id_paciente" value="<?php echo $Paciente['IdPaciente']; ?>">

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            
            <!-- DATOS PERSONALES -->
            <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px;">
                <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px;">DATOS PERSONALES</h2>
                
                <div class="grupo-form">
                    <label>NOMBRE Y APELLIDO:</label>
                    <input type="text" name="nombre" value="<?php echo $Paciente['NombreApellido']; ?>" required>
                </div>

                <div class="grupo-form">
                    <label>DNI (MAX 8 NUMEROS):</label>
                    <input type="text" name="dni" value="<?php echo $Paciente['Dni']; ?>" maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                </div>

                <div class="grupo-form">
                    <label>CUIL:</label>
                    <input type="text" name="cuil" value="<?php echo $Paciente['Cuil']; ?>">
                </div>

                <div class="grupo-form">
                    <label>FECHA NACIMIENTO:</label>
                    <input type="date" name="fecha_nac" value="<?php echo $Paciente['FechaNacimiento']; ?>">
                </div>

                <div class="grupo-form">
                    <label>DOMICILIO:</label>
                    <input type="text" name="domicilio" value="<?php echo $Paciente['Domicilio']; ?>">
                </div>

                <div class="grupo-form">
                    <label>LOCALIDAD:</label>
                    <input type="text" name="localidad" value="<?php echo $Paciente['Localidad']; ?>">
                </div>
            </div>

            <!-- SALUD Y TRAMITES -->
            <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px;">
                <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px;">SALUD Y TRAMITES</h2>
                
                <div class="grupo-form">
                    <label>DIAGNOSTICO (DX):</label>
                    <textarea name="diagnostico" rows="3"><?php echo $Paciente['Diagnostico']; ?></textarea>
                </div>

                <div class="grupo-form">
                    <label>MEDICACION:</label>
                    <textarea name="medicacion" rows="2"><?php echo $Paciente['Medicacion']; ?></textarea>
                </div>

                <div class="grupo-form">
                    <label>CUD VENCIMIENTO:</label>
                    <input type="date" name="cud_vto" value="<?php echo $Paciente['CudVencimiento']; ?>">
                </div>

                <div class="grupo-form">
                    <label>OBRA SOCIAL:</label>
                    <input type="text" name="nombre_os" value="<?php echo $Paciente['NombreOs']; ?>">
                </div>

                <div class="grupo-form">
                    <label>NRO AFILIACION:</label>
                    <input type="text" name="nro_afiliacion" value="<?php echo $Paciente['NroAfiliacion']; ?>">
                </div>
            </div>

            <!-- REFERENTES Y OTROS -->
            <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px;">
                <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px;">REFERENTES</h2>
                <div class="grupo-form">
                    <label>NOMBRE REFERENTE:</label>
                    <input type="text" name="nombre_ref" value="<?php echo $Paciente['NombreReferente']; ?>">
                </div>
                <div class="grupo-form">
                    <label>OBSERVACIONES:</label>
                    <textarea name="observaciones" rows="4"><?php echo $Paciente['Observaciones']; ?></textarea>
                </div>
            </div>

            <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px;">
                <h2 style="text-align: left; border-bottom: 2px solid #3498DB; padding-bottom: 5px;">EDUCACION Y OTROS</h2>
                <div class="grupo-form">
                    <label>TRAYECTORIA EDUCATIVA:</label>
                    <textarea name="trayectoria" rows="4"><?php echo isset($Paciente['TrayectoriaEducativa']) ? $Paciente['TrayectoriaEducativa'] : ''; ?></textarea>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-verde" style="width: 100%; padding: 15px; font-size: 18px; margin-top: 20px;">GUARDAR TODOS LOS CAMBIOS</button>
    </form>
</div>

</body>
</html>
