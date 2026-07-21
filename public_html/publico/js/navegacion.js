document.addEventListener('DOMContentLoaded', function() {
    // 1. LOGICA DE MENU
    const menuToggle = document.getElementById('menu-toggle');
    const menuMovil = document.getElementById('menu-movil');

    if (menuToggle && menuMovil) {
        menuToggle.addEventListener('click', function() {
            const estaAbierto = menuMovil.classList.toggle('activo');
            
            // CAMBIAR ICONO (SOPORTE PARA <i> Y <svg> DE FONT AWESOME)
            const icon = menuToggle.querySelector('i, svg');
            if (icon) {
                if (estaAbierto) {
                    if (icon.tagName.toLowerCase() === 'svg') {
                        icon.style.transform = 'rotate(90deg)';
                        icon.innerHTML = '<path fill="#000000" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>';
                    } else {
                        icon.className = 'fas fa-times';
                    }
                } else {
                    if (icon.tagName.toLowerCase() === 'svg') {
                        icon.style.transform = 'rotate(0deg)';
                        icon.innerHTML = '<path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                }
            }
            
            if (typeof window.logSistema === 'function') {
                window.logSistema('MENU MOVIL:', estaAbierto ? 'ABIERTO' : 'CERRADO');
            }
        });

        // 1.1 CERRAR MENU AL HACER CLICK FUERA
        document.addEventListener('click', function(evento) {
            const esClickDentroMenu = menuMovil.contains(evento.target);
            const esClickBotonToggle = menuToggle.contains(evento.target);

            if (!esClickDentroMenu && !esClickBotonToggle && menuMovil.classList.contains('activo')) {
                menuMovil.classList.remove('activo');
                
                // RESETEAR ICONO A BARRAS
                const icon = menuToggle.querySelector('i, svg');
                if (icon) {
                    if (icon.tagName.toLowerCase() === 'svg') {
                        icon.style.transform = 'rotate(0deg)';
                        icon.innerHTML = '<path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                }

                if (typeof window.logSistema === 'function') {
                    window.logSistema('MENU MOVIL: CERRADO (CLICK FUERA)');
                }
            }
        });

        // LOGICA PARA DROPDOWNS MOVILES (ACCIDENTES / DESPIDOS)
        const dropdownPairs = [
            { trigger: 'trigger-accidentes', dropdown: 'dropdown-accidentes' },
            { trigger: 'trigger-despidos', dropdown: 'dropdown-despidos' }
        ];
        dropdownPairs.forEach(function(pair) {
            const trigger = document.getElementById(pair.trigger);
            const dropdown = document.getElementById(pair.dropdown);
            if (trigger && dropdown) {
                trigger.addEventListener('click', function(e) {
                    e.preventDefault();
                    dropdown.classList.toggle('activo');
                    this.parentElement.classList.toggle('abierto');
                });
            }
        });
    }

    // 2. LOGICA PARA SLIDER DE RESEÑAS
    const track = document.getElementById('reseñas-track');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    if (track && prevBtn && nextBtn) {
        const scrollAmount = 400; 

        nextBtn.onclick = function() {
            track.scrollTo({
                left: track.scrollLeft + scrollAmount,
                behavior: 'smooth'
            });
        };

        prevBtn.onclick = function() {
            track.scrollTo({
                left: track.scrollLeft - scrollAmount,
                behavior: 'smooth'
            });
        };
    }
});