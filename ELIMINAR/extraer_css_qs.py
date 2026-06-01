import sys

with open('Quienes Somos - DerechosART.html', 'r', encoding='utf-8') as f:
    content = f.read()

def find_block(start_marker, end_marker):
    start_pos = content.find(start_marker)
    if start_pos == -1:
        return None
    start_pos = content.find('>', start_pos) + 1
    end_pos = content.find(end_marker, start_pos)
    if end_pos == -1:
        return None
    return content[start_pos:end_pos]

athens = find_block('id="athens-style-inline-css"', '/*# sourceURL=athens-style-inline-css */')
elementor = find_block('id="elementor-frontend-inline-css"', '/*# sourceURL=elementor-frontend-inline-css */')

with open('publico/css/EstilosAthensQS.css', 'w', encoding='utf-8') as f:
    if athens: f.write(athens)

with open('publico/css/EstilosElementorQS.css', 'w', encoding='utf-8') as f:
    if elementor: f.write(elementor)

print("Blocks extracted successfully")
