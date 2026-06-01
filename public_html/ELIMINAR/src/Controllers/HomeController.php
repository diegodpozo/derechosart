<?php

require_once __DIR__ . '/../Models/FormModel.php';
require_once __DIR__ . '/../helpers.php';

class HomeController {

    public function index() {
        // La sesión se necesita para los mensajes de error y los datos de formulario.
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $formModel = new FormModel();

        $provincias = $formModel->getProvincias();
        $categorias = $formModel->getCategorias();
        $art_empresas = $formModel->getArtEmpresas();
        $categoriaIds = $formModel->getCategoriaIds();

        // Datos del formulario para repopular si hay un error de validación.
        $form_data = $_SESSION['form_data'] ?? [];
        unset($_SESSION['form_data']);
        
        // Recuperar mensajes de éxito de la sesión
        $form_success_message = $_SESSION['form_success_message'] ?? '';
        unset($_SESSION['form_success_message']);

        // Recuperar mensajes de error de la sesión
        $form_errors = $_SESSION['form_errors'] ?? '';
        unset($_SESSION['form_errors']);
        
        $data = [
            'pageTitle' => 'Registro de Nueva Consulta',
            'provincias' => $provincias,
            'categorias' => $categorias,
            'art_empresas' => $art_empresas,
            'id_accidentes' => $categoriaIds['id_accidentes'],
            'id_despidos' => $categoriaIds['id_despidos'],
            'id_enfermedades' => $categoriaIds['id_enfermedades'],
            'form_data' => $form_data,
            'form_success_message' => $form_success_message,
            'form_errors' => $form_errors
        ];

        // Llama a la función helper para renderizar la vista.
        view('inicio', $data);
    }

    public function calculadora() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $data = [
            'pageTitle' => 'Calculadora de Indemnización'
        ];

        // Llama a la función helper para renderizar la vista de la calculadora.
        view('calcu', $data);
    }
}
