<?php

class Database {
    private static $pdo = null; 

    // El constructor privado previene la creación de instancias de la clase.
    private function __construct() {}

    /**
     * Obtiene la instancia única de la conexión PDO (Singleton).
     * @throws Exception Si hay un error de conexión a la base de datos.
     * @return PDO
     */
    public static function getConnection() {
        if (self::$pdo === null) {
            // Cargar credenciales desde db_credentials.php
            $credentials = require __DIR__ . '/db_credentials.php';

            $db_host = $credentials['DB_HOST'];
            $db_name = $credentials['DB_NAME'];
            $db_user = $credentials['DB_USER'];
            $db_pass = $credentials['DB_PASS'];

            try {
                $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";
                self::$pdo = new PDO($dsn, $db_user, $db_pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
                // FORZAR ZONA HORARIA DE ARGENTINA EN LA CONEXION
                self::$pdo->exec("SET time_zone = '-03:00'");
            } catch (PDOException $e) {
                // Loguear el error completo para depuración, pero no exponerlo al usuario final.
                error_log("ERROR DE CONEXION A LA BASE DE DATOS: " . $e->getMessage());
                // Lanzar una excepción genérica o mostrar un mensaje amigable.
                throw new Exception("ERROR INTERNO: No se pudo conectar a la base de datos.");
            }
        }
        return self::$pdo;
    }
}
