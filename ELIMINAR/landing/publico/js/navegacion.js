document.addEventListener('DOMContentLoaded', function() {
    console.log('NAVEGACION JS CARGADO');
    const menuToggle = document.getElementById('menu-toggle');
    const menuMovil = document.getElementById('menu-movil');

    if (menuToggle && menuMovil) {
        console.log('ELEMENTOS DE MENU ENCONTRADOS');
        menuToggle.addEventListener('click', function() {
            console.log('CLICK EN MENU TOGGLE');
            menuMovil.classList.toggle('activo');
            
            // CAMBIAR ICONO ENTRE BARS Y TIMES
            const icon = menuToggle.querySelector('i');
            if (menuMovil.classList.contains('activo')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // CERRAR MENU AL HACER CLICK EN UN ENLACE (QUE NO SEA UN TRIGGER DE DROPDOWN)
        const menuLinks = menuMovil.querySelectorAll('a:not(#trigger-calculadora)');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                menuMovil.classList.remove('activo');
                const icon = menuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });

        // LOGICA PARA DROPDOWN MOVIL
        const triggerCalculadora = document.getElementById('trigger-calculadora');
        const dropdownCalculadora = document.getElementById('dropdown-calculadora');
        const itemParent = triggerCalculadora ? triggerCalculadora.parentElement : null;

        if (triggerCalculadora && dropdownCalculadora) {
            triggerCalculadora.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropdownCalculadora.classList.toggle('activo');
                itemParent.classList.toggle('abierto');
            });
        }
    } else {
        console.error('ERROR: NO SE ENCONTRARON LOS ELEMENTOS DEL MENU');
    }
});