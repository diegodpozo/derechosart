import io

# Leer el contenido extraido
with open('contenido_inicio.html', 'r', encoding='utf-8') as f:
    main_content = f.read()

# Limpiar rutas
# Reemplazar ./Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario_files/ 
# por el nombre de la carpeta real (que es el mismo sin el ./)
original_path = './Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario_files/'
new_path = 'Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario_files/'
main_content = main_content.replace(original_path, new_path)

# Tambien hay rutas con escape como %20
main_content = main_content.replace('./Abogados%20especialistas%20en%20accidentes%20de%20trabajo%20y%20despidos%20-%20CABA,%20Buenos%20Aires%20y%20Rosario_files/', new_path)

# Preparar el archivo inicio.php
inicio_php_content = f"""<?php
// PAGINA DE INICIO - REPLICACION TOTAL DE ARQUITECTURA ORIGINAL
?>
{main_content}
"""

with open('vistas/paginas/inicio.php', 'w', encoding='utf-8') as f:
    f.write(inicio_php_content)

print("inicio.php actualizado exitosamente")
