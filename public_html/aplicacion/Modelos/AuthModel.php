<?php

require_once __DIR__ . '/../../config/database.php';

class AuthModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    /**
     * OBTIENE UN USUARIO POR SU NOMBRE DE USUARIO.
     */
    public function getUserByUsername(string $username) {
        try {
            $stmt = $this->pdo->prepare("SELECT id, nombre_usuario, password, rol FROM usuarios WHERE nombre_usuario = :username");
            $stmt->execute([':username' => $username]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER USUARIO: " . $e->getMessage());
            return false;
        }
    }

    /**
     * OBTIENE LA CONTRASEÑA HASHEADA DE UN USUARIO ESPECIFICO.
     */
    public function getStoredPassword(int $userId) {
        try {
            $stmt = $this->pdo->prepare("SELECT password FROM usuarios WHERE id = :id");
            $stmt->execute([':id' => $userId]);
            return $stmt->fetchColumn();
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER CONTRASEÑA: " . $e->getMessage());
            return false;
        }
    }

    /**
     * ACTUALIZA LA CONTRASEÑA DE UN USUARIO ESPECIFICO.
     */
    public function updatePassword(int $userId, string $newHashedPassword) {
        try {
            $stmt = $this->pdo->prepare("UPDATE usuarios SET password = :password WHERE id = :id");
            return $stmt->execute([':password' => $newHashedPassword, ':id' => $userId]);
        } catch (PDOException $e) {
            error_log("ERROR AL ACTUALIZAR CONTRASEÑA: " . $e->getMessage());
            return false;
        }
    }

    /**
     * CREA UN NUEVO USUARIO.
     */
    public function createUsuario(string $username, string $hashedPassword, int $rol = 2) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre_usuario, password, rol) VALUES (:username, :password, :rol)");
            return $stmt->execute([
                ':username' => $username,
                ':password' => $hashedPassword,
                ':rol' => $rol
            ]);
        } catch (PDOException $e) {
            error_log("ERROR AL CREAR USUARIO: " . $e->getMessage());
            return false;
        }
    }

    /**
     * OBTIENE LA LISTA DE TODOS LOS USUARIOS (PARA EL ADMIN).
     */
    public function getAllUsuarios() {
        try {
            $stmt = $this->pdo->query("SELECT id, nombre_usuario, rol FROM usuarios ORDER BY id ASC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER USUARIOS: " . $e->getMessage());
            return [];
        }
    }
}
