<?php
require_once __DIR__ . '/public_html/config/database.php';

try {
    $pdo = Database::getConnection();
    echo "ESTRUCTURA DE LA TABLA 'usuarios':\n";
    $stmt = $pdo->query("DESCRIBE usuarios");
    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

    echo "\nCONTENIDO DE LA TABLA 'usuarios':\n";
    $stmt = $pdo->query("SELECT id, nombre_usuario, rol FROM usuarios");
    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
