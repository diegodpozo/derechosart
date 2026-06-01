import io

file_path = "Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario.html"
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Buscamos los bloques <style>
import re
styles = re.findall(r'<style[^>]*>(.*?)</style>', content, re.DOTALL)

with open('publico/css/EstilosOriginales.css', 'w', encoding='utf-8') as f_out:
    for style in styles:
        # Filtrar algunos estilos que no queremos o son muy especificos
        if 'wp-emoji-styles-inline-css' in content: # Esto es solo un ejemplo de como filtrar
            pass
        f_out.write(style + "\n")

print("EstilosOriginales.css creado exitosamente")
