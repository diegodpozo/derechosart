<div class="container">
    <h1>INGRESAR CON CONTRASENA</h1>
    <?php if (!empty($error)): ?>
        <p class="mensaje" style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <?php if (!empty($mensaje)): ?>
        <p class="mensaje" style="color: red;"><?= htmlspecialchars($mensaje) ?></p>
    <?php endif; ?>
    <form action="<?= BASE_URL ?>/login" method="POST">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <div class="form-group">
            <label for="nombre_usuario">NOMBRE DE USUARIO</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
        </div>
        <div class="form-group">
            <label for="contrasena">CONTRASENA</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <button type="submit">INGRESAR</button>
    </form>
</div>
