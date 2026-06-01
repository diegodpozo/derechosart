<!-- El layout principal se encarga del <head> y la navegación principal -->
<!-- Este archivo solo contiene el contenido específico de la página de gestión -->

<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<?php if (isset($_SESSION['gestion_mensaje_art'])): ?>
<script>
    window.gestionMensajeArt = <?= json_encode($_SESSION['gestion_mensaje_art']) ?>;
</script>
<?php unset($_SESSION['gestion_mensaje_art']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gestion_error_art'])): ?>
<script>
    window.gestionErrorArt = <?= json_encode($_SESSION['gestion_error_art']) ?>;
</script>
<?php unset($_SESSION['gestion_error_art']); ?>
<?php endif; ?>

<main class="body-gestion">
<!-- Barra de navegación superior específica para esta vista -->
<div class="navbar-superior">
    <div class="navbar-contenido">
        <div class="menu-hamburguesa" id="menuHamburguesa">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <h2><?= $pageTitle ?></h2>
        
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Buscar...">
            <span class="search-icon">🔍</span>
        </div>

        <div class="navbar-botones-derecha">
            <?php if (isset($es_eliminados_view) && $es_eliminados_view): ?>
                <a href="<?= BASE_URL ?>gestion" class="btn-ver-normales">
                    <span class="d-text">VER DATOS NORMALES</span>
                    <span class="m-text">VER NORMALES</span>
                </a>
            <?php endif; ?>
            <a href="<?= BASE_URL ?>cambiar-contrasena" class="btn-cambiar-contrasena">
                <span class="d-text">CAMBIAR CONTRASEÑA</span>
                <span class="m-text">CONTRASEÑA</span>
            </a>
            <a href="<?= BASE_URL ?>logout" class="btn-cerrar-sesion">
                <span class="d-text">CERRAR SESION</span>
                <span class="m-text">SALIR</span>
            </a>
        </div>
    </div>
</div>

<!-- Drawer/Menu lateral -->
<div class="drawer" id="drawer">
    <div class="drawer-header">
        <h3>MENU</h3>
        <span class="close-drawer" id="closeDrawer">×</span>
    </div>
    <div class="drawer-content">
        <ul>
            <li id="agregarArtBtn">📚 GESTION ART</li>
            <li id="sincronizarUbicacionesBtn">🔄 SINCRONIZAR UBICACIONES</li>
            <li><a href="<?= BASE_URL ?>gestion/eliminados" class="no-subrayado">🗑️ LEER DATOS ELIMINADOS</a></li>
        </ul>
        <div style="margin-top: 30px; padding: 15px; border-top: 1px solid #444; color: #555; font-size: 10px; font-weight: bold;">
            SISTEMA DE GESTION <span class="version-tag">VERS 3.5</span>
        </div>
    </div>
</div>
<div class="drawer-overlay" id="drawerOverlay"></div>

<!-- Modal para agregar ART -->
<div class="modal" id="modalAgregarArt">
    <div class="modal-content">
        <div class="modal-header">
            <h2>AGREGAR NUEVA ART</h2>
            <div class="modal-header-actions">
                <button type="button" id="btnEliminarArtModal" class="btn-modal-eliminar">ELIMINAR</button>
                <button type="submit" form="formAgregarArt" name="agregar_art" class="btn-modal-guardar">AGREGAR</button>
                <button type="button" id="btnCancelarArt" class="btn-modal-cancelar">CANCELAR</button>
                <span class="close" id="closeModalArt">&times;</span>
            </div>
        </div>
        <form id="formAgregarArt" method="POST" action="<?= BASE_URL ?>api/agregar-art">
            <div class="modal-form-group">
                <label for="nombre_art">Nombre de la ART:</label>
                <input type="text" id="nombre_art" name="nombre_art" class="modal-input" required>
            </div>
        </form>
    </div>
</div>

<!-- Nuevo Modal para Eliminar ARTs -->
<div class="modal" id="modalEliminarArt">
    <div class="modal-content">
        <div class="modal-header">
            <h2>ELIMINAR ART</h2>
            <div class="modal-header-actions">
                <span class="close" id="closeModalEliminarArt">&times;</span>
            </div>
        </div>
        <div class="modal-body">
            <p>Selecciona una ART de la lista para eliminarla. No se podrá eliminar una ART si está asociada a alguna consulta.</p>
            <div id="artListContainer">
                <!-- Las ARTs se cargarán aquí con JavaScript -->
                <ul id="artList"></ul>
            </div>
            <div id="eliminarArtMessage" class="message-area"></div>
        </div>
    </div>
</div>

<!-- Menú contextual -->
<div id="contextMenu" class="context-menu">
    <ul id="contextMenuOptions">
        <li id="deleteOption">🗑️ ELIMINAR CLIENTE</li>
        <!-- SE LLENA CON JS -->
    </ul>
</div>

<div class="container-fullscreen">
    <div class="tabla-excel-container">
        <table class="tabla-excel">
            <thead>
                <tr>
                    <th class="columna-leido"></th>
                    <!-- Los links de ordenamiento ahora usan las variables pasadas por el controlador -->
                    <th><a href="<?= $sort_urls['fecha_registro'] ?>">FECHA REGISTRO<?= $sort_icons['fecha_registro'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre'] ?>">NOMBRE<?= $sort_icons['nombre'] ?></a></th>
                    <th><a href="<?= $sort_urls['apellido'] ?>">APELLIDO<?= $sort_icons['apellido'] ?></a></th>
                    <th><a href="<?= $sort_urls['telefono'] ?>">TELÉFONO<?= $sort_icons['telefono'] ?></a></th>
                    <th><a href="<?= $sort_urls['observaciones'] ?>">OBSERVACIONES<?= $sort_icons['observaciones'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_provincia'] ?>">PROVINCIA<?= $sort_icons['nombre_provincia'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_localidad'] ?>">LOCALIDAD<?= $sort_icons['nombre_localidad'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_categoria'] ?>">CATEGORÍA<?= $sort_icons['nombre_categoria'] ?></a></th>
                    <th><a href="<?= $sort_urls['edad'] ?>">EDAD<?= $sort_icons['edad'] ?></a></th>
                    <th><a href="<?= $sort_urls['denuncia_art'] ?>">DENUNCIA ART<?= $sort_icons['denuncia_art'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_art'] ?>">ART<?= $sort_icons['nombre_art'] ?></a></th>
                    <th><a href="<?= $sort_urls['sueldo'] ?>">SUELDO<?= $sort_icons['sueldo'] ?></a></th>
                    <th><a href="<?= $sort_urls['alta_art'] ?>">ALTA ART<?= $sort_icons['alta_art'] ?></a></th>
                    <th><a href="<?= $sort_urls['abogado_previo'] ?>">ABOGADO<?= $sort_icons['abogado_previo'] ?></a></th>
                    <th><a href="<?= $sort_urls['descripcion_lesion'] ?>">DESCRIPCIÓN<?= $sort_icons['descripcion_lesion'] ?></a></th>
                    <th><a href="<?= $sort_urls['fecha_accidente'] ?>">FECHA ACCIDENTE<?= $sort_icons['fecha_accidente'] ?></a></th>
                    <th><a href="<?= $sort_urls['fecha_ingreso'] ?>">FECHA INGRESO<?= $sort_icons['fecha_ingreso'] ?></a></th>
                    <th><a href="<?= $sort_urls['antiguedad_laboral'] ?>">ANTIGÜEDAD<?= $sort_icons['antiguedad_laboral'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_lugar_trabajo_provincia'] ?>">LUGAR TRAB. PROV.<?= $sort_icons['nombre_lugar_trabajo_provincia'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_lugar_trabajo_localidad'] ?>">LUGAR TRAB. LOC.<?= $sort_icons['nombre_lugar_trabajo_localidad'] ?></a></th>
                    <th><a href="<?= $sort_urls['trabaja_en_blanco'] ?>">EN BLANCO<?= $sort_icons['trabaja_en_blanco'] ?></a></th>
                    <th><a href="<?= $sort_urls['pagan_en_negro'] ?>">PAGAN NEGRO<?= $sort_icons['pagan_en_negro'] ?></a></th>

                    <th><a href="<?= $sort_urls['situacion_actual'] ?>">SITUACIÓN<?= $sort_icons['situacion_actual'] ?></a></th>
                    <th><a href="<?= $sort_urls['forma_despido'] ?>">FORMA DESPIDO<?= $sort_icons['forma_despido'] ?></a></th>
                    <th><a href="<?= $sort_urls['nombre_usuario_asignado'] ?>">USUARIO<?= $sort_icons['nombre_usuario_asignado'] ?></a></th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($consultas as $index => $consulta): ?>
        <tr class="<?= $index % 2 === 0 ? 'fila-par' : 'fila-impar' ?>" 
            data-id="<?= $consulta['id'] ?>"
            data-nombre="<?= ($consulta['nombre']); ?>"
            data-apellido="<?= htmlspecialchars($consulta['apellido']); ?>"
            data-telefono="<?= ($consulta['telefono']); ?>"
            data-provincia-id="<?= htmlspecialchars($consulta['provincia_id'] ?? ''); ?>"
            data-localidad-id="<?= htmlspecialchars($consulta['localidad_id'] ?? ''); ?>"
            data-categoria-id="<?= htmlspecialchars($consulta['categoria_id'] ?? ''); ?>"
            data-provincia="<?= htmlspecialchars($consulta['nombre_provincia'] ?? ''); ?>"
            data-localidad="<?= htmlspecialchars($consulta['nombre_localidad'] ?? ''); ?>"
            data-categoria="<?= htmlspecialchars($consulta['nombre_categoria'] ?? ''); ?>"
            data-edad="<?= htmlspecialchars($consulta['edad'] ?? ''); ?>"
            data-denuncia-art="<?= htmlspecialchars($consulta['denuncia_art'] ?? ''); ?>"
            data-art-id="<?= htmlspecialchars($consulta['art_id'] ?? ''); ?>"
            data-art="<?= htmlspecialchars($consulta['nombre_art'] ?? ''); ?>"
            data-sueldo-registrado="<?= htmlspecialchars($consulta['sueldo_registrado'] ?? ''); ?>"
            data-alta-art="<?= htmlspecialchars($consulta['alta_art'] ?? ''); ?>"
            data-abogado-previo="<?= htmlspecialchars($consulta['abogado_previo'] ?? ''); ?>"
            data-descripcion-lesion="<?= htmlspecialchars($consulta['descripcion_lesion'] ?? ''); ?>"
            data-fecha-accidente="<?= htmlspecialchars($consulta['fecha_accidente'] ?? ''); ?>"
            data-fecha-ingreso="<?= htmlspecialchars($consulta['fecha_ingreso'] ?? ''); ?>"
            data-antiguedad-laboral="<?= htmlspecialchars($consulta['antiguedad_laboral'] ?? ''); ?>"
            data-lugar-trabajo-prov-id="<?= htmlspecialchars($consulta['lugar_trabajo_provincia_id'] ?? ''); ?>"
            data-lugar-trabajo-loc-id="<?= htmlspecialchars($consulta['lugar_trabajo_localidad_id'] ?? ''); ?>"
            data-lugar-trabajo-prov="<?= htmlspecialchars($consulta['nombre_lugar_trabajo_provincia'] ?? ''); ?>"
            data-lugar-trabajo-loc="<?= htmlspecialchars($consulta['nombre_lugar_trabajo_localidad'] ?? ''); ?>"
            data-trabaja-blanco="<?= htmlspecialchars($consulta['trabaja_en_blanco'] ?? ''); ?>"
            data-dias-laborales="<?= htmlspecialchars($consulta['dias_laborales'] ?? ''); ?>"
            data-horarios-laborales="<?= htmlspecialchars($consulta['horarios_laborales'] ?? ''); ?>"
            data-pagan-negro="<?= htmlspecialchars($consulta['pagan_en_negro'] ?? ''); ?>"
            data-sueldo-total="<?= htmlspecialchars($consulta['sueldo_total_despido'] ?? ''); ?>"
            data-situacion-actual="<?= htmlspecialchars($consulta['situacion_actual'] ?? ''); ?>"
            data-forma-despido="<?= htmlspecialchars($consulta['forma_despido'] ?? ''); ?>"
            data-observaciones="<?= htmlspecialchars($consulta['observaciones'] ?? 'N/A'); ?>"
            data-fecha-registro="<?= htmlspecialchars($consulta['fecha_registro']); ?>"
            data-asignado-a="<?= htmlspecialchars($consulta['asignado_a'] ?? '1'); ?>">
            <td><div class="circulo-leido <?= ($consulta['leido'] ?? false) ? 'leido-verde' : 'leido-rojo' ?>" data-id="<?= $consulta['id'] ?>"></div></td>
            <td><?= htmlspecialchars($consulta['fecha_registro']); ?></td>
            <td class="<?= (($consulta['reingresado'] ?? false) || ($consulta['es_duplicado'] ?? false)) ? 'texto-rojo-eliminado' : '' ?>"><?= htmlspecialchars($consulta['nombre']); ?></td>
            <td class="<?= (($consulta['reingresado'] ?? false) || ($consulta['es_duplicado'] ?? false)) ? 'texto-rojo-eliminado' : '' ?>"><?= htmlspecialchars($consulta['apellido']); ?></td>
            <td><?= htmlspecialchars($consulta['telefono']); ?></td>
            <td><?= htmlspecialchars($consulta['observaciones'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['nombre_provincia'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['nombre_localidad'] ?? 'N/A'); ?></td>
            <td><span class="categoria-<?= str_replace(' ', '-', strtolower(htmlspecialchars($consulta['nombre_categoria'] ?? 'N/A'))); ?>"><?= htmlspecialchars($consulta['nombre_categoria'] ?? 'N/A'); ?></span></td>
            <td><?= format_number($consulta['edad'] ?? null); ?></td>
            <td><?= htmlspecialchars($consulta['denuncia_art'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['nombre_art'] ?? 'N/A'); ?></td>
            <td><?= format_number($consulta['sueldo'] ?? null); ?></td>
            <td><?= htmlspecialchars($consulta['alta_art'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['abogado_previo'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['descripcion_lesion'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['fecha_accidente'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['fecha_ingreso'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars((string)($consulta['antiguedad_laboral'] ?? 'N/A')); ?></td>
            <td><?= htmlspecialchars($consulta['nombre_lugar_trabajo_provincia'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['nombre_lugar_trabajo_localidad'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['trabaja_en_blanco'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['pagan_en_negro'] ?? 'N/A'); ?></td>

            <td><?= htmlspecialchars($consulta['situacion_actual'] ?? 'N/A'); ?></td>
            <td><?= htmlspecialchars($consulta['forma_despido'] ?? 'N/A'); ?></td>
            <td style="font-weight: bold; color: #28a745;"><?= htmlspecialchars($consulta['nombre_usuario_asignado'] ?? 'ROMINA'); ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
        </table>
        
        <?php if (empty($consultas)): ?>
            <div class="no-data-message">
                <p>NO HAY CONSULTAS REGISTRADAS TODAVÍA.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Modal de Detalles del Cliente - ESTRUCTURA CORRECTA -->
<div id="modalDetalles" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 id="modalTitulo">Detalles del Cliente</h2>
            <div class="modal-header-actions">
                <?php if (isset($es_eliminados_view) && $es_eliminados_view): ?>
                    <button type="button" id="btnRestaurarModal" class="btn-modal-restaurar">RESTAURAR</button>
                <?php else: ?>
                    <button type="button" id="btnEditarModal" class="btn-modal-editar">EDITAR</button>
                    <button type="button" id="btnEliminarModal" class="btn-modal-eliminar">ELIMINAR</button>
                <?php endif; ?>
                <span class="close">&times;</span>
            </div>
        </div>
        <form id="formModal" method="POST">
            <input type="hidden" id="modalId" name="id">
            <input type="hidden" name="accion" value="guardar_edicion">
            <div id="contenidoModal"></div>
        </form>
    </div>
</div>

<!-- Mensaje de notificación -->
<div id="notification" class="notification"></div>

</main>

<script src="<?= BASE_URL ?>publico/js/jquery.min.js"></script>
<script>
    // BASE_URL ya está definida globalmente en encabezado.php
    const BASE_API_URL = BASE_URL.replace(/\/$/, '') + '/api';
    
    // Pasar si estamos en la vista de eliminados
    const ES_VISTA_ELIMINADOS = <?= json_encode($es_eliminados_view ?? false) ?>;
    // Pasar IDs de categorías a JavaScript para lógica condicional en el modal
    const ID_ACCIDENTES = <?= json_encode($id_accidentes) ?>;
    const ID_DESPIDOS = <?= json_encode($id_despidos) ?>;
    const ID_ENFERMEDADES = <?= json_encode($id_enfermedades) ?>;
    // Pasar listas de provincias y ARTs a JavaScript para poblar dropdowns en el modal
    const TODAS_PROVINCIAS = <?= json_encode($provincias) ?>;
    const TODAS_ART_EMPRESAS = <?= json_encode($art_empresas) ?>;
    // NUEVO: Pasar usuarios y rol actual
    const LISTA_USUARIOS = <?= json_encode($usuarios) ?>;
    const USER_ROL = <?= json_encode($_SESSION['rol']) ?>;
    const USER_ID = <?= json_encode($_SESSION['user_id']) ?>;
</script>
<script src="<?= BASE_URL ?>js/gestiondb.js?v=2.1"></script>
