#!/usr/bin/env python3
# -*- coding: utf-8 -*-
# GENERADOR DE PAGINAS HTML - BAREMO LABORAL 2026
# CAPITULO OSTEOARTICULAR + TODAS LAS SECCIONES DEL DOCX

import os

OUT_DIR = "baremo-samples"
os.makedirs(OUT_DIR, exist_ok=True)

# ─── CSS INLINE ─────────────────────────────────────────────────────────────

CSS = """* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }
body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; background: #fafafa; color: #1a1a1a; line-height: 1.6; }
.contenedor { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
.blog-container { padding-top: 5rem; padding-bottom: 5rem; background-color: #fff; }
.grid-blog { display: flex; flex-direction: column; gap: 2.5rem; }
@media (min-width: 64.01rem) { .grid-blog { display: grid; grid-template-columns: 1fr 18.75rem; gap: 3.5rem; grid-template-areas: "header sidebar" "contenido sidebar"; } }
.articulo-header-wrapper { grid-area: header; }
.articulo-header { max-width: 820px; width: 100%; }
.breadcrumb-blog { font-size: 0.85rem; color: #000; margin-bottom: 1.25rem; }
.breadcrumb-blog a { color: #000; text-decoration: none; }
.breadcrumb-blog a:hover { color: var(--amarillo); }
.tag-categoria { display: inline-block; padding: 0.3125rem 0.9375rem; font-size: 0.75rem; font-weight: 800; border-radius: 0.3125rem; letter-spacing: 0.0625rem; margin-bottom: 0.9375rem; text-transform: uppercase; }
.bg-amarillo { background-color: var(--amarillo); }
.articulo-titulo { font-size: 3rem; line-height: 1.1; font-weight: 800; margin-bottom: 1.5625rem; color: #000; }
@media (max-width: 64rem) { .articulo-titulo { font-size: 2.2rem; } }
@media (max-width: 48rem) { .articulo-titulo { font-size: 1.8rem; } }
.articulo-lead { font-size: 1.25rem; line-height: 1.6; color: #000; margin-bottom: 1.5rem; }
.articulo-meta { display: flex; align-items: center; flex-wrap: wrap; gap: 1.875rem; font-size: 0.8rem; color: #999; padding: 0.9375rem 0; }
.border-top { border-top: 0.0625rem solid var(--gris-medio); }
.border-bottom { border-bottom: 0.0625rem solid var(--gris-medio); }
.blog-sidebar { grid-area: sidebar; }
.sidebar-sticky { position: sticky; top: 6.25rem; }
@media (max-width: 64rem) { .sidebar-sticky { position: relative; top: 0; } }
.sidebar-titulo { font-size: 1.5rem; font-weight: 800; margin-bottom: 1.5625rem; padding-bottom: 0.9375rem; border-bottom: 0.1875rem solid var(--amarillo); }
.sidebar-nav ul { list-style: none; padding: 0; }
.sidebar-nav li { margin-bottom: 0.9375rem; }
.sidebar-nav a { text-decoration: none; color: #000; font-size: 0.95rem; display: flex; gap: 0.9375rem; line-height: 1.4; }
.nav-num { width: 1.5rem; height: 1.5rem; background: var(--amarillo); color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 700; flex-shrink: 0; }
.cta-whatsapp-bloque { display: flex; flex-direction: column; justify-content: flex-start; padding: 1.2rem; gap: 0.4rem; background: var(--amarillo); margin-top: 1.2rem; }
.border-radius-20 { border-radius: 1.25rem; }
.cta-whatsapp-titulo h3 { font-size: 1.2rem; font-weight: 800; line-height: 1.2; margin: 0; color: #000; }
.cta-whatsapp-texto-grupo { display: flex; align-items: flex-start; gap: 0.8rem; }
.cta-whatsapp-icono { flex-shrink: 0; width: 2.2rem; height: 2.2rem; display: flex; align-items: center; justify-content: center; margin-top: 0.15rem; }
.cta-whatsapp-texto p { font-size: 0.85rem; line-height: 1.4; margin: 0; color: #333; }
.cta-whatsapp-boton-contenedor { display: flex; justify-content: center; margin-top: 0.15rem; }
.cta-whatsapp-boton-link { font-size: 0.75rem; padding: 0.6rem 1rem; display: inline-flex; align-items: center; gap: 0.3rem; font-weight: 700; white-space: nowrap; line-height: 1; width: 100%; justify-content: center; background-color: #000; color: var(--amarillo); text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
.cta-whatsapp-boton-link:hover { background-color: #222; }
.articulo-cuerpo { grid-area: contenido; max-width: 820px; width: 100%; }
.articulo-contenido-texto p { color: #000; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem; }
.seccion-bloque { margin-bottom: 3.5rem; }
.titulo-seccion-blog { font-size: 2.2rem; font-weight: 800; display: flex; align-items: center; gap: 1.25rem; margin-bottom: 1.875rem; color: #000; margin-top: 1.5rem; }
.num-sec { width: 2.5rem; height: 2.5rem; background: var(--amarillo); color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0; font-weight: 800; }
.alerta-importante { display: flex; align-items: flex-start; gap: 1.25rem; padding: 1.5625rem; border-radius: 0.9375rem; background: rgba(255, 204, 0, 0.15); margin: 1.875rem 0; }
.alerta-icon { font-size: 2.6em; line-height: 1; }
.subrayado-amarillo { display: inline; font-weight: 800; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 500 20' preserveAspectRatio='none'%3E%3Cpath d='M10,15 C150,5 350,20 490,12' stroke='%23FFCC00' stroke-width='3.6' stroke-linecap='round' fill='none' opacity='0.7'/%3E%3C/svg%3E"); background-size: 100% 0.6rem; background-position: 0 calc(100% + 0.015rem); background-repeat: repeat-x; padding-bottom: 0.06rem; }
.link-volver-indice { font-size: 0.8rem; font-weight: 700; color: #000; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; margin-top: 1.5rem; }
.link-volver-indice:hover { color: var(--amarillo); }
.custom-table-blog { border: 0.0625rem solid #eee; border-radius: 0.9375rem; overflow: hidden; margin: 1.875rem 0; }
.tr-blog { display: grid; grid-template-columns: 16rem 1fr; border-bottom: 0.0625rem solid #eee; }
.tr-blog:last-child { border: none; }
.tr-blog > div { padding: 1rem; font-size: 0.9rem; }
.tr-blog.header { background: #000; color: #fff; font-weight: 700; }
.tr-blog-3cols { display: grid; grid-template-columns: 1fr 1fr 1fr; border-bottom: 0.0625rem solid #eee; }
.tr-blog-3cols:last-child { border: none; }
.tr-blog-3cols > div { padding: 1rem; font-size: 0.9rem; }
.tr-blog-3cols.header { background: #000; color: #fff; font-weight: 700; }
.tr-blog-4cols { display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; border-bottom: 0.0625rem solid #eee; }
.tr-blog-4cols:last-child { border: none; }
.tr-blog-4cols > div { padding: 0.9rem; font-size: 0.85rem; }
.tr-blog-4cols.header { background: #000; color: #fff; font-weight: 700; }
.tr-blog-5cols { display: grid; grid-template-columns: 1.4fr 1fr 1fr 1fr 1fr; border-bottom: 0.0625rem solid #eee; }
.tr-blog-5cols:last-child { border: none; }
.tr-blog-5cols > div { padding: 0.8rem; font-size: 0.85rem; }
        .tr-blog-5cols.header { background: #000; color: #fff; font-weight: 700; }
        @media (max-width: 48rem) { .tr-blog, .tr-blog-3cols, .tr-blog-4cols, .tr-blog-5cols { grid-template-columns: 1fr; } .tr-blog.header, .tr-blog-3cols.header, .tr-blog-4cols.header, .tr-blog-5cols.header { display: none; } }
        @media (max-width: 48rem) { [style*="grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr"], [style*="grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr"] { grid-template-columns: 1fr !important; } }
.tip-blog { display: flex; align-items: flex-start; gap: 1.25rem; padding: 1.25rem; border-radius: 0.9375rem; background-color: var(--gris-claro); margin: 1.875rem 0; }
.lista-faq-blog details { margin-bottom: 1.25rem; background: var(--gris-claro); border-radius: 0.9375rem; }
.lista-faq-blog summary { font-weight: 700; cursor: pointer; padding: 1.5625rem; border-radius: 0.9375rem; outline: none; display: flex; justify-content: space-between; align-items: center; }
.lista-faq-blog summary::-webkit-details-marker { display: none; }
.lista-faq-blog summary::after { content: "\\f078"; font-family: "Font Awesome 6 Free"; font-weight: 900; transition: transform 0.3s; }
.lista-faq-blog details[open] summary::after { transform: rotate(180deg); }
.lista-faq-blog details p { padding: 0 1.5625rem 1.5625rem; margin: 0; font-size: 0.95rem; color: #333; }
.articulo-footer-meta { margin-top: 3.125rem; display: flex; justify-content: space-between; align-items: center; font-size: 0.8rem; color: #999; border-top: 1px solid var(--gris-medio); padding-top: 1.5rem; flex-wrap: wrap; gap: 0.5rem; }
.fade-in { animation: fadeIn 0.5s ease; }
@keyframes fadeIn { from { opacity: 0; transform: translateY(1rem); } to { opacity: 1; transform: translateY(0); } }
"""

# ─── TEMPLATE HTML ─────────────────────────────────────────────────────────

def build_indice(secciones):
    return "\n".join(
        f'<li><a href="#sec-{i}"><span class="nav-num">{i+1}</span> {tit}</a></li>'
        for i, (tit, _) in enumerate(secciones)
    )

