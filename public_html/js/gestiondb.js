document.addEventListener('DOMContentLoaded', function () {
    // --- 1. PERSISTENCIA DE SCROLL AL ORDENAR (EJECUTAR PRIMERO) ---
    const tablaContainer = document.querySelector('.tabla-excel-container');
    const savedScrollLeft = sessionStorage.getItem('tablaScrollLeft');
    const savedScrollTop = sessionStorage.getItem('tablaScrollTop');
    
    if (tablaContainer && savedScrollLeft !== null) {
        tablaContainer.scrollLeft = parseInt(savedScrollLeft);
        tablaContainer.scrollTop = parseInt(savedScrollTop);
        sessionStorage.removeItem('tablaScrollLeft');
        sessionStorage.removeItem('tablaScrollTop');
    }

    document.querySelectorAll('.tabla-excel th a').forEach(link => {
        link.addEventListener('click', () => {
            if (tablaContainer) {
                sessionStorage.setItem('tablaScrollLeft', tablaContainer.scrollLeft);
                sessionStorage.setItem('tablaScrollTop', tablaContainer.scrollTop);
            }
        });
    });

    const contextMenu = document.getElementById('contextMenu');
    const notification = document.getElementById('notification');
    const modal = document.getElementById('modalDetalles');
    const modalTitulo = document.getElementById('modalTitulo');
    const contenidoModal = document.getElementById('contenidoModal');
    const formModal = document.getElementById('formModal');
    
    let currentRowData = null;

    // --- NOTIFICACIONES ---
    function mostrarNotificacion(mensaje, tipo) {
        if (!notification) return;
        notification.textContent = mensaje;
        notification.className = `notification ${tipo}`;
        notification.style.display = 'block';
        setTimeout(() => { notification.style.display = 'none'; }, 3000);
    }

    function mostrarNotificacionPersistente(mensaje, tipo) {
        if (!notification) return;
        notification.textContent = mensaje;
        notification.className = `notification ${tipo}`;
        notification.style.display = 'block';
    }

    // --- FUNCIONES PARA REFRESCAR E INYECTAR CSRF ---
    async function refreshCsrfToken() {
        try {
            const r = await fetch(`${BASE_API_URL.replace('/api','')}/api/csrf-refresh`, { credentials: 'same-origin' });
            if (!r.ok) return false;
            const j = await r.json();
            if (j && j.csrf_token) {
                window.CSRF_TOKEN = j.csrf_token;
                return true;
            }
        } catch (e) {
            console.error('Error refreshing CSRF token', e);
        }
        return false;
    }

    // --- FETCH WRAPPER QUE INYECTA CSRF Y MANEJA 403 ---
    function fetchWithCsrf(url, options = {}) {
        options = options || {};
        options.headers = options.headers || {};
        // Añadir token si no está presente
        if (!options.headers['X-CSRF-TOKEN']) {
            if (window.CSRF_TOKEN) {
                options.headers['X-CSRF-TOKEN'] = window.CSRF_TOKEN;
            } else {
                // intentar refrescar token antes de la llamada
                return refreshCsrfToken().then(ok => {
                    if (ok && window.CSRF_TOKEN) {
                        options.headers['X-CSRF-TOKEN'] = window.CSRF_TOKEN;
                    }
                    return fetch(url, options).then(processFetchResponse);
                });
            }
        }
        return fetch(url, options).then(processFetchResponse);

        function processFetchResponse(response) {
            if (response.status === 403) {
                // Intento CSRF fallido: mostrar notificación y registrar en consola
                response.json().then(json => {
                    const msg = (json && json.message) ? json.message : 'ERROR DE SEGURIDAD: TOKEN CSRF INVALIDO.';
                    mostrarNotificacion(msg, 'error');
                }).catch(() => {
                    mostrarNotificacion('ERROR DE SEGURIDAD: TOKEN CSRF INVALIDO.', 'error');
                });
                throw new Error('CSRF');
            }
            return response;
        }
    }

    // --- CÍRCULO LEÍDO ---
    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('circulo-leido')) {
            const consultaId = e.target.dataset.id;
            fetchWithCsrf(`${BASE_API_URL}/consultas/toggle-leido`, {
                method: 'POST',
                headers: { 
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ id: consultaId }),
            })
            .then(r => r.json())
            .then(result => {
                if (result.success) {
                    e.target.classList.toggle('leido-rojo', !result.new_status);
                    e.target.classList.toggle('leido-verde', !!result.new_status);
                    mostrarNotificacion('ESTADO ACTUALIZADO.', 'success');
                }
            }).catch(err=>{ if (err.message !== 'CSRF') console.error(err); });
        }
    });

    // --- CLIC DERECHO (ASIGNACIÓN) ---
    document.querySelectorAll('tbody tr').forEach(row => {
        row.addEventListener('contextmenu', function (e) {
            e.preventDefault();
            currentRowData = getClientDataFromRow(this);
            
            const menu = document.getElementById('contextMenu');
            const optionsList = document.getElementById('contextMenuOptions');
            
            if (menu && optionsList) {
                // Dejar la opción de eliminar que ya está en el HTML
                optionsList.innerHTML = '<li id="deleteOption">🗑️ ELIMINAR CLIENTE</li>';
                
                const rolActual = parseInt(typeof USER_ROL !== 'undefined' ? USER_ROL : 0);
                if (rolActual === 1 && typeof LISTA_USUARIOS !== 'undefined' && LISTA_USUARIOS.length > 0) {
                    LISTA_USUARIOS.forEach(u => {
                        const uId = u.id || u.ID;
                        const uNombre = u.nombre_usuario || u.NOMBRE_USUARIO || 'USUARIO';
                        if (String(uId) !== String(currentRowData.asignadoA)) {
                            const asignLi = document.createElement('li');
                            asignLi.className = 'assign-option';
                            asignLi.dataset.usuarioId = uId;
                            asignLi.innerHTML = `👤 PARA ${uNombre.toUpperCase()}`;
                            optionsList.appendChild(asignLi);
                        }
                    });
                }

                menu.style.display = 'block';
                menu.style.left = `${e.pageX}px`;
                menu.style.top = `${e.pageY}px`;
            }
        });
    });

    document.addEventListener('click', () => { if (contextMenu) contextMenu.style.display = 'none'; });

    // --- DOBLE CLIC (ABRIR FICHA) ---
    document.querySelectorAll('tbody tr').forEach(row => {
        row.addEventListener('dblclick', function () {
            const rowData = getClientDataFromRow(this);
            fetch(`${BASE_API_URL}/datos-cliente?id=${encodeURIComponent(rowData.id)}`)
                .then(r => r.json())
                .then(result => {
                    currentRowData = (result.success && result.data) ? apiResponseToCliente(result.data) : rowData;
                    mostrarDatosEnModal(currentRowData);
                });
        });
    });

    // --- EVENTOS DE BOTONES ---
    document.addEventListener('click', function(e) {
        if (e.target && e.target.id === 'btnEditarModal') mostrarFormularioEdicion(currentRowData);
        if (e.target && e.target.id === 'btnGuardarModal') guardarCambiosCliente();
        if (e.target && e.target.id === 'btnCancelarModal') mostrarDatosEnModal(currentRowData);
        if (e.target && e.target.id === 'btnEliminarModal') { if (confirm('¿ESTAS SEGURO DE ELIMINAR ESTA CONSULTA?')) eliminarConsulta(currentRowData.id); }
        if (e.target && e.target.id === 'btnRestaurarModal') { if (confirm('¿ESTAS SEGURO DE RESTAURAR ESTA CONSULTA?')) restaurarConsulta(currentRowData.id); }
        
        // CIERRE GENERAL DE MODALES (BUSCA EL PADRE CON CLASE .modal Y LO OCULTA)
        if (e.target && (e.target.classList.contains('close') || e.target.id === 'btnCancelarArt')) {
            const modalPadre = e.target.closest('.modal');
            if (modalPadre) modalPadre.style.display = 'none';
        }
        
        if (e.target && e.target.id === 'deleteOption') { if (confirm('¿ELIMINAR?')) eliminarConsulta(currentRowData.id); }
        if (e.target && e.target.classList.contains('assign-option')) {
            const uId = e.target.dataset.usuarioId;
            if (confirm('¿ASIGNAR CONSULTA?')) asignarConsulta(currentRowData.id, uId);
        }
    });

    // --- FUNCIONES CORE ---
    function asignarConsulta(cId, uId) {
        fetchWithCsrf(`${BASE_API_URL}/consultas/asignar`, {
            method: 'POST',
            headers: { 
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ consulta_id: cId, usuario_id: uId }),
        }).then(() => window.location.reload()).catch(err=>{ if (err.message !== 'CSRF') console.error(err); });
    }

    function guardarCambiosCliente() {
        if (!formModal) return;
        const formData = new FormData(formModal);
        const data = Object.fromEntries(formData.entries());
        ['sueldo_registrado', 'sueldo_total', 'sueldo_registrado_enf', 'edad', 'edad_enf', 'antiguedad_laboral'].forEach(f => { if (data[f]) data[f] = unformatNumber(data[f]); });
        fetchWithCsrf(`${BASE_API_URL}/cliente/actualizar`, { 
            method: 'POST', 
            headers: { 
                'Content-Type': 'application/json'
            }, 
            body: JSON.stringify(data) 
        })
        .then(r => r.json()).then(res => {
            if (res.success) { mostrarNotificacion('ACTUALIZADO.', 'success'); setTimeout(() => window.location.reload(), 1000); }
            else mostrarNotificacion(res.message, 'error');
        }).catch(err=>{ if (err.message !== 'CSRF') console.error(err); });
    }

    function eliminarConsulta(id) {
        fetchWithCsrf(`${BASE_API_URL}/eliminar-consulta`, { 
            method: 'POST', 
            headers: { 
                'Content-Type': 'application/x-www-form-urlencoded'
            }, 
            body: `id=${id}` 
        }).then(() => window.location.reload()).catch(err=>{ if (err.message !== 'CSRF') console.error(err); });
    }

    function restaurarConsulta(id) {
        fetchWithCsrf(`${BASE_API_URL}/restaurar-consulta`, { 
            method: 'POST', 
            headers: { 
                'Content-Type': 'application/json'
            }, 
            body: JSON.stringify({ id: id }) 
        })
        .then(r => r.json()).then(res => { if (res.success) window.location.reload(); }).catch(err=>{ if (err.message !== 'CSRF') console.error(err); });
    }

    function getClientDataFromRow(row) {
        const data = {};
        for (const attr of row.attributes) { if (attr.name.startsWith('data-')) { const key = attr.name.substring(5).replace(/-(\w)/g, (_, c) => c.toUpperCase()); data[key] = attr.value; } }
        return data;
    }

    function apiResponseToCliente(d) {
        if (!d) return {};
        return {
            id: d.id, nombre: d.nombre || '', apellido: d.apellido || '', telefono: d.telefono || '',
            provinciaId: d.provincia_id || '', localidadId: d.localidad_id || '', categoriaId: d.categoria_id || '',
            provincia: d.nombre_provincia || '', localidad: d.nombre_localidad || '', categoria: d.nombre_categoria || '',
            edad: d.edad ?? '', denunciaArt: d.denuncia_art || '', artId: d.art_id || '', art: d.nombre_art || '',
            sueldoRegistrado: d.sueldo_registrado ?? d.sueldo ?? '', altaArt: d.alta_art || '', abogadoPrevio: d.abogado_previo || '',
            descripcionLesion: d.descripcion_lesion || '', fechaAccidente: d.fecha_accidente || '', fechaIngreso: d.fecha_ingreso || '',
            antiguedadLaboral: d.antiguedad_laboral ?? '', lugarTrabajoProvId: d.lugar_trabajo_provincia_id || '',
            lugarTrabajoLocId: d.lugar_trabajo_localidad_id || '', lugarTrabajoProv: d.nombre_lugar_trabajo_provincia || '',
            lugarTrabajoLoc: d.nombre_lugar_trabajo_localidad || '', trabajaBlanco: d.trabaja_en_blanco || '',
            diasLaborales: d.dias_laborales || '', horariosLaborales: d.horarios_laborales || '', paganNegro: d.pagan_en_negro || '',
            sueldoTotal: d.sueldo_total_despido ?? d.sueldo ?? '', situacionActual: d.situacion_actual || '',
            formaDespido: d.forma_despido || '', observaciones: d.observaciones || '', fechaRegistro: d.fecha_registro || '',
            asignadoA: d.asignado_a || '1'
        };
    }

    function formatNumberForDisplay(v) { if (v === null || v === '' || isNaN(Number(v))) return 'N/A'; return new Intl.NumberFormat('es-AR').format(Number(v)).replace(/\./g, "'"); }
    function unformatNumber(v) { return v.toString().replace(/['\.]/g, ''); }
    function escapeHtml(s) { if (!s) return ''; const d = document.createElement('div'); d.textContent = s; return d.innerHTML; }

    function setupModalButtons(mode, m) {
        const h = m.querySelector('.modal-header-actions'); if (!h) return;
        if (mode === 'edit') h.innerHTML = `<button type="button" id="btnGuardarModal" class="btn-modal-guardar">GUARDAR</button><button type="button" id="btnCancelarModal" class="btn-modal-cancelar">CANCELAR</button><span class="close">&times;</span>`;
        else {
            if (typeof ES_VISTA_ELIMINADOS !== 'undefined' && ES_VISTA_ELIMINADOS) h.innerHTML = `<button type="button" id="btnRestaurarModal" class="btn-modal-restaurar">RESTAURAR</button><span class="close">&times;</span>`;
            else h.innerHTML = `<button type="button" id="btnEditarModal" class="btn-modal-editar">EDITAR</button><button type="button" id="btnEliminarModal" class="btn-modal-eliminar">ELIMINAR</button><span class="close">&times;</span>`;
        }
    }

    function mostrarDatosEnModal(c) {
        if (!modalTitulo || !contenidoModal) return;
        modalTitulo.textContent = 'DETALLES DEL CLIENTE';
        let h = `<div class="modal-readonly" style="max-height: 70vh; overflow-y: auto;">`;
        const tiene = (v) => v !== null && v !== undefined && v !== '' && String(v).trim().toUpperCase() !== 'N/A';
        h += `<div class="modal-form-group"><label>NOMBRE COMPLETO:</label><span>${escapeHtml(c.nombre)} ${escapeHtml(c.apellido)}</span></div>`;
        h += `<div class="modal-form-group"><label>TELÉFONO:</label><span>${escapeHtml(c.telefono)}</span></div>`;
        h += `<div class="modal-form-group"><label>OBSERVACIONES:</label><span>${escapeHtml(c.observaciones) || 'N/A'}</span></div>`;
        h += `<div class="modal-form-group"><label>PROVINCIA / LOCALIDAD:</label><span>${escapeHtml(c.provincia)} / ${escapeHtml(c.localidad)}</span></div>`;
        h += `<div class="modal-form-group"><label>CATEGORÍA:</label><span>${escapeHtml(c.categoria)}</span></div>`;
        if (c.categoriaId == ID_ACCIDENTES || c.categoriaId == ID_ENFERMEDADES) {
            if (tiene(c.edad)) h += `<div class="modal-form-group"><label>EDAD:</label><span>${c.edad} AÑOS</span></div>`;
            if (tiene(c.art)) h += `<div class="modal-form-group"><label>ART:</label><span>${escapeHtml(c.art)}</span></div>`;
            if (tiene(c.sueldoRegistrado)) h += `<div class="modal-form-group"><label>SUELDO REGISTRADO:</label><span>$${formatNumberForDisplay(c.sueldoRegistrado)}</span></div>`;
            if (tiene(c.descripcionLesion)) h += `<div class="modal-form-group"><label>LESIÓN:</label><span>${escapeHtml(c.descripcionLesion)}</span></div>`;
        }
        if (c.categoriaId == ID_DESPIDOS) {
            if (tiene(c.sueldoTotal)) h += `<div class="modal-form-group"><label>SUELDO TOTAL:</label><span>$${formatNumberForDisplay(c.sueldoTotal)}</span></div>`;
            if (tiene(c.situacionActual)) h += `<div class="modal-form-group"><label>SITUACIÓN ACTUAL:</label><span>${c.situacionActual.toUpperCase()}</span></div>`;
        }
        h += `<div class="modal-form-group"><label>FECHA REGISTRO:</label><span>${c.fechaRegistro}</span></div>`;
        h += `</div>`;
        contenidoModal.innerHTML = h;
        setupModalButtons('read', modal);
        modal.style.display = 'block';
    }

    function mostrarFormularioEdicion(c) {
        setupModalButtons('edit', modal);
        modalTitulo.textContent = 'EDITAR CLIENTE';
        let h = `<div style="max-height: 70vh; overflow-y: auto;">
            <input type="hidden" name="id" value="${c.id}">
            <input type="hidden" name="categoria_id" value="${c.categoriaId}">
            <div class="modal-form-group"><label>NOMBRE:</label><input type="text" name="nombre" value="${escapeHtml(c.nombre)}" class="modal-input" required></div>
            <div class="modal-form-group"><label>APELLIDO:</label><input type="text" name="apellido" value="${escapeHtml(c.apellido)}" class="modal-input" required></div>
            <div class="modal-form-group"><label>TELÉFONO:</label><input type="tel" name="telefono" value="${escapeHtml(c.telefono)}" class="modal-input" required maxlength="12"></div>
            <div class="modal-form-group"><label>OBSERVACIONES:</label><textarea name="observaciones" class="modal-textarea" maxlength="500">${escapeHtml(c.observaciones)}</textarea></div>
            <div class="modal-form-group"><label>PROVINCIA:</label><select id="editProvincia" name="provincia_id" class="modal-input">
                ${TODAS_PROVINCIAS.map(p => `<option value="${p.id}" ${c.provinciaId == p.id ? 'selected' : ''}>${escapeHtml(p.nombre)}</option>`).join('')}
            </select></div>
            <div class="modal-form-group"><label>LOCALIDAD:</label><select id="editLocalidad" name="localidad_id" class="modal-input"><option value="${c.localidadId}">${escapeHtml(c.localidad)}</option></select></div></div>`;
        contenidoModal.innerHTML = h;
        const pSel = document.getElementById('editProvincia'), lSel = document.getElementById('editLocalidad');
        if (pSel && lSel) { pSel.addEventListener('change', () => { fetch(`${BASE_API_URL}/localidades?provincia_id=${pSel.value}`).then(r => r.json()).then(d => { lSel.innerHTML = d.localidades.map(l => `<option value="${l.id}">${escapeHtml(l.nombre)}</option>`).join(''); }); }); }
        formatAndAttachListeners();
    }

    // --- DRAWER ---
    const ham = document.getElementById('menuHamburguesa'), dra = document.getElementById('drawer'), ove = document.getElementById('drawerOverlay'), clo = document.getElementById('closeDrawer');
    if (ham) ham.addEventListener('click', () => { dra.classList.add('open'); ove.classList.add('active'); });
    if (clo) clo.addEventListener('click', () => { dra.classList.remove('open'); ove.classList.remove('active'); });
    if (ove) ove.addEventListener('click', () => { dra.classList.remove('open'); ove.classList.remove('active'); });

    // --- SINCRONIZAR ---
    const syncBtn = document.getElementById('sincronizarUbicacionesBtn');
    if (syncBtn) syncBtn.addEventListener('click', () => { if (confirm('¿SINCRONIZAR?')) { mostrarNotificacionPersistente('SINCRONIZANDO...', 'success'); fetchWithCsrf(`${BASE_URL}/api/sincronizar-ubicaciones`, { 
        method: 'POST'
    }).then(r => r.json()).then(d => { if (notification) notification.style.display = 'none'; mostrarNotificacion(d.message, d.success ? 'success' : 'error'); }).catch(err=>{ if (err.message !== 'CSRF') console.error(err); }); } });

    // --- GESTIÓN ART ---
    const addArtBtn = document.getElementById('agregarArtBtn'), modArt = document.getElementById('modalAgregarArt');
    if (addArtBtn) addArtBtn.addEventListener('click', () => { modArt.style.display = 'block'; dra.classList.remove('open'); ove.classList.remove('active'); });
    
    const delArtBtn = document.getElementById('btnEliminarArtModal'), modDelArt = document.getElementById('modalEliminarArt');
    const artList = document.getElementById('artList'), artMsg = document.getElementById('eliminarArtMessage');
    
    if (delArtBtn) delArtBtn.addEventListener('click', () => { 
        modDelArt.style.display = 'block'; 
        dra.classList.remove('open'); 
        ove.classList.remove('active'); 
        artList.innerHTML = '<li>CARGANDO...</li>'; 
        if (artMsg) {
            artMsg.textContent = ''; 
            artMsg.style.display = 'none';
            artMsg.className = 'message-area';
        }
        fetch(`${BASE_API_URL}/arts`).then(r => r.json()).then(d => { 
            artList.innerHTML = d.arts.map(a => `<li><span>${escapeHtml(a.nombre)}</span><button class="delete-art-item-btn" data-art-id="${a.id}">🗑️</button></li>`).join(''); 
        }); 
    });
    if (artList) artList.addEventListener('click', (e) => { 
        const btn = e.target.closest('.delete-art-item-btn'); 
        if (btn && confirm('¿ELIMINAR ART?')) {
            fetchWithCsrf(`${BASE_API_URL}/eliminar_art`, { 
                method: 'POST', 
                headers: { 
                    'Content-Type': 'application/x-www-form-urlencoded'
                }, 
                body: `id=${btn.dataset.artId}` 
            })
            .then(r => r.json())
            .then(res => {
                if (res.success) {
                    window.location.reload();
                } else if (artMsg) {
                    artMsg.textContent = res.message;
                    artMsg.className = 'message-area error'; // APLICA COLOR ROJO Y FONDO
                    artMsg.style.display = 'block'; // LO HACE VISIBLE
                } else {
                    alert(res.message); // FALLBACK SI NO EXISTE EL DIV
                }
            })
            .catch(err => {
                if (err.message !== 'CSRF') {
                    console.error('Error:', err);
                    alert('ERROR DE COMUNICACION CON EL SERVIDOR.');
                }
            });
        }
    });

    function formatAndAttachListeners() { document.querySelectorAll('.numeric-input').forEach(i => { if (i.value) i.value = formatNumberForDisplay(i.value); i.addEventListener('input', e => { let v = e.target.value.replace(/[^0-9]/g, ''); e.target.value = v ? formatNumberForDisplay(v) : ''; }); }); }
    const sInp = document.getElementById('searchInput');
    if (sInp) sInp.addEventListener('keyup', () => { const t = sInp.value.toLowerCase(); document.querySelectorAll('tbody tr').forEach(r => { r.style.display = r.textContent.toLowerCase().includes(t) ? '' : 'none'; }); });
});
