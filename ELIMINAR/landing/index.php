<?php

// INICIAR SESION AL PRINCIPIO, ANTES DE CUALQUIER OUTPUT
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ASEGURAR QUE TODO SE MUESTRE EN UTF-8 PARA CORREGIR LOS ACENTOS
header('Content-Type: text/html; charset=utf-8');

require_once 'aplicacion/Controladores/PaginasControlador.php';

$Ruta = isset($_GET['url']) ? $_GET['url'] : 'inicio';

// DEFINIR RUTA BASE RELATIVA PARA HOSTINGER
// En local: /copia/, En Hostinger: /copia/
$BaseDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('BASE_URL', $BaseDir == '/' ? '/' : $BaseDir . '/');

$Controlador = new PaginasControlador();

// LOGICA DE RUTAS
switch ($Ruta) {
    case 'inicio':
        $Controlador->Inicio();
        break;
    case 'quienes-somos':
        $Controlador->QuienesSomos();
        break;
    case 'accidentes-de-trabajo':
        $Controlador->Accidentes();
        break;
    case 'despidos':
        $Controlador->Despidos();
        break;
    case 'enfermedades-profesionales':
        $Controlador->Enfermedades();
        break;
    case 'calculadora-indemnizacion':
        $Controlador->CalculadoraIndemnizacion();
        break;
    case 'calculadora-despidos':
        $Controlador->CalculadoraDespidos();
        break;
    case 'calculadora-accidentes':
        $Controlador->CalculadoraAccidentes();
        break;
    case 'comisiones-medicas':
        $Controlador->ComisionesMedicas();
        break;
    case 'que-hacer':
        $Controlador->QueHacer();
        break;
    case 'cual-es-mi-art':
        $Controlador->CualEsMiArt();
        break;
    case 'formularios-srt':
        $Controlador->FormulariosSrt();
        break;
    case 'buscador-comisiones':
        $Controlador->BuscadorComisiones();
        break;
    case 'tabla-incapacidad':
        $Controlador->TablaIncapacidad();
        break;
    case 'faq':
        $Controlador->Faq();
        break;
    case 'contacto':
        $Controlador->Contacto();
        break;
    // --- RUTAS DE AUTENTICACION ---
    case 'login':
        require_once 'aplicacion/Controladores/AuthController.php';
        $authCtrl = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authCtrl->procesarLogin();
        } else {
            $authCtrl->mostrarLogin();
        }
        exit();
    case 'logout':
        require_once 'aplicacion/Controladores/AuthController.php';
        $authCtrl = new AuthController();
        $authCtrl->logout();
        exit();
    case 'cambiar-contrasena':
        require_once 'aplicacion/Controladores/AuthController.php';
        $authCtrl = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authCtrl->procesarCambiarContrasena();
        } else {
            $authCtrl->mostrarCambiarContrasena();
        }
        exit();
    case 'gestion':
        require_once 'aplicacion/Controladores/GestionController.php';
        $gestCtrl = new GestionController();
        $gestCtrl->mostrarPanel();
        exit();
    case 'gestion/eliminados':
        require_once 'aplicacion/Controladores/GestionController.php';
        $gestCtrl = new GestionController();
        $gestCtrl->mostrarEliminados();
        exit();
    // --- API ENDPOINTS ---
    case 'api/localidades':
        require_once 'aplicacion/Controladores/UbicacionController.php';
        $ctrl = new UbicacionController();
        $ctrl->getJsonLocalidadesByProvinciaId();
        exit();
    case 'api/consultas/nueva':
        require_once 'aplicacion/Controladores/ApiController.php';
        $ctrl = new ApiController();
        $ctrl->procesarNuevaConsulta();
        exit();
    default:
        // CARGAR ENCABEZADO BASICO SI NO SE ENCUENTRA LA RUTA
        require_once 'vistas/encabezado.php';
        echo "PAGINA NO ENCONTRADA";
        require_once 'vistas/pie_pagina.php';
        break;
}
