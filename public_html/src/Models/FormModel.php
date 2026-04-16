<?php

require_once __DIR__ . '/../../config/database.php';

class FormModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function getProvincias() {
        try {
            $stmt = $this->pdo->query("SELECT id, nombre FROM provincias ORDER BY nombre ASC");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER PROVINCIAS: " . $e->getMessage());
            return [];
        }
    }

    public function getCategorias() {
        try {
            $stmt = $this->pdo->query("SELECT id, nombre FROM categorias ORDER BY nombre ASC");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER CATEGORIAS: " . $e->getMessage());
            return [];
        }
    }

    public function getArtEmpresas() {
        try {
            $stmt = $this->pdo->query("SELECT id, nombre FROM art ORDER BY id ASC");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER EMPRESAS ART: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Obtiene los IDs de las categorías principales por nombre.
     * @return array
     */
    public function getCategoriaIds() {
        $ids = [
            'id_accidentes' => null,
            'id_despidos' => null,
            'id_enfermedades' => null,
        ];
        try {
            $stmt = $this->pdo->prepare("SELECT id FROM categorias WHERE nombre = ?");
            
            $stmt->execute(['Accidentes de trabajo']);
            $ids['id_accidentes'] = $stmt->fetchColumn();

            $stmt->execute(['Despidos']);
            $ids['id_despidos'] = $stmt->fetchColumn();
            
            $stmt->execute(['Enfermedades profesionales']);
            $ids['id_enfermedades'] = $stmt->fetchColumn();

        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER IDS DE CATEGORIAS: " . $e->getMessage());
        }
        return $ids;
    }

    /**
     * Elimina una ART de la base de datos, con una comprobación de dependencias.
     * @param int $id El ID de la ART a eliminar.
     * @return array Un array con 'success' (bool) y 'message' (string).
     */
    public function eliminarArt(int $id) {
        try {
            $this->pdo->beginTransaction();

            // 1. Verificar si la ART está en uso en consultas_accidentes_trabajo
            $stmt_check_acc = $this->pdo->prepare("SELECT COUNT(*) FROM consultas_accidentes_trabajo WHERE art_id = :art_id");
            $stmt_check_acc->execute([':art_id' => $id]);
            if ($stmt_check_acc->fetchColumn() > 0) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'NO SE PUEDE ELIMINAR LA ART. ESTÁ ASOCIADA A CONSULTAS DE ACCIDENTES DE TRABAJO.'];
            }

            // 2. Verificar si la ART está en uso en consultas_enfermedades_profesionales
            $stmt_check_enf = $this->pdo->prepare("SELECT COUNT(*) FROM consultas_enfermedades_profesionales WHERE art_id = :art_id");
            $stmt_check_enf->execute([':art_id' => $id]);
            if ($stmt_check_enf->fetchColumn() > 0) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'NO SE PUEDE ELIMINAR LA ART. ESTÁ ASOCIADA A CONSULTAS DE ENFERMEDADES PROFESIONALES.'];
            }

            // 3. Si no está en uso, proceder con la eliminación
            $stmt_delete = $this->pdo->prepare("DELETE FROM art WHERE id = :id");
            $stmt_delete->execute([':id' => $id]);

            $this->pdo->commit();
            return ['success' => true, 'message' => 'ART ELIMINADA CORRECTAMENTE.'];

        } catch (PDOException $e) {
            $this->pdo->rollback();
            error_log("ERROR AL ELIMINAR ART: " . $e->getMessage());
            // Capturar error de clave foránea específica si no se manejó antes (aunque las comprobaciones previas lo evitan)
            if ($e->getCode() == '23000') { // Código SQLSTATE para integridad de datos
                 return ['success' => false, 'message' => 'ERROR: LA ART NO PUDO SER ELIMINADA DEBIDO A DEPENDENCIAS EXISTENTES.'];
            }
            return ['success' => false, 'message' => 'ERROR INTERNO AL ELIMINAR ART: ' . $e->getMessage()];
        }
    }
}