def pagina_html(titulo, emoji, descripcion, categoria, lectura, rango_incap, secciones):
    contenido = "\n".join(
        f'''<div id="sec-{i}" class="seccion-bloque">
        <h2 class="titulo-seccion-blog"><span class="num-sec">{i+1}</span> {tit}</h2>
        {body}
        <a href="#" class="link-volver-indice"><i class="fa-solid fa-arrow-up"></i> Volver al inicio</a>
    </div>'''
        for i, (tit, body) in enumerate(secciones)
    )
    indice = build_indice(secciones)
    return f'''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{titulo} | DerechosART</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {{ --amarillo: #FFCC00; --negro: #000; --blanco: #fff; --gris-claro: #f5f5f5; --gris-medio: #ddd; --gris-texto: #666; }}
        {CSS}
    </style>
</head>
<body>
<main class="blog-container fade-in">
    <div class="contenedor grid-blog">
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog">
                    <a href="#">Baremo Laboral 2026</a> &gt; <a href="#">Osteoarticular</a> &gt; <span style="color: #FFCC00; font-weight: bold;">{categoria}</span>
                </nav>
                <span class="tag-categoria bg-amarillo">{categoria}</span>
                <h1 class="articulo-titulo">{emoji} {titulo}</h1>
                <p class="articulo-lead">{descripcion}</p>
                <div class="articulo-meta border-top border-bottom">
                    <span><i class="fa-solid fa-file-pdf"></i> Baremo Laboral 2026 - SRT</span>
                    <span><i class="fa-solid fa-clock"></i> Lectura: {lectura} min</span>
                    <span><i class="fa-solid fa-percent"></i> Incapacidad: {rango_incap}</span>
                </div>
            </header>
        </div>
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo">En esta pagina</summary>
                    <nav class="sidebar-nav">
                        <ul>{indice}</ul>
                    </nav>
                </details>
                <div class="cta-whatsapp-bloque border-radius-20">
                    <div class="cta-whatsapp-titulo">
                        <h3>¿Tenes una lesion laboral?</h3>
                    </div>
                    <div class="cta-whatsapp-texto-grupo">
                        <div class="cta-whatsapp-icono">
                            <i class="fa-brands fa-whatsapp" style="font-size: 2.2rem; color: #000;"></i>
                        </div>
                        <div class="cta-whatsapp-texto">
                            <p>Revisamos tu caso y te asesoramos sin cargo</p>
                        </div>
                    </div>
                    <div class="cta-whatsapp-boton-contenedor">
                        <a href="https://wa.me/5491136456637?text=Hola,%20consulta%20sobre%20mi%20lesion%20laboral" target="_blank" class="cta-whatsapp-boton-link">
                            Consultanos <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <p class="mt-20" style="margin-top: 1rem; text-align: center; font-size: 0.8rem;">
                    <span style="font-size: 2em;">✅</span> Solo cobramos si vos cobras.
                </p>
            </div>
        </aside>
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto">{contenido}</section>
            <div class="articulo-footer-meta">
                <span><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">✅</span> Solo cobramos si vos cobras.</span>
                <span class="italic" style="font-style:italic;"><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">⚖️</span> DerechosART · derechosart.com.ar</span>
            </div>
        </article>
    </div>
</main>
</body>
</html>'''

def tabla_3cols(header, *rows):
    hdr = "".join(f"<div>{h}</div>" for h in header)
    rws = "".join(f"<div class=\"tr-blog-3cols\">{''.join(f'<div>{c}</div>' for c in r)}</div>" for r in rows)
    return f'<div class="custom-table-blog"><div class="tr-blog-3cols header">{hdr}</div>{rws}</div>'

def tabla_4cols(header, *rows):
    hdr = "".join(f"<div>{h}</div>" for h in header)
    rws = "".join(f"<div class=\"tr-blog-4cols\">{''.join(f'<div>{c}</div>' for c in r)}</div>" for r in rows)
    return f'<div class="custom-table-blog"><div class="tr-blog-4cols header">{hdr}</div>{rws}</div>'

def tabla_5cols(header, *rows):
    hdr = "".join(f"<div>{h}</div>" for h in header)
    rws = "".join(f"<div class=\"tr-blog-5cols\">{''.join(f'<div>{c}</div>' for c in r)}</div>" for r in rows)
    return f'<div class="custom-table-blog"><div class="tr-blog-5cols header">{hdr}</div>{rws}</div>'

def tabla_7cols(header, *rows):
    hdr = "".join(f"<div>{h}</div>" for h in header)
    rws = "".join(f"<div style=\"display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr;border-bottom:1px solid #eee;\">{''.join(f'<div style=\"padding:0.7rem;font-size:0.8rem;\">{c}</div>' for c in r)}</div>" for r in rows)
    return f'<div class="custom-table-blog"><div style=\"display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr;background:#000;color:#fff;font-weight:700;\">{hdr}</div>{rws}</div>'

def tabla_6cols(header, *rows):
    hdr = "".join(f"<div>{h}</div>" for h in header)
    rws = "".join(f"<div style=\"display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr;border-bottom:1px solid #eee;\">{''.join(f'<div style=\"padding:0.7rem;font-size:0.8rem;\">{c}</div>' for c in r)}</div>" for r in rows)
    return f'<div class="custom-table-blog"><div style=\"display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr;background:#000;color:#fff;font-weight:700;\">{hdr}</div>{rws}</div>'

def alerta(texto):
    return f'<div class="alerta-importante"><div class="alerta-icon">⚖️</div><div><p class="m-0" style="margin:0;"><span class="subrayado-amarillo">Importante</span><br>{texto}</p></div></div>'

def tip(emoji, texto):
    return f'<div class="tip-blog"><div style="font-size: 2.6em; line-height: 1;">{emoji}</div><p class="m-0" style="margin:0;">{texto}</p></div>'

# ─── 1. COLUMNA VERTEBRAL ──────────────────────────────────────────────────

def columna_fracturas():
    return pagina_html(
        "Fracturas Vertebrales: porcentajes de incapacidad",
        "🦴", "Las fracturas de columna son lesiones graves que pueden dejar secuelas permanentes. Conoce los porcentajes de incapacidad laboral segun el nivel vertebral afectado.",
        "Columna Vertebral", 5, "1% - 60%", [
        ("Fracturas vertebrales - tabla completa", f'''
<p>Las fracturas vertebrales son lesiones frecuentes en accidentes laborales: caidas de altura, golpes directos o accidentes in itinere. La columna esta compuesta por 33 vertebras: 7 cervicales (C1-C7), 12 toracicas (T1-T12), 5 lumbares (L1-L5), 5 sacras y 4 coccigeas. Cada segmento tiene un porcentaje distinto segun el riesgo neurologico que implica su lesion.</p>
<p>El <strong>Baremo Laboral 2026</strong> clasifica las fracturas vertebrales en tres columnas: cuando la fractura consolida sin dejar secuelas (Sin Secuelas), cuando quedan secuelas como acunamiento o aplastamiento (Con Secuelas), y cuando el hueso no consolida y se forma una falsa articulacion (Pseudoartrosis).</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", "Sector"],
["Fractura de apofisis odontoides", "5%", "10%", "15%", "C1-C2"],
["Fractura o Luxofractura Cervical C1-C2", "6%", "12%", "18%", "C1-C2"],
["Fractura o Luxofractura Cervical C3-C7", "4%", "8%", "12%", "C3-C7"],
["Fractura o Luxofractura Dorsal D1-D10", "5%", "10%", "15%", "D1-D10"],
["Fractura o Luxofractura Dorsal D11-D12", "8%", "16%", "24%", "D11-D12"],
["Fractura o Luxofractura Lumbar L1", "8%", "16%", "24%", "L1"],
["Fractura o Luxofractura Lumbar L2-L5", "5%", "10%", "15%", "L2-L5"],
["Fractura de Apofisis Transversa/s y/o Espinosa/s", "1%", "2%", "3%", "C/D/L"],
["Fractura del Sacro", "3%", "6%", "9%", "Sacro"],
["Fractura y/o Luxacion del Coxis", "2%", "4%", "6%", "Coxis"],
)}
{alerta("El porcentaje 'Con Secuelas' aplica cuando la fractura presenta: acunamiento, aplastamiento, espondilolistesis, signos radiologicos de aflojamiento de implante, reseccion osea u osteotomia.")}
'''),
        ("Lesiones discales y ligamentarias", f'''
<p>Las hernias de disco y las luxaciones vertebrales con espondilolistesis tienen su propia tabla en el baremo. La hernia de disco es una de las patologias mas frecuentes en el ambito laboral, especialmente en tareas que requieren esfuerzo fisico repetitivo o levantamiento de cargas. Cuando el disco intervertebral se desplaza o se rompe, puede comprimir los nervios cercanos y generar dolor irradiado a brazos o piernas.</p>
{tabla_3cols(["Lesion", "Incapacidad", "Detalle"],
["Hernia de disco operada", "5%", "Incluye el procedimiento quirurgico"],
["Luxacion pura vertebral con espondilolistesis residual < 50%", "15%", "Unica o multiple"],
["Luxacion pura vertebral con espondilolistesis residual >= 50%", "20%", "Unica o multiple"],
)}
{tip("💡", "Si te operaron una hernia de disco por un accidente laboral, te corresponde un piso minimo del 5% de incapacidad. Si ademas quedaron secuelas, el porcentaje puede ser mayor segun la limitacion funcional que te haya quedado.")}
'''),
        ("Limitacion funcional de columna", f'''
<p>Cuando la fractura o lesion no encaja en las tablas anteriores, se mide la movilidad articular activa. A menor movimiento, mayor porcentaje de incapacidad.</p>
<h4>Columna cervical - limitacion funcional</h4>
{tabla_5cols(["Movilidad", "Flexion", "Extension", "Rotacion", "Inclinacion (c/u)"],
["0°", "4%", "4%", "4%", "2%"],
["> 0° y <= 10°", "3%", "2%", "2%", "2%"],
["> 10° y < 30°", "1%", "1%", "1%", "1%"],
)}
<h4>Columna dorsolumbar - limitacion funcional</h4>
{tabla_5cols(["Movilidad", "Flexion", "Extension", "Rotacion", "Inclinacion (c/u)"],
["<= 10°", "8%", "3%", "4%", "3%"],
["> 10° y <= 20°", "8%", "1%", "1%", "1%"],
["> 20° y <= 40°", "5%", "--", "--", "--"],
["> 40° y <= 60°", "3%", "--", "--", "--"],
["> 60° y < 80°", "1%", "--", "--", "--"],
)}
{tip("📐", "La flexion es el movimiento mas afectado en las lesiones lumbares. Una limitacion severa de la flexion (menos de 10 grados) ya otorga un 8% de incapacidad.")}
'''),
        ("Anquilosis de columna", f'''
<p>Cuando la columna queda completamente rigida (anquilosis), los porcentajes son significativamente mas altos. El tope maximo para el sector cervical es 40% y para el dorsolumbar es 60%.</p>
<h4>Anquilosis cervical</h4>
{tabla_4cols(["Posicion", "Flexion", "Extension", "Rotac./Inclinac."],
["0°", "20%", "20%", "20%"],
["> 0° y < 20°", "25%", "25%", "25%"],
[">= 20°", "40%", "40%", "40%"],
)}
<h4>Anquilosis dorsolumbar</h4>
{tabla_4cols(["Posicion", "Flexion", "Extension", "Rotac./Inclinac."],
[">= 0° y <= 20°", "37%", "50%", "60%"],
["> 20° y <= 60°", "40%", "60%", "60%"],
["> 60°", "60%", "--", "--"],
)}
{alerta("La sumatoria de secuelas en columna no puede superar el 40% para sector Cervical ni el 60% para sector Dorsolumbar.")}
'''),
    ])

