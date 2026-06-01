<?php

require_once __DIR__ . '/../Modelos/GestionModel.php';
require_once __DIR__ . '/../Modelos/FormModel.php';
require_once __DIR__ . '/../Modelos/AuthModel.php';
require_once __DIR__ . '/../../src/helpers.php';

class GestionController {

    private function _checkAuthentication() {
        // La sesión ya se inicia en index.php
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }
    }

    private function _prepareGestionData(bool $es_vista_eliminados) {
        $orden = $_GET['orden'] ?? 'fecha_registro';
        $direccion = $_GET['direccion'] ?? 'DESC';

        $gestionModel = new GestionModel();
        $formModel = new FormModel();
        $authModel = new AuthModel();
        
        // Obtener consultas específicas para cada vista
        if ($es_vista_eliminados) {
            $consultas = $gestionModel->obtenerConsultasEliminadas($orden, $direccion);
            $pageTitle = 'Consultas Eliminadas';
            $base_sort_url = BASE_URL . "/gestion/eliminados";
            $columnas = [
                'fecha_registro', 'nombre', 'apellido', 'telefono', 'observaciones', 'nombre_provincia', 'nombre_localidad', 
                'nombre_categoria', 'edad', 'denuncia_art', 'nombre_art', 'sueldo', 
                'alta_art', 'abogado_previo', 'descripcion_lesion', 'antiguedad_laboral', 
                'nombre_lugar_trabajo_provincia', 'nombre_lugar_trabajo_localidad', 'trabaja_en_blanco', 
                'pagan_en_negro', 
                'situacion_actual', 'forma_despido', 'fecha_accidente', 'fecha_ingreso', 'nombre_usuario_asignado'
            ];
        } else {
            $consultas = $gestionModel->obtenerTodasLasConsultas($orden, $direccion);
            $pageTitle = 'Panel de Gestión';
            $base_sort_url = BASE_URL . "/gestion";
            $columnas = [
                'nombre', 'apellido', 'telefono', 'nombre_provincia', 'nombre_localidad', 
                'nombre_categoria', 'edad', 'denuncia_art', 'nombre_art', 'sueldo', 
                'alta_art', 'abogado_previo', 'descripcion_lesion', 'fecha_accidente', 'fecha_ingreso', 'antiguedad_laboral', 
                'nombre_lugar_trabajo_provincia', 'nombre_lugar_trabajo_localidad', 'trabaja_en_blanco', 
                'pagan_en_negro', 
                'situacion_actual', 'forma_despido', 'observaciones', 'fecha_registro', 'nombre_usuario_asignado'
            ];
        }

        $provincias = $formModel->getProvincias();
        $categorias = $formModel->getCategorias();
        $art_empresas = $formModel->getArtEmpresas();
        $categoriaIds = $formModel->getCategoriaIds();
        $usuarios = $authModel->getAllUsuarios();

        $sort_urls = [];
        $sort_icons = [];
        foreach ($columnas as $col) {
            $direccion_nueva = ($orden === $col && $direccion === 'ASC') ? 'DESC' : 'ASC';
            $sort_urls[$col] = "{$base_sort_url}?orden={$col}&direccion={$direccion_nueva}";
            $sort_icons[$col] = ($orden === $col) ? ($direccion === 'ASC' ? ' ↑' : ' ↓') : '';
        }

        return [
            'pageTitle' => $pageTitle,
            'consultas' => $consultas,
            'orden' => $orden,
            'direccion' => $direccion,
            'sort_urls' => $sort_urls,
            'sort_icons' => $sort_icons,
            'hide_layout_elements' => true,
            'provincias' => $provincias,
            'categorias' => $categorias,
            'art_empresas' => $art_empresas,
            'id_accidentes' => $categoriaIds['id_accidentes'],
            'id_despidos' => $categoriaIds['id_despidos'],
            'id_enfermedades' => $categoriaIds['id_enfermedades'],
            'es_eliminados_view' => $es_vista_eliminados,
            'usuarios' => $usuarios
        ];
    }

    public function mostrarPanel() {
        $this->_checkAuthentication(); // Centralizar la verificación de autenticación
        $data = $this->_prepareGestionData(false);
        view('gestion', $data);
    }

    public function mostrarEliminados() {
        $this->_checkAuthentication(); // Centralizar la verificación de autenticación
        $data = $this->_prepareGestionData(true);
        view('gestion', $data);
    }
}
