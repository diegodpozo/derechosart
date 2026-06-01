import sys
import re

with open('Quienes Somos - DerechosART.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Find the main content div
# The instruction says "div con clase 'elementor-11966'"
# I'll look for the start of the div and try to find its closing tag
start_marker = '<div data-elementor-type="wp-page" data-elementor-id="11966" class="elementor elementor-11966"'
start_pos = content.find(start_marker)

if start_pos == -1:
    # Try another way to find it
    start_marker = 'class="elementor elementor-11966"'
    start_pos = content.find(start_marker)
    # Go back to find the <div
    start_pos = content.rfind('<div', 0, start_pos)

if start_pos != -1:
    # Find the matching closing div
    # This is tricky without a real parser, but I'll try to count divs
    depth = 0
    end_pos = -1
    for i in range(start_pos, len(content)):
        if content[i:i+4] == '<div':
            depth += 1
        elif content[i:i+5] == '</div':
            depth -= 1
            if depth == 0:
                end_pos = i + 6
                break
    
    if end_pos != -1:
        main_content = content[start_pos:end_pos]
        
        # Replace image paths
        # Original paths are likely like "./Quienes Somos - DerechosART_files/..."
        main_content = main_content.replace('./Quienes Somos - DerechosART_files/', 'publico/img/quienes-somos/')
        
        # Fix encoding issues (common ones)
        replacements = {
            'Ã¡': 'á', 'Ã©': 'é', 'Ã­': 'í', 'Ã³': 'ó', 'Ãº': 'ú',
            'Ã‘': 'Ñ', 'Ã±': 'ñ', 'Â¿': '¿', 'Â¡': '¡',
            '&amp;': '&', 'â€“': '–', 'â€”': '—'
        }
        for old, new in replacements.items():
            main_content = main_content.replace(old, new)

        # Write to the destination file
        with open('vistas/paginas/quienes-somos.php', 'w', encoding='utf-8') as f:
            f.write(main_content)
        print("Content extracted and updated successfully")
    else:
        print("Could not find end of div")
else:
    print("Could not find start of div")
