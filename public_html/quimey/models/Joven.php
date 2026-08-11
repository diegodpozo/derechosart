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

        try {
            $this->Db->beginTransaction();

            $Sql = "INSERT INTO pacientes (NombreApellido, Dni, Cuil, FechaNacimiento, Diagnostico, Localidad, Medicacion, Domicilio, Observaciones, CudVencimiento, TrayectoriaEducativa) 
                    VALUES (:Nombre, :Dni, :Cuil, :Fecha, :Diag, :Loc, :Med, :Dom, :Obs, :Cud, :Tray)";
            
            $Stmt = $this->Db->prepare($Sql);
            $Stmt->execute([
                ':Nombre' => $this->LimpiarTexto($Datos['nombre']),
                ':Dni'    => $DniLimpio,
                ':Cuil'   => $Datos['cuil'],
                ':Fecha'  => !empty($Datos['fecha_nac']) ? $Datos['fecha_nac'] : NULL,
                ':Diag'   => $this->LimpiarTexto($Datos['diagnostico']),
                ':Loc'    => $this->LimpiarTexto($Datos['localidad']),
                ':Med'    => isset($Datos['medicacion']) ? $this->LimpiarTexto($Datos['medicacion']) : NULL,
                ':Dom'    => isset($Datos['domicilio']) ? $this->LimpiarTexto($Datos['domicilio']) : NULL,
                ':Obs'    => isset($Datos['observaciones']) ? $this->LimpiarTexto($Datos['observaciones']) : NULL,
                ':Cud'    => !empty($Datos['cud_vto']) ? $Datos['cud_vto'] : NULL,
                ':Tray'   => isset($Datos['trayectoria']) ? $this->LimpiarTexto($Datos['trayectoria']) : NULL
            ]);

            $IdPaciente = (int) $this->Db->lastInsertId();

            // GUARDAR OBRA SOCIAL
            if (!empty($Datos['nombre_os']) || !empty($Datos['nro_afiliacion'])) {
                $SqlOs = "INSERT INTO obrassociales (IdPaciente, NombreOs, NroAfiliacion) VALUES (:Id, :NomOs, :Nro)";
                $this->Db->prepare($SqlOs)->execute([
                    ':Id'    => $IdPaciente,
                    ':NomOs' => $this->LimpiarTexto($Datos['nombre_os']),
                    ':Nro'   => $this->LimpiarTexto($Datos['nro_afiliacion'])
                ]);
            }

            // GUARDAR REFERENTE (VINCULADO POR IdFichaReferente; SE MANTIENE NombreReferente COMO RESPALDO)
            $IdReferente = !empty($Datos['id_referente']) ? (int) $Datos['id_referente'] : 0;
            $NombreReferente = isset($Datos['nombre_ref']) ? $this->LimpiarTexto($Datos['nombre_ref']) : NULL;

            if ($IdReferente > 0) {
                $SqlRef = "INSERT INTO referentes (IdPaciente, NombreReferente, IdFichaReferente) VALUES (:Id, :NomRef, :IdRef)";
                $this->Db->prepare($SqlRef)->execute([
                    ':Id'    => $IdPaciente,
                    ':NomRef' => $NombreReferente,
                    ':IdRef' => $IdReferente
                ]);
            } else if ($NombreReferente !== null) {
                $SqlRef = "INSERT INTO referentes (IdPaciente, NombreReferente) VALUES (:Id, :NomRef)";
                $this->Db->prepare($SqlRef)->execute([
                    ':Id'    => $IdPaciente,
                    ':NomRef' => $NombreReferente
                ]);
            }

            $this->Db->commit();
            return true;
        } catch (Exception $E) {
            $this->Db->rollBack();
            return false;
        }
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

            // ACTUALIZAR O INSERTAR REFERENTE
            $SqlCount = "SELECT COUNT(*) FROM referentes WHERE IdPaciente = :Id";
            $StmtCount = $this->Db->prepare($SqlCount);
            $StmtCount->execute([':Id' => $Datos['id_paciente']]);
            $ExisteReferente = $StmtCount->fetchColumn() > 0;

            $IdReferente = !empty($Datos['id_referente']) ? (int) $Datos['id_referente'] : 0;
            $NombreReferente = isset($Datos['nombre_ref']) ? $this->LimpiarTexto($Datos['nombre_ref']) : NULL;

            if ($ExisteReferente) {
                if ($IdReferente > 0) {
                    $SqlRef = "UPDATE referentes SET NombreReferente = :NomRef, IdFichaReferente = :IdRef WHERE IdPaciente = :Id";
                    $this->Db->prepare($SqlRef)->execute([
                        ':NomRef' => $NombreReferente,
                        ':IdRef'  => $IdReferente,
                        ':Id'     => $Datos['id_paciente']
                    ]);
                } else if ($NombreReferente !== null) {
                    $SqlRef = "UPDATE referentes SET NombreReferente = :NomRef, IdFichaReferente = NULL WHERE IdPaciente = :Id";
                    $this->Db->prepare($SqlRef)->execute([
                        ':NomRef' => $NombreReferente,
                        ':Id'     => $Datos['id_paciente']
                    ]);
                } else {
                    // SE DESELECCIONO EL REFERENTE: LIMPIAR TEXTO Y VINCULO (SE CONSERVA LA FILA)
                    $SqlRef = "UPDATE referentes SET NombreReferente = NULL, IdFichaReferente = NULL WHERE IdPaciente = :Id";
                    $this->Db->prepare($SqlRef)->execute([
                        ':Id' => $Datos['id_paciente']
                    ]);
                }
            } else if ($IdReferente > 0) {
                $SqlRef = "INSERT INTO referentes (IdPaciente, NombreReferente, IdFichaReferente) VALUES (:Id, :NomRef, :IdRef)";
                $this->Db->prepare($SqlRef)->execute([
                    ':Id'    => $Datos['id_paciente'],
                    ':NomRef' => $NombreReferente,
                    ':IdRef' => $IdReferente
                ]);
            } else if ($NombreReferente !== null) {
                $SqlRef = "INSERT INTO referentes (IdPaciente, NombreReferente) VALUES (:Id, :NomRef)";
                $this->Db->prepare($SqlRef)->execute([
                    ':Id'     => $Datos['id_paciente'],
                    ':NomRef' => $NombreReferente
                ]);
            }

            $this->Db->commit();
            return true;
        } catch (Exception $E) {
            $this->Db->rollBack();
            return false;
        }
    }

    public function ObtenerFicha($Id) {
        $Sql = "SELECT p.*, o.NombreOs, o.NroAfiliacion, r.NombreReferente, r.IdFichaReferente,
                       fr.Nombre AS RefNombre, fr.Apellido AS RefApellido, fr.Especialidad AS RefEspecialidad, fr.Telefono AS RefTelefono
                FROM pacientes p 
                LEFT JOIN obrassociales o ON p.IdPaciente = o.IdPaciente 
                LEFT JOIN referentes r ON p.IdPaciente = r.IdPaciente 
                LEFT JOIN fichas_referentes fr ON r.IdFichaReferente = fr.IdReferente 
                WHERE p.IdPaciente = :Id";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $Id]);
        return $Stmt->fetch(PDO::FETCH_ASSOC);
    }

    // LISTAR IMAGENES DE MEDICACION DE UN PACIENTE
    public function ListarMedicacionImagenes($IdPaciente) {
        $Sql = "SELECT IdImagen, NombreOriginal, MimeType, Tamano, FechaCarga 
                FROM medicacion_imagenes 
                WHERE IdPaciente = :Id 
                ORDER BY IdImagen ASC";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $IdPaciente]);
        return $Stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // OBTENER UNA IMAGEN COMPLETA POR SU ID (PARA MOSTRARLA)
    public function ObtenerMedicacionImagen($IdImagen) {
        $Sql = "SELECT MimeType, Imagen FROM medicacion_imagenes WHERE IdImagen = :Id";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $IdImagen]);
        return $Stmt->fetch(PDO::FETCH_ASSOC);
    }

    // GUARDAR UNA O VARIAS IMAGENES DE MEDICACION EN LA BD
    public function GuardarMedicacionImagenes($IdPaciente, $Archivos) {
        $CantidadSubidos = 0;

        // VERIFICAR QUE EL PACIENTE EXISTA
        $SqlCheck = "SELECT COUNT(*) FROM pacientes WHERE IdPaciente = :Id";
        $StmtCheck = $this->Db->prepare($SqlCheck);
        $StmtCheck->execute([':Id' => $IdPaciente]);
        if ($StmtCheck->fetchColumn() == 0) return 0;

        if (empty($Archivos['name']) || !is_array($Archivos['name'])) return 0;

        $Total = count($Archivos['name']);
        $TiposPermitidos = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        $MaxBytes = 8 * 1024 * 1024; // 8 MB POR IMAGEN

        $Sql = "INSERT INTO medicacion_imagenes (IdPaciente, NombreOriginal, MimeType, Tamano, Imagen) 
                VALUES (:Id, :Nombre, :Mime, :Tam, :Img)";
        $Stmt = $this->Db->prepare($Sql);

        for ($i = 0; $i < $Total; $i++) {
            if ($Archivos['error'][$i] !== UPLOAD_ERR_OK) continue;
            if ($Archivos['size'][$i] <= 0 || $Archivos['size'][$i] > $MaxBytes) continue;
            if (!in_array($Archivos['type'][$i], $TiposPermitidos)) continue;

            $Contenido = file_get_contents($Archivos['tmp_name'][$i]);
            if ($Contenido === false) continue;

            $Stmt->execute([
                ':Id'     => $IdPaciente,
                ':Nombre' => $Archivos['name'][$i],
                ':Mime'   => $Archivos['type'][$i],
                ':Tam'    => $Archivos['size'][$i],
                ':Img'    => $Contenido
            ]);
            $CantidadSubidos++;
        }

        return $CantidadSubidos;
    }

    // ELIMINAR UNA IMAGEN DE MEDICACION
    public function EliminarMedicacionImagen($IdImagen, $IdPaciente) {
        $Sql = "DELETE FROM medicacion_imagenes WHERE IdImagen = :Id AND IdPaciente = :IdPac";
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([':Id' => $IdImagen, ':IdPac' => $IdPaciente]);
    }

    // LISTAR FICHAS DE REFERENTES
    public function ListarReferentes() {
        $Sql = "SELECT IdReferente, Nombre, Apellido, Especialidad, Telefono, FechaCarga 
                FROM fichas_referentes 
                ORDER BY Apellido ASC, Nombre ASC";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute();
        return $Stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // MIGRAR REFERENTES CARGADOS COMO TEXTO (SIN IdReferente) A FICHAS DE REFERENTES.
    // RECUPERA LA INFO EXISTENTE: CREA LA FICHA SI NO EXISTE Y VINCULA AL PACIENTE.
    public function MigrarReferentesTexto() {
        $Sql = "SELECT r.IdPaciente, r.NombreReferente 
                FROM referentes r 
                WHERE r.IdFichaReferente IS NULL AND r.NombreReferente IS NOT NULL AND TRIM(r.NombreReferente) <> ''";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute();
        $Pendientes = $Stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($Pendientes)) return 0;

        $Migrados = 0;
        foreach ($Pendientes as $P) {
            $Texto = $this->LimpiarTexto($P['NombreReferente']);

            // SEPARAR ESPECIALIDAD ENTRE PARENTESIS SI EXISTE (EJ: "PEREZ, MARIA (MADRE)")
            $Especialidad = null;
            if (preg_match('/\(([^)]+)\)/', $Texto, $Coincidencia)) {
                $Especialidad = $Coincidencia[1];
                $Texto = trim(preg_replace('/\([^)]+\)/', '', $Texto));
            }

            // SEPARAR "APELLIDO, NOMBRE" O USAR TODO EL TEXTO COMO NOMBRE
            $Apellido = null;
            $Nombre = $Texto;
            if (strpos($Texto, ',') !== false) {
                list($Apellido, $Nombre) = array_map('trim', explode(',', $Texto, 2));
            } else {
                // SI HAY DOS PALABRAS, LA ULTIMA SE TRATA COMO APELLIDO
                $Partes = preg_split('/\s+/', trim($Texto));
                if (count($Partes) > 1) {
                    $Apellido = array_pop($Partes);
                    $Nombre = implode(' ', $Partes);
                }
            }

            $Apellido = $Apellido !== null ? $this->LimpiarTexto($Apellido) : null;
            $Nombre = $this->LimpiarTexto($Nombre);
            $Especialidad = $Especialidad !== null ? $this->LimpiarTexto($Especialidad) : null;

            // BUSCAR SI YA EXISTE UNA FICHA CON EL MISMO NOMBRE/APELLIDO
            // SE COMPARA EN PHP (LOS TEXTOS YA ESTAN EN MAYUSCULAS) PARA EVITAR
            // ERRORES DE COLACION (utf8mb4_uca1400_ai_ci VS utf8mb4_bin) EN EL SERVIDOR.
            $SqlBuscar = "SELECT IdReferente, Nombre, Apellido FROM fichas_referentes";
            $StmtBuscar = $this->Db->query($SqlBuscar);
            $IdReferente = 0;
            foreach ($StmtBuscar as $FilaFicha) {
                if ($FilaFicha['Nombre'] === $Nombre && (string) $FilaFicha['Apellido'] === (string) $Apellido) {
                    $IdReferente = (int) $FilaFicha['IdReferente'];
                    break;
                }
            }

            if ($IdReferente === 0) {
                $SqlInsert = "INSERT INTO fichas_referentes (Nombre, Apellido, Especialidad) 
                              VALUES (:Nombre, :Apellido, :Esp)";
                $this->Db->prepare($SqlInsert)->execute([
                    ':Nombre' => $Nombre,
                    ':Apellido' => $Apellido,
                    ':Esp' => $Especialidad
                ]);
                $IdReferente = (int) $this->Db->lastInsertId();
            }

            // VINCULAR EL PACIENTE A LA FICHA
            $SqlVinculo = "UPDATE referentes SET IdFichaReferente = :IdRef WHERE IdPaciente = :IdPac";
            $this->Db->prepare($SqlVinculo)->execute([
                ':IdRef' => $IdReferente,
                ':IdPac' => $P['IdPaciente']
            ]);
            $Migrados++;
        }

        return $Migrados;
    }

    // OBTENER UNA FICHA DE REFERENTE
    public function ObtenerReferente($Id) {
        $Sql = "SELECT IdReferente, Nombre, Apellido, Especialidad, Telefono, FechaCarga 
                FROM fichas_referentes 
                WHERE IdReferente = :Id";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $Id]);
        return $Stmt->fetch(PDO::FETCH_ASSOC);
    }

    // GUARDAR UNA NUEVA FICHA DE REFERENTE
    public function GuardarReferente($Datos) {
        $Sql = "INSERT INTO fichas_referentes (Nombre, Apellido, Especialidad, Telefono) 
                VALUES (:Nombre, :Apellido, :Esp, :Tel)";
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([
            ':Nombre'   => $this->LimpiarTexto($Datos['nombre']),
            ':Apellido' => $this->LimpiarTexto($Datos['apellido']),
            ':Esp'      => isset($Datos['especialidad']) ? $this->LimpiarTexto($Datos['especialidad']) : NULL,
            ':Tel'      => isset($Datos['telefono']) ? $this->LimpiarTexto($Datos['telefono']) : NULL
        ]);
    }

    // ACTUALIZAR UNA FICHA DE REFERENTE
    public function ActualizarReferente($Datos) {
        $Sql = "UPDATE fichas_referentes SET 
                Nombre = :Nombre, Apellido = :Apellido, Especialidad = :Esp, Telefono = :Tel 
                WHERE IdReferente = :Id";
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([
            ':Nombre'   => $this->LimpiarTexto($Datos['nombre']),
            ':Apellido' => $this->LimpiarTexto($Datos['apellido']),
            ':Esp'      => isset($Datos['especialidad']) ? $this->LimpiarTexto($Datos['especialidad']) : NULL,
            ':Tel'      => isset($Datos['telefono']) ? $this->LimpiarTexto($Datos['telefono']) : NULL,
            ':Id'       => $Datos['id_referente']
        ]);
    }

    // ELIMINAR UNA FICHA DE REFERENTE (DESVINCULANDO A LOS PACIENTES QUE LO TENIAN)
    public function EliminarReferente($IdReferente) {
        try {
            $this->Db->beginTransaction();
            $SqlDesvincular = "UPDATE referentes SET IdFichaReferente = NULL WHERE IdFichaReferente = :Id";
            $this->Db->prepare($SqlDesvincular)->execute([':Id' => $IdReferente]);
            $SqlBorrar = "DELETE FROM fichas_referentes WHERE IdReferente = :Id";
            $this->Db->prepare($SqlBorrar)->execute([':Id' => $IdReferente]);
            $this->Db->commit();
            return true;
        } catch (Exception $E) {
            $this->Db->rollBack();
            return false;
        }
    }

    // LISTAR INTERVENCIONES DE UN JOVEN (MAS RECIENTES PRIMERO)
    public function ListarIntervenciones($IdPaciente) {
        $Sql = "SELECT * FROM intervenciones WHERE IdPaciente = :Id ORDER BY IdIntervencion DESC";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $IdPaciente]);
        return $Stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // OBTENER UNA INTERVENCION POR SU ID
    public function ObtenerIntervencion($IdIntervencion) {
        $Sql = "SELECT * FROM intervenciones WHERE IdIntervencion = :Id";
        $Stmt = $this->Db->prepare($Sql);
        $Stmt->execute([':Id' => $IdIntervencion]);
        return $Stmt->fetch(PDO::FETCH_ASSOC);
    }

    // GUARDAR UNA NUEVA INTERVENCION
    public function GuardarIntervencion($Datos) {
        $Sql = "INSERT INTO intervenciones 
                (IdPaciente, EntrevistaFecha, EntrevistaProfesional, ReunionFecha, ReunionProfesionales,
                 DomicilioFecha, DomicilioProfesionales, InformeSemestral, LineasAccion) 
                VALUES (:Id, :EntFecha, :EntProf, :ReuFecha, :ReuProfs,
                        :DomFecha, :DomProfs, :Informe, :Lineas)";
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([
            ':Id'        => $Datos['id_paciente'],
            ':EntFecha'  => !empty($Datos['entrevista_fecha']) ? $Datos['entrevista_fecha'] : NULL,
            ':EntProf'   => isset($Datos['entrevista_profesional']) ? $this->LimpiarTexto($Datos['entrevista_profesional']) : NULL,
            ':ReuFecha'  => !empty($Datos['reunion_fecha']) ? $Datos['reunion_fecha'] : NULL,
            ':ReuProfs'  => isset($Datos['reunion_profesionales']) ? $this->LimpiarTexto($Datos['reunion_profesionales']) : NULL,
            ':DomFecha'  => !empty($Datos['domicilio_fecha']) ? $Datos['domicilio_fecha'] : NULL,
            ':DomProfs'  => isset($Datos['domicilio_profesionales']) ? $this->LimpiarTexto($Datos['domicilio_profesionales']) : NULL,
            ':Informe'   => isset($Datos['informe_semestral']) ? $this->LimpiarTexto($Datos['informe_semestral']) : NULL,
            ':Lineas'    => isset($Datos['lineas_accion']) ? $this->LimpiarTexto($Datos['lineas_accion']) : NULL
        ]);
    }

    // ACTUALIZAR UNA INTERVENCION
    public function ActualizarIntervencion($Datos) {
        $Sql = "UPDATE intervenciones SET 
                EntrevistaFecha = :EntFecha, EntrevistaProfesional = :EntProf,
                ReunionFecha = :ReuFecha, ReunionProfesionales = :ReuProfs,
                DomicilioFecha = :DomFecha, DomicilioProfesionales = :DomProfs,
                InformeSemestral = :Informe, LineasAccion = :Lineas
                WHERE IdIntervencion = :Id";
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([
            ':EntFecha'  => !empty($Datos['entrevista_fecha']) ? $Datos['entrevista_fecha'] : NULL,
            ':EntProf'   => isset($Datos['entrevista_profesional']) ? $this->LimpiarTexto($Datos['entrevista_profesional']) : NULL,
            ':ReuFecha'  => !empty($Datos['reunion_fecha']) ? $Datos['reunion_fecha'] : NULL,
            ':ReuProfs'  => isset($Datos['reunion_profesionales']) ? $this->LimpiarTexto($Datos['reunion_profesionales']) : NULL,
            ':DomFecha'  => !empty($Datos['domicilio_fecha']) ? $Datos['domicilio_fecha'] : NULL,
            ':DomProfs'  => isset($Datos['domicilio_profesionales']) ? $this->LimpiarTexto($Datos['domicilio_profesionales']) : NULL,
            ':Informe'   => isset($Datos['informe_semestral']) ? $this->LimpiarTexto($Datos['informe_semestral']) : NULL,
            ':Lineas'    => isset($Datos['lineas_accion']) ? $this->LimpiarTexto($Datos['lineas_accion']) : NULL,
            ':Id'        => $Datos['id_intervencion']
        ]);
    }

    // ELIMINAR UNA INTERVENCION
    public function EliminarIntervencion($IdIntervencion) {
        $Sql = "DELETE FROM intervenciones WHERE IdIntervencion = :Id";
        $Stmt = $this->Db->prepare($Sql);
        return $Stmt->execute([':Id' => $IdIntervencion]);
    }
}
?>
