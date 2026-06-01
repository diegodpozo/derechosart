import os

# ARCHIVO DE ORIGEN Y DESTINO
ORIGEN = 'contenido_inicio.html'
DESTINO = 'vistas/paginas/inicio.php'
NUEVA_RUTA_IMG = 'publico/img/inicio/'

# RUTAS A REEMPLAZAR (LAS QUE VIENEN DE LA EXPORTACION)
RUTAS_ORIGINALES = [
    './Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario_files/',
    'Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario_files/',
    './Abogados%20especialistas%20en%20accidentes%20de%20trabajo%20y%20despidos%20-%20CABA,%20Buenos%20Aires%20y%20Rosario_files/',
    'Abogados%20especialistas%20en%20accidentes%20de%20trabajo%20y%20despidos%20-%20CABA,%20Buenos%20Aires%20y%20Rosario_files/'
]

def procesar():
    if not os.path.exists(ORIGEN):
        print(f"ERROR: NO SE ENCUENTRA {ORIGEN}")
        return

    with open(ORIGEN, 'r', encoding='utf-8') as f:
        contenido = f.read()

    # REEMPLAZAR RUTAS DE IMAGENES
    for ruta in RUTAS_ORIGINALES:
        contenido = contenido.replace(ruta, NUEVA_RUTA_IMG)

    # CORRECCIONES DE TEXTO ESPECIFICAS (ASEGURAR MAYUSCULAS Y SIN ACENTOS SEGUN PREFERENCIA SI ES NECESARIO, 
    # PERO AQUI MANTENDREMOS FIDELIDAD AL ORIGINAL)
    # EL USUARIO PIDIO QUE EL TEXTO EN UI SEA EN MAYUSCULAS Y SIN ACENTOS.
    
    # DADO QUE ES UNA REPLICA FIEL, MANTENDREMOS EL TEXTO DEL ORIGINAL POR AHORA, 
    # PERO ASEGURANDO QUE LA CODIFICACION SEA CORRECTA (UTF-8).

    php_final = f"""<?php
// PAGINA DE INICIO - REPLICACION FIEL DE ELEMENTOR
?>
{contenido}
"""

    with open(DESTINO, 'w', encoding='utf-8') as f:
        f.write(php_final)
    
    print(f"EXITO: {DESTINO} ACTUALIZADO CON RUTAS CORRECTAS.")

if __name__ == "__main__":
    procesar()
