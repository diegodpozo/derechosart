<?php
require_once __DIR__ . '/public_html/config/database.php';

try {
    $pdo = Database::getConnection();
    
    // 1. ACTUALIZAR TABLA 'usuarios'
    // AGREGAMOS 'rol' (1=ADMIN, 2=OPERADOR) Y 'username'
    $pdo->exec("ALTER TABLE usuarios ADD COLUMN IF NOT EXISTS rol INT DEFAULT 2");
    $pdo->exec("ALTER TABLE usuarios ADD COLUMN IF NOT EXISTS nombre_usuario VARCHAR(50) UNIQUE");
    
    // CONFIGURAR USUARIO 1 COMO ADMIN
    $pdo->exec("UPDATE usuarios SET rol = 1, nombre_usuario = 'USUARIO 1' WHERE id = 1");
    
    // 2. ACTUALIZAR TABLA 'consultas'
    // AGREGAMOS 'asignado_a' QUE REFERENCIA AL ID DEL USUARIO
    $pdo->exec("ALTER TABLE consultas ADD COLUMN IF NOT EXISTS asignado_a INT DEFAULT 1");
    
    // ASEGURAR QUE TODO LO ACTUAL SEA DEL USUARIO 1
    $pdo->exec("UPDATE consultas SET asignado_a = 1 WHERE asignado_a IS NULL OR asignado_a = 0");

    echo "MIGRACION DE BASE DE DATOS COMPLETADA EXITOSAMENTE.";
} catch (Exception $e) {
    echo "ERROR EN LA MIGRACION: " . $e->getMessage();
}
