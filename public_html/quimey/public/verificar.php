<?php
// VERIFICACION DE ESTADO - QUIMEY (BORRAR LUEGO DE USAR)
require_once "../config/Conexion.php";

$Conexion = new Conexion();
$Db = $Conexion->Conectar();

echo "<pre>";

// 1. CONTENIDO REAL DE Joven.php EN EL SERVIDOR
$RutaModelo = __DIR__ . "/../models/Joven.php";
echo "1) ARCHIVO: " . $RutaModelo . "\n";
echo "   EXISTE: " . (file_exists($RutaModelo) ? "SI" : "NO") . "\n";
if (file_exists($RutaModelo)) {
    $Contenido = file_get_contents($RutaModelo);
    echo "   TAMANO: " . strlen($Contenido) . " bytes\n";
    echo "   MODIFICADO (HORA SERVIDOR): " . date("Y-m-d H:i:s", filemtime($RutaModelo)) . "\n";
    echo "   TIENE NUEVO DEDUP (PHP)?: " . (strpos($Contenido, 'SE COMPARA EN PHP') !== false ? "SI" : "NO") . "\n";
    echo "   TIENE COLUMNA IdFichaReferente?: " . (strpos($Contenido, 'IdFichaReferente') !== false ? "SI" : "NO") . "\n";
    $Lineas = explode("\n", $Contenido);
    echo "   TOTAL LINEAS: " . count($Lineas) . "\n";
    echo "   LINEA 322: " . (isset($Lineas[321]) ? trim($Lineas[321]) : "(NO EXISTE)") . "\n";
}

// 2. COLACIONES DE LAS TABLAS
echo "\n2) COLACIONES DE TABLAS:\n";
$Tablas = ['fichas_referentes', 'medicacion_imagenes', 'referentes', 'pacientes'];
foreach ($Tablas as $T) {
    try {
        $Col = $Db->query("SELECT TABLE_COLLATION FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = '" . $T . "'")->fetchColumn();
        echo "   " . $T . ": " . ($Col ?: "(NO EXISTE)") . "\n";
    } catch (Exception $E) {
        echo "   " . $T . ": ERROR " . $E->getMessage() . "\n";
    }
}

// 3. ESTADO DE LA MIGRACION
echo "\n3) PENDIENTES DE MIGRACION:\n";
try {
    $Pend = $Db->query("SELECT COUNT(*) FROM referentes WHERE IdFichaReferente IS NULL AND NombreReferente IS NOT NULL AND TRIM(NombreReferente) <> ''")->fetchColumn();
    echo "   PENDIENTES: " . $Pend . "\n";
} catch (Exception $E) {
    echo "   ERROR: " . $E->getMessage() . "\n";
}
try {
    $Fichas = $Db->query("SELECT COUNT(*) FROM fichas_referentes")->fetchColumn();
    echo "   FICHAS CREADAS: " . $Fichas . "\n";
} catch (Exception $E) {
    echo "   ERROR: " . $E->getMessage() . "\n";
}

// 4. FILA DEL REFERENTE DE CAMILA BALDERRAMO
echo "\n4) FILAS DE referentes DEL PACIENTE BALDERRAMO:\n";
try {
    $Filas = $Db->query("SELECT r.IdPaciente, r.NombreReferente, r.IdFichaReferente, p.NombreApellido 
                         FROM referentes r JOIN pacientes p ON r.IdPaciente = p.IdPaciente 
                         WHERE p.NombreApellido LIKE '%BALDERRAMO%'")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Filas as $F) {
        echo "   IdPaciente=" . $F['IdPaciente'] . " | Nombre='" . $F['NombreReferente'] . "' | IdFichaReferente=" . var_export($F['IdFichaReferente'], true) . " | " . $F['NombreApellido'] . "\n";
    }
} catch (Exception $E) {
    echo "   ERROR: " . $E->getMessage() . "\n";
}

echo "</pre>";
?>
