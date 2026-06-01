import sys
import io

sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')

file_path = "Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario.html"
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Buscamos el inicio de la seccion elementor-12045 (el contenido principal)
# En este caso, parece que el contenido principal esta despues del </header>
start_tag = '<div data-elementor-type="wp-page" data-elementor-id="12045"'
end_tag = '</main>' # O buscar donde empieza el footer

start_index = content.find(start_tag)
if start_index == -1:
    # Si no esta ese div, buscamos despues del header
    header_end = content.find('</header>')
    if header_end != -1:
        start_index = header_end + 9

# El footer empieza con <footer
footer_start = content.find('<footer')

if start_index != -1 and footer_start != -1:
    main_content = content[start_index:footer_start]
    with open('contenido_inicio.html', 'w', encoding='utf-8') as f_out:
        f_out.write(main_content)
    print("Contenido extraido exitosamente en contenido_inicio.html")
else:
    print("No se encontro el contenido principal")
