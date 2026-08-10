<?php

require_once __DIR__ . '/../../config/database.php';
require_once dirname(__DIR__) . '/Services/MailService.php';
require_once __DIR__ . '/../../config/ga4_config.php';

class GestionModel {
    private $pdo;
    
    private $columnas_permitidas = [
        'nombre', 'apellido', 'telefono', 'nombre_provincia', 'nombre_localidad', 
        'nombre_categoria', 'edad', 'denuncia_art', 'nombre_art', 'sueldo_registrado', 
        'alta_art', 'abogado_previo', 'descripcion_lesion', 'antiguedad_laboral', 
        'nombre_lugar_trabajo_provincia', 'nombre_lugar_trabajo_localidad', 'trabaja_en_blanco', 
        'dias_laborales', 'horarios_laborales', 'pagan_en_negro', 'sueldo_total_despido', 
        'situacion_actual', 'forma_despido', 'fecha_registro', 'observaciones', 'fecha_accidente', 'nombre_usuario_asignado'
    ];

    public function obtenerTodasLasConsultas(string $orden, string $direccion, ?bool $eliminado_status = false) {
        if (!in_array($orden, $this->columnas_permitidas)) {
            $orden = 'fecha_registro';
        }
        $direccion = strtoupper($direccion) === 'ASC' ? 'ASC' : 'DESC';

        $where_clause = "WHERE 1=1";
        if ($eliminado_status !== null) {
            $where_clause .= " AND c.eliminado = :eliminado_status";
        }

        if (isset($_SESSION['rol']) && $_SESSION['rol'] != 1) {
            $where_clause .= " AND c.asignado_a = :user_id";
        }

        $sql = "SELECT 
                    c.id, c.nombre, c.apellido, c.telefono, c.observaciones, c.reingresado, c.eliminado, c.es_duplicado, c.leido, c.asignado_a,
                    u.nombre_usuario AS nombre_usuario_asignado,
                    p.nombre AS nombre_provincia, 
                    COALESCE(l.nombre, p.nombre) AS nombre_localidad,
                    cat.nombre AS nombre_categoria,
                    COALESCE(ca.edad, ce.edad) AS edad,
                    COALESCE(ca.denuncia_art, ce.denuncia_art) AS denuncia_art,
                    art.nombre AS nombre_art,
                    COALESCE(ca.alta_art, ce.alta_art) AS alta_art,
                    COALESCE(ca.abogado_previo, ce.abogado_previo) AS abogado_previo,
                    COALESCE(ca.descripcion_lesion, ce.descripcion_lesion) AS descripcion_lesion,
                    ca.fecha_accidente,
                    ce.antiguedad_laboral,
                    cd.fecha_ingreso,
                    cd.lugar_trabajo_provincia_id,
                    p_lt.nombre AS nombre_lugar_trabajo_provincia, 
                    COALESCE(l_lt.nombre, p_lt.nombre) AS nombre_lugar_trabajo_localidad,
                    cd.trabaja_en_blanco,
                    cd.dias_laborales,
                    cd.horarios_laborales,
                    cd.pagan_en_negro,
                    cd.situacion_actual,
                    cd.forma_despido,
                    COALESCE(ca.sueldo_registrado, ce.sueldo_registrado, cd.sueldo_total) AS sueldo,
                    c.fecha_registro 
                FROM 
                    consultas c
                LEFT JOIN usuarios u ON c.asignado_a = u.id
                LEFT JOIN provincias p ON c.provincia_id = p.id
                LEFT JOIN localidades l ON c.localidad_id = l.id
                LEFT JOIN categorias cat ON c.categoria_id = cat.id
                LEFT JOIN consultas_accidentes_trabajo ca ON c.id = ca.consulta_id
                LEFT JOIN consultas_enfermedades_profesionales ce ON c.id = ce.consulta_id
                LEFT JOIN art ON ca.art_id = art.id OR ce.art_id = art.id
                LEFT JOIN consultas_despidos cd ON c.id = cd.consulta_id
                LEFT JOIN provincias p_lt ON cd.lugar_trabajo_provincia_id = p_lt.id
                LEFT JOIN localidades l_lt ON cd.lugar_trabajo_localidad_id = l_lt.id
                {$where_clause}
                ORDER BY {$orden} {$direccion}";

        try {
            $stmt = $this->pdo->prepare($sql);
            if ($eliminado_status !== null) {
                $stmt->bindValue(':eliminado_status', $eliminado_status, PDO::PARAM_BOOL);
            }
            if (isset($_SESSION['rol']) && $_SESSION['rol'] != 1) {
                $stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
            }
            $stmt->execute();
            $consultas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($consultas as &$consulta) {
                if (isset($consulta['fecha_registro'])) {
                    $consulta['fecha_registro'] = convertir_fecha_buenos_aires($consulta['fecha_registro']);
                }
            }
            return $consultas;
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER CONSULTAS: " . $e->getMessage());
            return [];
        }
    }

