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
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=lista" class="btn btn-azul">VOLVER AL LISTADO</a>
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=intervenciones&id=<?php echo $Paciente['IdPaciente']; ?>" class="btn btn-verde">INTERVENCIONES</a>
    </div>

    <?php if (isset($_GET['mensaje'])): ?>
        <div class="alerta alerta-exito">
            <?php 
                if($_GET['mensaje'] == 'IMAGENES_CARGADAS') echo "IMAGENES DE MEDICACION CARGADAS CORRECTAMENTE";
                if($_GET['mensaje'] == 'IMAGEN_ELIMINADA') echo "IMAGEN ELIMINADA CORRECTAMENTE";
                if($_GET['mensaje'] == 'ERROR_IMAGENES') echo "ERROR AL CARGAR LAS IMAGENES (VERIFIQUE FORMATO JPG/PNG/WEBP/GIF Y TAMANO MAXIMO 8MB)";
            ?>
        </div>
    <?php endif; ?>

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
                    <?php if (!empty($Paciente['Domicilio'])): ?>
                        <a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($Paciente['Domicilio'] . ', ' . $Paciente['Localidad']) ?>" target="_blank" rel="noopener" class="btn btn-azul" style="margin-top: 5px; font-size: 13px; padding: 6px 12px;">
                            VER EN GOOGLE MAPS
                        </a>
                    <?php else: ?>
                        <span class="btn btn-gris" style="margin-top: 5px; font-size: 13px; padding: 6px 12px; pointer-events: none; opacity: 0.5; cursor: not-allowed;">
                            VER EN GOOGLE MAPS
                        </span>
                    <?php endif; ?>
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
                    <label>MEDICACION (ANOTACIONES):</label>
                    <textarea name="medicacion" rows="2"><?php echo $Paciente['Medicacion']; ?></textarea>
                </div>
    </form>

    <!-- BLOQUE DE IMAGENES DE MEDICACION (FUERA DEL FORM PRINCIPAL) -->
                <div class="grupo-form">
                    <label>FOTOS DE MEDICACION:</label>

                    <?php if (!empty($Imagenes)): ?>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 10px;">
                            <?php foreach ($Imagenes as $Img): ?>
                                <div style="border: 1px solid #DDD; border-radius: 8px; padding: 8px; text-align: center; width: 140px;">
                                    <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=ver_imagen&id=<?= $Img['IdImagen'] ?>" target="_blank">
                                        <img src="<?= BASE_URL_QUIMEY ?>index.php?accion=ver_imagen&id=<?= $Img['IdImagen'] ?>" alt="FOTO DE MEDICACION" style="width: 120px; height: 90px; object-fit: cover; border-radius: 5px;">
                                    </a>
                                    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=eliminar_imagen" method="POST" style="margin-top: 5px;" onsubmit="return confirm('¿SEGURO QUE DESEAS ELIMINAR ESTA IMAGEN?');">
                                        <input type="hidden" name="id_paciente" value="<?= $Paciente['IdPaciente'] ?>">
                                        <input type="hidden" name="id_imagen" value="<?= $Img['IdImagen'] ?>">
                                        <button type="submit" class="btn btn-rojo" style="font-size: 11px; padding: 4px 8px;">ELIMINAR</button>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p style="color: #7F8C8D; font-size: 13px;">NO HAY FOTOS CARGADAS TODAVIA.</p>
                    <?php endif; ?>

                    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=subir_imagenes" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_paciente" value="<?= $Paciente['IdPaciente'] ?>">
                        <input type="file" name="imagenes[]" accept="image/jpeg,image/png,image/webp,image/gif" multiple style="padding: 8px;">
                        <button type="submit" class="btn btn-verde" style="font-size: 12px; padding: 6px 12px; margin-top: 5px;">SUBIR FOTOS</button>
                    </form>
                </div>

    <!-- REABRIR FORM PRINCIPAL DE EDICION -->
    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=editar" method="POST">
        <input type="hidden" name="id_paciente" value="<?= $Paciente['IdPaciente'] ?>">

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
                    <select name="id_referente" style="padding: 10px; border: 1px solid #DDD; border-radius: 5px; box-sizing: border-box; font-size: 14px; text-transform: uppercase; width: 100%;">
                        <option value="">SIN REFERENTE</option>
                        <?php foreach ($Referentes as $Ref): ?>
                            <option value="<?= $Ref['IdReferente'] ?>" <?= !empty($Paciente['IdFichaReferente']) && $Paciente['IdFichaReferente'] == $Ref['IdReferente'] ? 'selected' : '' ?>>
                                <?= trim(($Ref['Apellido'] ? $Ref['Apellido'] . ', ' : '') . $Ref['Nombre']) . ($Ref['Especialidad'] ? ' (' . $Ref['Especialidad'] . ')' : '') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!empty($Paciente['IdFichaReferente'])): ?>
                        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=ficha_referente&id=<?= $Paciente['IdFichaReferente'] ?>" target="_blank" class="btn btn-azul" style="margin-top: 5px; font-size: 13px; padding: 6px 12px;">
                            VER FICHA DEL REFERENTE
                        </a>
                    <?php else: ?>
                        <span class="btn btn-gris" style="margin-top: 5px; font-size: 13px; padding: 6px 12px; pointer-events: none; opacity: 0.5; cursor: not-allowed;">
                            VER FICHA DEL REFERENTE
                        </span>
                    <?php endif; ?>
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
