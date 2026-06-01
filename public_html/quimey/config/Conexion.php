<?php
class Conexion {
    private $Host;
    private $Db;
    private $Usuario;
    private $Password;
    private $Charset = "utf8mb4";

    public function __construct() {
        // DETECTAR SI ESTAMOS EN LOCAL O EN HOSTINGER
        if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
            // CONFIGURACION LOCAL
            $this->Host = "localhost";
            $this->Db = "GestionQuimey";
            $this->Usuario = "root";
            $this->Password = "";
        } else {
            // CONFIGURACION HOSTINGER (ACTUALIZAR CON DATOS REALES DEL PANEL)
            $this->Host = "localhost";
            $this->Db = "u538722186_cami"; 
            $this->Usuario = "u538722186_cami";
            $this->Password = "Lacacupuntocom26";
        }
    }

    public function Conectar() {
        try {
            $Conexion = "mysql:host=" . $this->Host . ";dbname=" . $this->Db . ";charset=" . $this->Charset;
            $Opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $Pdo = new PDO($Conexion, $this->Usuario, $this->Password, $Opciones);
            return $Pdo;
        } catch (PDOException $E) {
            // MOSTRAR ERROR REAL PARA DIAGNOSTICO
            echo "ERROR TECNICO: " . $E->getMessage();
            exit;
        }
    }
}
?>