    public function obtenerConsultasEliminadas(string $orden, string $direccion) {
        return $this->obtenerTodasLasConsultas($orden, $direccion, true);
    }

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function guardarNuevaConsulta(array $datos) {
        try {
            $this->pdo->beginTransaction();
            $esta_vacio = function($valor) { return !isset($valor) || trim((string)$valor) === ''; };

            $nombre = trim($datos['nombre'] ?? '');
            $apellido = trim($datos['apellido'] ?? '');
            $telefono = trim($datos['telefono'] ?? '');
            $provincia_id = !empty($datos['provincia_id']) ? filter_var($datos['provincia_id'], FILTER_VALIDATE_INT) : null;
            $categoria_id = !empty($datos['categoria_id']) ? filter_var($datos['categoria_id'], FILTER_VALIDATE_INT) : null;
            $localidad_id = !empty($datos['localidad_id']) ? filter_var($datos['localidad_id'], FILTER_VALIDATE_INT) : null;

            if ($esta_vacio($nombre) || $esta_vacio($apellido) || $esta_vacio($telefono) || $esta_vacio($provincia_id) || $esta_vacio($localidad_id) || $esta_vacio($categoria_id)) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'DATOS BASICOS INCOMPLETOS. ASEGURATE DE COMPLETAR NOMBRE, APELLIDO, TELEFONO, PROVINCIA Y LOCALIDAD.'];
            }

