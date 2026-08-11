<?php
// DIAGNOSTICO DE REFERENTES - QUIMEY (BORRAR LUEGO DE USAR)
require_once "../config/Conexion.php";
require_once "../models/Joven.php";

$Conexion = new Conexion();
$Db = $Conexion->Conectar();
$Modelo = new Joven($Db);

echo "<pre>";
echo "SERVIDOR: " . $_SERVER['SERVER_NAME'] . "\n";

// 1. EXISTE COLUMNA IdFichaReferente?
try {
    $Col = $Db->query("SELECT COUNT(*) FROM information_schema.COLUMNS
                       WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'referentes' AND COLUMN_NAME = 'IdFichaReferente'")->fetchColumn();
    echo "1) COLUMNA IdFichaReferente EN referentes: " . ($Col ? "SI" : "NO") . "\n";
} catch (Exception $E) {
    echo "1) ERROR COLUMNA: " . $E->getMessage() . "\n";
}

// 2. ESTRUCTURA DE TABLA referentes
try {
    $Filas = $Db->query("SHOW COLUMNS FROM referentes")->fetchAll(PDO::FETCH_ASSOC);
    echo "2) COLUMNAS DE referentes:\n";
    foreach ($Filas as $F) echo "   - " . $F['Field'] . " (" . $F['Type'] . ")\n";
} catch (Exception $E) {
    echo "2) ERROR ESTRUCTURA: " . $E->getMessage() . "\n";
}

// 3. CUANTAS FILAS HAY EN referentes?
try {
    $Total = $Db->query("SELECT COUNT(*) FROM referentes")->fetchColumn();
    echo "3) FILAS EN referentes: " . $Total . "\n";
} catch (Exception $E) {
    echo "3) ERROR CONTEO: " . $E->getMessage() . "\n";
}

// 4. FILAS CON TEXTO Y SIN VINCULAR
try {
    $Sql = "SELECT IdPaciente, NombreReferente, IdFichaReferente FROM referentes ORDER BY IdPaciente DESC LIMIT 30";
    $Filas = $Db->query($Sql)->fetchAll(PDO::FETCH_ASSOC);
    echo "4) ULTIMAS 30 FILAS DE referentes:\n";
    if (empty($Filas)) echo "   (VACIO)\n";
    foreach ($Filas as $F) {
        echo "   IdPaciente=" . $F['IdPaciente'] . " | IdFichaReferente=" . var_export($F['IdFichaReferente'], true) . " | Nombre='" . $F['NombreReferente'] . "'\n";
    }
} catch (Exception $E) {
    echo "4) ERROR MUESTRA: " . $E->getMessage() . "\n";
}

// 5. CUANTAS FICHAS DE REFERENTES EXISTEN?
try {
    $Fichas = $Db->query("SELECT COUNT(*) FROM fichas_referentes")->fetchColumn();
    echo "5) FICHAS EN fichas_referentes: " . $Fichas . "\n";
} catch (Exception $E) {
    echo "5) ERROR FICHAS: " . $E->getMessage() . "\n";
}

// 6. EJECUTAR MIGRACION Y VER CUANTO MIGRA
try {
    $Migrados = $Modelo->MigrarReferentesTexto();
    echo "6) MIGRACION EJECUTADA, MIGRO: " . $Migrados . "\n";
} catch (Exception $E) {
    echo "6) ERROR MIGRACION: " . $E->getMessage() . "\n";
}

// 7. TRAS MIGRAR, CUANTOS QUEDARON SIN VINCULAR?
try {
    $Quedan = $Db->query("SELECT COUNT(*) FROM referentes WHERE IdFichaReferente IS NULL AND NombreReferente IS NOT NULL AND TRIM(NombreReferente) <> ''")->fetchColumn();
    echo "7) PENDIENTES TRAS MIGRACION: " . $Quedan . "\n";
} catch (Exception $E) {
    echo "7) ERROR PENDIENTES: " . $E->getMessage() . "\n";
}
echo "</pre>";
?>
