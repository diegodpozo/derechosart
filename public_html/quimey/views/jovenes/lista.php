<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>LISTADO DE JOVENES - QUIMEY CO</title>
    <link rel="stylesheet" href="<?= BASE_URL_QUIMEY ?>css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>LISTADO GENERAL DE JOVENES</h1>
    
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=nuevo" class="btn btn-verde">REGISTRAR NUEVO JOVEN</a>
        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=referentes" class="btn btn-azul">FICHAS DE REFERENTES</a>
        <input type="text" id="buscador" placeholder="BUSCAR JOVEN POR CUALQUIER DATO..." style="width: 350px; padding: 12px; border-radius: 8px; border: 1px solid #CCC; box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);">
    </div>

    <?php if (isset($_GET['mensaje'])): ?>
        <div class="alerta alerta-exito">
            <?php 
                if($_GET['mensaje'] == 'CARGADO') echo "JOVEN REGISTRADO CON EXITO";
                if($_GET['mensaje'] == 'ACTUALIZADO') echo "DATOS ACTUALIZADOS CORRECTAMENTE";
            ?>
        </div>
    <?php endif; ?>

    <table id="tablaJovenes">
        <thead>
            <tr>
                <th onclick="ordenarTabla(0)" style="cursor:pointer">NOMBRE Y APELLIDO ↕</th>
                <th onclick="ordenarTabla(1)" style="cursor:pointer">DNI ↕</th>
                <th onclick="ordenarTabla(2)" style="cursor:pointer">LOCALIDAD ↕</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($Pacientes)): ?>
                <tr><td colspan="4" style="text-align:center">NO HAY JOVENES CARGADOS.</td></tr>
            <?php else: ?>
                <?php foreach ($Pacientes as $P): ?>
                <tr>
                    <td><?php echo $P['NombreApellido']; ?></td>
                    <td><?php echo $P['Dni']; ?></td>
                    <td><?php echo $P['Localidad']; ?></td>
                    <td>
                        <a href="<?= BASE_URL_QUIMEY ?>index.php?accion=ficha&id=<?php echo $P['IdPaciente']; ?>" class="btn btn-azul">VER / EDITAR</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script>
// BUSCADOR EN TIEMPO REAL
document.getElementById('buscador').addEventListener('keyup', function() {
    let filtro = this.value.toUpperCase();
    let filas = document.getElementById('tablaJovenes').getElementsByTagName('tr');
    
    for (let i = 1; i < filas.length; i++) {
        let textoFila = filas[i].innerText.toUpperCase();
        filas[i].style.display = textoFila.indexOf(filtro) > -1 ? "" : "none";
    }
});

// ORDENAMIENTO DE TABLA
function ordenarTabla(n) {
    let tabla = document.getElementById("tablaJovenes");
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