            // ===== VALIDACION ANTISPAM DE FORMATO =====
            // NOMBRE/APELLIDO: SOLO LETRAS (CON ACENTOS), ESPACIOS Y GUIONES. MINIMO 2 CARACTERES.
            $patron_nombre = "/^[A-Za-zÁÉÍÓÚáéíóúÑñÜü]+(?:[' .\-][A-Za-zÁÉÍÓÚáéíóúÑñÜü]+)*$/u";
            if (!preg_match($patron_nombre, $nombre) || mb_strlen($nombre) < 2 || !preg_match('/[A-Za-zÁÉÍÓÚáéíóúÑñÜü]/u', $nombre)) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'EL NOMBRE INGRESADO NO ES VALIDO. USÁ SOLO LETRAS.'];
            }
            if (!preg_match($patron_nombre, $apellido) || mb_strlen($apellido) < 2 || !preg_match('/[A-Za-zÁÉÍÓÚáéíóúÑñÜü]/u', $apellido)) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'EL APELLIDO INGRESADO NO ES VALIDO. USÁ SOLO LETRAS.'];
            }
            // TELEFONO: TOLERA +, ESPACIOS, GUIONES Y PARENTESIS, PERO EXIGE 6 A 15 DIGITOS
            $digitos_telefono = preg_replace('/[^0-9]/', '', $telefono);
            if (strlen($digitos_telefono) < 6 || strlen($digitos_telefono) > 15) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'EL TELEFONO INGRESADO NO ES VALIDO. USÁ SOLO NUMEROS (MINIMO 6 DIGITOS).'];
            }

            $stmt_cat = $this->pdo->prepare("SELECT id, nombre FROM categorias");
            $stmt_cat->execute();
            $categorias_db = $stmt_cat->fetchAll(PDO::FETCH_KEY_PAIR);
            $buscarId = function($n) use ($categorias_db) { foreach ($categorias_db as $id => $nombre) { if (strcasecmp(trim($nombre), $n) === 0) return $id; } return null; };
            
            $id_acc = $buscarId('Accidentes de trabajo');
            $id_des = $buscarId('Despidos');
            $id_enf = $buscarId('Enfermedades profesionales');

            // ===== VALIDAR QUE LOS IDS REFERENCIADOS EXISTAN REALMENTE EN LA BD =====
            $id_existe = function(string $tabla, int $id): bool {
                try {
                    $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM {$tabla} WHERE id = :id");
                    $stmt->execute([':id' => $id]);
                    return (int)$stmt->fetchColumn() > 0;
                } catch (PDOException $e) {
                    error_log("ERROR VALIDANDO ID EN {$tabla}: " . $e->getMessage());
                    return false;
                }
            };
            if (!$id_existe('provincias', $provincia_id) || !$id_existe('localidades', $localidad_id) || !isset($categorias_db[$categoria_id])) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'PROVINCIA, LOCALIDAD O TIPO DE CONSULTA NO VALIDOS. RECARGÁ LA PAGINA E INTENTÁ DE NUEVO.'];
            }

            if ($categoria_id == $id_acc) {
                if ($esta_vacio($datos['edad_acc']) || $esta_vacio($datos['fecha_accidente_acc']) || $esta_vacio($datos['denuncia_art_acc']) || 
                    $esta_vacio($datos['art_id_acc']) || $esta_vacio($datos['sueldo_registrado_acc']) || $esta_vacio($datos['alta_art_acc']) || 
                    $esta_vacio($datos['abogado_previo_acc']) || $esta_vacio($datos['descripcion_lesion_acc'])) {
                    $this->pdo->rollback();
                    return ['success' => false, 'message' => 'FALTAN COMPLETAR DATOS OBLIGATORIOS DEL ACCIDENTE DE TRABAJO.'];
                }
            } elseif ($categoria_id == $id_des) {
                if ($esta_vacio($datos['lugar_trabajo_provincia_id']) || $esta_vacio($datos['lugar_trabajo_localidad_id']) || 
                    $esta_vacio($datos['fecha_ingreso_desp']) || $esta_vacio($datos['trabaja_en_blanco']) || 
                    $esta_vacio($datos['pagan_en_negro']) || $esta_vacio($datos['sueldo_total']) || 
                    $esta_vacio($datos['situacion_actual'])) {
                    $this->pdo->rollback();
                    return ['success' => false, 'message' => 'FALTAN COMPLETAR DATOS OBLIGATORIOS DEL DESPIDO.'];
                }
                if ($datos['situacion_actual'] === 'me despidieron' && $esta_vacio($datos['forma_despido'])) {
                    $this->pdo->rollback();
                    return ['success' => false, 'message' => 'FALTA INDICAR COMO TE DESPIDIERON.'];
                }
            } elseif ($categoria_id == $id_enf) {
                if ($esta_vacio($datos['edad_enf']) || $esta_vacio($datos['denuncia_art_enf']) || 
                    $esta_vacio($datos['art_id_enf']) || $esta_vacio($datos['sueldo_registrado_enf']) || 
                    $esta_vacio($datos['alta_art_enf']) || $esta_vacio($datos['abogado_previo_enf']) || 
                    $esta_vacio($datos['antiguedad_laboral']) || $esta_vacio($datos['descripcion_lesion_enf'])) {
                    $this->pdo->rollback();
                    return ['success' => false, 'message' => 'FALTAN COMPLETAR DATOS OBLIGATORIOS DE LA ENFERMEDAD PROFESIONAL.'];
                }
            }

            $stmt_check = $this->pdo->prepare("SELECT COUNT(*) FROM consultas WHERE LOWER(TRIM(nombre)) = LOWER(TRIM(?)) AND LOWER(TRIM(apellido)) = LOWER(TRIM(?)) AND eliminado = FALSE");
            $stmt_check->execute([$nombre, $apellido]);
            $es_duplicado = ($stmt_check->fetchColumn() > 0);

            $stmt = $this->pdo->prepare("INSERT INTO consultas (nombre, apellido, telefono, provincia_id, localidad_id, categoria_id, es_duplicado) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nombre, $apellido, $telefono, $provincia_id, $localidad_id, $categoria_id, $es_duplicado ? 1 : 0]);
            $consulta_id = $this->pdo->lastInsertId();

            if ($categoria_id == $id_acc) {
                $sueldo = !empty($datos['sueldo_registrado_acc']) ? filter_var(str_replace(['.', "'"], '', $datos['sueldo_registrado_acc']), FILTER_VALIDATE_FLOAT) : null;
                $this->pdo->prepare("INSERT INTO consultas_accidentes_trabajo (consulta_id, edad, denuncia_art, art_id, sueldo_registrado, alta_art, abogado_previo, descripcion_lesion, fecha_accidente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")
                    ->execute([$consulta_id, $datos['edad_acc'] ?? null, $datos['denuncia_art_acc'] ?? null, $datos['art_id_acc'] ?? null, $sueldo, $datos['alta_art_acc'] ?? null, $datos['abogado_previo_acc'] ?? null, $datos['descripcion_lesion_acc'] ?? null, $datos['fecha_accidente_acc'] ?? null]);
            } elseif ($categoria_id == $id_des) {
                $sueldo = !empty($datos['sueldo_total']) ? filter_var(str_replace(['.', "'"], '', $datos['sueldo_total']), FILTER_VALIDATE_FLOAT) : null;
                $this->pdo->prepare("INSERT INTO consultas_despidos (consulta_id, lugar_trabajo_provincia_id, lugar_trabajo_localidad_id, fecha_ingreso, trabaja_en_blanco, pagan_en_negro, sueldo_total, situacion_actual, forma_despido) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")
                    ->execute([$consulta_id, $datos['lugar_trabajo_provincia_id'] ?? null, $datos['lugar_trabajo_localidad_id'] ?? null, $datos['fecha_ingreso_desp'] ?? null, $datos['trabaja_en_blanco'] ?? null, $datos['pagan_en_negro'] ?? null, $sueldo, $datos['situacion_actual'] ?? null, $datos['forma_despido'] ?? null]);
            } elseif ($categoria_id == $id_enf) {
                $sueldo = !empty($datos['sueldo_registrado_enf']) ? filter_var(str_replace(['.', "'"], '', $datos['sueldo_registrado_enf']), FILTER_VALIDATE_FLOAT) : null;
                $this->pdo->prepare("INSERT INTO consultas_enfermedades_profesionales (consulta_id, edad, denuncia_art, art_id, sueldo_registrado, alta_art, abogado_previo, descripcion_lesion, antiguedad_laboral) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")
                    ->execute([$consulta_id, $datos['edad_enf'] ?? null, $datos['denuncia_art_enf'] ?? null, $datos['art_id_enf'] ?? null, $sueldo, $datos['alta_art_enf'] ?? null, $datos['abogado_previo_enf'] ?? null, $datos['descripcion_lesion_enf'] ?? null, $datos['antiguedad_laboral'] ?? null]);
            }

            $this->pdo->commit();
            
            // === GA4 TRACKING Y EMAIL ===
            try {
                error_log("[CONSULTA #$consulta_id] Iniciando GA4 y envío de email");
                $nombre_cat = $categorias_db[$categoria_id] ?? 'DESCONOCIDA';
                error_log("[CONSULTA #$consulta_id] Categoría: $nombre_cat");
                
                ga4_track_contact($nombre_cat, $nombre);
                error_log("[CONSULTA #$consulta_id] GA4 tracked");
                
                if (class_exists('MailService')) {
                    error_log("[CONSULTA #$consulta_id] MailService disponible, intentando enviar...");
                    $mail_result = MailService::enviarAvisoNuevaConsulta(array_merge($datos, ['nombre_categoria' => $nombre_cat]));
                    if ($mail_result) {
                        error_log("[CONSULTA #$consulta_id] Email enviado exitosamente");
                    } else {
                        error_log("[CONSULTA #$consulta_id] Email retornó false");
                    }
                } else {
                    error_log("[CONSULTA #$consulta_id] MailService NO disponible");
                }
            } catch (\Throwable $e) {
                error_log("[CONSULTA #$consulta_id] ERROR en email: " . $e->getMessage() . " | Trace: " . $e->getTraceAsString());
            }

            $mensaje_exito = $es_duplicado 
                ? 'YA CONTAMOS CON UNA CONSULTA TUYA REGISTRADA. ANALIZAREMOS TU CASO A LA BREVEDAD.' 
                : 'CONSULTA REGISTRADA CORRECTAMENTE. ANALIZAREMOS TU CASO A LA BREVEDAD.';

            return ['success' => true, 'message' => $mensaje_exito];
        } catch (Exception $e) {
            if ($this->pdo->inTransaction()) $this->pdo->rollback();
            error_log("ERROR AL GUARDAR: " . $e->getMessage());
            return ['success' => false, 'message' => 'ERROR INTERNO AL GUARDAR LA CONSULTA.'];
        }
    }

    public function getConsultaById(int $id, ?bool $eliminado_status = false, ?int $user_id = null) {
        $where_clause = "WHERE c.id = :id";
        if ($eliminado_status !== null) {
            $where_clause .= " AND c.eliminado = :eliminado_status";
        }
        if ($user_id !== null) {
            $where_clause .= " AND c.asignado_a = :user_id";
        }
        $sql_completa = "SELECT 
                            c.id, c.nombre, c.apellido, c.telefono, c.observaciones, c.reingresado, c.eliminado, c.es_duplicado, c.provincia_id, c.localidad_id, c.categoria_id, c.asignado_a,
                            p.nombre AS nombre_provincia, 
                            COALESCE(l.nombre, p.nombre) AS nombre_localidad,
                            cat.nombre AS nombre_categoria,
                            COALESCE(ca.edad, ce.edad) AS edad,
                            COALESCE(ca.denuncia_art, ce.denuncia_art) AS denuncia_art,
                            COALESCE(ca.art_id, ce.art_id) AS art_id,
                            art.nombre AS nombre_art,
                            COALESCE(ca.alta_art, ce.alta_art) AS alta_art,
                            COALESCE(ca.abogado_previo, ce.abogado_previo) AS abogado_previo,
                            COALESCE(ca.descripcion_lesion, ce.descripcion_lesion) AS descripcion_lesion,
                            ca.fecha_accidente, ce.antiguedad_laboral, cd.fecha_ingreso,
                            cd.lugar_trabajo_provincia_id, cd.lugar_trabajo_localidad_id,
                            p_lt.nombre AS nombre_lugar_trabajo_provincia, 
                            COALESCE(l_lt.nombre, p_lt.nombre) AS nombre_lugar_trabajo_localidad,
                            cd.trabaja_en_blanco, cd.dias_laborales, cd.horarios_laborales, cd.pagan_en_negro, cd.situacion_actual, cd.forma_despido,
                            COALESCE(ca.sueldo_registrado, ce.sueldo_registrado, cd.sueldo_total) AS sueldo,
                            c.fecha_registro 
                        FROM consultas c
                        LEFT JOIN provincias p ON c.provincia_id = p.id
                        LEFT JOIN localidades l ON c.localidad_id = l.id
                        LEFT JOIN categorias cat ON c.categoria_id = cat.id
                        LEFT JOIN consultas_accidentes_trabajo ca ON c.id = ca.consulta_id
                        LEFT JOIN consultas_enfermedades_profesionales ce ON c.id = ce.consulta_id
                        LEFT JOIN art ON ca.art_id = art.id OR ce.art_id = art.id
                        LEFT JOIN consultas_despidos cd ON c.id = cd.consulta_id
                        LEFT JOIN provincias p_lt ON cd.lugar_trabajo_provincia_id = p_lt.id
                        LEFT JOIN localidades l_lt ON cd.lugar_trabajo_localidad_id = l_lt.id
                        {$where_clause}";
        try {
            $stmt = $this->pdo->prepare($sql_completa);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            if ($eliminado_status !== null) {
                $stmt->bindValue(':eliminado_status', $eliminado_status, PDO::PARAM_BOOL);
            }
            if ($user_id !== null) {
                $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
            }
            $stmt->execute();
            $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
            return $consulta;
        } catch (PDOException $e) {
            error_log("ERROR AL OBTENER CONSULTA POR ID: " . $e->getMessage());
            return false;
        }
    }

    public function updateConsultaCompleta(array $datos, ?int $user_id = null) {
        $id = filter_var($datos['id'] ?? null, FILTER_VALIDATE_INT);
        if (!$id) return ['success' => false, 'message' => 'ID INVÁLIDO PARA ACTUALIZAR.'];

        try {
            $this->pdo->beginTransaction();

            // --- SEGURIDAD: CONTROL DE ACCESO (IDOR) ---
            $sql_main = "UPDATE consultas SET nombre = :nombre, apellido = :apellido, telefono = :telefono, provincia_id = :provincia_id, localidad_id = :localidad_id, observaciones = :observaciones WHERE id = :id";
            if ($user_id !== null) {
                $sql_main .= " AND asignado_a = :user_id";
            }

            $nombre = trim($datos['nombre'] ?? '');
            $apellido = trim($datos['apellido'] ?? '');
            $telefono = trim($datos['telefono'] ?? '');
            
            if (empty($nombre) || empty($apellido) || empty($telefono)) {
                $this->pdo->rollback();
                return ['success' => false, 'message' => 'DATOS BASICOS OBLIGATORIOS.'];
            }

            $stmt = $this->pdo->prepare($sql_main);
            $params = [
                ':nombre' => $nombre, ':apellido' => $apellido, ':telefono' => $telefono,
                ':provincia_id' => !empty($datos['provincia_id']) ? $datos['provincia_id'] : null,
                ':localidad_id' => !empty($datos['localidad_id']) ? $datos['localidad_id'] : null,
                ':observaciones' => $datos['observaciones'] ?? null, ':id' => $id
            ];
            if ($user_id !== null) {
                $params[':user_id'] = $user_id;
            }
            $stmt->execute($params);

            // Verificar si el update en la tabla consultas afectó alguna fila.
            // Si no afectó ninguna (y el ID existe), es porque el asignado_a no coincide.
            if ($stmt->rowCount() === 0) {
                 // Verificamos si el ID existe antes de asumir error de permisos
                 $check = $this->pdo->prepare("SELECT id FROM consultas WHERE id = ?");
                 $check->execute([$id]);
                 if ($check->rowCount() > 0 && $user_id !== null) {
                    $this->pdo->rollback();
                    return ['success' => false, 'message' => 'ACCESO DENEGADO.'];
                 }
            }

            // --- ACTUALIZACION CONDICIONAL DE DETALLES ---
            // Usamos COALESCE para mantener el valor actual si el dato llega como NULL (no enviado en el POST)
            $catId = $datos['categoria_id'] ?? null;

            if ($catId == 1) { // ACCIDENTES
                $this->pdo->prepare("UPDATE consultas_accidentes_trabajo SET 
                    edad = COALESCE(:edad, edad), 
                    art_id = COALESCE(:art_id, art_id), 
                    sueldo_registrado = COALESCE(:sueldo, sueldo_registrado), 
                    descripcion_lesion = COALESCE(:lesion, descripcion_lesion), 
                    fecha_accidente = COALESCE(:fecha, fecha_accidente) 
                    WHERE consulta_id = :id")
                ->execute([
                    ':edad' => $datos['edad'] ?? null,
                    ':art_id' => !empty($datos['art_id']) ? $datos['art_id'] : null,
                    ':sueldo' => $datos['sueldo_registrado'] ?? null,
                    ':lesion' => $datos['descripcion_lesion'] ?? null,
                    ':fecha' => $datos['fecha_accidente_acc'] ?? null,
                    ':id' => $id
                ]);
            } elseif ($catId == 3) { // ENFERMEDADES
                $this->pdo->prepare("UPDATE consultas_enfermedades_profesionales SET 
                    edad = COALESCE(:edad, edad), 
                    art_id = COALESCE(:art_id, art_id), 
                    sueldo_registrado = COALESCE(:sueldo, sueldo_registrado), 
                    descripcion_lesion = COALESCE(:lesion, descripcion_lesion), 
                    antiguedad_laboral = COALESCE(:antiguedad, antiguedad_laboral) 
                    WHERE consulta_id = :id")
                ->execute([
                    ':edad' => $datos['edad_enf'] ?? $datos['edad'] ?? null,
                    ':art_id' => !empty($datos['art_id_enf']) ? $datos['art_id_enf'] : (!empty($datos['art_id']) ? $datos['art_id'] : null),
                    ':sueldo' => $datos['sueldo_registrado_enf'] ?? $datos['sueldo_registrado'] ?? null,
                    ':lesion' => $datos['descripcion_lesion_enf'] ?? $datos['descripcion_lesion'] ?? null,
                    ':antiguedad' => $datos['antiguedad_laboral'] ?? null,
                    ':id' => $id
                ]);
            } elseif ($catId == 2) { // DESPIDOS
                $this->pdo->prepare("UPDATE consultas_despidos SET 
                    sueldo_total = COALESCE(:sueldo, sueldo_total), 
                    situacion_actual = COALESCE(:situacion, situacion_actual) 
                    WHERE consulta_id = :id")
                ->execute([
                    ':sueldo' => $datos['sueldo_total'] ?? null,
                    ':situacion' => $datos['situacion_actual'] ?? null,
                    ':id' => $id
                ]);
            }

            $this->pdo->commit();
            return ['success' => true, 'message' => 'ACTUALIZADO CORRECTAMENTE.'];
        } catch (PDOException $e) {
            if ($this->pdo->inTransaction()) $this->pdo->rollback();
            error_log("ERROR AL ACTUALIZAR: " . $e->getMessage());
            return ['success' => false, 'message' => 'ERROR INTERNO AL ACTUALIZAR.'];
        }
    }

    public function eliminarConsulta(int $id, ?int $user_id = null) {
        try {
            $sql = "UPDATE consultas SET eliminado = TRUE WHERE id = :id";
            $params = [':id' => $id];
            if ($user_id !== null) {
                $sql .= " AND asignado_a = :user_id";
                $params[':user_id'] = $user_id;
            }
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            if ($stmt->rowCount() === 0) return ['success' => false, 'message' => 'Acceso denegado o no encontrado.'];
            return ['success' => true, 'message' => 'Consulta eliminada.'];
        } catch (PDOException $e) {
            error_log("ERROR AL ELIMINAR: " . $e->getMessage());
            return ['success' => false, 'message' => 'Error al eliminar.'];
        }
    }

    public function restaurarConsulta(int $id, ?int $user_id = null) {
        try {
            $sql = "UPDATE consultas SET eliminado = FALSE WHERE id = :id";
            $params = [':id' => $id];
            if ($user_id !== null) {
                $sql .= " AND asignado_a = :user_id";
                $params[':user_id'] = $user_id;
            }
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            if ($stmt->rowCount() === 0) return ['success' => false, 'message' => 'Acceso denegado o no encontrado.'];
            return ['success' => true, 'message' => 'Consulta restaurada.'];
        } catch (PDOException $e) {
            error_log("ERROR AL RESTAURAR: " . $e->getMessage());
            return ['success' => false, 'message' => 'Error al restaurar.'];
        }
    }

    public function toggleLeido(int $id, ?int $user_id = null): array {
        try {
            $sql_sel = "SELECT leido FROM consultas WHERE id = :id";
            if ($user_id !== null) $sql_sel .= " AND asignado_a = :user_id";
            
            $stmt = $this->pdo->prepare($sql_sel);
            $params = [':id' => $id];
            if ($user_id !== null) $params[':user_id'] = $user_id;
            
            $stmt->execute($params);
            $raw = $stmt->fetchColumn();
            if ($raw === false) return ['success' => false, 'message' => 'No encontrada o acceso denegado.'];
            
            $new = !(bool)$raw;
            $sql_upd = "UPDATE consultas SET leido = :new WHERE id = :id";
            if ($user_id !== null) $sql_upd .= " AND asignado_a = :user_id";
            
            $stmt_upd = $this->pdo->prepare($sql_upd);
            $params_upd = [':new' => $new, ':id' => $id];
            if ($user_id !== null) $params_upd[':user_id'] = $user_id;
            
            $stmt_upd->execute($params_upd);
            return ['success' => true, 'message' => 'Estado actualizado.', 'new_status' => $new];
        } catch (PDOException $e) {
            error_log("ERROR LEIDO: " . $e->getMessage());
            return ['success' => false, 'message' => 'Error al actualizar.'];
        }
    }

    public function asignarConsulta(int $consultaId, int $usuarioId) {
        try {
            $stmt = $this->pdo->prepare("UPDATE consultas SET asignado_a = :usuario_id WHERE id = :consulta_id");
            return $stmt->execute([':usuario_id' => $usuarioId, ':consulta_id' => $consultaId]);
        } catch (PDOException $e) {
            error_log("ERROR AL ASIGNAR CONSULTA: " . $e->getMessage());
            return false;
        }
    }

    /**
     * RATE LIMITING ANTISPAM POR IP.
     * CREA AUTOMATICAMENTE LA TABLA rate_limit_consultas SI NO EXISTE.
     */
    private function asegurarTablaRateLimit(): void {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS rate_limit_consultas (
            id INT AUTO_INCREMENT PRIMARY KEY,
            ip VARCHAR(45) NOT NULL,
            intento_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_ip_fecha (ip, intento_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    }

    /**
     * REGISTRA EL INTENTO ACTUAL Y DEVUELVE true SI LA IP TODAVIA PUEDE ENVIAR.
     * PERMITE MAXIMO 3 INTENTOS POR IP EN 60 SEGUNDOS.
     */
    public function registrarIntentoRateLimit(string $ip): bool {
        try {
            $this->asegurarTablaRateLimit();

            $stmt_insert = $this->pdo->prepare("INSERT INTO rate_limit_consultas (ip) VALUES (:ip)");
            $stmt_insert->execute([':ip' => $ip]);

            $stmt_count = $this->pdo->prepare("SELECT COUNT(*) FROM rate_limit_consultas WHERE ip = :ip AND intento_at > (NOW() - INTERVAL 60 SECOND)");
            $stmt_count->execute([':ip' => $ip]);
            $cantidad = (int)$stmt_count->fetchColumn();

            // PERMITE 3 INTENTOS; EL 4TO EN LA MISMA VENTANA QUEDA BLOQUEADO
            return $cantidad <= 3;
        } catch (PDOException $e) {
            error_log("ERROR RATE LIMIT: " . $e->getMessage());
            return true;
        }
    }

    /**
     * ELIMINA REGISTROS DE RATE LIMIT CON MAS DE 10 MINUTOS DE ANTIGUEDAD.
     */
    public function limpiarRateLimit(): void {
        try {
            $this->pdo->exec("DELETE FROM rate_limit_consultas WHERE intento_at < (NOW() - INTERVAL 10 MINUTE)");
        } catch (PDOException $e) {
            error_log("ERROR LIMPIANDO RATE LIMIT: " . $e->getMessage());
        }
    }
}
