/* Script para aplicar clases de tamaño dinamicamente a .subrayado-amarillo */
document.addEventListener('DOMContentLoaded', function() {
    const elementos = document.querySelectorAll('.subrayado-amarillo, .resaltado-prolongado');
    
    elementos.forEach(el => {
        const fontSize = parseFloat(window.getComputedStyle(el).fontSize);
        
        // Remover clases anteriores
        el.classList.remove('size-md', 'size-lg', 'size-xl');
        
        // Aplicar clase según font-size
        if (fontSize >= 28) {
            el.classList.add('size-xl'); // 3rem+ (hero titles)
        } else if (fontSize >= 20) {
            el.classList.add('size-lg'); // 2rem+ (titulos grandes)
        } else if (fontSize >= 16) {
            el.classList.add('size-md'); // 1.2-1.5rem (titulos pequenos)
        }
        // Sin clase = tamaño default (~1rem)
    });
    
    // Reintentar despues de que las fuentes carguen
    setTimeout(function() {
        elementos.forEach(el => {
            const fontSize = parseFloat(window.getComputedStyle(el).fontSize);
            el.classList.remove('size-md', 'size-lg', 'size-xl');
            
            if (fontSize >= 28) {
                el.classList.add('size-xl');
            } else if (fontSize >= 20) {
                el.classList.add('size-lg');
            } else if (fontSize >= 16) {
                el.classList.add('size-md');
            }
        });
    }, 500);
});
