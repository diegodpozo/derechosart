<?php
require_once __DIR__ . '/public_html/config/database.php';

try {
    $pdo = Database::getConnection();
    
    // ACTUALIZAR EL NOMBRE DE USUARIO DEL ADMIN (ID 1)
    $stmt = $pdo->prepare("UPDATE usuarios SET nombre_usuario = 'ROMINA' WHERE id = 1");
    $stmt->execute();

    echo "NOMBRE DE USUARIO ACTUALIZADO A 'ROMINA' CORRECTAMENTE.";
} catch (Exception $e) {
    echo "ERROR AL ACTUALIZAR: " . $e->getMessage();
}