# ─── 2. HOMBRO ─────────────────────────────────────────────────────────────

def hombro():
    return pagina_html(
        "Lesiones de Hombro y Cintura Escapular: porcentajes",
        "🏋️", "El hombro es una de las articulaciones mas complejas del cuerpo. Fracturas de clavicula, escapula, humero, luxaciones, lesion del manguito rotador y protesis. Todos los porcentajes del Baremo 2026.",
        "Hombro", 6, "2% - 66%", [
        ("Fracturas de hombro y cintura escapular", f'''
<p>El hombro esta compuesto por tres huesos: clavicula, escapula y humero, y cinco articulaciones. El manguito rotador es el conjunto de tendones que mantiene el humero dentro de la cavidad glenoidea y permite la movilidad. Las fracturas de hombro son comunes en caidas laborales, accidentes de transito y golpes directos.</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", "Nota"],
["Fractura de Clavicula", "2%", "4%", "6%", ""],
["Fractura de Escapula (excepto Cav. Glenoidea)", "2%", "4%", "6%", ""],
["Fractura de Cavidad Glenoidea", "6%", "12%", "18%", ""],
["Fractura de Humero", "8%", "16%", "24%", "Incluye proximal, diafisaria y distal"],
["Fractura de Cubito", "4%", "8%", "12%", ""],
["Fractura de Radio (incluye Estiloides Radial)", "4%", "8%", "12%", ""],
)}
{tip("💪", "La fractura de humero es la mas incapacitante del grupo: arranca en 8% sin secuelas y puede llegar al 24% si el hueso no consolida (pseudoartrosis).")}
'''),
        ("Protesis de hombro (artroplastias)", f'''
<p>Cuando el hombro sufre un dano tan severo que requiere reemplazo articular, el baremo asigna los siguientes porcentajes:</p>
{tabla_3cols(["Protesis", "Sin Secuelas", "Con Secuelas"],
["Protesis parcial o total de Hombro", "15%", "30%"],
["Protesis de Codo", "10%", "20%"],
["Protesis de Cupula Radial", "5%", "10%"],
)}
{alerta("Una protesis de hombro por accidente laboral ya otorga un piso del 15% de incapacidad, incluso si no hay complicaciones. Si hay angulacion, aflojamiento del implante o infeccion, puede llegar al 30%.")}
'''),
        ("Luxaciones e inestabilidad del hombro", f'''
<p>Las luxaciones de hombro son lesiones frecuentes. Cuando se repiten en el tiempo, se habla de luxacion recidivante. El baremo tambien contempla la inestabilidad cronica por perdida de partes oseas o blandas.</p>
{tabla_3cols(["Lesion", "Incapacidad", ""],
["Luxacion acromio-clavicular o esternoclavicular", "2%", ""],
["Luxacion glenohumeral sin recidiva documentada", "4%", ""],
["Luxacion glenohumeral recidivante", "12%", ""],
["Inestabilidad por perdida de partes - Hombro", "30%", "Maximo del segmento"],
["Inestabilidad por perdida de partes - Codo", "20%", ""],
["Inestabilidad por perdida de partes - Muneca", "15%", ""],
["Inestabilidad por perdida de partes - Pulgar", "5%", ""],
["Inestabilidad por perdida de partes - Dedo", "1%", ""],
)}
'''),
        ("Lesiones del manguito rotador y musculo-tendinosas", f'''
<p>El manguito rotador es la zona del hombro con mas riesgo de sufrir lesiones. Esta formado por los tendones que evitan la friccion y otorgan estabilidad y fuerza a la articulacion. Las lesiones mas comunes son: tendinitis (inflamacion de los tendones), bursitis (inflamacion de la bursa), ruptura del manguito rotador y luxacion de hombro.</p>
{tabla_3cols(["Lesion", "Sin Secuelas", "Con Secuelas"],
["Ruptura completa de deltoides", "6%", "12%"],
["Ruptura completa de triceps", "4%", "8%"],
["Ruptura completa de biceps", "4%", "8%"],
["Seccion completa de flexores de antebrazo", "5%", "10%"],
["Seccion completa de extensores de antebrazo", "5%", "10%"],
)}
<p>Se considera "Con Secuelas" cuando hay diastasis (separacion entre los cabos del tendon), retraccion o adherencias. El hombro se mide por limitacion funcional, que depende de la gravedad de la lesion y va del 0 al 35%.</p>
'''),
        ("Limitacion funcional de hombro", f'''
<p>Se miden 6 movimientos: abduccion, elevacion anterior, aduccion, elevacion posterior, rotacion interna y rotacion externa.</p>
{tabla_7cols(["Movilidad", "Abduccion", "Elevac. Anterior", "Aduccion", "Elevac. Posterior", "Rotac. Interna", "Rotac. Externa"],
["<= 10°", "10%", "10%", "2%", "2%", "3%", "7%"],
["> 10° y < 30°", "10%", "10%", "1%", "1%", "1%", "7%"],
["30°", "10%", "10%", "--", "1%", "1%", "5%"],
["> 30° y <= 60°", "7%", "7%", "--", "--", "--", "3%"],
["> 60° y <= 80°", "4%", "4%", "--", "--", "--", "1%"],
["> 80° y <= 90°", "4%", "4%", "--", "--", "--", "--"],
["> 90° y <= 120°", "2%", "2%", "--", "--", "--", "--"],
["> 120° y <= 140°", "1%", "1%", "--", "--", "--", "--"],
)}
{tip("📐", "La abduccion y la elevacion anterior son los movimientos que mas porcentaje de incapacidad generan cuando estan limitados. La rotacion externa tambien tiene valores altos.")}
'''),
        ("Anquilosis de hombro", f'''
{tabla_6cols(["Posicion", "Abduccion", "Elevac. Anterior", "Aducc./Elev. Post.", "Rotac. Int.", "Rotac. Ext."],
["<= 20°", "30%", "30%", "45%", "45%", "30%"],
["> 20° y <= 30°", "25%", "25%", "60%", "60%", "35%"],
["> 30° y <= 80°", "35%", "35%", "--", "--", "60%"],
["> 80° y <= 120°", "50%", "50%", "--", "--", "--"],
["> 120°", "60%", "60%", "--", "--", "--"],
)}
{alerta("El tope para el Miembro Superior completo (hombro + brazo + codo + antebrazo + mano) es de 66%, equivalente a una amputacion interescapulotoracica.")}
'''),
    ])

# ─── 3. RODILLA ────────────────────────────────────────────────────────────

def rodilla():
    return pagina_html(
        "Lesiones de Rodilla: fracturas, ligamentos y meniscos",
        "🦵", "La rodilla es la articulacion mas compleja del cuerpo y una de las mas afectadas en accidentes laborales. Fracturas de femur, rotula, tibia, lesion de LCA, meniscos y protesis. Todos los porcentajes del Baremo 2026.",
        "Rodilla", 7, "1% - 70%", [
        ("Fracturas del miembro inferior (incluye rodilla)", f'''
<p>Las fracturas de los huesos que componen la rodilla y el miembro inferior se clasifican segun el hueso afectado. La fractura de femur es una de las mas graves y puede requerir cirugia con placa y tornillos. La fractura de rotula puede tratarse de forma conservadora o quirurgica segun el desplazamiento.</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", "Nota"],
["Fractura de Pelvis - Iliaco (por hemipelvis)", "4%", "8%", "12%", ""],
["Fractura de ramas isquiopubiana y/o iliopubiana", "2%", "4%", "6%", ""],
["Fractura de Cotilo", "5%", "10%", "15%", ""],
["Fractura de Femur (incluye cadera)", "10%", "20%", "30%", "El hueso mas grande del cuerpo"],
["Fractura de Rotula", "3%", "4%", "6%", ""],
["Fractura de Tibia (incluye pilon tibial)", "10%", "20%", "30%", "Soporta el peso del cuerpo"],
["Fractura de Perone", "2%", "4%", "6%", ""],
)}
{tip("💪", "La fractura de femur y la fractura de tibia son las mas graves del miembro inferior: arrancan en 10% y pueden llegar al 30% si el hueso no consolida (pseudoartrosis).")}
'''),
        ("Protesis de rodilla", f'''
<p>Cuando la lesion de rodilla es tan grave que requiere un reemplazo articular completo o parcial, el baremo asigna:</p>
{tabla_3cols(["Protesis", "Sin Secuelas", "Con Secuelas"],
["Protesis parcial o total de Cadera", "20%", "40%"],
["Protesis parcial o total de Rodilla", "20%", "40%"],
["Protesis de Tobillo", "10%", "20%"],
)}
{alerta("Una protesis de rodilla por accidente laboral otorga un piso del 20% de incapacidad, pudiendo llegar al 40% si hay complicaciones como angulacion, aflojamiento del implante o infeccion.")}
'''),
        ("Lesiones de ligamentos y meniscos", f'''
<p>Las lesiones de rodilla mas frecuentes en el ambito laboral son las de ligamentos y meniscos. El LCA (ligamento cruzado anterior) es el que mas se rompe, generalmente en torsiones o cambios de direccion bruscos. El tratamiento puede ser quirurgico (reconstruccion con tendon) o conservador segun cada caso.</p>
{tabla_3cols(["Lesion", "Incapacidad", "Nota"],
["Luxacion de rotula", "1%", ""],
["Ruptura completa de LCA", "7%", "Operado o no"],
["Ruptura completa de LCP", "4%", "Operado o no"],
["Ruptura completa de ligamento lateral interno", "3%", "Operado o no"],
["Ruptura completa de ligamento lateral externo", "3%", "Operado o no"],
["Lesion meniscal operada", "4%", "Meniscectomia, meniscoplastia, sutura"],
["Lesion meniscal NO operada con hipotrofia y/o hidrartrosis", "8%", ""],
["Artroscopia diagnostico-terapeutica", "1%", "Lavado, drenaje, exploracion"],
)}
{tip("⚠️", "La lesion meniscal no operada puede alcanzar el 8% si hay hipotrofia del cuadriceps (diferencia de perimetria >= 2 cm medida a 7 cm sobre la rotula).")}
'''),
        ("Lesiones musculares y tendinosas de rodilla y pierna", f'''
<p>Las rupturas completas de musculos y tendones del miembro inferior tambien estan contempladas en el baremo. La ruptura del tendon de Aquiles es una lesion laboral tipica por esfuerzo repentino o caida.</p>
{tabla_3cols(["Lesion", "Incapacidad", "Detalle"],
["Pelvis inestable (incluye fracturas de pelvis)", "20%", "Se suma al miembro de mayor incapacidad"],
["Ruptura completa del cuadriceps", "5%", ""],
["Ruptura completa del biceps crural", "5%", ""],
["Ruptura de tendon/es de pata de ganso", "2%", ""],
["Ruptura completa del gastrocnemio (gemelos)", "3%", ""],
["Ruptura completa del plantar delgado", "1%", ""],
["Ruptura completa del tendon de Aquiles", "4%", ""],
["Seccion completa de flexores pierna, tobillo y/o pie", "5%", ""],
["Seccion completa de extensores pierna, tobillo y/o pie", "5%", ""],
)}
{tip("🏥", "La ruptura del tendon de Aquiles puede requerir cirugia y meses de rehabilitacion. El baremo le asigna un 4% de incapacidad.")}
'''),
        ("Limitacion funcional de rodilla", f'''
<h4>Limitacion funcional</h4>
{tabla_3cols(["Movilidad", "Flexion", "Extension"],
["<= 10°", "27%", "--"],
["> 10° y <= 30°", "20%", "10%"],
["> 30° y <= 60°", "15%", "20%"],
["> 60° y <= 90°", "8%", "30%"],
["> 90° y <= 120°", "3%", "50%"],
)}
<h4>Anquilosis de rodilla</h4>
{tabla_3cols(["Posicion de Anquilosis", "Incapacidad", ""],
["<= 10° (casi recta)", "30%", ""],
["> 10° y <= 50°", "40%", ""],
["> 50° (muy flexionada)", "50%", ""],
)}
{alerta("El tope maximo para el segmento Rodilla es de 55% sumando todas las secuelas de ese segmento. Para todo el miembro inferior, el tope es 70% (equivalente a desarticulacion coxofemoral).")}
'''),
    ])

