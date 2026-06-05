#!/usr/bin/env python3
import sys

css_file = r"C:\xampp\htdocs\derechosart.com.ar\public_html\publico\css\estilos.css"

with open(css_file, 'r', encoding='utf-8') as f:
    content = f.read()

# Busca y reemplaza la sección RESPONSIVE BLOG
old_section = """/* RESPONSIVE BLOG */
@media (max-width: 64rem) { /* 64rem */
    .grid-blog {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }
    .articulo-header {

        order: 0;

    }.blog-sidebar {

        order: 1;

    }.articulo-cuerpo {

        order: 2;
    }"""

new_section = """/* DESKTOP: Grid personalizado H1+Sidebar lado a lado */
@media (min-width: 64.01rem) {
    .grid-blog {
        display: grid;
        grid-template-columns: 1fr 18.75rem;
        gap: 3.5rem;
        grid-template-areas:
            "header sidebar"
            "contenido sidebar";
    }
    .articulo-header-wrapper {
        grid-area: header;
    }
    .blog-sidebar {
        grid-area: sidebar;
    }
    .articulo-cuerpo {
        grid-area: contenido;
    }
}

/* RESPONSIVE BLOG - MOBILE */
@media (max-width: 64rem) { /* 64rem */
    .grid-blog {
        display: flex;
        flex-direction: column;
        gap: 2.5rem;
    }
    .articulo-header-wrapper {
        order: 0;
    }
    .blog-sidebar {
        order: 1;
    }
    .articulo-cuerpo {
        order: 2;
    }"""

if old_section in content:
    content = content.replace(old_section, new_section)
    with open(css_file, 'w', encoding='utf-8') as f:
        f.write(content)
    print("CSS blog actualizado correctamente")
else:
    print("No se encontro la seccion a reemplazar")
    sys.exit(1)
