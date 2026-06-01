document.addEventListener('DOMContentLoaded', function() {
    console.log("Navegacion JS v2.4 cargada");
    // 1. LOGICA DE MENU
    const menuToggle = document.getElementById('menu-toggle');
    const menuMovil = document.getElementById('menu-movil');

    if (menuToggle && menuMovil) {
        menuToggle.addEventListener('click', function() {
            menuMovil.classList.toggle('activo');
            const icon = menuToggle.querySelector('i');
            if (icon) {
                if (menuMovil.classList.contains('activo')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            }
        });

        // LOGICA PARA DROPDOWN MOVIL (CALCULADORA)
        const triggerCalculadora = document.getElementById('trigger-calculadora');
        const dropdownCalculadora = document.getElementById('dropdown-calculadora');

        if (triggerCalculadora && dropdownCalculadora) {
            triggerCalculadora.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownCalculadora.classList.toggle('activo');
                this.parentElement.classList.toggle('abierto');
            });
        }
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