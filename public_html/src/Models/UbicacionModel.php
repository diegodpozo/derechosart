<?php

require_once __DIR__ . '/../../config/database.php';

class UbicacionModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function getProvincias() {
        try {
            $stmt = $this->pdo->query("SELECT id, nombre FROM provincias ORDER BY nombre ASC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER PROVINCIAS: " . $e->getMessage());
            // Retorna un mensaje de error o array vacío para la vista
            return ['mensaje_error' => "NO HAY PROVINCIAS REGISTRADAS O LA TABLA NO EXISTE. SINCroniza para cargar."];
        }
    }

    public function getLocalidades() {
        try {
            $stmt = $this->pdo->query("SELECT l.id, l.nombre AS localidad, p.nombre AS provincia FROM localidades l JOIN provincias p ON l.provincia_id = p.id ORDER BY p.nombre ASC, l.nombre ASC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER LOCALIDADES: " . $e->getMessage());
            // Retorna un mensaje de error o array vacío para la vista
            return ['mensaje_error' => "NO HAY LOCALIDADES REGISTRADAS O LA TABLA NO EXISTE. SINCroniza para cargar."];
        }
    }

    // Podríamos añadir aquí métodos para la sincronización con la API de Georef,
    public function getLocalidadesByProvinciaId(int $provinciaId) {
        try {
            $stmt = $this->pdo->prepare("SELECT id, nombre FROM localidades WHERE provincia_id = :provincia_id ORDER BY nombre ASC");
            $stmt->execute([':provincia_id' => $provinciaId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER LOCALIDADES POR PROVINCIA: " . $e->getMessage());
            return false; // Indicar un error
        }
    }
}