# ─── 4. MANO ───────────────────────────────────────────────────────────────

def mano():
    return pagina_html(
        "Lesiones de Mano y Muneca: fracturas, amputaciones y tendones",
        "✋", "La mano es la parte del cuerpo mas expuesta a lesiones laborales. Fracturas de cada hueso del carpo, metacarpianos y falanges, amputaciones de todos los niveles, y lesiones tendinosas. Todos los porcentajes del Baremo 2026.",
        "Mano", 8, "1% - 66%", [
        ("Fracturas de la mano y muneca", f'''
<p>La muneca esta formada por el cubito, el radio y ocho huesos del carpo (escafoides, semilunar, piramidal, pisiforme, trapecio, trapezoide, grande y ganchoso). Las fracturas de muneca mas conocidas son la de Colles (radio distal con desplazamiento dorsal) y la de Smith (radio distal con desplazamiento volar). La fractura de escafoides es la mas clasica en caidas con la mano abierta.</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", "Sector"],
["Fractura de Escafoides", "5%", "10%", "15%", "Carpo"],
["Fractura de Semilunar", "5%", "10%", "15%", "Carpo"],
["Fractura de otro hueso del Carpo - unico", "1%", "2%", "3%", "Carpo"],
["Fractura de otro hueso del Carpo - multiple (2 o mas)", "3%", "6%", "9%", "Carpo"],
["Fractura base 1er Metacarpiano (incluye trapecio)", "7%", "14%", "21%", "Pulgar"],
["Fractura 1er Metac. (excepto base) / 2do-5to Metac.", "4%", "8%", "12%", "Metacarpo"],
["Fractura de Pulgar - falange proximal", "5%", "10%", "15%", "Pulgar"],
["Fractura de Pulgar - falange distal", "5%", "10%", "15%", "Pulgar"],
["Fractura de Dedo (indice/mayor/anular/menique) - falange proximal", "2%", "3%", "4%", "Dedo"],
["Fractura de Dedo - falange media", "2%", "3%", "4%", "Dedo"],
["Fractura de Dedo - falange distal", "2%", "3%", "4%", "Dedo"],
["Fractura extremo distal falange distal de dedo", "1%", "", "", "Dedo"],
)}
{alerta("La incapacidad por fractura/s de falange/s del PULGAR no puede superar el 40%. Para los demas dedos (indice a menique), el tope es 10%.")}
'''),
        ("Amputaciones de la mano y dedos", f'''
<p>Las amputaciones de dedos son lesiones graves que el baremo clasifica con precision segun el nivel de amputacion. Cada dedo tiene una funcion especifica en la mano y el porcentaje de incapacidad refleja la importancia de la parte amputada.</p>
<h4>Amputacion del Pulgar</h4>
{tabla_3cols(["Nivel", "Incapacidad", ""],
["Trapeciometacarpiana", "40%", "Tope del pulgar"],
["Metacarpiano", "35%", ""],
["Metacarpofalangica (MTCF)", "30%", ""],
["Falange proximal", "25%", ""],
["Interfalangica (IF)", "15%", ""],
["Falange distal", "8%", ""],
["Pulpejo (sin lesion osea)", "2%", ""],
["Con transferencia de rayo", "37%", ""],
)}
<h4>Amputacion de un dedo (indice, mayor, anular o menique)</h4>
{tabla_3cols(["Nivel", "Incapacidad", ""],
["Carpo", "15%", ""],
["Metacarpiano", "11%", ""],
["Metacarpofalangica (MTCF)", "10%", "Tope del dedo"],
["Falange proximal", "9%", ""],
["Interfalangica proximal (IFP)", "8%", ""],
["Falange media", "7%", ""],
["Interfalangica distal (IFD)", "6%", ""],
["Falange distal", "3%", ""],
["Pulpejo (sin lesion osea)", "1%", ""],
["Con transferencia de rayo", "12%", ""],
)}
{tip("✋", "La amputacion de los cinco dedos a nivel del carpo otorga un 50% de incapacidad. La de cuatro dedos conservando el pulgar: 40%. La amputacion de la mano a nivel de la muneca: 50%.")}
'''),
        ("Limitacion funcional del pulgar", f'''
<p>Se miden los movimientos de las 3 articulaciones del pulgar: CMTC (carpometacarpiana), MTCF (metacarpofalangica) e IF (interfalangica).</p>
{tabla_7cols(["Movilidad", "CMTC Flex", "CMTC Ext", "MTCF Flex", "MTCF Ext", "IF Flex", "IF Ext"],
["<= 10°", "2%", "3%", "12%", "--", "10%", "--"],
["> 10° y <= 20°", "--", "2%", "8%", "2%", "8%", "1%"],
["> 20° y <= 30°", "--", "--", "4%", "4%", "5%", "3%"],
["> 30° y <= 50°", "--", "--", "2%", "8%", "3%", "5%"],
["> 50° y <= 70°", "--", "--", "--", "12%", "1%", "8%"],
["> 70°", "--", "--", "--", "12%", "--", "10%"],
)}
'''),
        ("Limitacion funcional de dedos (indice a menique)", f'''
{tabla_7cols(["Movilidad", "MTCF Flex", "MTCF Ext", "IFP Flex", "IFP Ext", "IFD Flex", "IFD Ext"],
["<= 10°", "4%", "--", "4%", "--", "2%", "--"],
["> 10° y <= 30°", "3%", "1%", "3%", "1%", "1%", "1%"],
["> 30° y <= 50°", "2%", "2%", "2%", "2%", "1%", "1%"],
["> 50° y <= 70°", "2%", "2%", "2%", "2%", "--", "2%"],
["> 70° y <= 80°", "1%", "3%", "1%", "3%", "--", "--"],
["> 80° y <= 90°", "--", "4%", "1%", "3%", "--", "--"],
["> 90°", "--", "--", "--", "4%", "--", "--"],
)}
'''),
        ("Anquilosis de la mano", f'''
{tabla_3cols(["Articulacion", "Posicion funcional", "No funcional"],
["Pulgar - CMC (trapeciometacarpiana)", "6%", "16%"],
["Pulgar - MTCF (metacarpofalangica)", "11%", "14%"],
["Pulgar - IF (interfalangica)", "8%", "10%"],
["Indice/Mayor/Anular/Menique - MTCF", "5%", "7%"],
["Indice/Mayor/Anular/Menique - IFP", "5%", "7%"],
["Indice/Mayor/Anular/Menique - IFD", "2%", "4%"],
)}
<p>Se considera <strong>posicion funcional</strong> cuando la articulacion queda en el angulo de uso normal (pulgar: 20° de flexion; dedos: 50° para MTCF e IFP, 10° para IFD).</p>
{tip("👍", "La anquilosis del pulgar en posicion no funcional puede dar hasta 16% solo por la CMC, mas lo que corresponda por otras articulaciones. La suma de todas las lesiones de un dedo no puede superar el tope de amputacion.")}
'''),
    ])

# ─── 5. FEMUR ──────────────────────────────────────────────────────────────

