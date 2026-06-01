<?php
// ACTIVAR ERRORES PARA DIAGNOSTICO
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// DEFINIR RUTA BASE PARA QUIMEY
$base_url_quimey = str_replace(['index.php', 'INDEX.PHP'], '', $_SERVER['SCRIPT_NAME']);
define('BASE_URL_QUIMEY', $base_url_quimey);

require_once "../controllers/JovenController.php";

$Controlador = new JovenController();

$Accion = isset($_GET['accion']) ? $_GET['accion'] : 'lista';

switch ($Accion) {
    case 'nuevo':
        $Controlador->Nuevo();
        break;
    case 'editar':
        $Controlador->Editar();
        break;
    case 'ficha':
        $Id = isset($_GET['id']) ? $_GET['id'] : 0;
        $Controlador->VerFicha($Id);
        break;
    case 'lista':
    default:
        $Controlador->Listado();
        break;
}
?>
