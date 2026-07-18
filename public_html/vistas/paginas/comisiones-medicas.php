<?php
// VISTA: COMISIONES MEDICAS
?>

<style>
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
        content: "\\2713";
        color: var(--amarillo);
        font-weight: 700;
    }
    @media (max-width: 600px) {
        .ventanilla-card ul {
            grid-template-columns: 1fr;
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
            <h1>Comisiones <span class="subrayado-amarillo"><strong>Médicas SRT</strong></span></h1>
            <p class="subtitulo-hero">Listado, ubicaciones y guía completa 2026. Trámites ante la Superintendencia de Riesgos del Trabajo para el cobro de indemnizaciones.</p>
        </section>
    </section>

    <!-- INTRODUCCION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿QUÉ SON LAS <span class="subrayado-amarillo">COMISIONES</span> MÉDICAS?</h2>
            <p class="txt-gris">Son los organismos administrativos de la <strong>Superintendencia de Riesgos del Trabajo (SRT)</strong> encargados de resolver las discrepancias entre los trabajadores y las ART. Su función principal es determinar si un accidente o enfermedad es laboral, evaluar el grado de incapacidad física o psíquica y establecer el monto de la indemnización que te corresponde.</p>
            <p class="txt-gris">Es una instancia <strong>obligatoria y gratuita</strong>. Sin embargo, para que tus derechos sean respetados y no te asignen un porcentaje menor al real, es fundamental contar con un abogado especialista desde el inicio del trámite.</p>
        </section>
    </section>

    <!-- FUNCIONES PRINCIPALES -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">FUNCIONES <span class="subrayado-amarillo">PRINCIPALES</span></h2>
            <p class="txt-gris">Las Comisiones Médicas de la SRT cumplen varias funciones clave en el proceso de tu reclamo:</p>
            <section class="funciones-grid mt-30">
                <article class="funcion-item">
                    <div class="numero-funcion">01</div>
                    <h4>RESOLVER CONFLICTOS</h4>
                    <p>Resolver los conflictos entre la ART y el trabajador sobre el reconocimiento del accidente, el tratamiento médico otorgado o el porcentaje de incapacidad.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">02</div>
                    <h4>DETERMINAR ORIGEN LABORAL</h4>
                    <p>Determinar si el accidente o enfermedad tiene naturaleza laboral y establecer el grado de incapacidad permanente del trabajador.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">03</div>
                    <h4>HOMOLOGAR ACUERDOS</h4>
                    <p>Homologar los acuerdos firmados entre la ART y el trabajador, siempre que la incapacidad no supere el 66%.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">04</div>
                    <h4>EVALUAR PREEXISTENCIAS</h4>
                    <p>Evaluar enfermedades preexistentes detectadas en exámenes preocupacionales.</p>
                </article>
                <article class="funcion-item">
                    <div class="numero-funcion">05</div>
                    <h4>INSTANCIA PREVIA OBLIGATORIA</h4>
                    <p>Actuar como instancia previa obligatoria antes de iniciar una demanda judicial en las provincias adheridas a la Ley 27.348 (Buenos Aires, CABA, Córdoba, Mendoza, Neuquén, Río Negro, entre otras).</p>
                </article>
            </section>
            <p class="txt-gris mt-30"><strong>⚠ Importante:</strong> La Comisión Médica Central, ubicada en Moreno 401, CABA, actúa como revisora de los dictámenes de las comisiones jurisdiccionales cuando se apela una resolución.</p>
        </section>
    </section>

    <!-- CUAL COMISION TE CORRESPONDE -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿CUÁL COMISIÓN MÉDICA <span class="subrayado-amarillo">TE CORRESPONDE</span>?</h2>
            <p class="txt-gris">Tenés <strong>dos opciones</strong> para elegir tu Comisión Médica, y la elección es del trabajador:</p>
            <ul class="lista-check mt-20" style="list-style: none; padding: 0;">
                <li style="font-size: 0.95rem; color: var(--gris-texto); margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                    <span style="color: var(--amarillo); font-weight: 700;">✓</span>
                    La que tenga competencia en el <strong>domicilio de tu DNI</strong> (domicilio real).
                </li>
                <li style="font-size: 0.95rem; color: var(--gris-texto); margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                    <span style="color: var(--amarillo); font-weight: 700;">✓</span>
                    La que tenga competencia en el <strong>domicilio de tu lugar de trabajo</strong>.
                </li>
            </ul>
            <p class="txt-gris">La elección se hace mediante el <strong>formulario de opción de jurisdicción</strong> al iniciar el trámite. Una vez elegida, no se puede cambiar.</p>
            <p class="txt-gris">👉 <a href="https://www.srt.gob.ar/wp-content/uploads/2018/06/Formulario-Opci%C3%B3n-Jurisdicci%C3%B3n-RES-298-17.pdf" target="_blank" style="color: var(--amarillo); font-weight: 600;">Descargá el formulario de opción de jurisdicción (PDF oficial SRT)</a></p>
        </section>
    </section>

    <!-- OBLIGATORIEDAD ABOGADO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿ES OBLIGATORIO IR CON <span class="subrayado-amarillo">ABOGADO</span>?</h2>
            <div class="info-destacada">
                <p><strong>Sí.</strong> Para todos los trámites ante la Comisión Médica que impliquen determinar incapacidad o resolver un conflicto con la ART, el trabajador debe concurrir con patrocinio letrado (abogado). Es un requisito legal de la <strong>Ley 27.348</strong>.</p>
                <p class="mt-15">En <strong>DerechosART</strong> te acompañamos en todo el proceso: desde el primer trámite en la Comisión Médica hasta el cobro de tu indemnización. <strong>Sin adelantos — cobramos solo si ganás.</strong></p>
                <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo mt-15">CONSULTAR POR WHATSAPP</a>
            </div>
        </section>
    </section>

    <!-- PASOS DEL PROCESO -->
    <section class="seccion-texto bg-blanco py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">PASOS PARA TU <span class="subrayado-amarillo">RECLAMO</span></h2>
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

    <!-- RECHAZOS -->
    <section class="seccion-texto bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿LA ART <span class="subrayado-amarillo">RECHAZÓ</span> TU ACCIDENTE?</h2>
            <p class="txt-gris">Es común que las ART rechacen siniestros alegando que la patología es "preexistente" o que el hecho no ocurrió en ocasión del trabajo. Ante un rechazo, tenés derecho a que la Comisión Médica revise el caso y obligue a la ART a brindarte cobertura y pagarte la indemnización.</p>

            <section class="grid-info-doble mt-40">
                <article class="info-bloque">
                    <?= render_icon('file-circle-xmark', 'mb-10', 'fs-2') ?>
                    <h3>RECHAZO DE SINIESTRO</h3>
                    <p>Si te llegó una carta documento rechazando tu accidente, contactanos de inmediato para apelar la decisión ante la SRT.</p>
                </article>
                <article class="info-bloque">
                    <?= render_icon('chart-line-down', 'mb-10', 'fs-2') ?>
                    <h3>DIVERGENCIA EN LA INCAPACIDAD</h3>
                    <p>Si la ART reconoce el accidente pero te ofrece un porcentaje de incapacidad ridículo, peleamos por una reevaluación justa.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- LISTADO DE COMISIONES MEDICAS -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">LISTADO DE <span class="subrayado-amarillo">COMISIONES MÉDICAS</span></h2>
            <p class="txt-gris">Tocá en "Google Maps" o "Waze" para llegar directamente desde tu teléfono. Las direcciones están actualizadas según las resoluciones de la SRT.</p>

            <!-- CABA -->
            <h3 class="region-header mt-40">BUENOS AIRES (CABA)</h3>
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
            <h3 class="region-header mt-50">GRAN BUENOS AIRES</h3>
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
            <h3 class="region-header mt-50">GRAN ROSARIO</h3>
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

            <!-- NEUQUEN -->
            <h3 class="region-header mt-50">NEUQUÉN</h3>
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

            <!-- CHUBUT -->
            <h3 class="region-header mt-50">CHUBUT</h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA COMODORO RIVADAVIA</h3>
                    <span class="sede-cm">CM 19</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Rivadavia 827, Comodoro Rivadavia (U9000AKK)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 9 a 14hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Escalante, Río Senguer, Sarmiento.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Rivadavia%20833%2C%20U9000AKK%2C%20Comodoro%20Rivadavia%2C%20Chubut" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Rivadavia%20833%2C%20U9000AKK%2C%20Comodoro%20Rivadavia%2C%20Chubut" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA TRELEW</h3>
                    <span class="sede-cm">CM 36</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Chile 65, Trelew (9100)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 14hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Viedma, Florentino Ameghino, Gaiman, Gastre, Mártires, Paso de los Indios, Rawson, Telsen.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Bartolom%C3%A9%20Mitre%20417%2C%20U9100HNI%2C%20Trelew%2C%20Chubut" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Bartolom%C3%A9%20Mitre%20417%2C%20U9100HNI%2C%20Trelew%2C%20Chubut" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>
            <div class="sedes-grid mt-20">
                <div class="sede-delegacion">
                    <h4>↳ Delegación Esquel</h4>
                    <p><strong>📍 Dirección:</strong> Belgrano 542, Esquel (U9200BPL)</p>
                    <p><strong>🗺️ Competencia:</strong> Futaleufú, Tehuelches, Languiñeo, Cushamén.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Belgrano%20542%2C%20U9200BPL%2C%20Esquel%2C%20Chubut" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Belgrano%20542%2C%20U9200BPL%2C%20Esquel%2C%20Chubut" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </div>
            </div>
            <p class="txt-gris mt-20"><strong>💡 Aclaración para clientes de Puerto Madryn:</strong> Si tu accidente ocurrió en Puerto Madryn, Trelew o Rawson, el trámite se inicia en la <strong>CM 36 de Trelew</strong> (no hay una comisión médica propia en Puerto Madryn).</p>

            <!-- SANTA CRUZ -->
            <h3 class="region-header mt-50">SANTA CRUZ</h3>
            <section class="sedes-grid">
                <article class="sede-card">
                    <h3>COMISIÓN MÉDICA RÍO GALLEGOS</h3>
                    <span class="sede-cm">CM 20</span>
                    <div class="sede-info">
                        <p><strong>📍 Dirección:</strong> Perito Moreno 427, Río Gallegos (Z9400OH)</p>
                        <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 13hs</p>
                    </div>
                    <p class="sede-comp"><strong>🗺️ Competencia:</strong> Caleta Olivia, Cañadón Seco, Fitz Roy, Gdor. Moyano, Jaramillo, Kolver Kayke, Las Heras, Pico Truncado, Puerto Deseado, Tellier, Los Antiguos, Perito Moreno.</p>
                    <div class="sede-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Perito%20Moreno%20427%2C%20Z9400OH%2C%20R%C3%ADo%20Gallegos%2C%20Santa%20Cruz" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Perito%20Moreno%20427%2C%20Z9400OH%2C%20R%C3%ADo%20Gallegos%2C%20Santa%20Cruz" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                    </div>
                </article>
            </section>
            <div class="sede-delegacion mt-20">
                <h4>↳ Delegación Caleta Olivia</h4>
                <p><strong>📍 Dirección:</strong> San José Obrero 386, Caleta Olivia (Z9011HQL)</p>
                <p><strong>🕘 Horarios:</strong> Lunes a viernes 8 a 15hs</p>
                <p><strong>🗺️ Competencia:</strong> Caleta Olivia, Cañadón Seco, Fitz Roy, Gdor. Moyano, Jaramillo, Kolver Kayke, Las Heras, Pico Truncado, Puerto Deseado, Tellier, Los Antiguos, Perito Moreno.</p>
                <div class="sede-links">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=San%20Jos%C3%A9%20Obrero%20386%2C%20Z9011HQL%2C%20Caleta%20Olivia%2C%20Santa%20Cruz" target="_blank" class="sede-link-maps">🚗 CÓMO LLEGAR</a>
                    <a href="https://www.google.com/maps/search/?api=1&query=San%20Jos%C3%A9%20Obrero%20386%2C%20Z9011HQL%2C%20Caleta%20Olivia%2C%20Santa%20Cruz" target="_blank" class="sede-link-ubicacion">📍 VER UBICACIÓN</a>
                </div>
            </div>
        </section>
    </section>

    <!-- TRAMITES QUE PODES INICIAR -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">TRÁMITES QUE PODÉS <span class="subrayado-amarillo">INICIAR</span></h2>
            <p class="txt-gris">Los principales trámites que se inician ante las Comisiones Médicas son:</p>
            <section class="tramites-grid mt-30">
                <article class="tramite-item">
                    <h4>RECHAZO DEL SINIESTRO</h4>
                    <p>Cuando la ART no reconoce el accidente o la enfermedad.</p>
                </article>
                <article class="tramite-item">
                    <h4>RECHAZO DE ENFERMEDAD NO LISTADA</h4>
                    <p>Para enfermedades no incluidas en el Decreto 658/96 pero causadas por el trabajo.</p>
                </article>
                <article class="tramite-item">
                    <h4>DIVERGENCIA EN EL ALTA MÉDICA</h4>
                    <p>Cuando no estás de acuerdo con el alta que te dieron.</p>
                </article>
                <article class="tramite-item">
                    <h4>DIVERGENCIA EN LAS PRESTACIONES</h4>
                    <p>Cuando la ART no te brinda el tratamiento adecuado.</p>
                </article>
                <article class="tramite-item">
                    <h4>REINGRESO AL TRATAMIENTO</h4>
                    <p>Para volver a la cobertura médica de la ART.</p>
                </article>
                <article class="tramite-item">
                    <h4>DIVERGENCIA EN LA INCAPACIDAD</h4>
                    <p>Cuando el porcentaje fijado es injusto.</p>
                </article>
                <article class="tramite-item">
                    <h4>DETERMINACIÓN DE INCAPACIDAD</h4>
                    <p>Para que la SRT fije tu grado de incapacidad permanente.</p>
                </article>
                <article class="tramite-item">
                    <h4>VALORACIÓN DE DAÑO</h4>
                    <p>Homologación previa al cobro de la indemnización.</p>
                </article>
                <article class="tramite-item">
                    <h4>FALLECIMIENTO DEL TRABAJADOR</h4>
                    <p>Para que los derechohabientes cobren la indemnización.</p>
                </article>
            </section>
            <p class="txt-gris mt-30">👉 <a href="<?= BASE_URL ?>contacto" style="color: var(--amarillo); font-weight: 600;">Consultá con nuestro equipo</a> para saber qué trámite corresponde en tu caso.</p>
        </section>
    </section>

    <!-- VENTANILLA ELECTRONICA -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">VENTANILLA ELECTRÓNICA — <span class="subrayado-amarillo">E-SERVICIOS SRT</span></h2>
            <p class="txt-gris">Desde la pandemia, la mayoría de los trámites pueden iniciarse de forma <strong>100% online</strong> a través del sistema <strong>e-Servicios SRT</strong>. Para acceder necesitás CUIL y Clave Fiscal de AFIP nivel 2 o superior.</p>
            <div class="ventanilla-card">
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">TRÁMITES DISPONIBLES ONLINE</h3>
                <ul>
                    <li>Rechazo de siniestro</li>
                    <li>Rechazo de enfermedades no listadas</li>
                    <li>Reingreso al tratamiento</li>
                    <li>Divergencia en la determinación de incapacidad</li>
                    <li>Determinación de incapacidad</li>
                </ul>
                <p style="font-size: 0.9rem; color: var(--gris-texto); margin-top: 10px;"><strong>⚠ Trámites presenciales:</strong> Divergencia en el alta médica y divergencia en las prestaciones deben iniciarse de forma presencial.</p>
                <a href="https://www.argentina.gob.ar/srt" target="_blank" class="btn btn-amarillo mt-15">ACCEDER A E-SERVICIOS SRT</a>
            </div>
        </section>
    </section>

    <!-- FORMULARIOS SRT -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">FORMULARIOS <span class="subrayado-amarillo">SRT</span></h2>
            <p class="txt-gris">Los formularios más utilizados para tus trámites son:</p>
            <section class="grid-info-doble mt-30">
                <article class="info-bloque">
                    <h3>📄 CARTA PODER SRT</h3>
                    <p>Autoriza a tu abogado a actuar ante la Comisión Médica. No necesita certificación notarial.</p>
                    <a href="https://www.srt.gob.ar/wp-content/uploads/2017/04/Carta_Poder.pdf" target="_blank" style="color: var(--amarillo); font-weight: 600;">Descargar PDF oficial →</a>
                </article>
                <article class="info-bloque">
                    <h3>📄 OPCIÓN DE JURISDICCIÓN</h3>
                    <p>Permite elegir la Comisión Médica según tu domicilio o lugar de trabajo. Una vez elegida no se puede cambiar.</p>
                    <a href="https://www.srt.gob.ar/wp-content/uploads/2018/06/Formulario-Opci%C3%B3n-Jurisdicci%C3%B3n-RES-298-17.pdf" target="_blank" style="color: var(--amarillo); font-weight: 600;">Descargar PDF oficial →</a>
                </article>
                <article class="info-bloque">
                    <h3>📄 DESIGNACIÓN DE PATROCINIO</h3>
                    <p>Formaliza ante la SRT quién es tu abogado. Sin este formulario, el abogado no puede actuar en el expediente.</p>
                    <a href="https://www.argentina.gob.ar/srt/patrocinio-letrado" target="_blank" style="color: var(--amarillo); font-weight: 600;">Más información →</a>
                </article>
            </section>
            <p class="txt-gris mt-20">👉 <a href="<?= BASE_URL ?>formularios-srt" style="color: var(--amarillo); font-weight: 600;">Ver todos los formularios SRT →</a></p>
        </section>
    </section>

    <!-- CONTACTO SRT -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">CONTACTO CON LA <span class="subrayado-amarillo">SRT</span></h2>
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
            <h2 class="titulo-seccion">PREGUNTAS <span class="subrayado-amarillo">FRECUENTES</span> SRT</h2>
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
            <h2 class="titulo-seccion">HERRAMIENTAS PARA <span class="subrayado-amarillo">TU TRÁMITE</span></h2>
            <section class="grid-iconos mt-40">
                <a href="<?= BASE_URL ?>formularios-srt" class="derecho-item">
                    <?= render_icon('file-lines') ?>
                    <h3>FORMULARIOS SRT</h3>
                </a>
                <a href="<?= BASE_URL ?>buscador-comisiones" class="derecho-item">
                    <?= render_icon('location-dot') ?>
                    <h3>BUSCADOR DE SEDES</h3>
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
