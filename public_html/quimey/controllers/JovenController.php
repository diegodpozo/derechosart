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
    }

    public function VerFicha($Id) {
        $Paciente = $this->Modelo->ObtenerFicha($Id);
        require_once "../views/jovenes/ficha.php";
    }
}
?>
