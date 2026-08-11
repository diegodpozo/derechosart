<?php
require_once "../config/Conexion.php";
require_once "../models/Joven.php";

class JovenController {
    private $Modelo;

    public function __construct() {
        $Conexion = new Conexion();
        $Db = $Conexion->Conectar();
        $this->Modelo = new Joven($Db);
    }

    public function Listado() {
        $this->Modelo->MigrarReferentesTexto();
        $Pacientes = $this->Modelo->ListarJovenes();
        require_once "../views/jovenes/lista.php";
    }

    public function Nuevo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Resultado = $this->Modelo->GuardarJoven($_POST);
            if ($Resultado === "DUPLICADO") {
                echo "<script>alert('ERROR: EL DNI YA EXISTE EN EL SISTEMA'); window.history.back();</script>";
                exit;
            } else if ($Resultado) {
                header("Location: index.php?accion=lista&mensaje=CARGADO");
                exit;
            }
        }
        $this->Modelo->MigrarReferentesTexto();
        $Referentes = $this->Modelo->ListarReferentes();
        require_once "../views/jovenes/nuevo.php";
    }

    public function Editar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Resultado = $this->Modelo->ActualizarJoven($_POST);
            if ($Resultado === "DUPLICADO") {
                echo "<script>alert('ERROR: EL DNI YA PERTENECE A OTRO JOVEN'); window.history.back();</script>";
                exit;
            } else if ($Resultado) {
                header("Location: index.php?accion=lista&mensaje=ACTUALIZADO");
                exit;
            } else {
                echo "<script>alert('ERROR AL ACTUALIZAR LOS DATOS'); window.history.back();</script>";
                exit;
            }
        }
        // SI NO VIENE POR POST, REDIRIGIR AL LISTADO (EVITA PANTALLA EN BLANCO)
        header("Location: index.php?accion=lista");
        exit;
    }

    public function VerFicha($Id) {
        $this->Modelo->MigrarReferentesTexto();
        $Paciente = $this->Modelo->ObtenerFicha($Id);
        $Imagenes = $this->Modelo->ListarMedicacionImagenes($Id);
        $Referentes = $this->Modelo->ListarReferentes();
        require_once "../views/jovenes/ficha.php";
    }

    public function SubirMedicacionImagenes() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $IdPaciente = isset($_POST['id_paciente']) ? (int) $_POST['id_paciente'] : 0;
            $Cantidad = $this->Modelo->GuardarMedicacionImagenes($IdPaciente, $_FILES['imagenes']);
            $Mensaje = $Cantidad > 0 ? "IMAGENES_CARGADAS" : "ERROR_IMAGENES";
            header("Location: index.php?accion=ficha&id=" . $IdPaciente . "&mensaje=" . $Mensaje);
            exit;
        }
        header("Location: index.php?accion=lista");
        exit;
    }

    public function VerMedicacionImagen() {
        $IdImagen = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $Imagen = $this->Modelo->ObtenerMedicacionImagen($IdImagen);
        if (!$Imagen) {
            http_response_code(404);
            echo "IMAGEN NO ENCONTRADA";
            exit;
        }
        header("Content-Type: " . $Imagen['MimeType']);
        header("Content-Length: " . strlen($Imagen['Imagen']));
        echo $Imagen['Imagen'];
        exit;
    }

    public function EliminarMedicacionImagen() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $IdPaciente = isset($_POST['id_paciente']) ? (int) $_POST['id_paciente'] : 0;
            $IdImagen = isset($_POST['id_imagen']) ? (int) $_POST['id_imagen'] : 0;
            $this->Modelo->EliminarMedicacionImagen($IdImagen, $IdPaciente);
            header("Location: index.php?accion=ficha&id=" . $IdPaciente . "&mensaje=IMAGEN_ELIMINADA");
            exit;
        }
        header("Location: index.php?accion=lista");
        exit;
    }

    // LISTADO DE FICHAS DE REFERENTES
    public function ListadoReferentes() {
        $this->Modelo->MigrarReferentesTexto();
        $Referentes = $this->Modelo->ListarReferentes();
        require_once "../views/referentes/referentes.php";
    }

    // FORMULARIO DE NUEVA FICHA DE REFERENTE
    public function NuevoReferente() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Resultado = $this->Modelo->GuardarReferente($_POST);
            $Mensaje = $Resultado ? "REFERENTE_CARGADO" : "ERROR_REFERENTE";
            header("Location: index.php?accion=referentes&mensaje=" . $Mensaje);
            exit;
        }
        $EsNuevo = true;
        $Referente = null;
        require_once "../views/referentes/ficha_referente.php";
    }

    // VER O EDITAR UNA FICHA DE REFERENTE
    public function VerReferente($Id) {
        $Referente = $this->Modelo->ObtenerReferente($Id);
        if (!$Referente) {
            header("Location: index.php?accion=referentes");
            exit;
        }
        $EsNuevo = false;
        require_once "../views/referentes/ficha_referente.php";
    }

    // GUARDAR EDICION DE UNA FICHA DE REFERENTE
    public function EditarReferente() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Resultado = $this->Modelo->ActualizarReferente($_POST);
            $Mensaje = $Resultado ? "REFERENTE_ACTUALIZADO" : "ERROR_REFERENTE";
            header("Location: index.php?accion=referentes&mensaje=" . $Mensaje);
            exit;
        }
        header("Location: index.php?accion=referentes");
        exit;
    }

    // ELIMINAR UNA FICHA DE REFERENTE
    public function EliminarReferente() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $IdReferente = isset($_POST['id_referente']) ? (int) $_POST['id_referente'] : 0;
            $this->Modelo->EliminarReferente($IdReferente);
            header("Location: index.php?accion=referentes&mensaje=REFERENTE_ELIMINADO");
            exit;
        }
        header("Location: index.php?accion=referentes");
        exit;
    }

    // LISTADO DE INTERVENCIONES DE UN JOVEN
    public function Intervenciones($IdPaciente) {
        $Paciente = $this->Modelo->ObtenerFicha($IdPaciente);
        if (!$Paciente) {
            header("Location: index.php?accion=lista");
            exit;
        }
        $Intervenciones = $this->Modelo->ListarIntervenciones($IdPaciente);
        require_once "../views/jovenes/intervenciones.php";
    }

    // FORMULARIO DE NUEVA INTERVENCION
    public function NuevaIntervencion($IdPaciente) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Resultado = $this->Modelo->GuardarIntervencion($_POST);
            $Mensaje = $Resultado ? "INTERVENCION_CARGADA" : "ERROR_INTERVENCION";
            $IdPac = isset($_POST['id_paciente']) ? (int) $_POST['id_paciente'] : 0;
            header("Location: index.php?accion=intervenciones&id=" . $IdPac . "&mensaje=" . $Mensaje);
            exit;
        }
        $Paciente = $this->Modelo->ObtenerFicha($IdPaciente);
        if (!$Paciente) {
            header("Location: index.php?accion=lista");
            exit;
        }
        $EsNuevo = true;
        $Intervencion = null;
        require_once "../views/jovenes/ficha_intervencion.php";
    }

    // VER O EDITAR UNA INTERVENCION
    public function VerIntervencion($Id) {
        $Intervencion = $this->Modelo->ObtenerIntervencion($Id);
        if (!$Intervencion) {
            header("Location: index.php?accion=lista");
            exit;
        }
        $Paciente = $this->Modelo->ObtenerFicha($Intervencion['IdPaciente']);
        $EsNuevo = false;
        require_once "../views/jovenes/ficha_intervencion.php";
    }

    // GUARDAR EDICION DE UNA INTERVENCION
    public function EditarIntervencion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Resultado = $this->Modelo->ActualizarIntervencion($_POST);
            $Mensaje = $Resultado ? "INTERVENCION_ACTUALIZADA" : "ERROR_INTERVENCION";
            $IdPac = isset($_POST['id_paciente']) ? (int) $_POST['id_paciente'] : 0;
            header("Location: index.php?accion=intervenciones&id=" . $IdPac . "&mensaje=" . $Mensaje);
            exit;
        }
        header("Location: index.php?accion=lista");
        exit;
    }

    // ELIMINAR UNA INTERVENCION
    public function EliminarIntervencion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $IdPac = isset($_POST['id_paciente']) ? (int) $_POST['id_paciente'] : 0;
            $IdIntervencion = isset($_POST['id_intervencion']) ? (int) $_POST['id_intervencion'] : 0;
            $this->Modelo->EliminarIntervencion($IdIntervencion);
            header("Location: index.php?accion=intervenciones&id=" . $IdPac . "&mensaje=INTERVENCION_ELIMINADA");
            exit;
        }
        header("Location: index.php?accion=lista");
        exit;
    }
}
?>
