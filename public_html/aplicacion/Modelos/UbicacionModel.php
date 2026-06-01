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
            return ['mensaje_error' => "NO HAY PROVINCIAS REGISTRADAS O LA TABLA NO EXISTE. SINCroniza para cargar."];
        }
    }

    public function getLocalidades() {
        try {
            $stmt = $this->pdo->query("SELECT l.id, l.nombre AS localidad, p.nombre AS provincia FROM localidades l JOIN provincias p ON l.provincia_id = p.id ORDER BY p.nombre ASC, l.nombre ASC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER LOCALIDADES: " . $e->getMessage());
            return ['mensaje_error' => "NO HAY LOCALIDADES REGISTRADAS O LA TABLA NO EXISTE. SINCroniza para cargar."];
        }
    }

    public function getLocalidadesByProvinciaId(int $provinciaId) {
        try {
            $stmt = $this->pdo->prepare("SELECT id, nombre FROM localidades WHERE provincia_id = :provincia_id ORDER BY nombre ASC");
            $stmt->execute([':provincia_id' => $provinciaId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER LOCALIDADES POR PROVINCIA: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Verifica si una zona (Provincia o Localidad) existe en la BD.
     * Ignora mayúsculas/minúsculas y acentos.
     */
    public function existeZona($nombre_zona) {
        try {
            // 1. LIMPIAR NOMBRE PARA BUSQUEDA (Eliminar acentos y normalizar)
            $nombre_zona = $this->limpiarAcentos($nombre_zona);

            // 2. BUSCAR EN PROVINCIAS
            $stmt = $this->pdo->prepare("SELECT id FROM provincias WHERE REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(LOWER(nombre), 'á', 'a'), 'é', 'e'), 'í', 'i'), 'ó', 'o'), 'ú', 'u') = LOWER(?)");
            $stmt->execute([$nombre_zona]);
            if ($stmt->fetch()) return true;

            // 3. BUSCAR EN LOCALIDADES
            $stmt = $this->pdo->prepare("SELECT id FROM localidades WHERE REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(LOWER(nombre), 'á', 'a'), 'é', 'e'), 'í', 'i'), 'ó', 'o'), 'ú', 'u') = LOWER(?)");
            $stmt->execute([$nombre_zona]);
            if ($stmt->fetch()) return true;

            return false;
        } catch (PDOException $e) {
            error_log("ERROR AL VALIDAR ZONA: " . $e->getMessage());
            return false;
        }
    }

    private function limpiarAcentos($cadena) {
        $acentos = ['á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú'];
        $sin_acentos = ['a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u'];
        return str_replace($acentos, $sin_acentos, $cadena);
    }
}
