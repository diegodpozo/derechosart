<?php
require_once __DIR__ . '/public_html/config/database.php';

try {
    $pdo = Database::getConnection();
    
    // 1. ELIMINAR LA COLUMNA DUPLICADA 'username' (YA QUE USAREMOS 'nombre_usuario')
    $pdo->exec("ALTER TABLE usuarios DROP COLUMN username");
    
    // 2. ASEGURARNOS DE QUE 'nombre_usuario' SEA NOT NULL
    $pdo->exec("ALTER TABLE usuarios MODIFY nombre_usuario VARCHAR(50) NOT NULL");

    echo "LIMPIEZA DE TABLA COMPLETADA. AHORA EL ALTA DEBERÍA FUNCIONAR.";
} catch (Exception $e) {
    echo "ERROR EN LA LIMPIEZA: " . $e->getMessage();
}