def femur():
    return pagina_html(
        "Fractura de Femur: porcentajes de incapacidad",
        "🦵", "El femur es el hueso mas grande y resistente del cuerpo humano. Una fractura de femur es una lesion grave que puede dejar secuelas importantes. Conoce los porcentajes de incapacidad del Baremo 2026.",
        "Femur", 5, "10% - 70%", [
        ("La lesion", f'''
<p>El femur es el hueso mas largo y pesado del cuerpo humano. Se extiende desde la cadera hasta la rodilla y soporta el peso del cuerpo. Las fracturas de femur pueden ocurrir a distintos niveles: cuello femoral (cerca de la cadera), diafisis (la parte media del hueso) o supracondileas (cerca de la rodilla).</p>
<p>Son lesiones graves que suelen requerir cirugia con colocacion de placa y tornillos o clavo intramedular. La recuperacion es larga y muchas veces quedan secuelas como acortamiento del miembro, limitacion funcional o pseudoartrosis (falta de consolidacion del hueso).</p>
<p>El <strong>Baremo Laboral 2026</strong> establece los siguientes porcentajes:</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", "Nota"],
["Fractura de Femur (incluye cadera)", "10%", "20%", "30%", "Incluye cuello, diafisaria y supracondilea"],
)}
{tip("⚠️", "Si la fractura de femur se consolida en mal posicion (deseje, angulada o rotada), el porcentaje puede ser mayor. La pseudoartrosis de femur puede requerir nuevas cirugias e injertos oseos.")}
'''),
        ("Amputaciones del miembro inferior", f'''
<p>Cuando la lesion es tan grave que requiere la amputacion del miembro, los porcentajes son los mas altos del capitulo osteoarticular:</p>
{tabla_3cols(["Nivel de Amputacion", "Incapacidad", "Tope"],
["Desarticulacion Coxofemoral", "70%", "Maximo del miembro inferior"],
["Amputacion de Muslo - 1/3 proximal", "70%", ""],
["Amputacion de Muslo - 1/3 medio o distal", "60%", ""],
["Desarticulacion de Rodilla", "55%", "Tope del segmento rodilla"],
["Amputacion a nivel de la Pierna", "40%", ""],
["Amputacion de Syme (tobillo con talon)", "35%", ""],
["Amputacion pie tipo Chopart/Lisfranc", "30%", ""],
["Amputacion Transmetatarsiana (5 rayos)", "28%", ""],
["Amputacion 1er Dedo del Pie - falange proximal", "12%", ""],
["Amputacion 1er Dedo del Pie - falange distal", "6%", ""],
["Amputacion 2do-5to Dedo - falange proximal", "3%", ""],
["Amputacion 2do-5to Dedo - falange distal", "1%", ""],
)}
{alerta("El tope maximo de sumatoria de secuelas en el miembro inferior es 70% (desarticulacion coxofemoral). En caso de amputacion bilateral, se aplica el criterio de capacidad restante.")}
'''),
    ])

# ─── 6. TIBIA Y PERONE ─────────────────────────────────────────────────────

def tibia_perone():
    return pagina_html(
        "Fracturas de Tibia y Perone: porcentajes de incapacidad",
        "🦯", "La tibia y el perone son los huesos de la pierna. La tibia soporta el peso del cuerpo y el perone da estabilidad. Conoce los porcentajes del Baremo 2026 para fracturas de pierna.",
        "Tibia y Perone", 4, "2% - 40%", [
        ("Fracturas de tibia y perone", f'''
<p>La tibia es el hueso que soporta el peso del cuerpo, ubicado en el lado interno de la pierna. Su funcion principal es transmitir las fuerzas del cuerpo hacia el pie. El perone es mas pequeno y delgado, se situa en el lado externo de la pierna y le da estabilidad a la pierna permitiendo al tobillo direccionar el movimiento.</p>
<p>Las fracturas de estos huesos pueden ser de uno o de ambos huesos y pueden estar desplazadas o no. El desplazamiento de las fracturas generalmente requiere cirugia, mientras que las fracturas sin desplazamiento pueden solucionarse con inmovilizacion y kinesiologia.</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", ""],
["Fractura de Tibia (incluye pilon tibial)", "10%", "20%", "30%", ""],
["Fractura de Perone", "2%", "4%", "6%", ""],
)}
<p>El platillo tibial es la parte superior de la tibia que forma la rodilla. Una fractura de platillo tibial con incongruencia articular puede dejar entre 15 y 20% de incapacidad.</p>
{tip("💡", "Las fracturas de tibia suelen ser abiertas (el hueso perfora la piel) porque la tibia esta justo debajo de la piel, sin mucha proteccion muscular. Esto aumenta el riesgo de infeccion.")}
'''),
        ("Pseudoartrosis de tibia y perone", f'''
<p>La pseudoartrosis es una de las complicaciones mas temidas en las fracturas de pierna. Ocurre cuando el hueso no consolida y se forma una falsa articulacion. Esto puede requerir nuevas cirugias con injertos oseos.</p>
{tabla_3cols(["Tipo de Pseudoartrosis", "Incapacidad", ""],
["Tibia, extremo proximal (secuela de osteotomia fallida)", "20-40%", ""],
["Tibia diafisaria", "20-40%", ""],
["Perone diafisaria", "5-10%", ""],
["Tibia y Perone combinadas", "20-40%", ""],
)}
'''),
    ])

# ─── 7. TOBILLO ────────────────────────────────────────────────────────────

def tobillo():
    return pagina_html(
        "Fracturas de Tobillo: porcentajes de incapacidad",
        "🦶", "El tobillo es una articulacion compleja formada por tibia, perone y astrgalo. Las fracturas de tobillo son muy frecuentes en accidentes laborales por caidas, golpes o torceduras.",
        "Tobillo", 5, "3% - 45%", [
        ("Fracturas de tobillo", f'''
<p>La articulacion del tobillo es una articulacion sinovial formada por el extremo distal de la tibia (malcolo medial), el extremo distal del perone (malcolo externo), la parte superior del astrgalo, los ligamentos y la capsula articular. Permite movimientos de dorsiflexion, flexion plantar, inversion y eversion.</p>
<p>Las fracturas de tobillo se clasifican segun la cantidad de malcolos afectados:</p>
<ul style="margin-bottom:1.5rem; padding-left:2rem;">
<li><strong>Unimaleolar:</strong> afecta un solo malcolo (el perone o la tibia)</li>
<li><strong>Bimaleolar:</strong> afecta ambos malcolos (perone + tibia)</li>
<li><strong>Trimaleolar:</strong> afecta los dos malcolos + la parte posterior de la tibia (las mas complejas)</li>
</ul>
{tabla_3cols(["Lesion", "Incapacidad", "Nota"],
["Fractura de tobillo - malcolo peroneo", "3-9%", "segun el nivel de la fractura"],
["Fractura de tobillo - malcolo tibial medial", "3-9%", ""],
["Fractura de tobillo - malcolo tibial posterior", "3-9%", ""],
["Fractura bimaleolar o trimaleolar con congruencia articular", "10-15%", ""],
["Fractura bimaleolar o trimaleolar con incongruencia articular", "15-20%", ""],
["Inestabilidad de tobillo con confirmacion radiologica", "5-10%", ""],
["Inestabilidad de ambos tobillos", "15-30%", ""],
)}
{tip("🏥", "Las fracturas trimaleolares son las mas complejas y suelen requerir cirugia con placa y tornillos. La rehabilitacion kinesiologica es fundamental para recuperar la movilidad y estabilidad.")}
'''),
        ("Fractura de Calcaneo", f'''
<p>El calcaneo es el hueso mas grande del tarso del pie, ubicado en la parte posterior del pie y por debajo del tobillo. La fractura de calcaneo es una lesion grave que ocurre generalmente por caidas de altura (caer de pie).</p>
{tabla_3cols(["Lesion", "Incapacidad", "Nota"],
["Fractura de Calcaneo (tabla SRT 2026)", "6-18%", "segun secuelas"],
["Fractura con aplastamiento y artrosis subastragalina", "20-25%", ""],
["Fractura de ambos calcaneos con artrosis y marcha claudicante", "25-30%", ""],
)}
{tip("⚠️", "La fractura de calcaneo suele dejar secuelas importantes como artrosis subastragalina, dolor cronico y limitacion de la marcha. Si la fractura no produce artrosis pero limita la movilidad, el porcentaje lo determina un medico legista.")}
'''),
    ])

# ─── 8. AMPUTACIONES MIEMBRO SUPERIOR ──────────────────────────────────────

def amputaciones_ms():
    return pagina_html(
        "Amputaciones del Miembro Superior: porcentajes",
        "💪", "Las amputaciones del brazo, antebrazo y mano son las lesiones mas graves del miembro superior. El Baremo 2026 establece porcentajes precisos segun el nivel de amputacion.",
        "Amputaciones", 4, "1% - 100%", [
        ("Amputaciones del miembro superior", f'''
<p>Las amputaciones del miembro superior representan las lesiones mas graves y con los porcentajes de incapacidad mas altos. El baremo distingue cada nivel anatomico porque a mayor perdida del miembro, mayor es la incapacidad funcional. Si el miembro amputado es el habil (la mano que usa el trabajador para escribir, comer, etc.), se adiciona un 5% al porcentaje calculado.</p>
{tabla_3cols(["Nivel de Amputacion", "Incapacidad", "Tope del segmento"],
["Amputacion Interescapulotoracica", "66%", "Maximo MS"],
["Desarticulacion escapulohumeral / Cintura escapular", "66%", ""],
["Amputacion a nivel del brazo", "60%", ""],
["Desarticulacion o amputacion a nivel del codo", "60%", ""],
["Amputacion a nivel del antebrazo", "55%", ""],
["Amputacion de la mano a nivel de la muneca", "50%", "Tope mano/muneca"],
["Amputacion de los cinco dedos (carpo o MTCF)", "50%", ""],
["Amputacion de cuatro dedos (menos pulgar)", "40%", ""],
)}
<h4>Amputacion del Pulgar</h4>
{tabla_3cols(["Nivel", "Incapacidad", ""],
["Trapeciometacarpiana", "40%", "Tope del pulgar"],
["Metacarpiano", "35%", ""],
["Metacarpofalangica (MTCF)", "30%", ""],
["Falange proximal", "25%", ""],
["Interfalangica (IF)", "15%", ""],
["Falange distal", "8%", ""],
["Pulpejo (sin lesion osea)", "2%", ""],
)}
<h4>Amputacion de un dedo (indice / mayor / anular / menique)</h4>
{tabla_3cols(["Nivel", "Incapacidad", ""],
["Carpo", "15%", ""],
["Metacarpiano", "11%", ""],
["Metacarpofalangica (MTCF)", "10%", "Tope del dedo"],
["Falange proximal", "9%", ""],
["Interfalangica proximal (IFP)", "8%", ""],
["Falange media", "7%", ""],
["Interfalangica distal (IFD)", "6%", ""],
["Falange distal", "3%", ""],
["Pulpejo (sin lesion osea)", "1%", ""],
)}
{alerta("La sumatoria de secuelas en un mismo miembro superior no puede superar el 66% (equivalente a la amputacion interescapulotoracica). Si la lesion es en la mano habil, se adiciona un 5%.")}
'''),
    ])

# ─── 9. BRAZO (RADIO Y CUBITO) ─────────────────────────────────────────────

