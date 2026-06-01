<main>
    <div class="container-gestion">
        <h1>INGRESAR AL PANEL</h1>
        <?php if (!empty($error)): ?>
            <p class="mensaje" style="color: #ff6b6b; text-align: center; margin-bottom: 15px; font-weight: bold;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <?php if (!empty($mensaje)): ?>
            <p class="mensaje" style="color: #ffd43b; text-align: center; margin-bottom: 15px; font-weight: bold;"><?= htmlspecialchars($mensaje) ?></p>
        <?php endif; ?>
        
        <form action="<?= BASE_URL ?>login" method="POST">
            <div class="form-group">
                <label for="nombre_usuario">NOMBRE DE USUARIO</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="input-gestion" required>
            </div>
            <div class="form-group">
                <label for="contrasena">CONTRASENA</label>
                <input type="password" id="contrasena" name="contrasena" class="input-gestion" required>
            </div>
            <button type="submit" class="btn-cerrar-sesion" style="width: 100%; padding: 15px; font-size: 14px;">INGRESAR AL SISTEMA</button>
        </form>
    </div>
</main>
