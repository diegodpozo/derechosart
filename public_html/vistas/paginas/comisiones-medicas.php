<?php
// VISTA: COMISIONES MEDICAS
?>

<style>
    .botones-provincias {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-top: 25px;
    }
    .botones-provincias .btn {
        min-width: 120px;
        text-align: center;
    }

    .hero-interna .contenedor p {
        max-width: none;
        font-size: clamp(1rem, 1.6vw, 1.25rem);
        line-height: 1.7;
    }

    .grid-servicios {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    .tarjeta-paso {
        background: var(--blanco);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        position: relative;
        transition: transform 0.3s ease;
        border-top: 4px solid var(--amarillo);
    }
    .tarjeta-paso:hover {
        transform: translateY(-5px);
    }
    .paso-numero {
        font-size: 3rem;
        font-weight: 800;
        color: rgba(0,0,0,0.05);
        position: absolute;
        top: 10px;
        right: 20px;
        line-height: 1;
    }
    .tarjeta-paso h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 2;
        padding-right: 3.5rem;
    }
    .tarjeta-paso p {
        font-size: 0.95rem;
        color: var(--gris-texto);
        position: relative;
        z-index: 2;
    }

    .sede-card {
        background: var(--blanco);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-left: 4px solid var(--amarillo);
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }
    .sede-card:hover {
        transform: translateY(-3px);
    }
    .sede-card h3 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .sede-card .sede-cm {
        display: inline-block;
        background: var(--amarillo);
        color: #1a1a1a;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 2px 10px;
        border-radius: 20px;
        margin-bottom: 12px;
    }
    .sede-card .sede-info p {
        font-size: 0.9rem;
        color: var(--gris-texto);
        margin-bottom: 6px;
        line-height: 1.5;
    }
    .sede-card .sede-comp {
        font-size: 0.85rem;
        color: var(--gris-texto);
        line-height: 1.5;
        margin-top: 10px;
    }
    .sede-card .sede-comp strong {
        color: #1a1a1a;
    }
    .sede-links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 14px;
    }
    .sede-links a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.3s ease;
    }
    .sede-link-maps {
        background: #e8f5e9;
        color: #2e7d32;
    }
    .sede-link-maps:hover {
        background: #c8e6c9;
    }
    .sede-link-ubicacion {
        background: #e0f2f1;
        color: #00695c;
    }
    .sede-link-ubicacion:hover {
        background: #b2dfdb;
    }

    @media (min-width: 768px) {
        .sedes-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
    }

    .tramites-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 15px;
    }
    .tramite-item {
        background: var(--blanco);
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-left: 3px solid var(--amarillo);
    }
    .tramite-item h4 {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 6px;
    }
    .tramite-item p {
        font-size: 0.88rem;
        color: var(--gris-texto);
        line-height: 1.5;
        margin: 0;
    }

    .ventanilla-card {
        background: var(--blanco);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-left: 4px solid var(--amarillo);
        max-width: 800px;
        margin: 30px auto 0;
    }
    .ventanilla-card ul {
        list-style: none;
        padding: 0;
        margin: 15px 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }
    .ventanilla-card ul li {
        font-size: 0.9rem;
        color: var(--gris-texto);
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .ventanilla-card ul li::before {
        content: "📖";
        color: var(--amarillo);
        font-weight: 700;
        font-size: 1.1rem;
    }
    .region-header a {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }
    .region-header a:hover {
        opacity: 0.8;
    }

    @media (max-width: 600px) {
        .ventanilla-card ul {
            grid-template-columns: 1fr;
        }
        .botones-provincias .btn {
            flex: 0 0 calc(33.33% - 7px);
            min-width: 0;
            font-size: 0.85rem;
            padding: 8px 6px;
        }
    }

    .funciones-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }
    .funcion-item {
        background: var(--blanco);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-top: 4px solid var(--amarillo);
    }
    .funcion-item .numero-funcion {
        font-size: 2.5rem;
        font-weight: 800;
        color: rgba(0,0,0,0.05);
        line-height: 1;
        margin-bottom: 5px;
    }
    .funcion-item h4 {
        font-size: 1.05rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .funcion-item p {
        font-size: 0.9rem;
        color: var(--gris-texto);
        line-height: 1.6;
    }

    .info-destacada {
        background: var(--blanco);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-left: 4px solid var(--amarillo);
    }
    .info-destacada p {
        font-size: 0.95rem;
        color: var(--gris-texto);
        line-height: 1.7;
    }

    .region-header {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 3px solid var(--amarillo);
    }

      .sede-delegacion {
          background: #f8f9fa;
          padding: 18px;
          border-radius: 12px;
          border-left: 3px solid #ccc;
          margin-bottom: 15px;
      }
      /* MODO OSCURO: el fondo y el borde grises estan calibrados para
         fondo blanco. El modo claro NO se toca. */
      [data-tema="oscuro"] .sede-delegacion {
          background: var(--surface-2);
          border-left-color: var(--border-strong);
      }

      /* MODO OSCURO: estas tarjetas usan background: var(--blanco) para la
         superficie. --blanco es un token de MARCA (#FFFFFF) y por definicion
         no se redefine en oscuro, asi que en tema oscuro quedaban como bloques
         blancos con texto claro encima (contraste 1.1). Se pisan por token
         semantico SOLO en oscuro: el modo claro no se toca. */
      [data-tema="oscuro"] .tarjeta-paso,
      [data-tema="oscuro"] .sede-card,
      [data-tema="oscuro"] .tramite-item,
      [data-tema="oscuro"] .ventanilla-card,
      [data-tema="oscuro"] .funcion-item,
      [data-tema="oscuro"] .info-destacada {
          background: var(--surface-2);
      }

      /* el numero gigante decorativo se celaba con negro al 5% sobre blanco */
      [data-tema="oscuro"] .funcion-item .numero-funcion {
          color: rgba(255,255,255,0.06);
      }

      /* el <strong> de la razon social usaba #1a1a1a hardcodeado, calibrado
         para tarjeta blanca. Al volver la tarjeta oscura en este mismo
         commit quedaba negro sobre casi negro. Solo en oscuro. */
      [data-tema="oscuro"] .sede-card .sede-comp strong {
          color: var(--text);
      }
    .sede-delegacion h4 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 8px;
    }
    .sede-delegacion p {
        font-size: 0.88rem;
        color: var(--gris-texto);
        margin-bottom: 4px;
    }
    .sede-delegacion .sede-links {
        margin-top: 10px;
    }

    /* GUIA Y TRAMITES EXTENDIDOS DE GBA */
    .sede-link-info {
        background: #e8f5e9;
        color: #2e7d32;
    }
    .sede-link-info:hover {
        background: #c8e6c9;
    }

    .seccion-guia-gba {
        padding: 60px 0;
        background: var(--surface);
    }
    .gba-intro-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 20px;
        margin-bottom: 35px;
    }
    .gba-intro-card {
        background: var(--surface-2);
        padding: 25px;
        border-radius: 15px;
        border-left: 4px solid var(--amarillo);
        box-shadow: 0 5px 15px rgba(0,0,0,0.04);
    }
    .gba-intro-card h3 {
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--text);
    }
    .gba-intro-card ul {
        margin: 0;
        padding-left: 1.25rem;
        list-style-type: disc;
    }
    .gba-intro-card li {
        font-size: 0.9rem;
        color: var(--gris-texto);
        line-height: 1.6;
        margin-bottom: 8px;
    }
    .gba-intro-card li strong {
        color: var(--text);
    }
    .gba-intro-card p {
        font-size: 0.9rem;
        color: var(--gris-texto);
        line-height: 1.6;
        margin-bottom: 10px;
    }
    .gba-intro-card p strong {
        color: var(--text);
    }

    .gba-nav-sedes {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
        margin-bottom: 35px;
    }
    .gba-nav-btn {
        display: inline-block;
        padding: 8px 14px;
        background: var(--surface-2);
        border: 1px solid var(--border-strong);
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text);
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .gba-nav-btn:hover {
        background: var(--amarillo);
        color: #000;
        border-color: var(--amarillo);
    }

    .gba-ficha-sede {
        background: var(--surface-2);
        border-radius: 16px;
        padding: 30px;
        margin-bottom: 30px;
        border-left: 5px solid var(--amarillo);
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        scroll-margin-top: 80px;
    }
    .gba-ficha-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 15px;
        border-bottom: 1px solid var(--border);
        padding-bottom: 15px;
        margin-bottom: 20px;
    }
    .gba-ficha-header h3 {
        font-size: 1.25rem;
        font-weight: 800;
        margin: 0;
        color: var(--text);
    }
    .gba-titulo-link {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .gba-titulo-link:hover {
        color: var(--amarillo-hover);
        text-decoration: underline;
    }
    [data-tema="oscuro"] .gba-titulo-link:hover {
        color: var(--amarillo);
    }
    .gba-ficha-badge {
        display: inline-block;
        background: var(--amarillo);
        color: #1a1a1a;
        font-size: 0.8rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 15px;
        margin-left: 8px;
        vertical-align: middle;
    }
    .gba-ficha-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }
    @media (min-width: 768px) {
        .gba-ficha-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    .gba-bloque-item {
        background: var(--surface);
        padding: 20px;
        border-radius: 12px;
        border: 1px solid var(--border);
    }
    .gba-bloque-item h4 {
        font-size: 0.98rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text);
    }
    .gba-bloque-item p {
        font-size: 0.88rem;
        color: var(--gris-texto);
        line-height: 1.6;
        margin: 0;
    }
    .gba-bloque-item p strong {
        color: var(--text);
    }
    .gba-bloque-item ul {
        margin: 0;
        padding-left: 1.2rem;
        list-style-type: disc;
    }
    .gba-bloque-item li {
        font-size: 0.88rem;
        color: var(--gris-texto);
        line-height: 1.5;
        margin-bottom: 6px;
    }
    .gba-bloque-item li strong {
        color: var(--text);
    }
    .gba-faq-box {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px dashed var(--border);
    }
    .gba-faq-box h4 {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--text);
    }
    .gba-faq-item {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 10px;
        margin-bottom: 10px;
        padding: 14px 18px;
    }
    .gba-faq-item summary {
        font-size: 0.92rem;
        font-weight: 700;
        cursor: pointer;
        color: var(--text);
    }
    .gba-faq-item p {
        font-size: 0.88rem;
        color: var(--gris-texto);
        line-height: 1.6;
        margin: 10px 0 0;
    }
    .gba-volver-link {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 0.82rem;
        color: var(--gris-texto);
        text-decoration: underline;
    }
    .gba-volver-link:hover {
        color: var(--amarillo-hover);
    }
