import sys
import io

sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')

file_path = "Quienes Somos - DerechosART.html"
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Buscamos el inicio de la seccion elementor-11966
start_tag = '<div data-elementor-type="wp-page" data-elementor-id="11966"'

start_index = content.find(start_tag)
if start_index == -1:
    header_end = content.find('</header>')
    if header_end != -1:
        start_index = header_end + 9

footer_start = content.find('<footer')

if start_index != -1 and footer_start != -1:
    main_content = content[start_index:footer_start]
    
    # Limpiar rutas
    original_path = './Quienes Somos - DerechosART_files/'
    new_path = 'Quienes Somos - DerechosART_files/'
    main_content = main_content.replace(original_path, new_path)
    main_content = main_content.replace('./Quienes%20Somos%20-%20DerechosART_files/', new_path)
    
    # Preparar el archivo quienes-somos.php
    qs_php_content = f"""<?php
// PAGINA QUIENES SOMOS - REPLICACION TOTAL DE ARQUITECTURA ORIGINAL
?>
{main_content}
"""
    with open('vistas/paginas/quienes-somos.php', 'w', encoding='utf-8') as f_out:
        f_out.write(qs_php_content)
    print("quienes-somos.php actualizado exitosamente")
else:
    print("No se encontro el contenido principal")