def brazo():
    return pagina_html(
        "Fracturas de Brazo: Radio y Cubito",
        "💪", "Las fracturas de cubito y radio son muy frecuentes en caidas donde apoyamos las manos. El antebrazo esta formado por estos dos huesos que trabajan en conjunto para permitir la rotacion de la muneca.",
        "Brazo", 4, "4% - 12%", [
        ("Fracturas de radio y cubito", f'''
<p>El cubito es el hueso mas interno del antebrazo, mientras que el radio se ubica en la parte externa y es el que se rompe con mayor facilidad. La mayoria de las fracturas de antebrazo suelen ser dobles (se fracturan ambos huesos) y son producidas por caidas o golpes directos.</p>
<p>Las fracturas se clasifican segun el nivel y patron de fractura, desplazamiento y grado de conminucion. Los tipos principales son: fractura abierta de cubito y radio, fractura de ambos huesos, fractura aislada de cubito, fractura de Monteggia (cubito proximal con luxacion de radio), fractura aislada de radio y fractura de Galeazzi (radio distal con luxacion de cubito).</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", ""],
["Fractura de Cubito", "4%", "8%", "12%", ""],
["Fractura de Radio (incluye Estiloides Radial)", "4%", "8%", "12%", ""],
)}
{tip("💡", "Las fracturas de antebrazo pueden requerir cirugia con placa y tornillos. La kinesiologia es fundamental para recuperar la pronacion y supinacion (movimiento de rotacion de la muneca).")}
'''),
        ("Fracturas de muneca (radio distal)", f'''
<p>Las fracturas de muneca son de las consultas mas frecuentes en traumatologia laboral. Los tipos principales son:</p>
<ul style="margin-bottom:1.5rem; padding-left:2rem;">
<li><strong>Fractura de Colles:</strong> radio distal con desplazamiento dorsal (la mas comun)</li>
<li><strong>Fractura de Smith:</strong> radio distal con desplazamiento volar (contraria a Colles)</li>
<li><strong>Fractura de Barton:</strong> fractura-luxacion de la articulacion radiocarpiana</li>
<li><strong>Fractura del chofer:</strong> fractura de la estiloides radial</li>
<li><strong>Fractura del estiloides cubital</strong></li>
</ul>
<p>El baremo valora la incapacidad por fractura de muneca en base a la limitacion funcional que tenga el trabajador, que puede ir del 0 al 8%. Ademas, contempla lesiones especificas:</p>
{tabla_3cols(["Lesion especifica", "Incapacidad", ""],
["Fractura de semilunar consolidada con necrosis", "6-9%", ""],
["Fractura de semilunar con necrosis y artrosis", "6-9%", ""],
["Fractura de escafoides con necrosis", "10-20%", ""],
["Fractura de escafoides con necrosis y artrosis", "15-25%", ""],
["Fractura de escafoides con pseudoartrosis", "15%", ""],
)}
'''),
    ])

# ─── 10. CADERA ────────────────────────────────────────────────────────────

def cadera():
    return pagina_html(
        "Lesiones de Cadera: fracturas y protesis",
        "🦴", "La cadera es la articulacion que conecta el femur con la pelvis. Las fracturas de cadera son lesiones graves que pueden requerir reemplazo articular.",
        "Cadera", 4, "5% - 40%", [
        ("Fracturas de la cadera y pelvis", f'''
<p>La cadera es una articulacion esferica formada por la cabeza del femur y el cotilo de la pelvis. Las fracturas de cadera son mas frecuentes en personas mayores pero tambien ocurren en accidentes laborales de alto impacto.</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", ""],
["Fractura de Cotilo", "5%", "10%", "15%", ""],
["Fractura de Pelvis - Iliaco (por hemipelvis)", "4%", "8%", "12%", ""],
["Fractura de ramas isquiopubiana y/o iliopubiana", "2%", "4%", "6%", ""],
["Fractura de Femur (incluye cuello femoral)", "10%", "20%", "30%", ""],
)}
<p>La <strong>fractura de cuello femoral</strong> es especialmente grave porque puede comprometer el riego sanguineo de la cabeza del femur y provocar necrosis, requiriendo una protesis de cadera.</p>
{tip("⚠️", "La fractura de cotilo con protrusion y necrosis de la cabeza femoral puede dejar entre 20 y 25% de incapacidad. La luxacion traumatica de cadera con fractura marginal y necrosis: 20-25%.")}
'''),
        ("Protesis de cadera", f'''
{tabla_3cols(["Protesis", "Sin Secuelas", "Con Secuelas"],
["Protesis parcial o total de Cadera", "20%", "40%"],
)}
{alerta("Una protesis de cadera por accidente laboral otorga un piso del 20% de incapacidad. Si hay complicaciones como aflojamiento del implante, infeccion o luxacion recidivante, puede llegar al 40%.")}
'''),
    ])

# ─── 11. DEDOS DEL PIE ─────────────────────────────────────────────────────

def dedos_pie():
    return pagina_html(
        "Lesiones de los Dedos del Pie: porcentajes",
        "🦶", "Los dedos del pie tambien tienen su valoracion en el baremo. Fracturas, amputaciones y limitacion funcional de cada dedo.",
        "Dedos del Pie", 4, "1% - 15%", [
        ("Fracturas de los dedos del pie", f'''
<p>Los dedos del pie poseen huesos muy pequenos alineados con precision. La fractura de cualquiera de estos huesos puede ocasionar molestias en la vida diaria y afectar la marcha. Se originan por traumas directos (caida de un objeto pesado) o indirectos (una cana).</p>
{tabla_5cols(["Lesion", "Sin Secuelas", "Con Secuelas", "Pseudoartrosis", ""],
["Fractura 1er Dedo del Pie - falange proximal", "2%", "4%", "6%", ""],
["Fractura 1er Dedo del Pie - falange distal", "1%", "2%", "3%", ""],
["Fractura 2do-5to Dedo del Pie - cualquier falange", "1%", "", "Aplica", ""],
)}
<h4>Amputaciones de dedos del pie</h4>
{tabla_3cols(["Amputacion", "Incapacidad", ""],
["1er Dedo - falange proximal", "12%", ""],
["1er Dedo - falange distal", "6%", ""],
["2do, 3ro o 4to Dedo - falange proximal", "3%", ""],
["5to Dedo - falange proximal", "3%", ""],
["2do-5to Dedo - falange media", "2%", ""],
["2do-5to Dedo - falange distal", "1%", ""],
)}
'''),
        ("Limitacion funcional y anquilosis de dedos del pie", f'''
<h4>Primer dedo del pie - limitacion funcional</h4>
{tabla_4cols(["Movilidad", "MTTF Flex. Dorsal", "MTTF Flex. Plantar", "IF Flex. Plantar"],
["0°", "3%", "3%", "3%"],
["> 0° y <= 10°", "2%", "2%", "2%"],
["> 10° y <= 20°", "1%", "1%", "1%"],
)}
<h4>Anquilosis de dedos del pie</h4>
{tabla_3cols(["Articulacion", "Posicion funcional", "No funcional"],
["Primer Dedo - MTTF (metatarsofalangica)", "4%", "8%"],
["Primer Dedo - IF (interfalangica)", "2%", "4%"],
["Resto de Dedos - MTTF", "2%", "3%"],
)}
{tip("🦶", "La limitacion funcional del resto de los dedos (2do a 5to) se valora en 1% cuando la flexion plantar de la MTTF es <= 20 grados.")}
'''),
    ])

# ─── 12. CICATRICES ────────────────────────────────────────────────────────

def cicatrices():
    return pagina_html(
        "Cicatrices en Rostro y Cuero Cabelludo: porcentajes",
        "😐", "El baremo contempla las cicatrices en el rostro y cuero cabelludo. La ART no paga por los puntos de sutura sino por la cicatriz que queda. Conoce los porcentajes segun ubicacion, tamano y disposicion.",
        "Cicatrices", 5, "0% - 40%", [
        ("Informacion general", f'''
<p>Una duda frecuente entre los trabajadores es si la ART paga por los puntos de sutura. La respuesta es <strong>NO</strong>. La ART no paga por los puntos sino por la cicatriz que le queda al trabajador como secuela de la herida que sufrio.</p>
<p>El porcentaje de incapacidad depende de tres factores: la longitud de la cicatriz, su disposicion (vertical u horizontal) y en que parte del rostro se encuentra, y la profundidad de la misma.</p>
<p>El baremo solo contempla las cicatrices en el rostro y cuero cabelludo. Si la herida esta en otra parte del cuerpo y no genera limitacion funcional, el porcentaje es 0%. Si la herida en otra parte del cuerpo afecta la funcionalidad, se evalua por la limitacion funcional y no por la cicatriz en si.</p>
'''),
        ("Scalp del cuero cabelludo", f'''
{tabla_3cols(["Lesion", "Incapacidad", "Detalle"],
["Herida en zona pilosa con cicatriz cubierta", "0%", "No se ve"],
["Herida en zona pilosa con cicatriz descubierta", "1-3%", ""],
["Scalp parcial con perdida de cabello - cicatriz cubierta", "1%", ""],
["Scalp parcial con cicatriz descubierta", "1-3%", ""],
["Scalp con perdida definitiva parcial - 0 a 5 cm diametro", "1-5%", ""],
["Scalp con perdida definitiva parcial - 5 a 10 cm", "5-10%", ""],
["Scalp con perdida definitiva parcial - mas de 10 cm", "10-20%", ""],
["Scalp con perdida TOTAL de capas - 0 a 5 cm", "5-10%", ""],
["Scalp con perdida TOTAL de capas - 5 a 10 cm", "10-20%", ""],
["Scalp con perdida TOTAL de capas - mas de 10 cm", "20-40%", "Maximo: 40%"],
)}
'''),
        ("Cicatrices en el rostro", f'''
<h4>Frente</h4>
{tabla_3cols(["Tipo de cicatriz", "Incapacidad", ""],
["Horizontal sobre surco, menor 4 cm", "0-2%", ""],
["Horizontal sobre surco, mayor 4 cm", "5-7%", ""],
["Transversal o perpendicular, menor 4 cm", "5-7%", ""],
["Transversal o perpendicular, mayor 4 cm", "8-10%", ""],
["Estelar o en superficie, menor 4 cm2", "5-7%", ""],
["Estelar o en superficie, mayor 4 cm2", "8-15%", ""],
["Con injerto cutaneo, menor 4 cm2", "5-7%", ""],
["Con injerto cutaneo, mayor 4 cm2", "8-15%", ""],
["Estallido de seno frontal sin complicacion", "5-10%", ""],
["Cicatriz lineal de arco superciliar", "0-2%", ""],
["Cicatriz retractil de arco superciliar (notoria)", "1-3%", ""],
)}
<h4>Pomulo</h4>
{tabla_3cols(["Tipo de cicatriz", "Incapacidad", ""],
["Lineal menor 5 cm", "1-3%", ""],
["Lineal mayor 5 cm", "4-6%", ""],
["En superficie menor 6 cm2", "0-5%", ""],
["En superficie mayor 6 cm2", "6-10%", ""],
)}
{tip("😐", "El maximo porcentaje por cicatrices es 40%, que corresponde a la perdida completa del cuero cabelludo.")}
'''),
    ])

