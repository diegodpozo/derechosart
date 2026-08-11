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
    case 'subir_imagenes':
        $Controlador->SubirMedicacionImagenes();
        break;
    case 'ver_imagen':
        $Controlador->VerMedicacionImagen();
        break;
    case 'eliminar_imagen':
        $Controlador->EliminarMedicacionImagen();
        break;
    case 'referentes':
        $Controlador->ListadoReferentes();
        break;
    case 'nuevo_referente':
        $Controlador->NuevoReferente();
        break;
    case 'ficha_referente':
        $IdRef = isset($_GET['id']) ? $_GET['id'] : 0;
        $Controlador->VerReferente($IdRef);
        break;
    case 'editar_referente':
        $Controlador->EditarReferente();
        break;
    case 'eliminar_referente':
        $Controlador->EliminarReferente();
        break;
    case 'intervenciones':
        $IdInt = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $Controlador->Intervenciones($IdInt);
        break;
    case 'nueva_intervencion':
        $IdInt = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $Controlador->NuevaIntervencion($IdInt);
        break;
    case 'ver_intervencion':
        $IdInt = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $Controlador->VerIntervencion($IdInt);
        break;
    case 'editar_intervencion':
        $Controlador->EditarIntervencion();
        break;
    case 'eliminar_intervencion':
        $Controlador->EliminarIntervencion();
        break;
    case 'lista':
    default:
        $Controlador->Listado();
        break;
}
?>
