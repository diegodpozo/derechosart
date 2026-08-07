<?php
/**
 * VISTA: CONTACTO COMPLETO CON FORMULARIO DINAMICO
 * REPLICA EXACTAMENTE LA LOGICA DEL FORMULARIO ORIGINAL
 */

$form_errors = $_SESSION['form_errors'] ?? null;
$form_success_message = $_SESSION['form_success_message'] ?? null;
$form_data = $_SESSION['form_data'] ?? [];

// El unset lo moveremos al final de la ejecución de la vista
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Consulta Legal <span class="subrayado-amarillo"><strong>Gratuita</strong></span></h1>
            <p class="subtitulo-hero">Iniciá tu consulta con abogados de ART ahora. Nuestro equipo analizará tu caso sin compromiso.</p>
        </section>
    </section>

    <!-- FORMULARIO CENTRADO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <article class="info-bloque b-none bl-8-amarillo" style="max-width: 43.75rem; margin: 0 auto;">
                <h2 class="mb-30">Contanos <span class="subrayado-amarillo">tu caso de accidente o despido</span></h2>
                
                <!-- MENSAJES DE ESTADO -->
                <article id="error-summary" style="display: <?= $form_errors ? 'block' : 'none' ?>; background-color: #fee2e2; color: #b91c1c; border: 0.0625rem solid #f87171; padding: 0.9375rem; border-radius: 0.625rem; margin-bottom: 1.25rem;" class="fs-09">
                    <?= $form_errors ? '<b>ERROR:</b> ' . htmlspecialchars($form_errors) : '' ?>
                </article>

                <article id="success-message" style="display: <?= $form_success_message ? 'block' : 'none' ?>; background-color: #dcfce7; color: #15803d; border: 0.0625rem solid #4ade80; padding: 0.9375rem; border-radius: 0.625rem; margin-bottom: 1.25rem;" class="fs-09">
                    <?= $form_success_message ? '<b>ÉXITO:</b> ' . htmlspecialchars($form_success_message) : '' ?>
                </article>

                <?php if ($form_success_message): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        if (typeof reportConversionForm === 'function') { reportConversionForm(); }
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            event: "generate_lead",
                            lead_type: "form"
                        });
                    });
                </script>
                <?php endif; ?>

                <form id="form-consulta" action="<?= BASE_URL ?>api/consultas/nueva" method="POST" novalidate class="flex-column gap-15">
                    
                    <!-- CAMPOS BASICOS -->
                    <section class="flex-between gap-15">
                        <article class="form-group flex-1">
                            <label for="nombre" class="fw-700 fs-08 mb-5 display-block">NOMBRE</label>
                            <input type="text" id="nombre" name="nombre" class="input-fiel" required value="<?= htmlspecialchars($form_data['nombre'] ?? '') ?>">
                            <span class="error-message"></span>
                        </article>
                        <article class="form-group flex-1">
                            <label for="apellido" class="fw-700 fs-08 mb-5 display-block">APELLIDO</label>
                            <input type="text" id="apellido" name="apellido" class="input-fiel" required value="<?= htmlspecialchars($form_data['apellido'] ?? '') ?>">
                            <span class="error-message"></span>
                        </article>
                    </section>

                    <article class="form-group">
                        <label for="telefono" class="fw-700 fs-08 mb-5 display-block">TELÉFONO / WHATSAPP (solo números)</label>
                        <input type="tel" id="telefono" name="telefono" class="input-fiel" required placeholder="Ej: 1124786144" value="<?= htmlspecialchars($form_data['telefono'] ?? '') ?>" maxlength="12">
                        <span class="error-message"></span>
                    </article>

                    <section class="flex-between gap-15">
                        <article class="form-group flex-1">
                            <label for="provincia" class="fw-700 fs-08 mb-5 display-block">PROVINCIA</label>
                            <select id="provincia" name="provincia_id" class="input-fiel" required>
                                <option value="">SELECCIONÁ</option>
                                <?php foreach ($provincias as $prov): ?>
                                    <option value="<?= $prov['id'] ?>" <?= ($form_data['provincia_id'] ?? '') == $prov['id'] ? 'selected' : '' ?>><?= $prov['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="error-message" ></span>
                        </article>
                        <article class="form-group flex-1">
                            <label for="localidad" class="fw-700 fs-08 mb-5 display-block">LOCALIDAD</label>
                            <select id="localidad" name="localidad_id" class="input-fiel" required disabled>
                                <option value="">SELECCIONÁ</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>
                    </section>

                    <article class="form-group">
                        <label for="categoria" class="fw-700 fs-08 mb-5 display-block">TIPO DE CONSULTA</label>
                        <select id="categoria" name="categoria_id" class="input-fiel" required>
                            <option value="">¿POR QUÉ NOS CONTACTÁS?</option>
                            <?php foreach ($categorias as $cat): ?>
                                <option value="<?= $cat['id'] ?>" <?= ($form_data['categoria_id'] ?? '') == $cat['id'] ? 'selected' : '' ?>><?= $cat['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="error-message" ></span>
                    </article>

                    <!-- CAMPOS DINAMICOS: ACCIDENTES DE TRABAJO -->
                    <div id="campos_accidentes_trabajo" style="display: none;" class="bg-gris p-20 border-radius-15">
                        <h3 class="mb-15 fs-09" style="border-bottom: 0.0625rem solid #ccc; padding-bottom: 0.625rem; text-align: center;"><span class="subrayado-amarillo"><strong>Detalles del Accidente de Trabajo</strong></span></h3>
                        
                        <article class="form-group">
                            <label for="edad_acc" class="fw-700 fs-08 mb-5 display-block">EDAD</label>
                            <input type="text" id="edad_acc" name="edad_acc" class="input-fiel numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['edad_acc'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="fecha_accidente_acc" class="fw-700 fs-08 mb-5 display-block">FECHA DEL ACCIDENTE</label>
                            <input type="date" id="fecha_accidente_acc" name="fecha_accidente_acc" class="input-fiel" value="<?= htmlspecialchars($form_data['fecha_accidente_acc'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="denuncia_art_acc" class="fw-700 fs-08 mb-5 display-block">¿HICISTE DENUNCIA EN ART?</label>
                            <select id="denuncia_art_acc" name="denuncia_art_acc" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['denuncia_art_acc'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['denuncia_art_acc'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="art_id_acc" class="fw-700 fs-08 mb-5 display-block">¿QUÉ ART TENÉS?</label>
                            <select id="art_id_acc" name="art_id_acc" class="input-fiel">
                                <option value="">SELECCIONÁ UNA ART</option>
                                <?php foreach ($art_empresas as $art): ?>
                                    <option value="<?= $art['id'] ?>" <?= ($form_data['art_id_acc'] ?? '') == $art['id'] ? 'selected' : '' ?>><?= $art['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="sueldo_registrado_acc" class="fw-700 fs-08 mb-5 display-block">SUELDO REGISTRADO (ARS)</label>
                            <input type="text" id="sueldo_registrado_acc" name="sueldo_registrado_acc" class="input-fiel numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['sueldo_registrado_acc'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="alta_art_acc" class="fw-700 fs-08 mb-5 display-block">¿TENÉS EL ALTA DE LA ART?</label>
                            <select id="alta_art_acc" name="alta_art_acc" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['alta_art_acc'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['alta_art_acc'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="abogado_previo_acc" class="fw-700 fs-08 mb-5 display-block">¿YA TENÉS UN ABOGADO?</label>
                            <select id="abogado_previo_acc" name="abogado_previo_acc" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['abogado_previo_acc'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['abogado_previo_acc'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="descripcion_lesion_acc" class="fw-700 fs-08 mb-5 display-block">¿QUÉ LESIÓN SUFRISTE? (máx 150 caracteres)</label>
                            <textarea id="descripcion_lesion_acc" name="descripcion_lesion_acc" class="input-fiel" maxlength="150" rows="3"><?= htmlspecialchars($form_data['descripcion_lesion_acc'] ?? '') ?></textarea>
                            <span class="error-message" ></span>
                        </article>
                    </div>

                    <!-- CAMPOS DINAMICOS: DESPIDOS -->
                    <div id="campos_despidos" style="display: none;" class="bg-gris p-20 border-radius-15">
                        <h3 class="mb-15 fs-09" style="border-bottom: 0.0625rem solid #ccc; padding-bottom: 0.625rem; text-align: center;"><span class="subrayado-amarillo"><strong>Detalles del Despido</strong></span></h3>

                        <section class="flex-between gap-15">
                            <article class="form-group flex-1">
                                <label for="lugar_trabajo_provincia" class="fw-700 fs-08 mb-5 display-block">PROVINCIA (Lugar de Trabajo)</label>
                                <select id="lugar_trabajo_provincia" name="lugar_trabajo_provincia_id" class="input-fiel">
                                    <option value="">SELECCIONÁ</option>
                                    <?php foreach ($provincias as $prov): ?>
                                        <option value="<?= $prov['id'] ?>" <?= ($form_data['lugar_trabajo_provincia_id'] ?? '') == $prov['id'] ? 'selected' : '' ?>><?= $prov['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="error-message" ></span>
                            </article>
                            <article class="form-group flex-1">
                                <label for="lugar_trabajo_localidad" class="fw-700 fs-08 mb-5 display-block">LOCALIDAD (Lugar de Trabajo)</label>
                                <select id="lugar_trabajo_localidad" name="lugar_trabajo_localidad_id" class="input-fiel" disabled>
                                    <option value="">SELECCIONÁ</option>
                                </select>
                                <span class="error-message" ></span>
                            </article>
                        </section>

                        <article class="form-group">
                            <label for="fecha_ingreso_desp" class="fw-700 fs-08 mb-5 display-block">FECHA DE INGRESO AL TRABAJO</label>
                            <input type="date" id="fecha_ingreso_desp" name="fecha_ingreso_desp" class="input-fiel" value="<?= htmlspecialchars($form_data['fecha_ingreso_desp'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="trabaja_en_blanco" class="fw-700 fs-08 mb-5 display-block">¿TRABAJÁS EN BLANCO?</label>
                            <select id="trabaja_en_blanco" name="trabaja_en_blanco" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['trabaja_en_blanco'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['trabaja_en_blanco'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="pagan_en_negro" class="fw-700 fs-08 mb-5 display-block">¿TE PAGAN ALGO EN NEGRO?</label>
                            <select id="pagan_en_negro" name="pagan_en_negro" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['pagan_en_negro'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['pagan_en_negro'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="sueldo_total" class="fw-700 fs-08 mb-5 display-block">SUELDO TOTAL (ARS)</label>
                            <input type="text" id="sueldo_total" name="sueldo_total" class="input-fiel numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['sueldo_total'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="situacion_actual" class="fw-700 fs-08 mb-5 display-block">¿EN QUÉ SITUACIÓN ESTÁS?</label>
                            <select id="situacion_actual" name="situacion_actual" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="me despidieron" <?= ($form_data['situacion_actual'] ?? '') == 'me despidieron' ? 'selected' : '' ?>>ME DESPIDIERON</option>
                                <option value="renuncie" <?= ($form_data['situacion_actual'] ?? '') == 'renuncie' ? 'selected' : '' ?>>RENUNCIÉ</option>
                                <option value="sigo trabajando" <?= ($form_data['situacion_actual'] ?? '') == 'sigo trabajando' ? 'selected' : '' ?>>SIGO TRABAJANDO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group" id="forma_despido_group" style="display: none;">
                            <label for="forma_despido" class="fw-700 fs-08 mb-5 display-block">¿CÓMO FUE EL DESPIDO?</label>
                            <select id="forma_despido" name="forma_despido" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="telegrama" <?= ($form_data['forma_despido'] ?? '') == 'telegrama' ? 'selected' : '' ?>>TELEGRAMA</option>
                                <option value="presencial" <?= ($form_data['forma_despido'] ?? '') == 'presencial' ? 'selected' : '' ?>>PRESENCIAL</option>
                                <option value="whatsapp" <?= ($form_data['forma_despido'] ?? '') == 'whatsapp' ? 'selected' : '' ?>>WHATSAPP</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>
                    </div>

                    <!-- CAMPOS DINAMICOS: ENFERMEDADES PROFESIONALES -->
                    <div id="campos_enfermedades_profesionales" style="display: none;" class="bg-gris p-20 border-radius-15">
                        <h3 class="mb-15 fs-09" style="border-bottom: 0.0625rem solid #ccc; padding-bottom: 0.625rem; text-align: center;"><span class="subrayado-amarillo"><strong>Detalles de la Enfermedad Profesional</strong></span></h3>

                        <article class="form-group">
                            <label for="edad_enf" class="fw-700 fs-08 mb-5 display-block">EDAD</label>
                            <input type="text" id="edad_enf" name="edad_enf" class="input-fiel numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['edad_enf'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="denuncia_art_enf" class="fw-700 fs-08 mb-5 display-block">¿HICISTE DENUNCIA EN ART?</label>
                            <select id="denuncia_art_enf" name="denuncia_art_enf" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['denuncia_art_enf'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['denuncia_art_enf'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="art_id_enf" class="fw-700 fs-08 mb-5 display-block">¿QUÉ ART TENÉS?</label>
                            <select id="art_id_enf" name="art_id_enf" class="input-fiel">
                                <option value="">SELECCIONÁ UNA ART</option>
                                <?php foreach ($art_empresas as $art): ?>
                                    <option value="<?= $art['id'] ?>" <?= ($form_data['art_id_enf'] ?? '') == $art['id'] ? 'selected' : '' ?>><?= $art['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="sueldo_registrado_enf" class="fw-700 fs-08 mb-5 display-block">SUELDO REGISTRADO (ARS)</label>
                            <input type="text" id="sueldo_registrado_enf" name="sueldo_registrado_enf" class="input-fiel numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['sueldo_registrado_enf'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="alta_art_enf" class="fw-700 fs-08 mb-5 display-block">¿TENÉS EL ALTA DE LA ART?</label>
                            <select id="alta_art_enf" name="alta_art_enf" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['alta_art_enf'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['alta_art_enf'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="abogado_previo_enf" class="fw-700 fs-08 mb-5 display-block">¿YA TENÉS UN ABOGADO?</label>
                            <select id="abogado_previo_enf" name="abogado_previo_enf" class="input-fiel">
                                <option value="">SELECCIONÁ</option>
                                <option value="SI" <?= ($form_data['abogado_previo_enf'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($form_data['abogado_previo_enf'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="antiguedad_laboral" class="fw-700 fs-08 mb-5 display-block">ANTIGÜEDAD EN ESE TRABAJO (AÑOS)</label>
                            <input type="text" id="antiguedad_laboral" name="antiguedad_laboral" class="input-fiel numeric-input" inputmode="numeric" value="<?= htmlspecialchars($form_data['antiguedad_laboral'] ?? '') ?>">
                            <span class="error-message" ></span>
                        </article>

                        <article class="form-group">
                            <label for="descripcion_lesion_enf" class="fw-700 fs-08 mb-5 display-block">¿QUÉ ENFERMEDAD PADECÉS? (máx 150 caracteres)</label>
                            <textarea id="descripcion_lesion_enf" name="descripcion_lesion_enf" class="input-fiel" maxlength="150" rows="3"><?= htmlspecialchars($form_data['descripcion_lesion_enf'] ?? '') ?></textarea>
                            <span class="error-message" ></span>
                        </article>
                    </div>

                    <button type="submit" class="btn btn-amarillo w-100 mt-10">ENVIAR MI CONSULTA</button>
                </form>
            </article>
        </section>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-consulta');
    const provinciaSelect = document.getElementById('provincia');
    const localidadSelect = document.getElementById('localidad');
    const categoriaSelect = document.getElementById('categoria');
    const situacionSelect = document.getElementById('situacion_actual');
    const formaDespidoGroup = document.getElementById('forma_despido_group');
    const camposAcc = document.getElementById('campos_accidentes_trabajo');
    const camposDes = document.getElementById('campos_despidos');
    const camposEnf = document.getElementById('campos_enfermedades_profesionales');
    const lugarTrabajoProvinciaSelect = document.getElementById('lugar_trabajo_provincia');
    const lugarTrabajoLocalidadSelect = document.getElementById('lugar_trabajo_localidad');

    function formatNumber(value) {
        if (!value) return '';
        const cleanValue = String(value).replace(/['\.]/g, '');
        if (isNaN(cleanValue) || cleanValue === '') return '';
        return new Intl.NumberFormat('es-AR').format(Number(cleanValue)).replace(/\./g, "'");
    }
    function unformatNumber(value) { return typeof value === 'string' ? value.replace(/['\.]/g, '') : value; }

    const numericInputs = document.querySelectorAll('.numeric-input');
    numericInputs.forEach(input => {
        if (input.value) input.value = formatNumber(input.value);
        input.addEventListener('input', (e) => {
            let cleanValue = e.target.value.replace(/[^0-9]/g, '');
            e.target.value = formatNumber(cleanValue);
        });
    });

    const telefonoInput = document.getElementById('telefono');
    if (telefonoInput) telefonoInput.addEventListener('input', function(e) { this.value = this.value.replace(/[^0-9]/g, ''); });

    const cargarLocalidades = (pSelect, lSelect) => {
        if (!pSelect || !lSelect) return; // EVITA ERROR SI LOS CAMPOS NO EXISTEN EN LA VISTA
        pSelect.addEventListener('change', function() {
            const provId = this.value;
            lSelect.innerHTML = '<option value="">CARGANDO...</option>';
            lSelect.disabled = true;
            if (provId) {
                fetch(`<?= BASE_URL ?>api/localidades?provincia_id=${provId}`)
                    .then(res => res.json())
                    .then(data => {
                        lSelect.innerHTML = '<option value="">SELECCIONÁ</option>';
                        if (data.success && data.localidades) {
                            data.localidades.forEach(loc => {
                                const opt = document.createElement('option');
                                opt.value = loc.id;
                                opt.textContent = loc.nombre;
                                lSelect.appendChild(opt);
                            });
                        }
                        lSelect.disabled = false;
                    });
            }
        });
    };
    cargarLocalidades(provinciaSelect, localidadSelect);
    cargarLocalidades(lugarTrabajoProvinciaSelect, lugarTrabajoLocalidadSelect);

    categoriaSelect.addEventListener('change', function() {
        const catId = this.value;
        camposAcc.style.display = (catId == '<?= (int)($catIds['id_accidentes'] ?? 0) ?>') ? 'block' : 'none';
        camposDes.style.display = (catId == '<?= (int)($catIds['id_despidos'] ?? 0) ?>') ? 'block' : 'none';
        camposEnf.style.display = (catId == '<?= (int)($catIds['id_enfermedades'] ?? 0) ?>') ? 'block' : 'none';
    });

    if (situacionSelect) situacionSelect.addEventListener('change', function() { formaDespidoGroup.style.display = (this.value === 'me despidieron') ? 'block' : 'none'; });

    // --- LOGICA DE PERSISTENCIA: RESTAURAR ESTADO TRAS RECARGA (ERROR) ---
    function restaurarEstadoFormulario() {
        // 1. Mostrar campos dinamicos segun categoria seleccionada
        if (categoriaSelect.value) {
            categoriaSelect.dispatchEvent(new Event('change'));
        }

        // 2. Mostrar forma de despido si corresponde
        if (situacionSelect && situacionSelect.value === 'me despidieron') {
            formaDespidoGroup.style.display = 'block';
        }

        // 3. Cargar localidades guardadas para Provincia principal
        if (provinciaSelect.value) {
            const provId = provinciaSelect.value;
            const targetLocalidadId = "<?= $form_data['localidad_id'] ?? '' ?>";
            
            fetch(`<?= BASE_URL ?>api/localidades?provincia_id=${provId}`)
                .then(res => res.json())
                .then(data => {
                    localidadSelect.innerHTML = '<option value="">SELECCIONÁ</option>';
                    if (data.success && data.localidades) {
                        data.localidades.forEach(loc => {
                            const opt = document.createElement('option');
                            opt.value = loc.id;
                            opt.textContent = loc.nombre;
                            if (loc.id == targetLocalidadId) opt.selected = true;
                            localidadSelect.appendChild(opt);
                        });
                        localidadSelect.disabled = false;
                    }
                });
        }

        // 4. Cargar localidades guardadas para Lugar de Trabajo (Despidos)
        if (lugarTrabajoProvinciaSelect && lugarTrabajoProvinciaSelect.value) {
            const provId = lugarTrabajoProvinciaSelect.value;
            const targetLocalidadId = "<?= $form_data['lugar_trabajo_localidad_id'] ?? '' ?>";
            
            fetch(`<?= BASE_URL ?>api/localidades?provincia_id=${provId}`)
                .then(res => res.json())
                .then(data => {
                    lugarTrabajoLocalidadSelect.innerHTML = '<option value="">SELECCIONÁ</option>';
                    if (data.success && data.localidades) {
                        data.localidades.forEach(loc => {
                            const opt = document.createElement('option');
                            opt.value = loc.id;
                            opt.textContent = loc.nombre;
                            if (loc.id == targetLocalidadId) opt.selected = true;
                            lugarTrabajoLocalidadSelect.appendChild(opt);
                        });
                        lugarTrabajoLocalidadSelect.disabled = false;
                    }
                });
        }
    }

    // EJECUTAR RESTAURACION
    restaurarEstadoFormulario();

    // VARIABLE DE CONTROL PARA EVITAR ENVIOS MULTIPLES
    let isSubmitting = false;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // SI YA SE ESTA ENVIANDO, NO HACER NADA
        if (isSubmitting) return;

        const errors = [];
        const errorSummary = document.getElementById('error-summary');
        const successMessage = document.getElementById('success-message');
        
        // LIMPIAR MENSAJES PREVIOS
        errorSummary.style.display = 'none';
        if (successMessage) successMessage.style.display = 'none';

        numericInputs.forEach(input => { if (input.value) input.value = unformatNumber(input.value); });

        const requiredAlways = [{id: 'nombre', label: 'Nombre'}, {id: 'apellido', label: 'Apellido'}, {id: 'telefono', label: 'Teléfono'}, {id: 'provincia', label: 'Provincia'}, {id: 'localidad', label: 'Localidad'}, {id: 'categoria', label: 'Categoría'}];
        requiredAlways.forEach(f => {
            const el = document.getElementById(f.id);
            if (!el && f.id === 'localidad') return; // SALTAR SI LOCALIDAD NO ESTA CARGADA AUN
            if (!el || !el.value.trim()) errors.push(`El campo "${f.label}" es obligatorio.`);
        });

        // --- VALIDACION ESPECIFICA POR CATEGORIA (CLIENTE) ---
        const catId = categoriaSelect.value;
        if (catId == '<?= (int)($catIds['id_accidentes'] ?? 0) ?>') {
            const fields = [
                {id: 'edad_acc', label: 'Edad'},
                {id: 'fecha_accidente_acc', label: 'Fecha del Accidente'},
                {id: 'denuncia_art_acc', label: 'Denuncia ART'},
                {id: 'art_id_acc', label: 'ART'},
                {id: 'sueldo_registrado_acc', label: 'Sueldo'},
                {id: 'alta_art_acc', label: 'Alta ART'},
                {id: 'abogado_previo_acc', label: 'Abogado Previo'},
                {id: 'descripcion_lesion_acc', label: 'Descripción de Lesión'}
            ];
            fields.forEach(f => {
                const el = document.getElementById(f.id);
                if (!el || !el.value.trim()) errors.push(`Accidentes: El campo "${f.label}" es obligatorio.`);
            });
        } else if (catId == '<?= (int)($catIds['id_despidos'] ?? 0) ?>') {
            const fields = [
                {id: 'lugar_trabajo_provincia', label: 'Provincia de Trabajo'},
                {id: 'lugar_trabajo_localidad', label: 'Localidad de Trabajo'},
                {id: 'fecha_ingreso_desp', label: 'Fecha de Ingreso'},
                {id: 'trabaja_en_blanco', label: 'Trabajo en Blanco'},
                {id: 'pagan_en_negro', label: 'Pagos en Negro'},
                {id: 'sueldo_total', label: 'Sueldo Total'},
                {id: 'situacion_actual', label: 'Situación Actual'}
            ];
            fields.forEach(f => {
                const el = document.getElementById(f.id);
                if (!el || !el.value.trim()) errors.push(`Despidos: El campo "${f.label}" es obligatorio.`);
            });
            if (situacionSelect.value === 'me despidieron' && !document.getElementById('forma_despido').value.trim()) {
                errors.push('Despidos: Debés indicar cómo fue el despido.');
            }
        } else if (catId == '<?= (int)($catIds['id_enfermedades'] ?? 0) ?>') {
            const fields = [
                {id: 'edad_enf', label: 'Edad'},
                {id: 'denuncia_art_enf', label: 'Denuncia ART'},
                {id: 'art_id_enf', label: 'ART'},
                {id: 'sueldo_registrado_enf', label: 'Sueldo'},
                {id: 'alta_art_enf', label: 'Alta ART'},
                {id: 'abogado_previo_enf', label: 'Abogado Previo'},
                {id: 'antiguedad_laboral', label: 'Antigüedad Laboral'},
                {id: 'descripcion_lesion_enf', label: 'Enfermedad'}
            ];
            fields.forEach(f => {
                const el = document.getElementById(f.id);
                if (!el || !el.value.trim()) errors.push(`Enfermedades: El campo "${f.label}" es obligatorio.`);
            });
        }

        if (errors.length > 0) {
            numericInputs.forEach(input => { if(input.value) input.value = formatNumber(input.value); });
            errorSummary.innerHTML = '<ul style="margin: 0; padding-left: 1.25rem;"><li>' + errors.join('</li><li>') + '</li></ul>';
            errorSummary.style.display = 'block';
            window.scrollTo({top: 0, behavior: 'smooth'});
        } else {
            isSubmitting = true; // ACTIVAR BLOQUEO
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'ENVIANDO...';
            form.submit();
        }
    });
});
</script>

<?php
// LIMPIAR VARIABLES DE SESION AL FINAL PARA QUE NO PERSISTAN EN RECARGAS MANUALES
unset($_SESSION['form_errors'], $_SESSION['form_success_message'], $_SESSION['form_data']);
?>
