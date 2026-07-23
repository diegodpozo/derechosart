/* SCRIPT PARA APLICAR CLASES DE TAMANO DINAMICAMENTE SIN PROVOCAR REFLOW FORZADO */
document.addEventListener('DOMContentLoaded', function() {
    requestAnimationFrame(function() {
        const elementos = document.querySelectorAll('.subrayado-amarillo, .resaltado-prolongado');
        if (!elementos.length) return;
        
        // 1. LECTURA EN BATCH (SIN INTERCALAR ESCRITURAS)
        const mediciones = Array.from(elementos).map(function(el) {
            return {
                el: el,
                fontSize: parseFloat(window.getComputedStyle(el).fontSize) || 16
            };
        });

        // 2. ESCRITURA EN BATCH EN EL SIGUIENTE FRAME
        requestAnimationFrame(function() {
            mediciones.forEach(function(item) {
                item.el.classList.remove('size-md', 'size-lg', 'size-xl');
                if (item.fontSize >= 28) {
                    item.el.classList.add('size-xl');
                } else if (item.fontSize >= 20) {
                    item.el.classList.add('size-lg');
                } else if (item.fontSize >= 16) {
                    item.el.classList.add('size-md');
                }
            });
        });
    });
});
