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

            // TABLA DE IMAGENES DE MEDICACION (AUTO-INSTALACION)
            $Pdo->exec("CREATE TABLE IF NOT EXISTS medicacion_imagenes (
                IdImagen INT AUTO_INCREMENT PRIMARY KEY,
                IdPaciente INT NOT NULL,
                NombreOriginal VARCHAR(255) NULL,
                MimeType VARCHAR(100) NULL,
                Tamano INT NULL,
                Imagen LONGBLOB NOT NULL,
                FechaCarga TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (IdPaciente)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

            // TABLA DE INTERVENCIONES (AUTO-INSTALACION)
            $Pdo->exec("CREATE TABLE IF NOT EXISTS intervenciones (
                IdIntervencion INT AUTO_INCREMENT PRIMARY KEY,
                IdPaciente INT NOT NULL,
                EntrevistaFecha DATE NULL,
                EntrevistaProfesional VARCHAR(255) NULL,
                ReunionFecha DATE NULL,
                ReunionProfesionales TEXT NULL,
                DomicilioFecha DATE NULL,
                DomicilioProfesionales TEXT NULL,
                InformeSemestral VARCHAR(500) NULL,
                LineasAccion VARCHAR(500) NULL,
                FechaCarga TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (IdPaciente)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

            // TABLA DE FICHAS DE REFERENTES (AUTO-INSTALACION)
            $Pdo->exec("CREATE TABLE IF NOT EXISTS fichas_referentes (
                IdReferente INT AUTO_INCREMENT PRIMARY KEY,
                Nombre VARCHAR(100) NULL,
                Apellido VARCHAR(100) NULL,
                Especialidad VARCHAR(150) NULL,
                Telefono VARCHAR(50) NULL,
                FechaCarga TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

            // COLUMNA IdFichaReferente EN TABLA referentes (VINCULO PACIENTE -> FICHA DE REFERENTE)
            // NOTA: EN LA BD EXISTENTE, IdReferente YA ES EL PK AUTOINCREMENTAL DE LA TABLA (UNA FILA POR PACIENTE).
            // POR ESO EL VINCULO A fichas_referentes USA OTRA COLUMNA: IdFichaReferente.
            $StmtCol = $Pdo->query("SELECT COUNT(*) FROM information_schema.COLUMNS 
                                    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'referentes' AND COLUMN_NAME = 'IdFichaReferente'");
            if ($StmtCol->fetchColumn() == 0) {
                $Pdo->exec("ALTER TABLE referentes ADD COLUMN IdFichaReferente INT NULL AFTER NombreReferente");
            }

            // NORMALIZAR COLACION DE TABLAS NUEVAS A utf8mb4_general_ci (IGUAL QUE LAS TABLAS VIEJAS).
            // EVITA ERRORES "Illegal mix of collations" (el servidor crea las tablas nuevas con
            // utf8mb4_uca1400_ai_ci, que choca con los parametros PDO utf8mb4_bin).
            $StmtCol2 = $Pdo->query("SELECT TABLE_COLLATION FROM information_schema.TABLES 
                                     WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'fichas_referentes'");
            $ColTabla = $StmtCol2->fetchColumn();
            if ($ColTabla && $ColTabla != 'utf8mb4_general_ci') {
                $Pdo->exec("ALTER TABLE fichas_referentes CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
            }
            $StmtCol3 = $Pdo->query("SELECT TABLE_COLLATION FROM information_schema.TABLES 
                                     WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'medicacion_imagenes'");
            $ColTabla3 = $StmtCol3->fetchColumn();
            if ($ColTabla3 && $ColTabla3 != 'utf8mb4_general_ci') {
                $Pdo->exec("ALTER TABLE medicacion_imagenes CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
            }

            return $Pdo;
        } catch (PDOException $E) {
            // MOSTRAR ERROR REAL PARA DIAGNOSTICO
            echo "ERROR TECNICO: " . $E->getMessage();
            exit;
        }
    }
}
?>
