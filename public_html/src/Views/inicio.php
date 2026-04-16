<div class="container">
    <h1>REGISTRO DE NUEVA CONSULTA</h1>
    
    <noscript>
        <div style="color: #ffcdd2; background-color: #b71c1c; border: 1px solid #c62828; border-radius: 4px; padding: 20px; margin-bottom: 20px; text-align: center;">
            <strong>ERROR: ESTE FORMULARIO REQUIERE JAVASCRIPT ACTIVO PARA FUNCIONAR.</strong><br>
            POR FAVOR, ACTIVA JAVASCRIPT EN TU NAVEGADOR PARA PODER ENVIAR TU CONSULTA.
        </div>
    </noscript>

    <div id="error-summary" style="color: #ffcdd2; background-color: #b71c1c; border: 1px solid #c62828; border-radius: 4px; padding: 10px; margin-bottom: 20px; display: none;"></div>

    <?php if (!empty($form_errors)): ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const summary = document.getElementById('error-summary');
            summary.innerHTML = '<strong>Error al guardar:</strong><br><?= addslashes($form_errors) ?>';
            summary.style.display = 'block';
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    <?php endif; ?>

    <div id="success-message" style="color: #d4edda; background-color: #28a745; border: 1px solid #218838; border-radius: 4px; padding: 10px; margin-bottom: 20px; display: none;"></div>

    <?php if (!empty($form_success_message)): ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const successMsg = document.getElementById('success-message');
            successMsg.innerHTML = '<strong>Éxito:</strong><br><?= addslashes($form_success_message) ?>';
            successMsg.style.display = 'block';
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    <?php endif; ?>

    <!-- Formulario oculto por defecto y con novalidate para evitar conflictos con campos ocultos -->
    <form id="form-consulta" action="<?= BASE_URL ?>/api/consultas/nueva" method="POST" style="display: none;" novalidate>
        <!-- SEGURIDAD: TOKEN CSRF -->
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <div class="form-group">

            <label for="nombre">NOMBRE</label>
            <input type="text" id="nombre" name="nombre" required value="<?= htmlspecialchars($form_data['nombre'] ?? '') ?>">
            <span class="error-message"></span>
        </div>
        <div class="form-group">
            <label for="apellido">APELLIDO</label>
            <input type="text" id="apellido" name="apellido" required value="<?= htmlspecialchars($form_data['apellido'] ?? '') ?>">
            <span class="error-message"></span>
        </div>
        <div class="form-group">
            <label for="telefono">NUMERO DE TELEFONO (números sin signos ni guiones)</label>
            <input type="tel" id="telefono" name="telefono" required value="<?= htmlspecialchars($form_data['telefono'] ?? '') ?>" pattern="[0-9]{1,12}" maxlength="12" title="Solo números, máximo 12 dígitos">
            <span class="error-message"></span>
        </div>
        
        <!-- Dropdown de Provincias -->
        <div class="form-group">
            <label for="provincia">PROVINCIA</label>
            <select id="provincia" name="provincia_id" required>
                <option value="">SELECCIONA UNA PROVINCIA</option>
                <?php foreach ($provincias as $prov): ?>
                    <option value="<?= htmlspecialchars($prov['id']) ?>" <?= ($form_data['provincia_id'] ?? '') == $prov['id'] ? 'selected' : '' ?>><?= htmlspecialchars($prov['nombre']) ?></option>
                <?php endforeach; ?>
            </select>
            <span class="error-message"></span>
        </div>

        <!-- Dropdown de Localidades -->
        <div class="form-group">
            <label for="localidad">LOCALIDAD</label>
            <select id="localidad" name="localidad_id" required disabled>
                <option value="">SELECCIONA UNA LOCALIDAD</option>
            </select>
            <span class="error-message"></span>
        </div>

        <!-- Dropdown de Categorías -->
        <div class="form-group">
            <label for="categoria">CATEGORIA DE CONSULTA</label>
            <select id="categoria" name="categoria_id" required>
                <option value="">SELECCIONA UNA CATEGORIA</option>
                <?php foreach ($categorias as $cat): ?>
                    <option value="<?= htmlspecialchars($cat['id']) ?>" <?= ($form_data['categoria_id'] ?? '') == $cat['id'] ? 'selected' : '' ?>><?= htmlspecialchars($cat['nombre']) ?></option>
                <?php endforeach; ?>
            </select>
            <span class="error-message"></span>
        </div>

        <!-- Campos específicos para "Accidentes de trabajo" -->
        <div id="campos_accidentes_trabajo" style="display: none;">
            <hr><h3>DETALLES DEL ACCIDENTE DE TRABAJO</h3>
            <div class="form-group">
                <label for="edad_acc">EDAD</label>
                <input type="text" id="edad_acc" name="edad_acc" class="numeric-input" inputmode="numeric" required value="<?= htmlspecialchars($form_data['edad_acc'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="fecha_accidente_acc">FECHA DEL ACCIDENTE</label>
                <input type="date" id="fecha_accidente_acc" name="fecha_accidente_acc" value="<?= htmlspecialchars($form_data['fecha_accidente_acc'] ?? '') ?>" class="modal-input">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="denuncia_art_acc">DENUNCIA EN ART?</label>
                <select id="denuncia_art_acc" name="denuncia_art_acc" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['denuncia_art_acc'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['denuncia_art_acc'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="art_id_acc">TENES ART?</label>
                <select id="art_id_acc" name="art_id_acc" required>
                    <option value="">SELECCIONA UNA ART</option>
                    <?php foreach ($art_empresas as $art): ?>
                        <option value="<?= htmlspecialchars($art['id']) ?>" <?= ($form_data['art_id_acc'] ?? '') == $art['id'] ? 'selected' : '' ?>><?= htmlspecialchars($art['nombre']) ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="sueldo_registrado_acc">SUELDO REGISTRADO?</label>
                <input type="text" id="sueldo_registrado_acc" name="sueldo_registrado_acc" class="numeric-input" inputmode="numeric" required value="<?= htmlspecialchars($form_data['sueldo_registrado_acc'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="alta_art_acc">TENES EL ALTA DE ART?</label>
                <select id="alta_art_acc" name="alta_art_acc" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['alta_art_acc'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['alta_art_acc'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="abogado_previo_acc">TENES YA UN ABOGADO?</label>
                <select id="abogado_previo_acc" name="abogado_previo_acc" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['abogado_previo_acc'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['abogado_previo_acc'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="descripcion_lesion_acc">DESCRIPCION DE LA LESION (max 150 caracteres)</label>
                <textarea id="descripcion_lesion_acc" name="descripcion_lesion_acc" maxlength="150" rows="3" required><?= htmlspecialchars($form_data['descripcion_lesion_acc'] ?? '') ?></textarea>
                <span class="error-message"></span>
            </div>
        </div>

        <!-- Campos específicos para "Despidos" -->
        <div id="campos_despidos" style="display: none;">
            <hr><h3>DETALLES DEL DESPIDO</h3>
            <div class="form-group">
                <label for="lugar_trabajo_provincia">LUGAR DE TRABAJO - PROVINCIA</label>
                <select id="lugar_trabajo_provincia" name="lugar_trabajo_provincia_id" required>
                    <option value="">SELECCIONA UNA PROVINCIA</option>
                    <?php foreach ($provincias as $prov): ?>
                        <option value="<?= htmlspecialchars($prov['id']) ?>" <?= ($form_data['lugar_trabajo_provincia_id'] ?? '') == $prov['id'] ? 'selected' : '' ?>><?= htmlspecialchars($prov['nombre']) ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="lugar_trabajo_localidad">LUGAR DE TRABAJO - LOCALIDAD</label>
                <select id="lugar_trabajo_localidad" name="lugar_trabajo_localidad_id" required disabled>
                    <option value="">SELECCIONA UNA LOCALIDAD</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="fecha_ingreso_desp">FECHA DE INGRESO AL TRABAJO</label>
                <input type="date" id="fecha_ingreso_desp" name="fecha_ingreso_desp" class="modal-input" required value="<?= htmlspecialchars($form_data['fecha_ingreso_desp'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="trabaja_en_blanco">TRABAJAS EN BLANCO?</label>
                <select id="trabaja_en_blanco" name="trabaja_en_blanco" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['trabaja_en_blanco'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['trabaja_en_blanco'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="pagan_en_negro">TE PAGAN ALGO EN NEGRO?</label>
                <select id="pagan_en_negro" name="pagan_en_negro" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['pagan_en_negro'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['pagan_en_negro'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="sueldo_total">SUELDO TOTAL?</label>
                <input type="text" id="sueldo_total" name="sueldo_total" class="numeric-input" inputmode="numeric" required value="<?= htmlspecialchars($form_data['sueldo_total'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="situacion_actual">EN QUE SITUACION ESTAS?</label>
                <select id="situacion_actual" name="situacion_actual" required>
                    <option value="">SELECCIONA</option>
                    <option value="me despidieron" <?= ($form_data['situacion_actual'] ?? '') == 'me despidieron' ? 'selected' : '' ?>>A - ME DESPIDIERON</option>
                    <option value="renuncie" <?= ($form_data['situacion_actual'] ?? '') == 'renuncie' ? 'selected' : '' ?>>B - RENUNCIE</option>
                    <option value="sigo trabajando" <?= ($form_data['situacion_actual'] ?? '') == 'sigo trabajando' ? 'selected' : '' ?>>C - SIGO TRABAJANDO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group" id="forma_despido_group" style="display: none;">
                <label for="forma_despido">SI TE DESPIDIERON COMO LO HICIERON?</label>
                <select id="forma_despido" name="forma_despido" required>
                    <option value="">SELECCIONA</option>
                    <option value="telegrama" <?= ($form_data['forma_despido'] ?? '') == 'telegrama' ? 'selected' : '' ?>>A - TELEGRAMA</option>
                    <option value="presencial" <?= ($form_data['forma_despido'] ?? '') == 'presencial' ? 'selected' : '' ?>>B - PRESENCIAL</option>
                    <option value="whatsapp" <?= ($form_data['forma_despido'] ?? '') == 'whatsapp' ? 'selected' : '' ?>>C - WHATSAPP</option>
                </select>
                <span class="error-message"></span>
            </div>
        </div>

        <div id="campos_enfermedades_profesionales" style="display: none;">
            <hr><h3>DETALLES DE LA ENFERMEDAD PROFESIONAL</h3>
            <div class="form-group">
                <label for="edad_enf">EDAD</label>
                <input type="text" id="edad_enf" name="edad_enf" class="numeric-input" inputmode="numeric" required value="<?= htmlspecialchars($form_data['edad_enf'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="denuncia_art_enf">DENUNCIA EN ART?</label>
                <select id="denuncia_art_enf" name="denuncia_art_enf" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['denuncia_art_enf'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['denuncia_art_enf'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="art_id_enf">TENES ART?</label>
                <select id="art_id_enf" name="art_id_enf" required>
                    <option value="">SELECCIONA UNA ART</option>
                    <?php foreach ($art_empresas as $art): ?>
                        <option value="<?= htmlspecialchars($art['id']) ?>" <?= ($form_data['art_id_enf'] ?? '') == $art['id'] ? 'selected' : '' ?>><?= htmlspecialchars($art['nombre']) ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="sueldo_registrado_enf">SUELDO REGISTRADO?</label>
                <input type="text" id="sueldo_registrado_enf" name="sueldo_registrado_enf" class="numeric-input" inputmode="numeric" required value="<?= htmlspecialchars($form_data['sueldo_registrado_enf'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="alta_art_enf">TENES EL ALTA DE ART?</label>
                <select id="alta_art_enf" name="alta_art_enf" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['alta_art_enf'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['alta_art_enf'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="abogado_previo_enf">TENES YA UN ABOGADO?</label>
                <select id="abogado_previo_enf" name="abogado_previo_enf" required>
                    <option value="">SELECCIONA</option>
                    <option value="SI" <?= ($form_data['abogado_previo_enf'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                    <option value="NO" <?= ($form_data['abogado_previo_enf'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                </select>
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="antiguedad_laboral">ANTIGÜEDAD EN ESE TRABAJO (AÑOS)</label>
                <input type="text" id="antiguedad_laboral" name="antiguedad_laboral" class="numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['antiguedad_laboral'] ?? '') ?>">
                <span class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="descripcion_lesion_enf">DESCRIPCION DE LA ENFERMEDAD (max 150 caracteres)</label>
                <textarea id="descripcion_lesion_enf" name="descripcion_lesion_enf" maxlength="150" rows="3" required><?= htmlspecialchars($form_data['descripcion_lesion_enf'] ?? '') ?></textarea>
                <span class="error-message"></span>
            </div>
        </div>

        <button type="submit">GUARDAR CONSULTA</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-consulta');
    if (form) {
        form.style.display = 'block'; // Mostrar formulario si hay JS
    }
    
    const categoriaSelect = document.getElementById('categoria');
    const camposAccidentes = document.getElementById('campos_accidentes_trabajo');
    const camposDespidos = document.getElementById('campos_despidos');
    const camposEnfermedades = document.getElementById('campos_enfermedades_profesionales');
    const errorSummary = document.getElementById('error-summary');
    const situacionSelect = document.getElementById('situacion_actual');
    const formaDespidoGroup = document.getElementById('forma_despido_group');

    // --- FUNCIONES DE FORMATO DE NÚMEROS ---
    function formatNumber(value) {
        if (!value) return '';
        const cleanValue = String(value).replace(/['\.]/g, '');
        if (isNaN(cleanValue) || cleanValue === '') return '';
        const number = Number(cleanValue);
        return new Intl.NumberFormat('es-AR').format(number).replace(/\./g, "'");
    }

    function unformatNumber(value) {
        return typeof value === 'string' ? value.replace(/['\.]/g, '') : value;
    }

    // --- APLICAR LISTENERS A CAMPOS NUMÉRICOS ---
    const numericInputs = document.querySelectorAll('.numeric-input');
    numericInputs.forEach(input => {
        // Formatear valor inicial si existe (ej. en caso de error de validación)
        if (input.value) {
            input.value = formatNumber(input.value);
        }
        input.addEventListener('input', (e) => {
            // Primero, remover cualquier cosa que no sea número para evitar letras
            let cleanValue = e.target.value.replace(/[^0-9]/g, '');
            // Luego, aplicar el formato de miles
            e.target.value = formatNumber(cleanValue);
        });
    });

    const telefonoInput = document.getElementById('telefono');
    if (telefonoInput) {
        telefonoInput.addEventListener('input', function(e) {
            // Eliminar cualquier caracter que no sea un número
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    }

    categoriaSelect.addEventListener('change', () => {
        const catId = categoriaSelect.value;
        camposAccidentes.style.display = (catId == <?= json_encode($id_accidentes) ?>) ? 'block' : 'none';
        camposDespidos.style.display = (catId == <?= json_encode($id_despidos) ?>) ? 'block' : 'none';
        camposEnfermedades.style.display = (catId == <?= json_encode($id_enfermedades) ?>) ? 'block' : 'none';

        if (catId == <?= json_encode($id_despidos) ?> && situacionSelect) {
            situacionSelect.dispatchEvent(new Event('change'));
        }
    });

    if (situacionSelect && formaDespidoGroup) {
        situacionSelect.addEventListener('change', () => {
            formaDespidoGroup.style.display = (situacionSelect.value === 'me despidieron') ? 'block' : 'none';
        });
    }

    form.addEventListener('submit', (e) => {
        const submitBtn = form.querySelector('button[type="submit"]');
        
        // --- LIMPIAR NÚMEROS ANTES DE VALIDAR Y ENVIAR ---
        numericInputs.forEach(input => {
            if (input.value) {
                input.value = unformatNumber(input.value);
            }
        });

        const errors = [];
        errorSummary.style.display = 'none';
        errorSummary.innerHTML = '';

        const catId = categoriaSelect.value;

        const requiredAlways = [
            {id: 'nombre', label: 'Nombre'},
            {id: 'apellido', label: 'Apellido'},
            {id: 'telefono', label: 'Teléfono'},
            {id: 'provincia', label: 'Provincia'},
            {id: 'localidad', label: 'Localidad'},
            {id: 'categoria', label: 'Categoría'}
        ];

        requiredAlways.forEach(f => {
            const el = document.getElementById(f.id);
            if (!el.value.trim() || (el.tagName === 'SELECT' && el.value === '')) {
                errors.push(`El campo "${f.label}" es obligatorio.`);
            }
        });

        if (catId == <?= json_encode($id_accidentes) ?>) {
            const fields = [
                {id: 'edad_acc', label: 'Edad', min:1, max:99, int:true, required:true},
                {id: 'fecha_accidente_acc', label: 'Fecha del Accidente', required:true},
                {id: 'denuncia_art_acc', label: 'Denuncia en ART', required:true},
                {id: 'art_id_acc', label: 'ART', required:true},
                {id: 'sueldo_registrado_acc', label: 'Sueldo registrado', required:true},
                {id: 'alta_art_acc', label: 'Alta de ART', required:true},
                {id: 'abogado_previo_acc', label: 'Abogado previo', required:true},
                {id: 'descripcion_lesion_acc', label: 'Descripción lesión', maxLen:150, required:true}
            ];
            validateDynamic(fields, errors);
            
            const sueldoInput = document.getElementById('sueldo_registrado_acc');
            if (sueldoInput && sueldoInput.value.trim() !== '') {
                const sueldo = parseFloat(sueldoInput.value);
                if (isNaN(sueldo)) {
                    errors.push('"Sueldo registrado" debe ser un número decimal válido.');
                }
            }
        }
        else if (catId == <?= json_encode($id_enfermedades) ?>) {
            const fields = [
                {id: 'edad_enf', label: 'Edad', min:1, max:99, int:true, required:true},
                {id: 'denuncia_art_enf', label: 'Denuncia en ART', required:true},
                {id: 'art_id_enf', label: 'ART', required:true},
                {id: 'sueldo_registrado_enf', label: 'Sueldo registrado', required:true},
                {id: 'alta_art_enf', label: 'Alta de ART', required:true},
                {id: 'abogado_previo_enf', label: 'Abogado previo', required:true},
                {id: 'antiguedad_laboral', label: 'Antigüedad', min:0, max:99, int:true, required:true},
                {id: 'descripcion_lesion_enf', label: 'Descripción lesión', maxLen:150, required:true}
            ];
            validateDynamic(fields, errors);

            const sueldoInput = document.getElementById('sueldo_registrado_enf');
            if (sueldoInput && sueldoInput.value.trim() !== '') {
                const sueldo = parseFloat(sueldoInput.value);
                if (isNaN(sueldo)) {
                    errors.push('"Sueldo registrado" debe ser un número decimal válido.');
                }
            }
        }
        else if (catId == <?= json_encode($id_despidos) ?>) {
            const fields = [
                {id: 'lugar_trabajo_provincia', label: 'Provincia trabajo', required:true},
                {id: 'lugar_trabajo_localidad', label: 'Localidad trabajo', required:true},
                {id: 'fecha_ingreso_desp', label: 'Fecha de ingreso', required:true},
                {id: 'trabaja_en_blanco', label: 'Trabaja en blanco', required:true},
                {id: 'pagan_en_negro', label: 'Pagan en negro', required:true},
                {id: 'sueldo_total', label: 'Sueldo total', required:true},
                {id: 'situacion_actual', label: 'Situación actual', required:true}
            ];
            validateDynamic(fields, errors);

            if (situacionSelect?.value === 'me despidieron') {
                const forma = document.getElementById('forma_despido');
                if (!forma?.value || forma.value === '') {
                    errors.push('El campo "Forma de Despido" es obligatorio cuando te despidieron.');
                }
            }

            const sueldoInput = document.getElementById('sueldo_total');
            if (sueldoInput && sueldoInput.value.trim() !== '') {
                const sueldo = parseFloat(sueldoInput.value);
                if (isNaN(sueldo)) {
                    errors.push('"Sueldo total" debe ser un número decimal válido.');
                }
            }
        }

        if (errors.length > 0) {
            e.preventDefault();
            // Re-formatear los números para que el usuario los vea bien, incluso si hay un error de validación
            numericInputs.forEach(input => {
                if(input.value) {
                    input.value = formatNumber(input.value);
                }
            });
            errorSummary.innerHTML = '<ul><li>' + errors.join('</li><li>') + '</li></ul>';
            errorSummary.style.display = 'block';
            window.scrollTo({top: 0, behavior: 'smooth'});
        } else {
            // SI NO HAY ERRORES, DESHABILITAR BOTON PARA EVITAR DOBLE ENVIO
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'ENVIANDO...';
            submitBtn.style.backgroundColor = '#666';
            submitBtn.style.cursor = 'not-allowed';
        }
    });

    function validateDynamic(fields, errors) {
        fields.forEach(f => {
            const el = document.getElementById(f.id);
            if (!el) return;
            const val = el.value.trim();

            if (f.required && !val) {
                errors.push(`El campo "${f.label}" es obligatorio.`);
                return;
            }

            if (el.classList.contains('numeric-input') || el.type === 'number') {
                const num = f.int ? parseInt(val, 10) : parseFloat(val);
                if (isNaN(num)) {
                    if (val !== '') errors.push(`"${f.label}" debe ser un número válido.`);
                } else {
                    if (f.min !== undefined && num < f.min) errors.push(`"${f.label}" debe ser ≥ ${f.min}.`);
                    if (f.max !== undefined && num > f.max) errors.push(`"${f.label}" debe ser ≤ ${f.max}.`);
                }
            }
            if (f.maxLen && val.length > f.maxLen) {
                errors.push(`"${f.label}" no debe exceder ${f.maxLen} caracteres.`);
            }
        });
    }

    const provinciaSelect = document.getElementById('provincia');
    const localidadSelect = document.getElementById('localidad');
    provinciaSelect.addEventListener('change', function() {
        const provinciaId = this.value;
        localidadSelect.innerHTML = '<option value="">CARGANDO LOCALIDADES...</option>';
        localidadSelect.disabled = true;

        if (provinciaId) {
            const provinciaNombre = provinciaSelect.options[provinciaSelect.selectedIndex].text;
            // RUTA DE API ACTUALIZADA
            fetch(`<?= BASE_URL ?>/api/localidades?action=get_localidades&provincia_id=${provinciaId}`)
                .then(response => response.json())
                .then(data => {
                    localidadSelect.innerHTML = '<option value="">SELECCIONA UNA LOCALIDAD</option>';
                    if (data.success && data.localidades.length > 0) {
                        data.localidades.forEach(localidad => {
                            const option = document.createElement('option');
                            option.value = localidad.id;
                            option.textContent = localidad.nombre;
                            localidadSelect.appendChild(option);
                        });
                    } else { // Caso de éxito pero sin localidades, o data.success === false
                        // Si no hay localidades o hubo un error en la API, usar la provincia como localidad por defecto
                        const defaultOption = document.createElement('option');
                        defaultOption.value = provinciaId;
                        defaultOption.textContent = provinciaNombre;
                        localidadSelect.appendChild(defaultOption);
                        localidadSelect.selectedIndex = 1; // Seleccionar la opción por defecto
                    }
                    localidadSelect.disabled = false;
                })
                .catch(error => {
                    console.error('ERROR AL CARGAR LOCALIDADES:', error);
                    localidadSelect.innerHTML = '<option value="">ERROR AL CARGAR</option>';
                    localidadSelect.disabled = false;
                });
        } else {
            localidadSelect.innerHTML = '<option value="">SELECCIONA UNA LOCALIDAD</option>';
            localidadSelect.disabled = false;
        }
    });

    const lugarTrabajoProvinciaSelect = document.getElementById('lugar_trabajo_provincia');
    const lugarTrabajoLocalidadSelect = document.getElementById('lugar_trabajo_localidad');
    lugarTrabajoProvinciaSelect.addEventListener('change', function() {
        const provinciaId = this.value;
        lugarTrabajoLocalidadSelect.innerHTML = '<option value="">CARGANDO LOCALIDADES...</option>';
        lugarTrabajoLocalidadSelect.disabled = true;

        if (provinciaId) {
            const provinciaNombre = lugarTrabajoProvinciaSelect.options[lugarTrabajoProvinciaSelect.selectedIndex].text;
            // RUTA DE API ACTUALIZADA
            fetch(`<?= BASE_URL ?>/api/localidades?action=get_localidades&provincia_id=${provinciaId}`)
                .then(response => response.json())
                .then(data => {
                    lugarTrabajoLocalidadSelect.innerHTML = '<option value="">SELECCIONA UNA LOCALIDAD</option>';
                    if (data.success && data.localidades.length > 0) {
                        data.localidades.forEach(localidad => {
                            const option = document.createElement('option');
                            option.value = localidad.id;
                            option.textContent = localidad.nombre;
                            lugarTrabajoLocalidadSelect.appendChild(option);
                        });
                    } else { // Caso de éxito pero sin localidades, o data.success === false
                        // Si no hay localidades o hubo un error en la API, usar la provincia como localidad por defecto
                        const defaultOption = document.createElement('option');
                        defaultOption.value = provinciaId;
                        defaultOption.textContent = provinciaNombre;
                        lugarTrabajoLocalidadSelect.appendChild(defaultOption);
                        lugarTrabajoLocalidadSelect.selectedIndex = 1;
                    }
                    lugarTrabajoLocalidadSelect.disabled = false;
                })
                .catch(error => {
                    console.error('ERROR AL CARGAR LOCALIDADES DE LUGAR DE TRABAJO:', error);
                    lugarTrabajoLocalidadSelect.innerHTML = '<option value="">ERROR AL CARGAR</option>';
                    lugarTrabajoLocalidadSelect.disabled = false;
                });
        } else {
            lugarTrabajoLocalidadSelect.innerHTML = '<option value="">SELECCIONA UNA LOCALIDAD</option>';
            lugarTrabajoLocalidadSelect.disabled = false;
        }
    });

    categoriaSelect.dispatchEvent(new Event('change'));
});
</script>
