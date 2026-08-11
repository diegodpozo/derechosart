<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>INTERVENCIONES - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>INTERVENCIONES DE <?php echo $Paciente['NombreApellido']; ?></h1>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=ficha&id=<?php echo $Paciente['IdPaciente']; ?>" class="btn btn-azul">VOLVER A LA FICHA</a>
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=nueva_intervencion&id=<?php echo $Paciente['IdPaciente']; ?>" class="btn btn-verde">REGISTRAR NUEVA INTERVENCION</a>
    </div>

    <?php if (isset($_GET['mensaje'])): ?>
        <div class="alerta alerta-exito">
            <?php 
                if($_GET['mensaje'] == 'INTERVENCION_CARGADA') echo "INTERVENCION REGISTRADA CON EXITO";
                if($_GET['mensaje'] == 'INTERVENCION_ACTUALIZADA') echo "INTERVENCION ACTUALIZADA CORRECTAMENTE";
                if($_GET['mensaje'] == 'INTERVENCION_ELIMINADA') echo "INTERVENCION ELIMINADA CORRECTAMENTE";
                if($_GET['mensaje'] == 'ERROR_INTERVENCION') echo "ERROR AL GUARDAR LOS DATOS DE LA INTERVENCION";
            ?>
        </div>
    <?php endif; ?>

    <?php if (empty($Intervenciones)): ?>
        <div class="alerta" style="text-align:center; padding: 20px;">NO HAY INTERVENCIONES REGISTRADAS PARA ESTE JOVEN.</div>
    <?php else: ?>
        <?php foreach ($Intervenciones as $I): ?>
        <div style="padding: 15px; border: 1px solid #DDD; border-radius: 8px; margin-bottom: 15px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <strong>INTERVENCION N° <?php echo $I['IdIntervencion']; ?> - REGISTRADA: <?php echo $I['FechaCarga']; ?></strong>
                <div>
                    <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=ver_intervencion&id=<?php echo $I['IdIntervencion']; ?>" class="btn btn-azul" style="font-size: 12px; padding: 6px 12px;">VER / EDITAR</a>
                    <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=eliminar_intervencion" method="POST" style="display:inline;" onsubmit="return confirm('¿SEGURO QUE DESEAS ELIMINAR ESTA INTERVENCION?');">
                        <input type="hidden" name="id_paciente" value="<?php echo $I['IdPaciente']; ?>">
                        <input type="hidden" name="id_intervencion" value="<?php echo $I['IdIntervencion']; ?>">
                        <button type="submit" class="btn btn-rojo" style="font-size: 12px; padding: 6px 12px;">ELIMINAR</button>
                    </form>
                </div>
            </div>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 5px; vertical-align: top; font-weight: bold;">ENTREVISTA:</td>
                    <td style="padding: 5px; vertical-align: top;">
                        <?php echo $I['EntrevistaFecha'] ? $I['EntrevistaFecha'] : 'SIN FECHA'; ?>
                        <?php if ($I['EntrevistaProfesional']): ?> - <?php echo $I['EntrevistaProfesional']; ?><?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; vertical-align: top; font-weight: bold;">REUNION CON EQUIPO TERAPEUTICO:</td>
                    <td style="padding: 5px; vertical-align: top;">
                        <?php echo $I['ReunionFecha'] ? $I['ReunionFecha'] : 'SIN FECHA'; ?>
                        <?php if ($I['ReunionProfesionales']): ?> - <?php echo nl2br($I['ReunionProfesionales']); ?><?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; vertical-align: top; font-weight: bold;">ENTREVISTA EN DOMICILIO:</td>
                    <td style="padding: 5px; vertical-align: top;">
                        <?php echo $I['DomicilioFecha'] ? $I['DomicilioFecha'] : 'SIN FECHA'; ?>
                        <?php if ($I['DomicilioProfesionales']): ?> - <?php echo nl2br($I['DomicilioProfesionales']); ?><?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; vertical-align: top; font-weight: bold;">INFORME SEMESTRAL:</td>
                    <td style="padding: 5px; vertical-align: top;"><?php echo $I['InformeSemestral'] ? $I['InformeSemestral'] : '-'; ?></td>
                </tr>
                <tr>
                    <td style="padding: 5px; vertical-align: top; font-weight: bold;">LINEAS DE ACCION:</td>
                    <td style="padding: 5px; vertical-align: top;"><?php echo $I['LineasAccion'] ? $I['LineasAccion'] : '-'; ?></td>
                </tr>
            </table>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>
