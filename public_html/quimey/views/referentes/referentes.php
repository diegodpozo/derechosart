<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>FICHAS DE REFERENTES - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>FICHAS DE REFERENTES</h1>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=lista" class="btn btn-azul">VOLVER AL LISTADO DE JOVENES</a>
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=nuevo_referente" class="btn btn-verde">REGISTRAR NUEVO REFERENTE</a>
    </div>

    <?php if (isset($_GET['mensaje'])): ?>
        <div class="alerta alerta-exito">
            <?php 
                if($_GET['mensaje'] == 'REFERENTE_CARGADO') echo "REFERENTE REGISTRADO CON EXITO";
                if($_GET['mensaje'] == 'REFERENTE_ACTUALIZADO') echo "FICHA DE REFERENTE ACTUALIZADA CORRECTAMENTE";
                if($_GET['mensaje'] == 'REFERENTE_ELIMINADO') echo "REFERENTE ELIMINADO CORRECTAMENTE";
                if($_GET['mensaje'] == 'ERROR_REFERENTE') echo "ERROR AL GUARDAR LOS DATOS DEL REFERENTE";
            ?>
        </div>
    <?php endif; ?>

    <table id="tablaReferentes">
        <thead>
            <tr>
                <th onclick="ordenarTabla(0)" style="cursor:pointer">APELLIDO Y NOMBRE ↕</th>
                <th onclick="ordenarTabla(1)" style="cursor:pointer">ESPECIALIDAD ↕</th>
                <th onclick="ordenarTabla(2)" style="cursor:pointer">TELEFONO ↕</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($Referentes)): ?>
                <tr><td colspan="4" style="text-align:center">NO HAY REFERENTES CARGADOS.</td></tr>
            <?php else: ?>
                <?php foreach ($Referentes as $R): ?>
                <tr>
                    <td><?php echo trim(($R['Apellido'] ? $R['Apellido'] . ', ' : '') . $R['Nombre']); ?></td>
                    <td><?php echo $R['Especialidad']; ?></td>
                    <td><?php echo $R['Telefono']; ?></td>
                    <td>
                        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=ficha_referente&id=<?php echo $R['IdReferente']; ?>" class="btn btn-azul">VER FICHA</a>
                        <form action="<?= BASE_URL_QUIMEY ?>index.php?accion=eliminar_referente" method="POST" style="display:inline;" onsubmit="return confirm('¿SEGURO QUE DESEAS ELIMINAR ESTE REFERENTE?');">
                            <input type="hidden" name="id_referente" value="<?= $R['IdReferente'] ?>">
                            <button type="submit" class="btn btn-rojo" style="font-size: 12px; padding: 6px 12px;">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script>
// ORDENAMIENTO DE TABLA
function ordenarTabla(n) {
    let tabla = document.getElementById("tablaReferentes");
    let filas, i, x, y, deberiaCambiar, dir, count = 0;
    let cambiando = true;
    dir = "asc"; 
    while (cambiando) {
        cambiando = false;
        filas = tabla.rows;
        for (i = 1; i < (filas.length - 1); i++) {
            deberiaCambiar = false;
            x = filas[i].getElementsByTagName("TD")[n];
            y = filas[i + 1].getElementsByTagName("TD")[n];
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    deberiaCambiar = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    deberiaCambiar = true;
                    break;
                }
            }
        }
        if (deberiaCambiar) {
            filas[i].parentNode.insertBefore(filas[i + 1], filas[i]);
            cambiando = true;
            count ++;
        } else {
            if (count == 0 && dir == "asc") {
                dir = "desc";
                cambiando = true;
            }
        }
    }
}
</script>
</body>
</html>