# ─── 13. OJOS ──────────────────────────────────────────────────────────────

def ojos():
    return pagina_html(
        "Lesiones Oculares: porcentajes de incapacidad",
        "👁️", "Las lesiones oculares en el trabajo pueden ir desde una conjuntivitis hasta la perdida total de la vision. El Baremo 2026 establece porcentajes especificos para cada tipo de lesion ocular.",
        "Ojos", 5, "5% - 100%", [
        ("Informacion general", f'''
<p>Ante un accidente laboral con lesion en el ojo, el trabajador puede sufrir secuelas como ceguera, perdida del globo ocular, enucleacion (perdida total del ojo) o disminucion de la agudeza visual. Las causas pueden ser: accidentes con fuego o chispas, uso de elementos quimicos, fragmentos de objetos o golpes.</p>
<p>Para evaluar la incapacidad se consideran dos factores principales: la perdida de alineamiento ocular, posicion y movilidad de los parpados; y las lesiones de la via lagrimal y alteraciones miscelaneas.</p>
<p>La agudeza visual se determina con correccion si el lente es tolerado. La perdida de vision de un ojo se evalua segun la <strong>Tabla de Sene</strong>, aprobada por el Consejo Argentino de Oftalmologia.</p>
'''),
        ("Tabla de lesiones oculares", f'''
{tabla_3cols(["Lesion", "Incapacidad", ""],
["Querato-conjuntivitis cronica unilateral", "hasta 5%", ""],
["Querato-conjuntivitis cronica bilateral", "hasta 10%", ""],
["Pterigion post-traumatico", "5%", ""],
["Midriasis paralitica unilateral", "5%", ""],
["Midriasis paralitica bilateral", "10%", ""],
["Midriasis post-traumatica por lesion del iris unilateral", "5%", ""],
["Midriasis post-traumatica por lesion del iris bilateral", "10%", ""],
["Iridodialisis unilateral (con compromiso visual)", "5%", ""],
["Iridodialisis bilateral", "10%", ""],
["Ptosis palpebral unilateral con pupila descubierta", "5%", ""],
["Deformaciones palpebrales unilaterales", "5-10%", ""],
["Deformaciones palpebrales bilaterales", "10-20%", ""],
["Lagoftalmos residual unilateral", "5-10%", ""],
["Lagoftalmos residual bilateral", "10-20%", ""],
["Epi fora post-traumatica unilateral", "5-10%", ""],
["Epi fora post-traumatica bilateral", "10-20%", ""],
["Enucleacion con protesis", "45%", ""],
["Enucleacion sin protesis", "50%", ""],
["Enucleacion o evisceracion bilateral", "100%", "Invalidez total"],
["Oftalmia simpatico secuelar en el otro ojo", "100%", ""],
["Ceguera post-traumatica sin deformacion unilateral", "42%", ""],
["Ceguera con atrofia y deformacion que permite protesis", "45%", ""],
)}
{tip("👁️", "La enucleacion (perdida del globo ocular) con protesis otorga un 45% de incapacidad. Si es bilateral, 100%. La ceguera legal de un ojo sin deformacion: 42%.")}
'''),
    ])

# ─── 14. ENFERMEDADES PROFESIONALES ────────────────────────────────────────

def enf_profesionales():
    return pagina_html(
        "Enfermedades Profesionales: Tunel Carpiano, Hernias de Disco y mas",
        "🏥", "Las enfermedades profesionales son aquellas que se generan con el tiempo por las condiciones de trabajo. Conoce las mas comunes y sus porcentajes de incapacidad segun el Baremo 2026.",
        "Enf. Profesionales", 5, "0% - 40%", [
        ("Que son las enfermedades profesionales", f'''
<p>Las enfermedades profesionales son afecciones que se generan con el correr del tiempo en la salud psicofisica del trabajador, como consecuencia de las condiciones en las que realiza sus tareas. A diferencia del accidente laboral (que es un hecho traumatico repentino), la enfermedad profesional se desarrolla de forma progresiva.</p>
<p>El <strong>Decreto 658/96</strong> enumera las enfermedades profesionales reconocidas por el sistema y menciona los factores de riesgo a los que los trabajadores estan expuestos. El <strong>Decreto 49/2014</strong> incorporo nuevas enfermedades, como la hernia discal lumbosacra por tareas repetitivas.</p>
<p>Es importante entender que las enfermedades profesionales suelen ser <strong>rechazadas sistematicamente por las ART</strong>, alegando que son patologias preexistentes o que no estan listadas. Por eso es fundamental contar con un abogado especializado que realice el reclamo ante la SRT.</p>
'''),
        ("Sindrome del Tunel Carpiano", f'''
<p>El sindrome del tunel carpiano es una de las enfermedades profesionales mas comunes en trabajadores que realizan tareas repetitivas con las manos: lineas de produccion, uso intenso de computadoras, manejo de herramientas que producen vibracion.</p>
<p>El tunel carpiano es un pasaje estrecho rodeado de ligamentos y huesos ubicado en la palma de la mano. Cuando el <strong>nervio mediano</strong> es comprimido, se producen sintomas como entumecimiento, hormigueo y debilidad en los dedos.</p>
<p><strong>Sintomas mas comunes:</strong> hormigueo en dedos o entumecimiento, dolores en muneca y/o antebrazo que pueden extenderse hasta el hombro, debilidad para sostener objetos, hinchazon y dificultad para tareas finas.</p>
{tip("🏥", "El porcentaje de incapacidad por tunel carpiano depende del grado de compresion del nervio y de si fue operado o no. Un electromiograma es el estudio clave para determinar la severidad.")}
'''),
        ("Hernia de disco como enfermedad profesional", f'''
<p>La hernia de disco discal lumbosacra es reconocida como enfermedad profesional cuando el trabajador esta expuesto a tareas que requieren movimientos repetitivos y/o posiciones forzadas de la columna lumbosacra que implican levantar, trasladar o empujar objetos pesados (Decreto 49/2014).</p>
{tabla_3cols(["Tipo de hernia", "Incapacidad", "Nota"],
["Hernia de disco operada sin secuelas", "5%", "Piso minimo"],
["Hernia de disco inoperable (segun criterio medico)", "20-30%", ""],
["Hernia de disco operada con secuelas leves", "10-15%", ""],
["Hernia de disco operada con secuelas moderadas", "15-20%", ""],
["Hernia de disco operada con secuelas severas", "20-40%", ""],
)}
{alerta("Las ART suelen rechazar las hernias de disco alegando que son patologias preexistentes. Es fundamental contar con estudios medicos (RMN, electromiograma) que demuestren la relacion de causalidad con el trabajo.")}
'''),
        ("Lumbalgia y cervicalgia post-traumatica", f'''
<p>La lumbalgia (dolor en la parte baja de la espalda) y la cervicalgia (dolor en el cuello) pueden ser producto de un golpe brusco, mal esfuerzo o problemas en los discos. Ambas pueden volverse cronicas si persisten por mas de 3 meses.</p>
{tabla_3cols(["Lesion", "Incapacidad", "Condicion"],
["Lumbalgia post-traumatica sin alteraciones", "0%", ""],
["Lumbalgia con moderadas alteraciones clinicas y radiograficas", "0-5%", "Sin alteraciones EMG"],
["Lumbalgia con severas alteraciones clinicas y radiograficas", "5-10%", ""],
["Lumbociatalgia con alteraciones clinicoradiologicas leves a moderadas", "5-10%", "Con o sin alterac. EMG"],
["Cervicobraquialgia post-traumatica sin alteraciones", "0%", ""],
["Cervicobraquialgia con alteraciones leves a moderadas", "5-25%", ""],
)}
'''),
        ("Espondilolistesis traumatica", f'''
<p>La espondilolistesis es el desplazamiento de una vertebra sobre otra. Cuando es de origen traumatico, el baremo la clasifica por grados:</p>
{tabla_3cols(["Grado", "Sin afectacion EMG", "Con afectacion EMG"],
["Grado I", "0-2%", "10-15% (leve a moderada)"],
["Grado II", "2-4%", "10-15% (leve a moderada)"],
["Grado III", "4-6%", "20-40% (severa)"],
["Grado IV", "6-10%", "20-40% (severa)"],
)}
{tip("⚠️", "La espondilolistesis operada sin secuelas electromiograficas da 0% de incapacidad. Pero si quedan secuelas neurologicas, el porcentaje puede llegar al 40%.")}
'''),
    ])

# ─── 15. GRAN INVALIDEZ ────────────────────────────────────────────────────

def gran_invalidez():
    return pagina_html(
        "Gran Invalidez: que es y como se reclama",
        "♿", "La gran invalidez es la situacion mas grave contemplada por la Ley de Riesgos del Trabajo. Ocurre cuando el trabajador tiene una incapacidad >= 66% y necesita asistencia de un tercero para actos elementales de la vida cotidiana.",
        "Gran Invalidez", 3, "66% o mas", [
        ("Que es la gran invalidez", f'''
<p>El articulo 17 de la Ley de Contrato de Trabajo (Ley 24.557) considera que un trabajador posee <strong>gran invalidez</strong> cuando su porcentaje de incapacidad es igual o mayor al <strong>66%</strong> y le es necesaria la asistencia de un tercero en actos elementales de la vida cotidiana, como vestirse, comer, higienizarse o desplazarse.</p>
{tip("♿", "En estos casos no solo la ART debe pagar la indemnizacion de ley, sino que tambien debe abonar de por vida una renta mensual al trabajador.")}
'''),
        ("Que se puede reclamar", f'''
<p>Cuando se declara la gran invalidez, el trabajador tiene derecho a:</p>
<ul style="margin-bottom:1.5rem; padding-left:2rem;">
<li><strong>Indemnizacion por incapacidad permanente:</strong> calculada segun la formula de la LRT</li>
<li><strong>Renta vitalicia:</strong> por la asistencia permanente de un tercero</li>
<li><strong>Prestaciones medicas:</strong> continuas y de por vida si es necesario</li>
<li><strong>Rehabilitacion:</strong> para maximizar la funcionalidad restante</li>
</ul>
{alerta("La gran invalidez requiere un dictamen medico que certifique tanto el porcentaje de incapacidad como la necesidad de asistencia de terceros. Es fundamental contar con un abogado especializado.")}
'''),
    ])