</style>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1 id="top">Comisiones <span class="subrayado-amarillo"><strong>Médicas SRT</strong></span></h1>
            <p class="subtitulo-hero"><strong>¿QUÉ SON LAS COMISIONES MÉDICAS?</strong><br>
            Son los organismos administrativos de la <strong>Superintendencia de Riesgos del Trabajo (SRT)</strong> encargados de resolver las discrepancias entre los trabajadores y las ART. Su función principal es determinar si un accidente o enfermedad es laboral, evaluar el grado de incapacidad física o psíquica y establecer el monto de la indemnización que te corresponde.</p>
            <p>Es una instancia <strong>obligatoria y gratuita</strong>. Sin embargo, para que tus derechos sean respetados y no te asignen un porcentaje menor al real, es fundamental contar con un abogado especialista desde el inicio del trámite.</p>

            <section class="botones-provincias">
                <a href="#caba" class="btn btn-amarillo">CABA</a>
                <a href="#gba" class="btn btn-amarillo">GBA</a>
                <a href="#rosario" class="btn btn-amarillo">ROSARIO</a>
                <a href="#cordoba" class="btn btn-amarillo">CÓRDOBA</a>
                <a href="#salta" class="btn btn-amarillo">SALTA</a>
                <a href="#mendoza" class="btn btn-amarillo">MENDOZA</a>
                <a href="#neuquen" class="btn btn-amarillo">NEUQUÉN</a>
                <a href="#rionegro" class="btn btn-amarillo">RÍO NEGRO</a>
            </section>
        </section>
    </section>

    <!-- LISTADO DE COMISIONES MEDICAS -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Listado de <span class="subrayado-amarillo">Comisiones Médicas</span></h2>
            <p class="txt-gris">Tocá en "Google Maps" o "Waze" para llegar directamente desde tu teléfono. Las direcciones están actualizadas según las resoluciones de la SRT.</p>

            <!-- CABA -->
            <h3 class="region-header mt-40" id="caba"><a href="#top">Buenos Aires (CABA)</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA CABA — SEDE CENTRAL</h3>
                    <span class="sede-cm">CM 10</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Moreno 401, CABA (C1091AAH)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 9 a 16hs</p>
                        <p><strong>🔢 Delegación:</strong> CM 10A a 10K</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> CABA</p>
                    <div class="sede-links">
                        <a href="<?= BASE_URL ?>blog/comision-medica-caba-guia" class="sede-link-maps">📖 GUÍA DE LA COMISIÓN MÉDICA CABA</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Moreno%20401%2C%20C1091AAH%2C%20CABA" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Moreno%20401%2C%20C1091AAH%2C%20CABA" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA CABA — VILLA URQUIZA</h3>
                    <span class="sede-cm">CM 10L</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Av. Olazábal 4300, CABA (C1430BQV)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                        <p><strong>🔢 Delegación:</strong> CM 10L — Villa Urquiza</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> CABA</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Av.%20Olaz%C3%A1bal%204300%2C%20C1430BQV%2C%20CABA" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Av.%20Olaz%C3%A1bal%204300%2C%20C1430BQV%2C%20CABA" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>

            <!-- GBA -->
            <h3 class="region-header mt-50" id="gba"><a href="#top">Gran Buenos Aires</a></h3>
            <p class="txt-gris mb-20">¿Buscás información a fondo de cada sede? <a href="#guia-gba" style="color:var(--text);font-weight:700;text-decoration:underline;">Ver la guía completa de GBA (competencia, trámites, tribunales de apelación y qué llevar al turno) ↓</a></p>
            <section class="sedes-grid">
                <article class="sede-card" id="card-ezeiza">
                    <h3>COMISIÓN MÉDICA EZEIZA</h3>
                    <span class="sede-cm">CM 37 — Del. 02</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Arribeños 256, Ezeiza (B1804CPF)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Aeropuerto Ezeiza, Alte. Brown, Burzaco, Canning, Carlos Spegazzini, Claypole, Ezeiza, El Jaguel, Esteban Echeverría, Glew, José Mármol, Longchamps, Luis Guillón, Ministro Rivadavia, Monte Grande, 9 de Abril, Rafael Calzada, San Francisco Solano, San José, Tristán Suárez.</p>
                    <div class="sede-links">
                        <a href="#guia-ezeiza" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Arribe%C3%B1os%20256%2C%20B1804CPF%2C%20Ezeiza" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Arribe%C3%B1os%20256%2C%20B1804CPF%2C%20Ezeiza" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-la-plata">
                    <h3>COMISIÓN MÉDICA LA PLATA</h3>
                    <span class="sede-cm">CM 11</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Calle 13 Nº 220, La Plata (B1902CSY)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 7 a 14hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Berisso, Coronel Brandsen, Ensenada, Gral. Paz, La Plata, Magdalena, Pte. Perón, Punta Indio, San Vicente.</p>
                    <div class="sede-links">
                        <a href="#guia-la-plata" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="<?= BASE_URL ?>blog/comision-medica-la-plata-guia" class="sede-link-maps">📖 GUÍA DE LA COMISIÓN MÉDICA LA PLATA</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Calle%2013%20220%2C%20B1902CSY%2C%20La%20Plata" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Calle%2013%20220%2C%20B1902CSY%2C%20La%20Plata" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-lanus">
                    <h3>COMISIÓN MÉDICA LANÚS</h3>
                    <span class="sede-cm">CM 37</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Hipólito Yrigoyen 5645, Lanús (B1826DQD)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Avellaneda, Lanús.</p>
                    <div class="sede-links">
                        <a href="#guia-lanus" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Hip%C3%B3lito%20Yrigoyen%205645%2C%20B1826DQD%2C%20Lan%C3%BAs" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Hip%C3%B3lito%20Yrigoyen%205645%2C%20B1826DQD%2C%20Lan%C3%BAs" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-lomas-de-zamora">
                    <h3>COMISIÓN MÉDICA LOMAS DE ZAMORA</h3>
                    <span class="sede-cm">CM 37 — Del. 04</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> 12 de Octubre 1292, Lomas de Zamora (B1828DMH)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Banfield, Lavallol, Lomas de Zamora, Temperley, Turdera.</p>
                    <div class="sede-links">
                        <a href="#guia-lomas-de-zamora" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=12%20de%20Octubre%201292%2C%20B1828DMH%2C%20Lomas%20de%20Zamora" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=12%20de%20Octubre%201292%2C%20B1828DMH%2C%20Lomas%20de%20Zamora" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-lujan">
                    <h3>COMISIÓN MÉDICA LUJÁN</h3>
                    <span class="sede-cm">CM 38 — Del. 04</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Leandro N. Alem 1302, Luján (B6700DAT)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Carmen de Areco, Gral. Las Heras, Luján, Marcos Paz, Salto, San Andrés de Giles, San Antonio de Areco.</p>
                    <div class="sede-links">
                        <a href="#guia-lujan" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Leandro%20N.%20Alem%201302%2C%20B6700DAT%2C%20Luj%C3%A1n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Leandro%20N.%20Alem%201302%2C%20B6700DAT%2C%20Luj%C3%A1n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-mercedes">
                    <h3>COMISIÓN MÉDICA MERCEDES</h3>
                    <span class="sede-cm">CM 38 — Del. 05</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Calle 20 Nº 370, Mercedes (B6600HGF)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Alberti, Bragado, Chivilcoy, Mercedes, Navarro, 9 de Julio, Suipacha, 25 de Mayo.</p>
                    <div class="sede-links">
                        <a href="#guia-mercedes" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Calle%2020%20370%2C%20B6600HGF%2C%20Mercedes" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Calle%2020%20370%2C%20B6600HGF%2C%20Mercedes" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-moreno">
                    <h3>COMISIÓN MÉDICA MORENO</h3>
                    <span class="sede-cm">CM 15</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Intendente Nemesio Álvarez 358, Moreno (B1744BSH)</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Moreno, Gral. Rodríguez.</p>
                    <div class="sede-links">
                        <a href="#guia-moreno" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Intendente%20Nemesio%20%C3%81lvarez%20358%2C%20B1744BSH%2C%20Moreno" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Intendente%20Nemesio%20%C3%81lvarez%20358%2C%20B1744BSH%2C%20Moreno" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-moron">
                    <h3>COMISIÓN MÉDICA MORÓN</h3>
                    <span class="sede-cm">CM 38</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Gral. Bartolomé Mitre 1145, Morón (B1708EAV)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Morón, Hurlingham, Ituzaingó, Merlo.</p>
                    <div class="sede-links">
                        <a href="#guia-moron" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Gral.%20Bartolom%C3%A9%20Mitre%201145%2C%20B1708EAV%2C%20Mor%C3%B3n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Gral.%20Bartolom%C3%A9%20Mitre%201145%2C%20B1708EAV%2C%20Mor%C3%B3n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-pilar">
                    <h3>COMISIÓN MÉDICA PILAR</h3>
                    <span class="sede-cm">CM 39 — Del. 02</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Beato Janssen 850, Colectora Este, Pilar (1629)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Pilar, Tigre.</p>
                    <div class="sede-links">
                        <a href="#guia-pilar" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Beato%20Janssen%20850%2C%201629%2C%20Pilar" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Beato%20Janssen%20850%2C%201629%2C%20Pilar" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-quilmes">
                    <h3>COMISIÓN MÉDICA QUILMES</h3>
                    <span class="sede-cm">CM 37 — Del. 03</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Av. Carlos Pellegrini 589, Quilmes (B1878CBJ)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Berazategui, Florencio Varela, San Francisco Solano, Quilmes.</p>
                    <div class="sede-links">
                        <a href="#guia-quilmes" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Av.%20Carlos%20Pellegrini%20589%2C%20B1878CBJ%2C%20Quilmes" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Av.%20Carlos%20Pellegrini%20589%2C%20B1878CBJ%2C%20Quilmes" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-ramos-mejia">
                    <h3>COMISIÓN MÉDICA RAMOS MEJÍA</h3>
                    <span class="sede-cm">CM 38 — Del. 02</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Avda. de Mayo 1180, Ramos Mejía (B1704BUY)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> La Matanza.</p>
                    <div class="sede-links">
                        <a href="#guia-ramos-mejia" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Avda.%20de%20Mayo%201180%2C%20B1704BUY%2C%20Ramos%20Mej%C3%ADa" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Avda.%20de%20Mayo%201180%2C%20B1704BUY%2C%20Ramos%20Mej%C3%ADa" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-san-isidro">
                    <h3>COMISIÓN MÉDICA SAN ISIDRO</h3>
                    <span class="sede-cm">CM 39</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Dr. Raúl Scalabrini Ortiz 144, San Isidro (C1414DNO)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> San Fernando, San Isidro, Vicente López.</p>
                    <div class="sede-links">
                        <a href="#guia-san-isidro" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Scalabrini%20Ortiz%20144%2C%20C1414DNO%2C%20San%20Isidro" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Scalabrini%20Ortiz%20144%2C%20C1414DNO%2C%20San%20Isidro" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-san-martin">
                    <h3>COMISIÓN MÉDICA SAN MARTÍN</h3>
                    <span class="sede-cm">CM 38 — Del. 03</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> 25 de Mayo 1935, Gral. San Martín (B1650BJG)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Ciudadela, Churruca, Gral. San Martín, José C. Paz, San Miguel.</p>
                    <div class="sede-links">
                        <a href="#guia-san-martin" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=25%20de%20Mayo%201935%2C%20B1650BJG%2C%20Gral.%20San%20Mart%C3%ADn" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=25%20de%20Mayo%201935%2C%20B1650BJG%2C%20Gral.%20San%20Mart%C3%ADn" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card" id="card-zarate">
                    <h3>COMISIÓN MÉDICA ZÁRATE</h3>
                    <span class="sede-cm">CM 31</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Rómulo Noya 1049 PB, Zárate (B2800JMQ)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Campana, Escobar, Exaltación de la Cruz, Zárate.</p>
                    <div class="sede-links">
                        <a href="#guia-zarate" class="sede-link-info">ℹ️ GUÍA Y TRÁMITES</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=R%C3%B3mulo%20Noya%201049%2C%20B2800JMQ%2C%20Z%C3%A1rate" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=R%C3%B3mulo%20Noya%201049%2C%20B2800JMQ%2C%20Z%C3%A1rate" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>

            <!-- ROSARIO -->
            <h3 class="region-header mt-50" id="rosario"><a href="#top">Gran Rosario</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA ROSARIO</h3>
                    <span class="sede-cm">CM 7</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Salta 2602, Rosario</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Arroyo Seco, Cañada de Gómez, Casilda, Granadero Baigorria, Las Rosas, San Lorenzo, Villa Constitución, Villa Gobernador Gálvez.</p>
                    <div class="sede-links">
                        <a href="<?= BASE_URL ?>blog/comision-medica-rosario-guia" class="sede-link-maps">📖 GUÍA DE LA COMISIÓN MÉDICA ROSARIO</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Salta%202602%2C%20Rosario%2C%20Santa%20Fe" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Salta%202602%2C%20Rosario%2C%20Santa%20Fe" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>
            <div class="sede-delegacion mt-20">
                <h4>↳ Delegación San Lorenzo</h4>
                <p><strong>🗺️ Competencia:</strong> Para conocer la dirección actual y horarios, consultar en la SRT (0800-666-6778).</p>
            </div>

            <!-- CORDOBA -->
            <h3 class="region-header mt-50" id="cordoba"><a href="#top">Córdoba</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA CÓRDOBA</h3>
                    <span class="sede-cm">CM 5</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Rivadavia 765/767, Córdoba</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Circunscripciones Judiciales Primera a Séptima y Novena a Duodécima de la Provincia de Córdoba.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Rivadavia%20765%2C%20C%C3%B3rdoba%2C%20Argentina" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Rivadavia%20765%2C%20C%C3%B3rdoba%2C%20Argentina" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>
            <div class="sedes-grid mt-20">
                <div class="sede-delegacion">
                    <h4>↳ Delegación Villa María</h4>
                    <p><strong>📍 Dirección:</strong> San Juan 1374, Villa María (CM 6)</p>
                    <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    <p><strong>🗺️ Competencia:</strong> Departamentos Calamuchita, Tercero Arriba, Gral. San Martín, Unión, Marcos Juárez, Río Cuarto, Juárez Celman, Pte. Roque Sáenz Peña, Gral. Roca y San Justo (al sur de RN 158).</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=San%20Juan%201374%2C%20Villa%20Mar%C3%ADa%2C%20C%C3%B3rdoba" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=San%20Juan%201374%2C%20Villa%20Mar%C3%ADa%2C%20C%C3%B3rdoba" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
                <div class="sede-delegacion">
                    <h4>↳ Delegación Bell Ville</h4>
                    <p><strong>📍 Dirección:</strong> Entre Ríos 249, Bell Ville</p>
                    <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    <p><strong>🗺️ Competencia:</strong> Departamentos Unión, Marcos Juárez, Pte. Roque Sáenz Peña y Gral. Roca.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Entre%20R%C3%ADos%20249%2C%20Bell%20Ville%2C%20C%C3%B3rdoba" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Entre%20R%C3%ADos%20249%2C%20Bell%20Ville%2C%20C%C3%B3rdoba" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
                <div class="sede-delegacion">
                    <h4>↳ Delegación San Francisco</h4>
                    <p><strong>📍 Dirección:</strong> Boulevard 9 de Julio 1683, San Francisco</p>
                    <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    <p><strong>🗺️ Competencia:</strong> Departamento San Justo.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Boulevard%209%20de%20Julio%201683%2C%20San%20Francisco%2C%20C%C3%B3rdoba" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Boulevard%209%20de%20Julio%201683%2C%20San%20Francisco%2C%20C%C3%B3rdoba" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
            </div>

            <!-- SALTA -->
            <h3 class="region-header mt-50" id="salta"><a href="#top">Salta</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA SALTA</h3>
                    <span class="sede-cm">CM 23</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Juan Martín Leguizamón 341, Salta</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Provincia de Salta.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Juan%20Mart%C3%ADn%20Leguizam%C3%B3n%20341%2C%20Salta%2C%20Argentina" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Juan%20Mart%C3%ADn%20Leguizam%C3%B3n%20341%2C%20Salta%2C%20Argentina" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>

            <!-- MENDOZA -->
            <h3 class="region-header mt-50" id="mendoza"><a href="#top">Mendoza</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA MENDOZA</h3>
                    <span class="sede-cm">CM 4</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Av. Gobernador Ricardo Videla 2015, Guaymallén, Mendoza (M5500GAA)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 7 a 14hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Gran Mendoza y zona norte de la provincia.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Av.%20Gobernador%20Ricardo%20Videla%202015%2C%20Guaymall%C3%A9n%2C%20Mendoza" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Av.%20Gobernador%20Ricardo%20Videla%202015%2C%20Guaymall%C3%A9n%2C%20Mendoza" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>

            <!-- NEUQUEN -->
            <h3 class="region-header mt-50" id="neuquen"><a href="#top">Neuquén</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA NEUQUÉN</h3>
                    <span class="sede-cm">CM 9</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Bartolomé Mitre 590, Neuquén Capital (Q8300KWL)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Añelo, Confluencia, Minas, Ñorquin, Pehuenches, Collón Curá, Huiliches, Lácar, Los Lagos.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Bartolom%C3%A9%20Mitre%20590%2C%20Q8300KWL%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Bartolom%C3%A9%20Mitre%20590%2C%20Q8300KWL%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>
            <div class="sedes-grid mt-20">
                <div class="sede-delegacion">
                    <h4>↳ Delegación Plaza Huincul</h4>
                    <p><strong>📍 Dirección:</strong> San Martín 342, Plaza Huincul (Q8318GGQ)</p>
                    <p><strong>🗺️ Competencia:</strong> Aluminé, Catan Lil, Confluencia, Collón Curá, Huiliches, Lácar, Los Lagos, Loncopué, Picunches, Picún Leufú.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=San%20Mart%C3%ADn%20342%2C%20Q8318GGQ%2C%20Plaza%20Huincul%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=San%20Mart%C3%ADn%20342%2C%20Q8318GGQ%2C%20Plaza%20Huincul%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
                <div class="sede-delegacion">
                    <h4>↳ Delegación Zapala</h4>
                    <p><strong>📍 Dirección:</strong> Luis Monti 367, Zapala (Q8340FAH)</p>
                    <p><strong>🗺️ Competencia:</strong> Zapala, Catan Lil, Aluminé, Pichunches, Loncopué, Ñorquín, Collón Curá, Huiliches, Lacar, Los Lagos.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Luis%20Monti%20367%2C%20Q8340FAH%2C%20Zapala%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Luis%20Monti%20367%2C%20Q8340FAH%2C%20Zapala%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
                <div class="sede-delegacion">
                    <h4>↳ Delegación Chos Malal</h4>
                    <p><strong>📍 Dirección:</strong> Almirante Brown 51, Chos Malal (Q8353AKD)</p>
                    <p><strong>🗺️ Competencia:</strong> Circunscripción judicial Quinta (Chos Malal).</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Almirante%20Brown%2051%2C%20Q8353AKD%2C%20Chos%20Malal%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Almirante%20Brown%2051%2C%20Q8353AKD%2C%20Chos%20Malal%2C%20Neuqu%C3%A9n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
            </div>

        </section>
    </section>

    <!-- RIO NEGRO -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h3 class="region-header mt-50" id="rionegro"><a href="#top">Río Negro</a></h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA CIPOLETTI</h3>
                    <span class="sede-cm">CM 35</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Av. Naciones Unidas 639, Cipolletti (R8324ALK)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Cipolletti, Allen, Sargento Vidal, Cinco Saltos, La Alianza, Colonia Valentina y zonas aledañas.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Av.%20Naciones%20Unidas%20639%2C%20R8324ALK%2C%20Cipolletti%2C%20R%C3%ADo%20Negro" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Av.%20Naciones%20Unidas%20639%2C%20R8324ALK%2C%20Cipolletti%2C%20R%C3%ADo%20Negro" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>
            <div class="sedes-grid mt-20">
                <div class="sede-delegacion">
                    <h4>↳ Delegación General Roca</h4>
                    <p><strong>📍 Dirección:</strong> Gral. Conrado Villegas 1547, General Roca (R8332FHP)</p>
                    <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    <p><strong>🗺️ Competencia:</strong> Circunscripción Judicial Segunda de Río Negro (General Roca, El Cuy, Avellaneda, Pichi Mahuida, entre otras).</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Gral.%20Conrado%20Villegas%201547%2C%20R8332FHP%2C%20General%20Roca%2C%20R%C3%ADo%20Negro" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Gral.%20Conrado%20Villegas%201547%2C%20R8332FHP%2C%20General%20Roca%2C%20R%C3%ADo%20Negro" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- FUNCIONES PRINCIPALES -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Funciones <span class="subrayado-amarillo">principales</span></h2>
            <p class="txt-gris">Las Comisiones Médicas de la SRT tienen diversas funciones que son clave a la hora de tu reclamo:</p>
            <section class="funciones-grid mt-30">
                <article class="funcion-item">
                    <div class="numero-funcion">01</div>
                    <h4>RESOLVER CONFLICTOS</h4>
                    <p>Resolver conflictos entre la Aseguradora de Riesgos del Trabajo (ART) y el trabajador relacionado con el reconocimiento del accidente sufrido por el trabajador, el tratamiento médico o el porcentaje de incapacidad.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">02</div>
                    <h4>DETERMINAR ORIGEN LABORAL</h4>
                    <p>Determinar si el accidente o enfermedad sufrida por el trabajador tiene naturaleza laboral y determinar el grado de incapacidad permanente que le corresponde.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">03</div>
                    <h4>HOMOLOGAR ACUERDOS</h4>
                    <p>Homologar los acuerdos firmados entre la ART y el trabajador.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">04</div>
                    <h4>EVALUAR PREEXISTENCIAS</h4>
                    <p>Evaluar enfermedades preexistentes identificadas en exámenes preocupacionales realizados al trabajador.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">05</div>
                    <h4>INSTANCIA PREVIA OBLIGATORIA</h4>
                    <p>Instancia administrativa previa obligatoria antes de iniciar una demanda judicial en las provincias adheridas a la Ley 27.348 (Buenos Aires, CABA, Córdoba, Mendoza, Neuquén, Río Negro, entre otras).</p>
                </article>
            </section>
            <p class="txt-gris mt-30"><strong>⚠ Importante:</strong> La Comisión Médica Central es quien actúa como revisora de los dictámenes médicos emitidos por las comisiones jurisdiccionales cuando se apela dicha resolución.</p>
        </section>
    </section>

    <!-- CUAL COMISION TE CORRESPONDE -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Cuál comisión médica <span class="subrayado-amarillo">te corresponde</span>?</h2>
            <p class="txt-gris">Hay dos opciones a la hora de elegir tu Comisión Médica, y la elección es siempre del trabajador:</p>
            <ul class="lista-check mt-20" style="list-style: none; padding: 0;">
                <li style="font-size: 0.95rem; color: var(--gris-texto); margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                    <span style="color: var(--amarillo); font-weight: 700;">✓</span>
                    <strong>Domicilio de tu DNI</strong> (domicilio real).
                </li>
                <li style="font-size: 0.95rem; color: var(--gris-texto); margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                    <span style="color: var(--amarillo); font-weight: 700;">✓</span>
                    <strong>Domicilio de tu lugar de trabajo</strong>.
                </li>
            </ul>
            <p class="txt-gris">Para elegir la Comisión Médica es necesario completar el <strong>formulario de opción de jurisdicción</strong> al momento de iniciar el trámite administrativo. Una vez elegida, no se puede cambiar.</p>
            <p class="txt-gris mt-20">👉 <a href="https://www.srt.gob.ar/wp-content/uploads/2018/06/Formulario-Opci%C3%B3n-Jurisdicci%C3%B3n-RES-298-17.pdf" target="_blank" style="color: var(--amarillo); font-weight: 600;">Descargá el formulario de opción de jurisdicción (PDF oficial SRT)</a></p>
        </section>
    </section>

    <!-- OBLIGATORIEDAD ABOGADO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Es obligatorio ir con <span class="subrayado-amarillo">abogado</span>?</h2>
            <div class="info-destacada">
                <p><strong>Sí.</strong> Se requiere abogado para iniciar todos los trámites en la Comisión Médica que requieran determinar incapacidad o resolver un conflicto con la ART, el trabajador debe concurrir con patrocinio letrado. Es un requisito que exige la <strong>Ley 27.348</strong>.</p>
                <p class="mt-15">En <strong>DerechosART</strong> te acompañamos durante todo el proceso en la Comisión Médica hasta el cobro de tu indemnización. <strong>Sin adelantos — cobramos solo si ganás.</strong></p>
                <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo mt-30">DEJANOS TU CONSULTA</a>
            </div>
        </section>
    </section>

    <!-- PASOS DEL PROCESO -->
    <section class="seccion-texto bg-blanco py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">Pasos para tu <span class="subrayado-amarillo">reclamo</span></h2>
            <section class="grid-servicios mt-40">
                <article class="tarjeta-paso">
                    <span class="paso-numero">01</span>
                    <h3>INICIO DEL TRÁMITE</h3>
                    <p>Tras el alta médica, se presenta el reclamo formal ante la Comisión Médica correspondiente a tu domicilio o lugar de trabajo.</p>
                </article>
                <article class="tarjeta-paso">
                    <span class="paso-numero">02</span>
                    <h3>AUDIENCIA MÉDICA</h3>
                    <p>Médicos de la SRT te evalúan físicamente. Aquí es donde nuestro equipo asegura que se considere cada lesión según el Baremo legal.</p>
                </article>
                <article class="tarjeta-paso">
                    <span class="paso-numero">03</span>
                    <h3>DICTAMEN MÉDICO</h3>
                    <p>La Comisión emite un dictamen con el porcentaje de incapacidad. Analizamos si este número refleja fielmente tu daño real.</p>
                </article>
                <article class="tarjeta-paso">
                    <span class="paso-numero">04</span>
                    <h3>AUDIENCIA DE ACUERDO</h3>
                    <p>Si estamos conformes, se firma un acuerdo para el pago de la indemnización. Si no, se procede a la etapa de apelación judicial.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- CONTACTO SRT -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Contacto con la <span class="subrayado-amarillo">SRT</span></h2>
            <div class="info-destacada">
                <p><strong>📞 Teléfono gratuito SRT:</strong> 0800-666-6778 (lunes a viernes, 8 a 17hs)</p>
                <p class="mt-10"><strong>📍 Comisión Médica Central:</strong> Moreno 401, CABA</p>
                <p class="mt-10"><strong>🌐 Web oficial:</strong> <a href="https://www.argentina.gob.ar/srt" target="_blank" style="color: var(--amarillo); font-weight: 600;">argentina.gob.ar/srt</a></p>
            </div>
        </section>
    </section>

    <!-- FAQ -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion">Preguntas <span class="subrayado-amarillo">frecuentes</span> SRT</h2>
            <section class="max-w-900 mx-auto mt-40">
                <section class="lista-faq mt-0">
                    <details>
                        <summary><h3>¿Cuánto se demora un trámite en Comisión Médica?</h3></summary>
                        <article class="respuesta">
                            <p>Los plazos legales varían, pero un trámite normal desde el inicio hasta la audiencia de acuerdo suele demorar entre <strong>4 y 8 meses</strong>, dependiendo de la jurisdicción y la complejidad del caso médico.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué pasa si no estoy de acuerdo con el porcentaje que me dieron?</h3></summary>
                        <article class="respuesta">
                            <p>Tenés derecho a <strong>apelar</strong> el dictamen médico ante la Comisión Médica Central o directamente ante los tribunales laborales competentes. Nosotros evaluamos si vale la pena la espera judicial para obtener un monto mayor.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Tengo que pagar para ir a la Comisión Médica?</h3></summary>
                        <article class="respuesta">
                            <p><strong>No.</strong> El trámite es gratuito para el trabajador. Los honorarios de tu abogado en esta etapa son pagados por la ART o acordados sobre el resultado, sin que vos tengas que adelantar dinero.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué es el Baremo de evaluación de incapacidades?</h3></summary>
                        <article class="respuesta">
                            <p>Es la tabla oficial (Decreto 659/96) que establece cuántos "puntos" de incapacidad corresponden a cada lesión. Por ejemplo, una hernia de disco o una fractura tienen puntajes específicos que sumados determinan tu indemnización final.</p>
                        </article>
                    </details>
                </section>
            </section>
        </section>
    </section>

    <!-- GUIA INTEGRAL DE COMISIONES MEDICAS DE GRAN BUENOS AIRES (GBA) -->
    <section class="seccion-guia-gba" id="guia-gba">
        <div class="contenedor">
            <h2 class="titulo-seccion">Guía práctica de <span class="subrayado-amarillo">Comisiones Médicas de GBA</span></h2>
            <p class="centro max-w-900 mx-auto txt-gris fs-12 mb-40">Información integral y actualizada para trabajadores accidentados en el Gran Buenos Aires: partidos que cubre cada sede, trámites que podés gestionar, cómo y dónde apelar ante la Justicia laboral si el dictamen no refleja tu daño real, qué documentación llevar al turno médico y respuestas a preguntas frecuentes.</p>

            <!-- BLOQUES GENERALES DE ORIENTACION -->
            <div class="gba-intro-grid">
                <article class="gba-intro-card">
                    <h3>🎒 ¿Qué llevar al turno médico en cualquier sede de GBA?</h3>
                    <p>Para no perder la junta médica y evitar que la SRT suspenda o desista de tu expediente, es imprescindible concurrir con:</p>
                    <ul>
                        <li><strong>DNI original vigente y copia:</strong> con domicilio real actualizado.</li>
                        <li><strong>Constancia de CUIL:</strong> emitida por ANSES.</li>
                        <li><strong>Recibo de sueldo:</strong> de la fecha del accidente o primera manifestación invalidante.</li>
                        <li><strong>Notificación de la ART:</strong> alta médica formal, carta documento de rechazo o constancia de fin de tratamiento.</li>
                        <li><strong>Historia clínica y estudios:</strong> radiografías, resonancias magnéticas, tomografías y ecografías con sus respectivos informes médicos por escrito (no solo las imágenes digitales).</li>
                        <li><strong>Asistencia letrada obligatoria:</strong> la Ley 27.348 exige que concurras acompañado por un abogado especialista en derecho laboral/ART. Los honorarios son a cargo de la ART en caso de acuerdo.</li>
                    </ul>
                </article>

                <article class="gba-intro-card">
                    <h3>⚖️ Fuero de revisión en PBA: ¿Dónde y cómo apelar?</h3>
                    <p>En la Provincia de Buenos Aires rige la <strong>Ley 14.997</strong> de adhesión al Título I de la <strong>Ley Nacional 27.348</strong>:</p>
                    <ul>
                        <li><strong>Instancia previa obligatoria:</strong> el paso por la Comisión Médica Jurisdiccional es obligatorio antes de acudir a la Justicia, pero <strong>su dictamen no es definitivo ni inapelable</strong>.</li>
                        <li><strong>Apelación judicial directa:</strong> si el dictamen otorga 0%, determina un porcentaje inferior a tus secuelas o desconoce la relación laboral, podés interponer una demanda de revisión judicial ante los <strong>Tribunales de Trabajo de la Provincia de Buenos Aires</strong> correspondientes a tu domicilio o al lugar donde prestás servicios.</li>
                        <li><strong>Pericia médica judicial imparcial:</strong> en sede judicial se sortea un perito médico legista oficial e independiente de las aseguradoras, logrando indemnizaciones que se ajustan verdaderamente a la realidad de tu lesión.</li>
                        <li><strong>Vía administrativa optativa:</strong> también podés apelar administrativamente ante la Comisión Médica Central (Moreno 401, CABA), aunque habitualmente la vía judicial brinda mejores resultados y actualización por intereses legales.</li>
                    </ul>
                </article>
            </div>

            <!-- NAVEGADOR RAPIDO DE SEDES GBA -->
            <div class="gba-nav-sedes">
                <a href="#guia-moron" class="gba-nav-btn">Morón</a>
                <a href="#guia-san-martin" class="gba-nav-btn">San Martín</a>
                <a href="#guia-san-isidro" class="gba-nav-btn">San Isidro</a>
                <a href="#guia-lanus" class="gba-nav-btn">Lanús</a>
                <a href="#guia-lomas-de-zamora" class="gba-nav-btn">Lomas de Zamora</a>
                <a href="#guia-ramos-mejia" class="gba-nav-btn">Ramos Mejía (La Matanza)</a>
                <a href="#guia-quilmes" class="gba-nav-btn">Quilmes</a>
                <a href="#guia-moreno" class="gba-nav-btn">Moreno</a>
                <a href="#guia-pilar" class="gba-nav-btn">Pilar</a>
                <a href="#guia-ezeiza" class="gba-nav-btn">Ezeiza</a>
                <a href="#guia-zarate" class="gba-nav-btn">Zárate - Campana</a>
                <a href="#guia-la-plata" class="gba-nav-btn">La Plata</a>
                <a href="#guia-lujan" class="gba-nav-btn">Luján</a>
                <a href="#guia-mercedes" class="gba-nav-btn">Mercedes</a>
            </div>

            <!-- LISTADO DETALLADO POR SEDE -->

            <!-- MORON -->
            <article class="gba-ficha-sede" id="guia-moron">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-moron" class="gba-titulo-link" title="Volver a la ficha rápida de Morón">COMISIÓN MÉDICA MORÓN</a> <span class="gba-ficha-badge">CM 38</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Gral. Bartolomé Mitre 1145, Morón · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-moron" class="gba-volver-link">↑ Volver al listado rápido de Morón</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Morón, Hurlingham, Ituzaingó y Merlo.</strong> Si tu domicilio real registrado en el DNI o el establecimiento donde trabajás se encuentra en cualquiera de estos cuatro partidos, tenés competencia legal para tramitar en esta sede.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de la incapacidad laboral:</strong> evaluación del daño físico o psíquico tras el alta médica.</li>
                            <li><strong>Divergencia en el alta médica:</strong> reclamo si la ART te otorgó el alta médica antes de tiempo y continuás con dolor o limitaciones.</li>
                            <li><strong>Rechazo del siniestro:</strong> impugnación cuando la aseguradora desconoce el accidente de trabajo o in itinere.</li>
                            <li><strong>Divergencia en prestaciones:</strong> solicitud urgente por falta de medicamentos, kinesiología, traslados o cirugías pendientes.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Si la Comisión Médica de Morón emite un dictamen con 0% o con un porcentaje menor a tus secuelas reales, la Ley Provincial 14.997 habilita a apelar mediante demanda laboral ante los <strong>Tribunales de Trabajo del Departamento Judicial Morón</strong> (con sede en Colón y Brown, Morón). Allí un perito médico legista judicial independiente evalúa tu incapacidad sin los criterios restrictivos de la ART. Vía optativa: apelación administrativa ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Morón</h4>
                        <ul>
                            <li>DNI original vigente y fotocopia legible.</li>
                            <li>Constancia de CUIL y último recibo de sueldo.</li>
                            <li>Copia del alta médica o carta documento de rechazo emitida por la ART.</li>
                            <li>Estudios médicos en mano (placas radiográficas, resonancias, ecografías) con sus informes médicos originales por escrito.</li>
                            <li>Acompañamiento obligatorio de tu abogado/a laboralista de confianza.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Morón</h4>
                    <details class="gba-faq-item">
                        <summary>¿Puedo hacer el trámite en Morón si vivo en Merlo pero trabajo en CABA?</summary>
                        <p>Sí. La ley te permite optar libremente entre la Comisión Médica correspondiente a tu domicilio real de DNI (en este caso Morón) o la correspondiente al domicilio de tu empleador en Capital Federal.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué hago si la ART me dio el alta médica en Morón pero sigo con dolor?</summary>
                        <p>Tenés un plazo legal de 3 días hábiles administrativos desde que recibiste la notificación de alta para iniciar el trámite de Divergencia en el Alta Médica ante la SRT junto a tu letrado para que ordenen la reanudación del tratamiento.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Cuánto demora el trámite en la sede de Morón?</summary>
                        <p>El plazo reglamentario estipulado por la SRT es de hasta 60 días hábiles administrativos contados desde la apertura del expediente, prorrogables por 30 días más si se requieren estudios periciales complementarios.</p>
                    </details>
                </div>
            </article>

            <!-- SAN MARTIN -->
            <article class="gba-ficha-sede" id="guia-san-martin">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-san-martin" class="gba-titulo-link" title="Volver a la ficha rápida de San Martín">COMISIÓN MÉDICA SAN MARTÍN</a> <span class="gba-ficha-badge">CM 38 — Del. 03</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 25 de Mayo 1935, General San Martín · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-san-martin" class="gba-volver-link">↑ Volver al listado rápido de San Martín</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>General San Martín, Tres de Febrero, José C. Paz y San Miguel.</strong> Abarca también localidades de alta densidad productiva como Ciudadela, Caseros, Billinghurst, Villa Ballester, Loma Hermosa y Churruca.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral definitiva:</strong> fijación del grado de incapacidad permanente tras finalizar la etapa de curación.</li>
                            <li><strong>Divergencia en el alta médica:</strong> reclamo ante altas prematuras sin el alta funcional correspondiente.</li>
                            <li><strong>Rechazo de enfermedades profesionales:</strong> cuando la ART desconoce patologías derivadas de esfuerzos repetitivos (hernias, tendinitis, lumbalgias).</li>
                            <li><strong>Homologación de acuerdos:</strong> audiencia ante el Servicio de Homologación de la SRT para convalidar el pago indemnizatorio.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Ante un dictamen desfavorable de la sede San Martín, la apelación judicial se promueve ante los <strong>Tribunales de Trabajo del Departamento Judicial San Martín</strong> (ubicados sobre calles Mitre y San Lorenzo, General San Martín). Esta instancia judicial permite que un perito médico judicial matriculado determine con exactitud tu minusvalía. Vía opcional: Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en San Martín</h4>
                        <ul>
                            <li>DNI original y copia; constancia de CUIL.</li>
                            <li>Recibos de sueldo anteriores y posteriores al accidente.</li>
                            <li>Constancia formal de alta de la ART o notificación postal de rechazo.</li>
                            <li>Estudios de imágenes (radiografías, resonancias magnéticas, tomografías) con sus informes impresos.</li>
                            <li>Copia de historia clínica y protocolos quirúrgicos en caso de cirugías.</li>
                            <li>Asistencia de tu letrado patrocinante especialista.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de San Martín</h4>
                    <details class="gba-faq-item">
                        <summary>¿Cómo llego a la sede de 25 de Mayo 1935 en San Martín?</summary>
                        <p>La sede está ubicada a unas 7 cuadras de la estación San Martín del Tren Mitre (ramal José León Suárez) y conectada por múltiples líneas de colectivos (78, 87, 161, 169, 176, 237, 252, 343).</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Es obligatorio contar con patrocinio letrado en San Martín?</summary>
                        <p>Sí, por imperio de la Ley 27.348 no podés comparecer sin abogado. Si bien la SRT ofrece letrados oficiales, es fundamental que elijas a tu propia abogada de confianza para que vele exclusivamente por tus intereses patrimoniales.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué sucede si no me presento a la junta médica fijada en San Martín?</summary>
                        <p>Si no justificás la inasistencia dentro de los 3 días hábiles posteriores por causa médica o de fuerza mayor, la SRT puede tener por desistido el trámite y archivar las actuaciones.</p>
                    </details>
                </div>
            </article>

            <!-- SAN ISIDRO -->
            <article class="gba-ficha-sede" id="guia-san-isidro">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-san-isidro" class="gba-titulo-link" title="Volver a la ficha rápida de San Isidro">COMISIÓN MÉDICA SAN ISIDRO</a> <span class="gba-ficha-badge">CM 39</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Dr. Raúl Scalabrini Ortiz 144, San Isidro · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-san-isidro" class="gba-volver-link">↑ Volver al listado rápido de San Isidro</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>San Isidro, Vicente López, San Fernando y Tigre.</strong> Comprende a todos los trabajadores de la Zona Norte tradicional del Conurbano Bonaerense.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad física y psicológica:</strong> cuantificación del daño corporal conforme al Baremo del Decreto 659/96.</li>
                            <li><strong>Divergencia en el alta médica:</strong> cuestionamiento al alta otorgada por la ART cuando persisten secuelas invalidantes.</li>
                            <li><strong>Rechazo de contingencias laborales:</strong> accidentes en el lugar de trabajo o in itinere no reconocidos.</li>
                            <li><strong>Reingreso a tratamiento:</strong> pedido de recalificación laboral, prótesis ortopédicas o nueva atención médica por reagravación.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Si el porcentaje determinado en la CM 39 no te conforma o dictaminan 0%, podés recurrir a la Justicia ordinaria mediante demanda laboral ante los <strong>Tribunales de Trabajo del Departamento Judicial San Isidro</strong> (calle Ituzaingó y adyacencias, San Isidro). En el fuero laboral provincial se designa un perito médico judicial que revisa integralmente tus secuelas. Alternativamente, podés optar por la vía recursiva administrativa ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en San Isidro</h4>
                        <ul>
                            <li>DNI original y copia; constancia de CUIL.</li>
                            <li>Recibo de sueldo del momento del siniestro.</li>
                            <li>Estudios de imágenes complementarios (RMN, TAC, RX, ecografías) con informes oficiales impresos.</li>
                            <li>Constancia de alta médica o carta documento de rechazo enviada por la ART.</li>
                            <li>Abogado/a laboralista particular que patrocine tu reclamo.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de San Isidro</h4>
                    <details class="gba-faq-item">
                        <summary>¿Si me accidenté en Panamericana en San Isidro puedo tramitar acá?</summary>
                        <p>Sí. Podés tramitar en la CM 39 siempre que tu domicilio real o el domicilio laboral de la empresa se encuentre en San Isidro, Vicente López, San Fernando o Tigre.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Quién debe abonar los traslados y viáticos hasta Scalabrini Ortiz 144?</summary>
                        <p>La ART aseguradora tiene la obligación por ley de reintegrar los gastos de traslado o proveer un servicio de remís puerta a puerta para que asistas a cada citación médica de la SRT.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué pasa si la ART me ofrece una indemnización muy baja en la audiencia de acuerdo?</summary>
                        <p>No estás obligado a aceptar. Si la liquidación o el porcentaje no te convencen, con el asesoramiento de tu abogada se manifiesta la disconformidad y se avanza directamente a la vía judicial para reclamar el monto real.</p>
                    </details>
                </div>
            </article>

            <!-- LANUS -->
            <article class="gba-ficha-sede" id="guia-lanus">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-lanus" class="gba-titulo-link" title="Volver a la ficha rápida de Lanús">COMISIÓN MÉDICA LANÚS</a> <span class="gba-ficha-badge">CM 37</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Hipólito Yrigoyen 5645, Lanús (B1826DQD) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-lanus" class="gba-volver-link">↑ Volver al listado rápido de Lanús</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Lanús y Avellaneda.</strong> Cubre el cordón industrial y comercial del sur del Conurbano más próximo a la Ciudad de Buenos Aires.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral definitiva:</strong> evaluación de secuelas funcionales, articulares y psíquicas.</li>
                            <li><strong>Divergencia en el alta médica:</strong> oposición al alta intempestiva de la ART.</li>
                            <li><strong>Rechazo de siniestro:</strong> defensa del trabajador frente a desconocimientos de contingencias por la ART.</li>
                            <li><strong>Homologación de liquidaciones:</strong> firma de convenios indemnizatorios ante los funcionarios del Servicio de Homologación.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Las resoluciones de la CM 37 de Lanús se apelan ante los <strong>Tribunales de Trabajo del Departamento Judicial Avellaneda - Lanús</strong> (o del Departamento Judicial Lomas de Zamora según competencia territorial y radicación). En sede judicial se logra una revisión con perito médico oficial independiente; o subsidiariamente ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Lanús</h4>
                        <ul>
                            <li>DNI vigente original y copia; constancia de CUIL.</li>
                            <li>Recibo de sueldo del mes del hecho.</li>
                            <li>Constancia de alta médica o carta documento de rechazo enviada por la ART.</li>
                            <li>Todos los estudios de diagnóstico (radiografías, resonancias, ecografías) con sus informes firmados.</li>
                            <li>Presencia obligatoria de tu abogado/a laboralista.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Lanús</h4>
                    <details class="gba-faq-item">
                        <summary>¿Cómo llegar a la sede de Av. Hipólito Yrigoyen 5645?</summary>
                        <p>Se encuentra sobre la avenida principal de Lanús, a pocas cuadras de la estación Remedios de Escalada del Tren Roca y con acceso inmediato a través de las líneas de colectivos 51, 79, 160, 165, 177.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Puedo reclamar secuela psicológica en la junta médica de Lanús?</summary>
                        <p>Sí. Todo evento traumático, asalto en ocasión de trabajo o siniestro con intervención quirúrgica habilita la evaluación psicológica y psiquiátrica para sumar puntos de incapacidad al porcentaje físico.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Tengo que pagar algo por hacer el trámite en Lanús?</summary>
                        <p>No. El trámite administrativo ante la Superintendencia de Riesgos del Trabajo es 100% gratuito para el trabajador accidentado.</p>
                    </details>
                </div>
            </article>

            <!-- LOMAS DE ZAMORA -->
            <article class="gba-ficha-sede" id="guia-lomas-de-zamora">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-lomas-de-zamora" class="gba-titulo-link" title="Volver a la ficha rápida de Lomas de Zamora">COMISIÓN MÉDICA LOMAS DE ZAMORA</a> <span class="gba-ficha-badge">CM 37 — Del. 04</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 12 de Octubre 1292, Lomas de Zamora (B1828DMH) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-lomas-de-zamora" class="gba-volver-link">↑ Volver al listado rápido de Lomas de Zamora</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Lomas de Zamora, Banfield, Temperley, Turdera, Llavallol</strong> y localidades aledañas del Partido de Lomas de Zamora.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación del grado de incapacidad:</strong> medición pericial de secuelas traumatológicas, neurológicas y psicológicas.</li>
                            <li><strong>Divergencia en el alta médica:</strong> trámite urgente ante cese de tratamiento médico sin rehabilitación completa.</li>
                            <li><strong>Rechazo de la denuncia:</strong> reclamo cuando la aseguradora no se hace cargo del accidente de trabajo.</li>
                            <li><strong>Reingreso a tratamiento:</strong> solicitud de asistencia médica ante agravamiento de las secuelas.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>El dictamen médico de la delegación Lomas de Zamora se apela directamente ante los <strong>Tribunales de Trabajo del Departamento Judicial Lomas de Zamora</strong> (con sede en Camino Presidente Perón y Larroque, Banfield). En el fuero judicial un perito médico legista sorteadamente dictamina la verdadera incapacidad y la liquidación se calcula con las tasas de interés judicial; o bien por vía administrativa ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Lomas de Zamora</h4>
                        <ul>
                            <li>DNI con domicilio actualizado y copia; constancia de CUIL.</li>
                            <li>Recibo de sueldo del empleador.</li>
                            <li>Notificación formal de alta médica o carta documento de rechazo de la ART.</li>
                            <li>Estudios complementarios en mano (placas, resonancias, ecografías) con sus informes médicos originales.</li>
                            <li>Abogado/a laboralista especialista en ART.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Lomas de Zamora</h4>
                    <details class="gba-faq-item">
                        <summary>¿Qué diferencia hay entre la sede de Lomas y la de Lanús?</summary>
                        <p>La sede de Lomas (12 de Octubre 1292) atiende prioritariamente los domicilios y establecimientos del Partido de Lomas de Zamora, mientras que Lanús abarca Lanús y Avellaneda.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué pasa si la aseguradora no asiste a la audiencia en Lomas de Zamora?</summary>
                        <p>Si la ART no se presenta a la audiencia de homologación o no realiza una propuesta económica seria, se da por concluido el trámite y queda expedita la vía judicial para iniciar la demanda laboral.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Cómo se calcula el monto indemnizatorio?</summary>
                        <p>La indemnización se calcula según la fórmula de ley (53 veces el Ingreso Base Mensual por el porcentaje de incapacidad por el factor de edad), garantizando los pisos mínimos legales vigentes fijados por la SRT.</p>
                    </details>
                </div>
            </article>

            <!-- RAMOS MEJIA - LA MATANZA -->
            <article class="gba-ficha-sede" id="guia-ramos-mejia">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-ramos-mejia" class="gba-titulo-link" title="Volver a la ficha rápida de Ramos Mejía">COMISIÓN MÉDICA RAMOS MEJÍA — LA MATANZA</a> <span class="gba-ficha-badge">CM 38 — Del. 02</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Avda. de Mayo 1180, Ramos Mejía (B1704BUY) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-ramos-mejia" class="gba-volver-link">↑ Volver al listado rápido de Ramos Mejía</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Todo el Partido de La Matanza.</strong> Comprende Ramos Mejía, San Justo, Ciudad Evita, González Catán, Isidro Casanova, Gregorio de Laferrere, Virrey del Pino, Tapiales, Villa Luzuriaga, Lomas del Mirador, Aldo Bonzi y 20 de Junio.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad:</strong> junta médica para fijar el porcentaje de secuela post-accidente.</li>
                            <li><strong>Divergencia en el alta médica:</strong> oposición formal a altas médicas prematuras dictadas por la ART.</li>
                            <li><strong>Rechazo de siniestros laborales o in itinere:</strong> trámites por accidentes en colectivos o motos camino al trabajo.</li>
                            <li><strong>Divergencia en prestaciones en especie:</strong> reclamo de intervenciones quirúrgicas, férulas, kinesiología o medicamentos.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Si el porcentaje determinado es exiguo o te dan 0%, se interpone la acción judicial laboral de revisión ante los <strong>Tribunales de Trabajo del Departamento Judicial La Matanza</strong> (con sede central en San Justo, sobre calles Florencio Varela, Perú y Marcón). Allí se sortea un perito médico judicial que valora tus limitaciones conforme a derecho. Vía alternativa: apelación administrativa ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Ramos Mejía</h4>
                        <ul>
                            <li>DNI original vigente y copia; constancia de CUIL.</li>
                            <li>Recibo de haberes del trabajador.</li>
                            <li>Copia de la denuncia del accidente y alta formal o carta documento de rechazo de la aseguradora.</li>
                            <li>Estudios de imágenes médicos con sus respectivos informes impresos.</li>
                            <li>Acompañamiento de tu abogado/a laboralista particular de confianza.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Ramos Mejía</h4>
                    <details class="gba-faq-item">
                        <summary>¿Cómo llego a la sede de Av. de Mayo 1180 en Ramos Mejía?</summary>
                        <p>Se encuentra sobre la avenida comercial neurálgica de Ramos Mejía, a unas 10 cuadras de la estación del Ferrocarril Sarmiento y con parada de las líneas de colectivos 88, 96, 172, 205, 242, 621.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué pasa si la Comisión Médica de Ramos Mejía se demora más de 60 días?</summary>
                        <p>Cumplido el plazo de 60 días hábiles administrativos sin que la SRT emita dictamen, el trabajador puede dar por agotada la vía administrativa por mora e iniciar la demanda laboral directa en los Tribunales de San Justo.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Quién paga los honorarios de mi abogada en la Comisión de Ramos Mejía?</summary>
                        <p>Los honorarios profesionales por la tramitación ante la Comisión Médica son pagados por la aseguradora ART en el marco del acuerdo homologado, sin que vos debas desembolsar dinero de tu bolsillo.</p>
                    </details>
                </div>
            </article>

            <!-- QUILMES -->
            <article class="gba-ficha-sede" id="guia-quilmes">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-quilmes" class="gba-titulo-link" title="Volver a la ficha rápida de Quilmes">COMISIÓN MÉDICA QUILMES</a> <span class="gba-ficha-badge">CM 37 — Del. 03</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Av. Carlos Pellegrini 589, Quilmes (B1878CBJ) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-quilmes" class="gba-volver-link">↑ Volver al listado rápido de Quilmes</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Quilmes, Berazategui, Florencio Varela y San Francisco Solano.</strong> Abarca a los trabajadores industriales, comerciales y de servicios de la zona sudeste del GBA.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral definitiva:</strong> evaluación de secuelas traumatológicas, quemaduras, fracturas y daño estético.</li>
                            <li><strong>Divergencia en el alta médica:</strong> cuestionamiento cuando la ART niega la continuidad de la atención médica.</li>
                            <li><strong>Rechazo de siniestros in itinere o laborales:</strong> resolución de controversias sobre la causa laboral del accidente.</li>
                            <li><strong>Homologación de convenios de pago:</strong> control legal del monto indemnizatorio ofrecido por la aseguradora.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Si el dictamen de la CM 37 Del. 03 es desfavorable o no refleja la verdadera limitación física, se recurre judicialmente ante los <strong>Tribunales de Trabajo del Departamento Judicial Quilmes</strong> (con sede en Av. 12 de Octubre, Hipólito Yrigoyen y Videla, Quilmes). Un perito médico de la lista judicial realiza un examen clínico exhaustivo. Vía optativa: apelación administrativa ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Quilmes</h4>
                        <ul>
                            <li>DNI original vigente y copia; constancia de CUIL.</li>
                            <li>Último recibo de sueldo anterior a la fecha del siniestro.</li>
                            <li>Constancia de alta médica o carta documento de rechazo emitida por la ART.</li>
                            <li>Estudios de imágenes (radiografías, resonancias magnéticas, ecografías musculares) con sus informes impresos.</li>
                            <li>Acompañamiento obligatorio de tu abogado/a laboralista.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Quilmes</h4>
                    <details class="gba-faq-item">
                        <summary>¿Si vivo en Florencio Varela o Berazategui tengo que ir a la sede de Quilmes?</summary>
                        <p>Sí. La sede de Av. Carlos Pellegrini 589 en Quilmes es la cabecera jurisdiccional que tiene competencia territorial sobre Florencio Varela, Berazategui y Quilmes.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué pasa si la ART me rechazó el accidente in itinere alegando que desvié el trayecto?</summary>
                        <p>Tu abogada presentará en la audiencia médica las pruebas correspondientes (sube, mapas de recorrido habitual, testigos, denuncia policial) para acreditar que el desvío no existió o fue por razones de fuerza mayor, revocando el rechazo.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿En qué plazo puedo apelar el dictamen de la Comisión de Quilmes?</summary>
                        <p>Una vez notificado el dictamen definitivo por cédula postal o ventanilla electrónica, tenés los plazos procesales legales vigentes para interponer la demanda judicial ante los Tribunales de Trabajo de Quilmes.</p>
                    </details>
                </div>
            </article>

            <!-- MORENO -->
            <article class="gba-ficha-sede" id="guia-moreno">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-moreno" class="gba-titulo-link" title="Volver a la ficha rápida de Moreno">COMISIÓN MÉDICA MORENO</a> <span class="gba-ficha-badge">CM 15</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Intendente Nemesio Álvarez 358, Moreno (B1744BSH) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-moreno" class="gba-volver-link">↑ Volver al listado rápido de Moreno</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Moreno, General Rodríguez y Marcos Paz.</strong> Incluye el parque industrial de Moreno, plantas logísticas de General Rodríguez y el corredor oeste del Conurbano.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral permanente:</strong> cálculo de daño físico o secuela psicológica por accidente o enfermedad profesional.</li>
                            <li><strong>Divergencia en el alta médica:</strong> reclamo para retomar tratamiento médico o kinesiología no concluida.</li>
                            <li><strong>Rechazo de siniestro:</strong> impugnación frente al desconocimiento del evento por la aseguradora.</li>
                            <li><strong>Divergencia en prestaciones en especie:</strong> provisión de medicamentos, traslados y prótesis ortopédicas.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Ante un dictamen disconforme en la CM 15, la apelación se tramita por demanda laboral ante los <strong>Tribunales de Trabajo del Departamento Judicial Moreno - General Rodríguez</strong>. Allí los jueces laborales provinciales intervienen con un perito médico judicial matriculado para tasar la incapacidad real. Vía optativa: recurso ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Moreno</h4>
                        <ul>
                            <li>DNI original vigente y copia; constancia de CUIL.</li>
                            <li>Recibo de sueldo del momento del siniestro.</li>
                            <li>Comprobantes de atención médica y alta o carta documento de rechazo de la aseguradora.</li>
                            <li>Estudios médicos complementarios originales con sus respectivos informes impresos.</li>
                            <li>Concurrencia obligatoria junto a tu letrado/a patrocinante.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Moreno</h4>
                    <details class="gba-faq-item">
                        <summary>¿Los trabajadores de General Rodríguez pueden tramitar en Moreno?</summary>
                        <p>Sí. General Rodríguez integra formalmente la competencia territorial directa de la Comisión Médica 15 de Moreno.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué evalúan los médicos de la junta médica en Moreno?</summary>
                        <p>Realizan una exploración clínica física funcional, midiendo arcos de movilidad de las articulaciones afectadas, cicatrices, pérdida de fuerza muscular y reflejos, cotejando los hallazgos con el Baremo legal de incapacidades.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué ocurre si la ART no me entregó las resonancias o radiografías?</summary>
                        <p>Tu abogada intima por escrito a la ART en el mismo expediente de la SRT para que remita los estudios bajo apercibimiento de ley, o se solicita la realización de nuevos estudios a cargo de la aseguradora.</p>
                    </details>
                </div>
            </article>

            <!-- PILAR -->
            <article class="gba-ficha-sede" id="guia-pilar">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-pilar" class="gba-titulo-link" title="Volver a la ficha rápida de Pilar">COMISIÓN MÉDICA PILAR</a> <span class="gba-ficha-badge">CM 39 — Del. 02</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Beato Janssen 850, Colectora Este Panamericana Km 51.5, Pilar (B1629) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-pilar" class="gba-volver-link">↑ Volver al listado rápido de Pilar</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Pilar, Exaltación de la Cruz y zonas limítrofes del corredor industrial norte.</strong> Concentra los siniestros ocurridos en el Parque Industrial Pilar y centros logísticos sobre la Ruta 8 y Panamericana.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral definitiva:</strong> evaluación de secuelas físicas y psíquicas derivadas de accidentes fabriles o in itinere.</li>
                            <li><strong>Divergencia en el alta médica:</strong> reclamo ante altas médicas precipitadas otorgadas por la ART.</li>
                            <li><strong>Rechazo del siniestro:</strong> resolución de negativas de cobertura por parte de las aseguradoras.</li>
                            <li><strong>Homologación de acuerdos indemnizatorios:</strong> audiencia formal para percibir la indemnización correspondiente.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Si no estás conforme con el dictamen de la delegación Pilar, la demanda judicial laboral se interpone ante los <strong>Tribunales de Trabajo del Departamento Judicial San Isidro (con competencia territorial en Pilar)</strong> o fuero correspondiente según Ley 14.997, donde un perito judicial desinsaculado realiza una pericia exhaustiva; o subsidiariamente ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Pilar</h4>
                        <ul>
                            <li>DNI con domicilio actualizado y copia; constancia de CUIL.</li>
                            <li>Recibos de sueldo que acrediten tu remuneración habitual.</li>
                            <li>Notificación de alta médica o carta documento de rechazo emitida por la aseguradora.</li>
                            <li>Estudios de imágenes (radiografías, resonancias magnéticas) con informes firmados por médico radiólogo.</li>
                            <li>Abogado/a laboralista de tu confianza.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Pilar</h4>
                    <details class="gba-faq-item">
                        <summary>¿Cómo llego a la sede de Colectora Este en Pilar?</summary>
                        <p>Se encuentra sobre la Colectora Este de la Panamericana Ramal Pilar a la altura del Km 51.5 (calle Beato Janssen 850), accesible mediante las líneas 57, 203, 510 y colectivos comunales de Pilar.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Estoy obligado a aceptar la oferta indemnizatoria de la ART en la audiencia?</summary>
                        <p>No. Si el monto ofrecido es insuficiente o no refleja la verdadera incapacidad que padecés, no se firma conformidad y tu letrada inicia la demanda judicial laboral para reclamar la indemnización integral.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Cuánto tardan en depositar la indemnización tras homologar el acuerdo?</summary>
                        <p>Una vez firmado y homologado el acuerdo ante el Servicio de Homologación de la SRT, la ART tiene un plazo de hasta 15 días hábiles para acreditar los fondos en tu cuenta bancaria (CBU).</p>
                    </details>
                </div>
            </article>

            <!-- EZEIZA -->
            <article class="gba-ficha-sede" id="guia-ezeiza">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-ezeiza" class="gba-titulo-link" title="Volver a la ficha rápida de Ezeiza">COMISIÓN MÉDICA EZEIZA</a> <span class="gba-ficha-badge">CM 37 — Del. 02</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Arribeños 256, Ezeiza (B1804CPF) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-ezeiza" class="gba-volver-link">↑ Volver al listado rápido de Ezeiza</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Ezeiza, Esteban Echeverría (Monte Grande, Canning, El Jagüel, 9 de Abril), Almirante Brown (Burzaco, Claypole, Glew, Adrogué), Aeropuerto Internacional de Ezeiza, San Vicente y Cañuelas.</strong></p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad física y psicológica:</strong> evaluación médica integral tras el alta médica.</li>
                            <li><strong>Divergencia en el alta médica:</strong> disconformidad si te dieron el alta prematura para volver a trabajar con dolor.</li>
                            <li><strong>Rechazo de siniestros:</strong> accidentes en el ámbito aeroportuario, logístico, fabril o durante el trayecto de ida/vuelta.</li>
                            <li><strong>Divergencia en prestaciones en especie:</strong> provisión de traslados, prótesis, kinesiología y medicamentos.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>El dictamen médico de la delegación Ezeiza se apela judicialmente ante los <strong>Tribunales de Trabajo del Departamento Judicial Lomas de Zamora</strong> (con competencia en Ezeiza y Esteban Echeverría), permitiendo una pericia médica judicial imparcial; o bien mediante recurso ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Ezeiza</h4>
                        <ul>
                            <li>DNI original vigente y copia; constancia de CUIL; recibo de haberes.</li>
                            <li>Denuncia del accidente y alta médica o carta documento de rechazo emitida por la ART.</li>
                            <li>Estudios de imágenes (radiografías, resonancias, ecografías) con sus informes médicos originales.</li>
                            <li>Historia clínica de los centros médicos asistenciales.</li>
                            <li>Concurrir con tu abogado/a laboralista particular.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Ezeiza</h4>
                    <details class="gba-faq-item">
                        <summary>¿Los empleados del Aeropuerto de Ezeiza tramitan en esta comisión?</summary>
                        <p>Sí. Toda la actividad de rampa, seguridad, mantenimiento, despachantes de aduana y servicios aeroportuarios con lugar de trabajo en Ezeiza tiene competencia directa en esta sede.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué pasa si la ART rechaza el siniestro diciendo que era una "patología preexistente"?</summary>
                        <p>En la junta médica y en la apelación judicial tu abogada demuestra que el trabajo o esfuerzo físico actuó como factor desencadenante o agravante, generando la obligación de indemnizarte.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Puedo reclamar si sufrí un accidente in itinere en la Autopista Ricchieri?</summary>
                        <p>Sí. Los siniestros ocurridos en el trayecto de ida o vuelta entre el hogar y el trabajo están 100% amparados por la Ley de Riesgos del Trabajo.</p>
                    </details>
                </div>
            </article>

            <!-- ZARATE - CAMPANA -->
            <article class="gba-ficha-sede" id="guia-zarate">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-zarate" class="gba-titulo-link" title="Volver a la ficha rápida de Zárate">COMISIÓN MÉDICA ZÁRATE — CAMPANA</a> <span class="gba-ficha-badge">CM 31</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Rómulo Noya 1049 PB, Zárate (B2800JMQ) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-zarate" class="gba-volver-link">↑ Volver al listado rápido de Zárate</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Zárate, Campana, Escobar y Exaltación de la Cruz.</strong> Abarca al polo petroquímico, automotriz, portuario y siderúrgico del norte bonaerense.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral definitiva:</strong> examen de secuelas por traumatismos, fracturas y enfermedades profesionales.</li>
                            <li><strong>Divergencia en el alta médica:</strong> reclamo ante el alta médica prematura sin recuperación de la aptitud laboral.</li>
                            <li><strong>Rechazo de siniestros o enfermedades profesionales:</strong> reclamo por hipoacusias industriales, lumbalgias y lesiones osteoarticulares.</li>
                            <li><strong>Reingreso a tratamiento:</strong> solicitud de nuevas prestaciones médicas por reagravación.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Ante una resolución disconforme en la CM 31 de Zárate, la apelación judicial se radica ante los <strong>Tribunales de Trabajo del Departamento Judicial Zárate - Campana</strong> (con sede en Campana, calle Del Pino / San Martín), con designación de un perito médico judicial independiente; o ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Zárate</h4>
                        <ul>
                            <li>DNI vigente y copia; recibos de sueldo; constancia de CUIL.</li>
                            <li>Copia de la denuncia a la aseguradora y alta médica o rechazo formal de la ART.</li>
                            <li>Audiometrías, radiografías, resonancias y estudios con sus informes firmados.</li>
                            <li>Abogado/a laboralista especialista en ART.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Zárate</h4>
                    <details class="gba-faq-item">
                        <summary>¿Los trabajadores de plantas siderúrgicas y automotrices de Campana tramitan acá?</summary>
                        <p>Sí. La sede Zárate (CM 31) tiene competencia asignada para los trabajadores de Campana, Zárate y Escobar.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Cómo se evalúa la hipoacusia por ruido industrial en la junta?</summary>
                        <p>Se evalúa mediante audiometrías tonales y estudios auditivos objetivos para determinar el porcentaje de pérdida auditiva bilateral según la tabla del Baremo de ley.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué sucede si no estoy de acuerdo con el porcentaje de indemnización?</summary>
                        <p>Se interpone la apelación judicial ante los Tribunales de Trabajo de Zárate - Campana donde un perito judicial realiza una nueva evaluación integral de tu daño.</p>
                    </details>
                </div>
            </article>

            <!-- LA PLATA -->
            <article class="gba-ficha-sede" id="guia-la-plata">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-la-plata" class="gba-titulo-link" title="Volver a la ficha rápida de La Plata">COMISIÓN MÉDICA LA PLATA</a> <span class="gba-ficha-badge">CM 11</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Calle 13 Nº 220, La Plata (B1902CSY) · 🕘 Lunes a viernes 7 a 14hs</p>
                    </div>
                    <a href="#card-la-plata" class="gba-volver-link">↑ Volver al listado rápido de La Plata</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>La Plata, Berisso, Ensenada, Brandsen, Magdalena, Punta Indio, San Vicente, Presidente Perón y General Paz.</strong></p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad por accidentes o enfermedades:</strong> evaluación médica física y psíquica.</li>
                            <li><strong>Divergencia en el alta médica:</strong> oposición formal al alta prematura otorgada por la aseguradora.</li>
                            <li><strong>Rechazo de siniestros de trabajadores públicos y privados:</strong> docentes, policías, empleados de salud y del sector privado.</li>
                            <li><strong>Divergencia en tratamientos médicos y prótesis:</strong> reclamo urgente por prestaciones no suministradas.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Si el dictamen de la CM 11 es insuficiente o otorga 0%, se apela por vía judicial ordinaria ante los <strong>Tribunales de Trabajo del Departamento Judicial La Plata</strong> (calle 13 e/ 47 y 48, La Plata), donde se sortea un perito médico legista judicial; o por vía administrativa ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en La Plata</h4>
                        <ul>
                            <li>DNI original y copia; constancia de CUIL; recibo de haberes.</li>
                            <li>Notificación de alta médica o carta documento de rechazo de la ART.</li>
                            <li>Historia clínica completa, constancias de atenciones y certificados médicos.</li>
                            <li>Estudios médicos complementarios con informe impreso firmado por especialista.</li>
                            <li>Abogado/a laboralista matriculado/a.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de La Plata</h4>
                    <details class="gba-faq-item">
                        <summary>¿Existe una guía detallada sobre la Comisión Médica de La Plata?</summary>
                        <p>Sí. Podés consultar nuestro informe especializado en la <a href="<?= BASE_URL ?>blog/comision-medica-la-plata-guia" style="color:var(--text);font-weight:700;text-decoration:underline;">Guía de la Comisión Médica La Plata</a> con el paso a paso del trámite en la capital bonaerense.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Los empleados de la Provincia de Buenos Aires (Docentes, Salud, Policía) tramitan acá?</summary>
                        <p>Sí. Los trabajadores dependientes de la administración pública provincial con cobertura de ART también gestionan sus divergencias e incapacidades ante la SRT en La Plata.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Cuál es el horario de atención en la sede La Plata?</summary>
                        <p>Funciona de lunes a viernes en horario matutino de 7 a 14hs en Calle 13 Nº 220.</p>
                    </details>
                </div>
            </article>

            <!-- LUJAN -->
            <article class="gba-ficha-sede" id="guia-lujan">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-lujan" class="gba-titulo-link" title="Volver a la ficha rápida de Luján">COMISIÓN MÉDICA LUJÁN</a> <span class="gba-ficha-badge">CM 38 — Del. 04</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Leandro N. Alem 1302, Luján (B6700DAT) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-lujan" class="gba-volver-link">↑ Volver al listado rápido de Luján</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Luján, General Las Heras, Marcos Paz, Carmen de Areco, Salto, San Andrés de Giles y San Antonio de Areco.</strong></p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral definitiva:</strong> medición pericial de secuelas permanentes.</li>
                            <li><strong>Divergencia en el alta médica:</strong> reclamo ante el cese indebido de prestaciones asistenciales de la ART.</li>
                            <li><strong>Rechazo de siniestro:</strong> impugnación por desconocimiento del accidente de trabajo.</li>
                            <li><strong>Divergencia en prestaciones médicas:</strong> provisión de medicamentos y tratamientos pendientes.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>Las resoluciones de la sede Luján se apelan ante los <strong>Tribunales de Trabajo del Departamento Judicial Mercedes</strong> (con competencia territorial sobre Luján y San Andrés de Giles), donde un perito médico judicial evalúa las secuelas; o bien ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Luján</h4>
                        <ul>
                            <li>DNI original y copia; constancia de CUIL; recibo de sueldo.</li>
                            <li>Alta médica o carta documento de rechazo de la ART.</li>
                            <li>Estudios de imágenes (radiografías, resonancias) con sus informes médicos.</li>
                            <li>Asistencia de tu abogado/a laboralista particular.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Luján</h4>
                    <details class="gba-faq-item">
                        <summary>¿Si vivo en San Andrés de Giles o Carmen de Areco me corresponde Luján?</summary>
                        <p>Sí. Ambos partidos integran la competencia geográfica oficial de la Delegación Luján de la SRT.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Qué debo hacer si la aseguradora no me garantiza rehabilitación en mi zona?</summary>
                        <p>Mediante el trámite de divergencia en prestaciones se exige que la ART provea kinesiología en tu localidad o traslados en remís sin cargo a los centros médicos.</p>
                    </details>
                </div>
            </article>

            <!-- MERCEDES -->
            <article class="gba-ficha-sede" id="guia-mercedes">
                <div class="gba-ficha-header">
                    <div>
                        <h3><a href="#card-mercedes" class="gba-titulo-link" title="Volver a la ficha rápida de Mercedes">COMISIÓN MÉDICA MERCEDES</a> <span class="gba-ficha-badge">CM 38 — Del. 05</span></h3>
                        <p class="m-0 txt-gris fs-09">📍 Calle 20 Nº 370, Mercedes (B6600HGF) · 🕘 Lunes a viernes 8 a 15hs</p>
                    </div>
                    <a href="#card-mercedes" class="gba-volver-link">↑ Volver al listado rápido de Mercedes</a>
                </div>
                <div class="gba-ficha-grid">
                    <div class="gba-bloque-item">
                        <h4>🗺️ Partidos que cubre (Competencia territorial)</h4>
                        <p><strong>Mercedes, Alberti, Bragado, Chivilcoy, Navarro, 9 de Julio, Suipacha y 25 de Mayo.</strong></p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>📑 Trámites que se realizan en esta sede</h4>
                        <ul>
                            <li><strong>Determinación de incapacidad laboral permanente:</strong> valoración de daño físico o psíquico post-alta.</li>
                            <li><strong>Divergencia en el alta médica:</strong> impugnación del alta otorgada sin concluir el tratamiento.</li>
                            <li><strong>Rechazo del accidente o enfermedad profesional:</strong> reclamo ante la falta de cobertura de la ART.</li>
                            <li><strong>Reingreso a tratamiento:</strong> solicitud de atención médica por agravamiento.</li>
                        </ul>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>⚖️ Fuero de revisión / Dónde apelar el dictamen</h4>
                        <p>El dictamen médico de la delegación Mercedes se apela judicialmente ante los <strong>Tribunales de Trabajo del Departamento Judicial Mercedes</strong> (calle 27 y 26, Mercedes), con designación de perito médico judicial oficial; o ante la Comisión Médica Central.</p>
                    </div>
                    <div class="gba-bloque-item">
                        <h4>🎒 Qué llevar al turno en Mercedes</h4>
                        <ul>
                            <li>DNI original y copia; constancia de CUIL; recibo de sueldo.</li>
                            <li>Notificación de alta médica o carta documento de rechazo de la ART.</li>
                            <li>Estudios de diagnóstico complementarios con informes impresos firmados.</li>
                            <li>Abogado/a laboralista de tu confianza.</li>
                        </ul>
                    </div>
                </div>
                <div class="gba-faq-box">
                    <h4>Preguntas frecuentes sobre la Comisión Médica de Mercedes</h4>
                    <details class="gba-faq-item">
                        <summary>¿Los trabajadores de Chivilcoy y Bragado deben concurrir a Mercedes?</summary>
                        <p>Sí. Mercedes es la sede cabecera de la SRT asignada a los departamentos del centro-oeste de la provincia de Buenos Aires.</p>
                    </details>
                    <details class="gba-faq-item">
                        <summary>¿Cuánto tiempo dura la junta médica en Mercedes?</summary>
                        <p>El examen físico funcional suele extenderse entre 20 y 40 minutos en función de la cantidad y complejidad de las lesiones a examinar.</p>
                    </details>
                </div>
            </article>

        </div>
    </section>

    <!-- HERRAMIENTAS -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion">Herramientas para <span class="subrayado-amarillo">tu trámite</span></h2>
            <section class="grid-iconos mt-40">
                <a href="<?= BASE_URL ?>formularios-srt" class="derecho-item">
                    <?= render_icon('file-lines') ?>
                    <h3>FORMULARIOS SRT</h3>
                </a>
                <a href="<?= BASE_URL ?>buscador-comisiones" class="derecho-item">
                    <?= render_icon('location-dot') ?>
                    <h3>BUSCADOR DE COMISIONES MÉDICAS</h3>
                </a>
                <a href="<?= BASE_URL ?>tabla-incapacidad" class="derecho-item">
                    <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/dedo.png" alt="Tabla de Incapacidad" title="Tabla de Incapacidad Baremo Laboral" style="width: 3rem; height: 3rem; object-fit: contain; margin-bottom: 0.3125rem;">
                    <h3>TABLA DE INCAPACIDAD</h3>
                </a>
                <a href="<?= BASE_URL ?>cual-es-mi-art" class="derecho-item">
                    <?= render_icon('magnifying-glass') ?>
                    <h3>¿QUÉ ART TENGO?</h3>
                </a>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-negro-final txt-blanco">
        <section class="contenedor flex-between">
            <article>
                <h3>¿NECESITÁS ASESORAMIENTO PARA TU JUNTA MÉDICA?</h3>
                <p class="txt-blanco-opaco">No vayas solo/a. Asegurá tu indemnización con expertas en derecho laboral.</p>
            </article>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                CONSULTAR POR WHATSAPP
            </a>
        </section>
    </section>
</main>
