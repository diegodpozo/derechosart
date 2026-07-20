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
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA EZEIZA</h3>
                    <span class="sede-cm">CM 37 — Del. 02</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Arribeños 256, Ezeiza (B1804CPF)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Aeropuerto Ezeiza, Alte. Brown, Burzaco, Canning, Carlos Spegazzini, Claypole, Ezeiza, El Jaguel, Esteban Echeverría, Glew, José Mármol, Longchamps, Luis Guillón, Ministro Rivadavia, Monte Grande, 9 de Abril, Rafael Calzada, San Francisco Solano, San José, Tristán Suárez.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Arribe%C3%B1os%20256%2C%20B1804CPF%2C%20Ezeiza" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Arribe%C3%B1os%20256%2C%20B1804CPF%2C%20Ezeiza" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA LA PLATA</h3>
                    <span class="sede-cm">CM 11</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Calle 13 Nº 220, La Plata (B1902CSY)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 7 a 14hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Berisso, Coronel Brandsen, Ensenada, Gral. Paz, La Plata, Magdalena, Pte. Perón, Punta Indio, San Vicente.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Calle%2013%20220%2C%20B1902CSY%2C%20La%20Plata" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Calle%2013%20220%2C%20B1902CSY%2C%20La%20Plata" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA LANÚS</h3>
                    <span class="sede-cm">CM 37</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Hipólito Yrigoyen 5645, Lanús (B1826DQD)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Avellaneda, Lanús.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Hip%C3%B3lito%20Yrigoyen%205645%2C%20B1826DQD%2C%20Lan%C3%BAs" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Hip%C3%B3lito%20Yrigoyen%205645%2C%20B1826DQD%2C%20Lan%C3%BAs" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA LOMAS DE ZAMORA</h3>
                    <span class="sede-cm">CM 37 — Del. 04</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> 12 de Octubre 1292, Lomas de Zamora (B1828DMH)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Banfield, Lavallol, Lomas de Zamora, Temperley, Turdera.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=12%20de%20Octubre%201292%2C%20B1828DMH%2C%20Lomas%20de%20Zamora" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=12%20de%20Octubre%201292%2C%20B1828DMH%2C%20Lomas%20de%20Zamora" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA LUJÁN</h3>
                    <span class="sede-cm">CM 38 — Del. 04</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Leandro N. Alem 1302, Luján (B6700DAT)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Carmen de Areco, Gral. Las Heras, Luján, Marcos Paz, Salto, San Andrés de Giles, San Antonio de Areco.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Leandro%20N.%20Alem%201302%2C%20B6700DAT%2C%20Luj%C3%A1n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Leandro%20N.%20Alem%201302%2C%20B6700DAT%2C%20Luj%C3%A1n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA MERCEDES</h3>
                    <span class="sede-cm">CM 38 — Del. 05</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Calle 20 Nº 370, Mercedes (B6600HGF)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Alberti, Bragado, Chivilcoy, Mercedes, Navarro, 9 de Julio, Suipacha, 25 de Mayo.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Calle%2020%20370%2C%20B6600HGF%2C%20Mercedes" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Calle%2020%20370%2C%20B6600HGF%2C%20Mercedes" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA MORENO</h3>
                    <span class="sede-cm">CM 15</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Intendente Nemesio Álvarez 358, Moreno (B1744BSH)</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Moreno, Gral. Rodríguez.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Intendente%20Nemesio%20%C3%81lvarez%20358%2C%20B1744BSH%2C%20Moreno" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Intendente%20Nemesio%20%C3%81lvarez%20358%2C%20B1744BSH%2C%20Moreno" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA MORÓN</h3>
                    <span class="sede-cm">CM 38</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Gral. Bartolomé Mitre 1145, Morón (B1708EAV)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Morón, Hurlingham, Ituzaingó, Merlo.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Gral.%20Bartolom%C3%A9%20Mitre%201145%2C%20B1708EAV%2C%20Mor%C3%B3n" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Gral.%20Bartolom%C3%A9%20Mitre%201145%2C%20B1708EAV%2C%20Mor%C3%B3n" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA PILAR</h3>
                    <span class="sede-cm">CM 39 — Del. 02</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Beato Janssen 850, Colectora Este, Pilar (1629)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Pilar, Tigre.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Beato%20Janssen%20850%2C%201629%2C%20Pilar" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Beato%20Janssen%20850%2C%201629%2C%20Pilar" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA QUILMES</h3>
                    <span class="sede-cm">CM 37 — Del. 03</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Av. Carlos Pellegrini 589, Quilmes (B1878CBJ)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Berazategui, Florencio Varela, San Francisco Solano, Quilmes.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Av.%20Carlos%20Pellegrini%20589%2C%20B1878CBJ%2C%20Quilmes" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Av.%20Carlos%20Pellegrini%20589%2C%20B1878CBJ%2C%20Quilmes" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA RAMOS MEJÍA</h3>
                    <span class="sede-cm">CM 38 — Del. 02</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Avda. de Mayo 1180, Ramos Mejía (B1704BUY)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> La Matanza.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Avda.%20de%20Mayo%201180%2C%20B1704BUY%2C%20Ramos%20Mej%C3%ADa" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Avda.%20de%20Mayo%201180%2C%20B1704BUY%2C%20Ramos%20Mej%C3%ADa" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA SAN ISIDRO</h3>
                    <span class="sede-cm">CM 39</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Dr. Raúl Scalabrini Ortiz 144, San Isidro (C1414DNO)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> San Fernando, San Isidro, Vicente López.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Scalabrini%20Ortiz%20144%2C%20C1414DNO%2C%20San%20Isidro" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Scalabrini%20Ortiz%20144%2C%20C1414DNO%2C%20San%20Isidro" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA SAN MARTÍN</h3>
                    <span class="sede-cm">CM 38 — Del. 03</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> 25 de Mayo 1935, Gral. San Martín (B1650BJG)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Ciudadela, Churruca, Gral. San Martín, José C. Paz, San Miguel.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=25%20de%20Mayo%201935%2C%20B1650BJG%2C%20Gral.%20San%20Mart%C3%ADn" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=25%20de%20Mayo%201935%2C%20B1650BJG%2C%20Gral.%20San%20Mart%C3%ADn" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>

                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA ZÁRATE</h3>
                    <span class="sede-cm">CM 31</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Rómulo Noya 1049 PB, Zárate (B2800JMQ)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Campana, Escobar, Exaltación de la Cruz, Zárate.</p>
                    <div class="sede-links">
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
                    <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/dedo.png" alt="Tabla de Incapacidad" style="width: 3rem; height: 3rem; object-fit: contain; margin-bottom: 0.3125rem;">
                    <h3>TABLA DE INCAPACIDAD</h3>
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
