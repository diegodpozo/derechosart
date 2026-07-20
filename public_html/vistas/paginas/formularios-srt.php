<?php
// VISTA: FORMULARIOS SRT
?>
<style>
    .hero-tramite {
        text-align: left;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 6rem 0;
    }
    .hero-tramite .contenedor {
        width: 100%;
    }
    .hero-tramite h1 {
        max-width: 56.25rem;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    .hero-tramite h1 .h1-titulo {
        font-weight: 400;
    }
    .hero-tramite h1 .h1-sub {
        display: block;
        font-size: 0.5em;
        font-weight: 400;
        margin-top: 0.5rem;
    }
    .hero-tramite .subtitulo-hero {
        max-width: 56.25rem;
        margin: 0 0 0.5rem 0;
        line-height: 1.7;
    }
    .hero-tramite .subtitulo-hero.centrado {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    @media (max-width: 48rem) {
        .hero-tramite {
            min-height: auto;
            padding: 4rem 0;
        }
    }
</style>
<main class="fade-in">
    <section class="hero-interna hero-tramite">
        <section class="contenedor">
            <h1><span class="h1-titulo"><strong class="subrayado-amarillo size-xl">Formularios</strong> SRT:</span><span class="h1-sub">guía completa para trabajadores accidentados 2026</span></h1>
            <p class="subtitulo-hero centrado" style="font-weight:600;font-size:1.15rem;">¿Conocés cuáles son los formularios que necesitás para tu reclamo? 📋</p>
            <p class="subtitulo-hero">Cada trámite ante las Comisiones Médicas de la SRT requiere documentos específicos. Tenerlos listos desde el inicio ahorra tiempo y evita demoras.</p>
            <p class="subtitulo-hero" style="font-size:0.95rem;">✅ Carta Poder SRT</p>
            <p class="subtitulo-hero" style="font-size:0.95rem;">✅ Opción de Jurisdicción</p>
            <p class="subtitulo-hero" style="font-size:0.95rem;">✅ Designación de Patrocinio Letrado</p>
            <p class="subtitulo-hero">No arranques tu reclamo sin la documentación correcta. Una presentación incompleta puede retrasar todo el proceso.</p>
        </section>
    </section>

    <!-- FORMULARIOS SRT (MOVIDO DESDE COMISIONES-MEDICAS) -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Formularios <span class="subrayado-amarillo">SRT</span></h2>
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
                    <a href="<?= BASE_URL ?>publico/pdf/Designacion_de_patrocinio_letrado.pdf" target="_blank" style="color: var(--amarillo); font-weight: 600;">Descargar PDF oficial →</a>
                </article>
                <article class="info-bloque">
                    <h3>📄 ANEXO I SRT</h3>
                    <p>El Anexo I de la SRT es el formulario oficial obligatorio de la Superintendencia de Riesgos del Trabajo (SRT) para el inicio de expedientes.</p>
                    <a href="<?= BASE_URL ?>publico/pdf/anexo_incapacidad.pdf" target="_blank" style="color: var(--amarillo); font-weight: 600;">Descargar PDF oficial →</a>
                </article>
            </section>
        </section>
    </section>



    <section class="seccion-texto bg-gris">
        <section class="contenedor centro">
            <aside class="info-bloque">
                <h3 class="txt-dorado">¿NECESITÁS AYUDA PARA COMPLETARLOS?</h3>
                <p>Completar mal un formulario puede demorar tu reclamo meses. Nosotros nos encargamos de toda la gestión documental sin costo inicial para vos.</p>
                <br>
                <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">DEJANOS TU CONSULTA</a>
            </aside>
        </section>
    </section>
</main>