# ─── 16. PISOS MINIMOS ─────────────────────────────────────────────────────

def pisos_minimos():
    return pagina_html(
        "Pisos Minimos de Indemnizacion: que son y como se calculan",
        "💰", "La ley garantiza un piso minimo para las indemnizaciones por accidentes laborales. Si el calculo da menos, se aplica el piso. Conoce como funciona.",
        "Pisos Minimos", 3, "Variable", [
        ("Que son los pisos minimos", f'''
<p>La Ley 24.557 preve pisos minimos para las prestaciones dinerarias por incapacidades permanentes, establecidos en los articulos 14, 15, 17 y 18 de la ley, asi como las compensaciones adicionales del articulo 11.</p>
<p>La <strong>Superintendencia de Riesgos del Trabajo (SRT)</strong> es la encargada de actualizar semestralmente los pisos minimos con el indice <strong>RIPTE</strong> (Remedicion Impositiva de los Trabajadores Estables).</p>
<p>El <strong>Decreto 1694/2009</strong> es el que garantiza los pisos minimos. Funciona asi:</p>
<ul style="margin-bottom:1.5rem; padding-left:2rem;">
<li>Si el resultado de la formula matematica supera el piso minimo: se aplica ese resultado</li>
<li>Si el resultado de la formula es menor al piso minimo: se aplica el piso</li>
</ul>
<p>Los pisos minimos benefician especialmente a los trabajadores que cobran una remuneracion menor, garantizando que reciban una indemnizacion justa independientemente de su sueldo.</p>
{tip("💰", "Para calcular tu indemnizacion se usa la formula: (sueldo x edad x % incapacidad) / factores. Si el resultado es menor al piso minimo actualizado por RIPTE, se aplica el piso.")}
'''),
    ])

# ─── 17. FALLECIMIENTO ─────────────────────────────────────────────────────

def fallecimiento():
    return pagina_html(
        "Fallecimiento del Trabajador: indemnizacion para los derechohabientes",
        "🕊️", "Cuando un trabajador fallece por un accidente laboral o enfermedad profesional, la ART debe pagar una indemnizacion a sus derechohabientes.",
        "Fallecimiento", 4, "Variable", [
        ("Indemnizacion por fallecimiento", f'''
<p>Cuando el trabajador fallece como consecuencia de una enfermedad profesional o un accidente laboral, la ART debe pagar a los derechohabientes la indemnizacion prevista en el <strong>articulo 18 de la Ley 24.557</strong>.</p>
<p>Es importante aclarar que esta indemnizacion es <strong>diferente</strong> de la que debe abonar el empleador por antigueedad del trabajador (Art. 248 LCT) y del Decreto 1567/74 que preve un seguro de vida obligatorio.</p>
<p>Para realizar el reclamo ante la ART es <strong>obligatorio</strong> contar con el patrocinio letrado de un abogado. La indemnizacion no es un monto fijo: depende del sueldo del trabajador y de su edad al momento del fallecimiento, calculado segun la formula de la LRT con intereses hasta el momento del pago.</p>
'''),
        ("Quienes pueden reclamar", f'''
<p>Los derechohabientes con derecho a cobrar la indemnizacion son:</p>
<ul style="margin-bottom:1.5rem; padding-left:2rem;">
<li>La viuda o el viudo</li>
<li>El/la conviviente</li>
<li>Los hijos solteros y las hijas solteras</li>
<li>Las hijas viudas (si no gozan de jubilacion, pension o prestacion no contributiva)</li>
<li>Todos los hijos hasta los 21 anos de edad</li>
<li>Los padres, en partes iguales, si no hay hijos ni conyuge conviviente</li>
</ul>
{tip("⚖️", "Para que la ART otorgue cobertura es necesario que el certificado de defuncion determine las causas de la muerte y se compruebe la relacion de causalidad con el trabajo.")}
'''),
        ("Exclusiones: cuando la ART no paga", f'''
<p>El articulo 6, inciso tercero de la Ley 24.557 establece dos supuestos en los que la ART <strong>no es responsable</strong>:</p>
<ol style="margin-bottom:1.5rem; padding-left:2rem;">
<li>Accidentes de trabajo y enfermedades profesionales causados por <strong>dolo del trabajador</strong> o por <strong>fuerza mayor extrana al trabajo</strong></li>
<li>Incapacidades del trabajador <strong>preexistentes</strong> a la iniciacion de la relacion laboral y acreditadas en el examen preocupacional</li>
</ol>
{alerta("En caso de fallecimiento por enfermedad profesional, se requiere un dictamen medico (judicial o administrativo) que determine la relacion de causalidad entre la muerte y la enfermedad laboral.")}
'''),
    ])

# ─── GENERAR ────────────────────────────────────────────────────────────────

PAGINAS = [
    ("fracturas-vertebrales", columna_fracturas()),
    ("lesion-hombro", hombro()),
    ("lesion-rodilla", rodilla()),
    ("lesion-mano-dedo", mano()),
    ("lesion-femur", femur()),
    ("lesion-tibia-perone", tibia_perone()),
    ("lesion-tobillo", tobillo()),
    ("amputaciones-miembro-superior", amputaciones_ms()),
    ("lesion-brazo-radio-cubito", brazo()),
    ("lesion-cadera", cadera()),
    ("lesion-dedos-pie", dedos_pie()),
    ("cicatrices-rostro", cicatrices()),
    ("lesiones-oculares", ojos()),
    ("enfermedades-profesionales", enf_profesionales()),
    ("gran-invalidez", gran_invalidez()),
    ("pisos-minimos-indemnizacion", pisos_minimos()),
    ("fallecimiento-trabajador", fallecimiento()),
]

def generar_index():
    categorias = [
        ("Columna Vertebral", ["fracturas-vertebrales"]),
        ("Hombro", ["lesion-hombro"]),
        ("Rodilla", ["lesion-rodilla"]),
        ("Mano", ["lesion-mano-dedo"]),
        ("Femur", ["lesion-femur"]),
        ("Tibia y Perone", ["lesion-tibia-perone"]),
        ("Tobillo", ["lesion-tobillo"]),
        ("Cadera", ["lesion-cadera"]),
        ("Brazo", ["lesion-brazo-radio-cubito"]),
        ("Dedos del Pie", ["lesion-dedos-pie"]),
        ("Amputaciones", ["amputaciones-miembro-superior"]),
        ("Cicatrices", ["cicatrices-rostro"]),
        ("Ojos", ["lesiones-oculares"]),
        ("Enfermedades Profesionales", ["enfermedades-profesionales"]),
        ("Gran Invalidez", ["gran-invalidez"]),
        ("Pisos Minimos", ["pisos-minimos-indemnizacion"]),
        ("Fallecimiento", ["fallecimiento-trabajador"]),
    ]

    slugs_map = {s: h for s, h in PAGINAS}

    def get_title(slug):
        html = slugs_map[slug]
        for line in html.split("\n"):
            if "<title>" in line:
                return line.split("<title>")[1].split("|")[0].strip()
        return slug

    cat_links = ""
    for cat, slugs in categorias:
        cat_links += f'<h2 class="categoria">{cat}</h2>\n<ul>\n'
        for slug in slugs:
            tit = get_title(slug)
            cat_links += f'<li><a href="{slug}.html"><span class="nav-num">1</span> {tit}</a></li>\n'
        cat_links += "</ul>\n"

    html = f'''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baremo Laboral 2026 - Muestras de Lesiones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {{ margin: 0; padding: 0; box-sizing: border-box; }}
        body {{ font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #fafafa; color: #1a1a1a; line-height: 1.6; }}
        .contenedor {{ max-width: 800px; margin: 0 auto; padding: 2rem 1.5rem; }}
        h1 {{ font-size: 2.5rem; font-weight: 800; margin-bottom: 0.5rem; }}
        .subtitulo {{ font-size: 1.1rem; color: #666; margin-bottom: 2rem; }}
        .categoria {{ font-size: 1.2rem; font-weight: 700; margin-top: 1.5rem; margin-bottom: 0.5rem; padding: 0.3rem 0.8rem; background: #000; color: #FFCC00; display: inline-block; border-radius: 4px; }}
        ul {{ list-style: none; }}
        li {{ margin-bottom: 0.5rem; }}
        li a {{ text-decoration: none; color: #000; display: flex; align-items: center; gap: 0.8rem; padding: 0.6rem 0.8rem; border-radius: 8px; }}
        li a:hover {{ background: #FFCC00; }}
        .nav-num {{ width: 1.5rem; height: 1.5rem; background: #FFCC00; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 700; flex-shrink: 0; }}
    </style>
</head>
<body>
<div class="contenedor">
    <h1>📋 Baremo Laboral 2026</h1>
    <p class="subtitulo">Todas las lesiones del capitulo osteoarticular y mas. Porcentajes oficiales de la SRT.</p>
    {cat_links}
    <hr style="margin: 2rem 0; border: none; border-top: 1px solid #ddd;">
    <p style="text-align: center; color: #999; font-size: 0.85rem;">
        Basado en el <strong>Baremo Laboral 2026</strong> de la SRT.<br>
        Solo cobramos si vos cobras. <a href="https://wa.me/5491136456637" style="color: #000; font-weight: 700;">Consulta gratuita</a>
    </p>
</div>
</body>
</html>'''
    with open(os.path.join(OUT_DIR, "index.html"), "w", encoding="utf-8") as f:
        f.write(html)
    print("  OK  index.html")

if __name__ == "__main__":
    # Remove old html files
    for f in os.listdir(OUT_DIR):
        if f.endswith(".html"):
            os.remove(os.path.join(OUT_DIR, f))

    count = 0
    for slug, page_func in PAGINAS:
        html = page_func
        filepath = os.path.join(OUT_DIR, f"{slug}.html")
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(html)
        print(f"  OK  {slug}.html")
        count += 1

    generar_index()
    print(f"\nListo. {count} paginas + index.html en /{OUT_DIR}/")
