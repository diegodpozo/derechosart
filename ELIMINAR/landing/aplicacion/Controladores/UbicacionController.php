<?php

require_once __DIR__ . '/../Modelos/UbicacionModel.php';

class UbicacionController {

    public function getJsonLocalidadesByProvinciaId() {
        header('Content-Type: application/json');

        $provincia_id = filter_var($_GET['provincia_id'] ?? null, FILTER_VALIDATE_INT);

        if (!$provincia_id) {
            echo json_encode(['success' => false, 'message' => 'ID de provincia inválido o no proporcionado.']);
            exit();
        }

        $ubicacionModel = new UbicacionModel();
        $localidades = $ubicacionModel->getLocalidadesByProvinciaId($provincia_id);

        if ($localidades === false) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Error interno del servidor al obtener localidades.']);
        } elseif (empty($localidades)) {
            echo json_encode(['success' => true, 'localidades' => [], 'message' => 'No se encontraron localidades para la provincia seleccionada.']);
        } else {
            echo json_encode(['success' => true, 'localidades' => $localidades]);
        }
        exit();
    }
}
