<?php
// Define un título para la página de error
$pageTitle = 'Página no encontrada';

// El helper 'view' cargará este archivo dentro del layout principal
?>
<div class="container" style="text-align: center; padding: 50px;">
    <h1>ERROR 404</h1>
    <p>La página que estás buscando no existe o fue movida.</p>
    <p><a href="<?= BASE_URL ?>/" class="btn-table-action" style="text-decoration: none;">VOLVER AL INICIO</a></p>
</div>
