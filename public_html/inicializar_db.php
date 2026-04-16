<?php
// Script para inicializar o migrar la base de datos.
// Este archivo debe ser ejecutado UNA UNICA VEZ y luego eliminado o protegido.
// NO debe ser accesible públicamente en un entorno de producción.

require_once __DIR__ . '/config/database.php';

echo "INICIANDO INICIALIZACION/MIGRACION DE LA BASE DE DATOS...
";

try {
    $pdo = Database::getConnection();
    
    // ---- CREACION DE TABLA DE USUARIOS (si no existe) ----
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )
    ");
    echo "Tabla 'usuarios' verificada/creada.
";
    
    // Verificar si existe un usuario y crear uno con contraseña '1' si no hay ninguno
    $stmt_check_user = $pdo->query("SELECT COUNT(*) FROM usuarios");
    $user_count = $stmt_check_user->fetchColumn();
    
    if ($user_count == 0) {
        // Crear usuario con contraseña '1' encriptada
        $hashed_password = password_hash('1', PASSWORD_DEFAULT);
        $stmt_insert = $pdo->prepare("INSERT INTO usuarios (id, password) VALUES (1, ?)");
        $stmt_insert->execute([$hashed_password]);
        echo "Usuario por defecto (ID 1, pass: '1') insertado.
";
    } else {
        echo "Ya existe un usuario en la tabla 'usuarios'.
";
    }
    
    // ---- CREACION Y PRE-POPULACION DE TABLA CATEGORIAS (si no existe) ----
    $pdo->exec("CREATE TABLE IF NOT EXISTS categorias (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL UNIQUE
    )");
    echo "Tabla 'categorias' verificada/creada.
";

    $categorias_predefinidas = [
        'Accidentes de trabajo',
        'Despidos',
        'Enfermedades profesionales'
    ];

    foreach ($categorias_predefinidas as $categoria_nombre) {
        $stmt_check_categoria = $pdo->prepare("SELECT id FROM categorias WHERE nombre = :nombre");
        $stmt_check_categoria->execute([':nombre' => $categoria_nombre]);
        if ($stmt_check_categoria->rowCount() == 0) {
            $stmt_insert_categoria = $pdo->prepare("INSERT INTO categorias (nombre) VALUES (:nombre)");
            $stmt_insert_categoria->execute([':nombre' => $categoria_nombre]);
            echo "Categoría '{$categoria_nombre}' insertada.
";
        } else {
            echo "Categoría '{$categoria_nombre}' ya existe.
";
        }
    }

    // ---- CREACION Y PRE-POPULACION DE TABLA ART (si no existe) ----
    $pdo->exec("CREATE TABLE IF NOT EXISTS art (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL UNIQUE
    )");
    echo "Tabla 'art' verificada/creada.
";

    // ---- VERIFICAR Y AÑADIR COLUMNA 'eliminado' a 'consultas' (si no existe) ----
    // Primero, verificar si la tabla 'consultas' existe
    $stmt_check_table = $pdo->query("SHOW TABLES LIKE 'consultas'");
    if ($stmt_check_table->rowCount() > 0) {
        $stmt_check_column = $pdo->query("SHOW COLUMNS FROM consultas LIKE 'eliminado'");
        if ($stmt_check_column->rowCount() == 0) {
            $pdo->exec("ALTER TABLE consultas ADD COLUMN eliminado BOOLEAN DEFAULT FALSE");
            echo "Columna 'eliminado' añadida a la tabla 'consultas'.
";
        } else {
            echo "Columna 'eliminado' ya existe en la tabla 'consultas'.
";
        }
    } else {
        echo "La tabla 'consultas' no existe. No se puede verificar/añadir la columna 'eliminado'.
";
    }

    echo "INICIALIZACION/MIGRACION DE LA BASE DE DATOS COMPLETADA EXITOSAMENTE.
";

} catch (Exception $e) {
    error_log("ERROR CRÍTICO DURANTE LA INICIALIZACION/MIGRACION DE LA BASE DE DATOS: " . $e->getMessage());
    echo "ERROR CRÍTICO: " . $e->getMessage() . "
";
    echo "Por favor, revisa los logs de errores para más detalles.
";
    exit(1); // Salir con código de error
}
