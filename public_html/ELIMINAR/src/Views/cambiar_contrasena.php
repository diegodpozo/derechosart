<div class="container container-usuarios">
    <h1>GESTION DE USUARIOS</h1>
    
    <?php if (isset($mensaje_cambio)): ?>
        <p class="mensaje" style="color: #28a745; font-weight: bold; text-align: center;"><?= htmlspecialchars($mensaje_cambio) ?></p>
    <?php endif; ?>
    
    <?php if (!empty($errores)): ?>
        <div class="error-message" style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
            <ul style="margin: 0;">
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <section>
        <h2>MI CUENTA: CAMBIAR MI CONTRASEÑA</h2>
        <form action="<?= BASE_URL ?>/cambiar-contrasena" method="POST" style="margin-bottom: 40px; padding-bottom: 20px; border-bottom: 1px solid #555;">
            <div class="form-group">
                <label for="contrasena_actual">Contraseña Actual</label>
                <input type="password" id="contrasena_actual" name="contrasena_actual" required>
            </div>
            
            <div class="form-group">
                <label for="nueva_contrasena">Nueva Contraseña</label>
                <input type="password" id="nueva_contrasena" name="nueva_contrasena" required>
            </div>
            
            <div class="form-group">
                <label for="confirmar_contrasena">Confirmar Nueva Contraseña</label>
                <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
            </div>
            
            <button type="submit">CAMBIAR MI CONTRASEÑA</button>
        </form>
    </section>

    <?php if ($_SESSION['rol'] == 1): ?>
        <section>
            <h2 style="color: #28a745;">ADMIN: ALTA DE NUEVO USUARIO</h2>
            <form action="<?= BASE_URL ?>/usuarios/alta" method="POST" style="margin-bottom: 40px; padding-bottom: 20px; border-bottom: 1px solid #555;">
                <div class="form-group">
                    <label for="nuevo_usuario">NOMBRE DE USUARIO (EJ: USUARIO 2)</label>
                    <input type="text" id="nuevo_usuario" name="nuevo_usuario" required placeholder="USUARIO 2">
                </div>
                
                <div class="form-group">
                    <label for="nueva_contrasena_usuario">CONTRASEÑA INICIAL</label>
                    <input type="password" id="nueva_contrasena_usuario" name="nueva_contrasena_usuario" required>
                </div>

                <div class="form-group">
                    <label for="rol_usuario">ROL</label>
                    <select id="rol_usuario" name="rol_usuario" style="width: 100%; padding: 10px; background-color: #222; color: white; border: 1px solid #444;">
                        <option value="2">OPERADOR (LIMITADO)</option>
                        <option value="1">ADMINISTRADOR (TOTAL)</option>
                    </select>
                </div>
                
                <button type="submit" style="background-color: #28a745;">CREAR USUARIO</button>
            </form>

            <h2>USUARIOS EXISTENTES EN EL SISTEMA</h2>
            <table class="tabla-simple">
                <thead>
                    <tr>
                        <th>USUARIO</th>
                        <th>ROL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $u): ?>
                        <tr>
                            <td style="text-transform: uppercase;"><?= htmlspecialchars($u['nombre_usuario']) ?></td>
                            <td><?= $u['rol'] == 1 ? 'ADMIN' : 'OPERADOR' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    <?php endif; ?>
    
    <div style="margin-top: 30px;">
        <a href="<?= BASE_URL ?>/gestion" class="btn-table-action">VOLVER AL PANEL DE GESTION</a>
    </div>
</div>
