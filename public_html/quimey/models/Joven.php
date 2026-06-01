<?php
class Joven {
    private $Db;

    public function __construct($Conexion) {
        $this->Db = $Conexion;
    }

    // LIMPIEZA DE TEXTO: MAYUSCULAS Y SIN ACENTOS
    private function LimpiarTexto($Texto) {
        if ($Texto === null) return null;
        $Texto = strtoupper(trim($Texto));
        $Buscar  = array('Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü');
        $Reemplazar = array('A', 'E', 'I', 'O', 'U', 'N', 'U');
        return str_replace($Buscar, $Reemplazar, $Texto);
    }

    public function ListarJovenes() {
        $Sql = "SELECT * FROM pacientes ORDER BY NombreApellido ASC";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute();
        return $Stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ExisteDni($Dni, $IdIgnorar = 0) {
        $Sql = "SELECT COUNT(*) FROM pacientes WHERE Dni = :Dni AND IdPaciente != :Id";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Dni' => $Dni, ':Id' => $IdIgnorar]);
        return $Stmt->fetchColumn() > 0;
    }

    public function GuardarJoven($Datos) {
        $DniLimpio = preg_replace('/\D/', '', $Datos['dni']);
        if ($this->ExisteDni($DniLimpio)) return "DUPLICADO";

        $Sql = "INSERT INTO pacientes (NombreApellido, Dni, Cuil, FechaNacimiento, Diagnostico, Localidad, Medicacion, Domicilio, TrayectoriaEducativa) 
                VALUES (:Nombre, :Dni, :Cuil, :Fecha, :Diag, :Loc, :Med, :Dom, :Tray)";
        
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([
            ':Nombre' => $this->LimpiarTexto($Datos['nombre']),
            ':Dni'    => $DniLimpio,
            ':Cuil'   => $Datos['cuil'],
            ':Fecha'  => !empty($Datos['fecha_nac']) ? $Datos['fecha_nac'] : NULL,
            ':Diag'   => $this->LimpiarTexto($Datos['diagnostico']),
            ':Loc'    => $this->LimpiarTexto($Datos['localidad']),
            ':Med'    => isset($Datos['medicacion']) ? $this->LimpiarTexto($Datos['medicacion']) : NULL,
            ':Dom'    => isset($Datos['domicilio']) ? $this->LimpiarTexto($Datos['domicilio']) : NULL,
            ':Tray'   => isset($Datos['trayectoria']) ? $this->LimpiarTexto($Datos['trayectoria']) : NULL
        ]);
    }

    public function ActualizarJoven($Datos) {
        $DniLimpio = preg_replace('/\D/', '', $Datos['dni']);
        if ($this->ExisteDni($DniLimpio, $Datos['id_paciente'])) return "DUPLICADO";

        try {
            $this->Db->beginTransaction();

            $Sql = "UPDATE pacientes SET 
                    NombreApellido = :Nombre, Dni = :Dni, Cuil = :Cuil, FechaNacimiento = :Fecha, 
                    Diagnostico = :Diag, Localidad = :Loc, Medicacion = :Med, Domicilio = :Dom,
                    Observaciones = :Obs, CudVencimiento = :Cud, TrayectoriaEducativa = :Tray
                    WHERE IdPaciente = :Id";
            
            $Stmt = $this->Db->prepare($Sql);
            $Stmt->execute([
                ':Nombre' => $this->LimpiarTexto($Datos['nombre']),
                ':Dni'    => $DniLimpio,
                ':Cuil'   => $Datos['cuil'],
                ':Fecha'  => !empty($Datos['fecha_nac']) ? $Datos['fecha_nac'] : NULL,
                ':Diag'   => $this->LimpiarTexto($Datos['diagnostico']),
                ':Loc'    => $this->LimpiarTexto($Datos['localidad']),
                ':Med'    => $this->LimpiarTexto($Datos['medicacion']),
                ':Dom'    => $this->LimpiarTexto($Datos['domicilio']),
                ':Obs'    => $this->LimpiarTexto($Datos['observaciones']),
                ':Cud'    => !empty($Datos['cud_vto']) ? $Datos['cud_vto'] : NULL,
                ':Tray'   => $this->LimpiarTexto($Datos['trayectoria']),
                ':Id'     => $Datos['id_paciente']
            ]);

            // ACTUALIZAR OBRA SOCIAL
            $SqlOs = "UPDATE obrassociales SET NombreOs = :NomOs, NroAfiliacion = :Nro WHERE IdPaciente = :Id";
            $this->Db->prepare($SqlOs)->execute([
                ':NomOs' => $this->LimpiarTexto($Datos['nombre_os']),
                ':Nro'   => $this->LimpiarTexto($Datos['nro_afiliacion']),
                ':Id'    => $Datos['id_paciente']
            ]);

            $this->Db->commit();
            return true;
        } catch (Exception $E) {
            $this->Db->rollBack();
            return false;
        }
    }

    public function ObtenerFicha($Id) {
        $Sql = "SELECT p.*, o.NombreOs, o.NroAfiliacion, r.NombreReferente 
                FROM pacientes p 
                LEFT JOIN obrassociales o ON p.IdPaciente = o.IdPaciente 
                LEFT JOIN referentes r ON p.IdPaciente = r.IdPaciente 
                WHERE p.IdPaciente = :Id";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $Id]);
        return $Stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
