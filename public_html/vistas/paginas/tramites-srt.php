<?php
// VISTA: TRAMITES SRT
?>
<style>
    .tramites-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 1.5rem;
    }
    .tramite-item {
        background: var(--blanco);
        border: 0.0625rem solid var(--gris-medio);
        border-radius: 0.75rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        display: block;
    }
    .tramite-item:hover {
        border-color: var(--amarillo);
        box-shadow: 0 0.25rem 0.9375rem rgba(255, 204, 0, 0.15);
        transform: translateY(-0.125rem);
    }
    .tramite-item h4 {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--negro);
    }
    .tramite-item p {
        font-size: 0.9rem;
        color: var(--gris-texto);
        margin: 0;
        line-height: 1.5;
    }
    @media (max-width: 62rem) {
        .tramites-grid {
            grid-template-columns: 1fr 1fr;
        }
        .hero-tramite {
            min-height: auto;
            padding: 4rem 0;
        }
    }
    @media (max-width: 48rem) {
        .tramites-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<main class="fade-in">
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Trámites <span class="subrayado-amarillo"><strong>SRT</strong></span></h1>
            <p class="subtitulo-hero">Todos los trámites que podés iniciar ante las Comisiones Médicas de la SRT</p>
        </section>
    </section>

    <section class="seccion-texto">
        <section class="contenedor">
            <section class="tramites-grid">
                <a href="<?= BASE_URL ?>rechazo-del-siniestro" class="tramite-item">
                    <h4>RECHAZO DEL SINIESTRO</h4>
                    <p>Cuando la ART no reconoce el accidente o la enfermedad.</p>
                </a>
                <a href="<?= BASE_URL ?>rechazo-de-enfermedad-no-listada" class="tramite-item">
                    <h4>RECHAZO DE ENFERMEDAD NO LISTADA</h4>
                    <p>Para enfermedades no incluidas en el Decreto 658/96 pero causadas por el trabajo.</p>
                </a>
                <a href="<?= BASE_URL ?>divergencia-en-el-alta-medica" class="tramite-item">
                    <h4>DIVERGENCIA EN EL ALTA MÉDICA</h4>
                    <p>Cuando no estás de acuerdo con el alta que te dieron.</p>
                </a>
                <a href="<?= BASE_URL ?>divergencia-en-las-prestaciones" class="tramite-item">
                    <h4>DIVERGENCIA EN LAS PRESTACIONES</h4>
                    <p>Cuando la ART no te brinda el tratamiento adecuado.</p>
                </a>
                <a href="<?= BASE_URL ?>reingreso-al-tratamiento" class="tramite-item">
                    <h4>REINGRESO AL TRATAMIENTO</h4>
                    <p>Para volver a la cobertura médica de la ART.</p>
                </a>
                <a href="<?= BASE_URL ?>divergencia-en-la-incapacidad" class="tramite-item">
                    <h4>DIVERGENCIA EN LA INCAPACIDAD</h4>
                    <p>Cuando el porcentaje fijado es injusto.</p>
                </a>
                <a href="<?= BASE_URL ?>determinacion-de-incapacidad" class="tramite-item">
                    <h4>DETERMINACIÓN DE INCAPACIDAD</h4>
                    <p>Para que la SRT fije tu grado de incapacidad permanente.</p>
                </a>
                <a href="<?= BASE_URL ?>valoracion-de-dano" class="tramite-item">
                    <h4>VALORACIÓN DE DAÑO</h4>
                    <p>Homologación previa al cobro de la indemnización.</p>
                </a>
                <a href="<?= BASE_URL ?>fallecimiento-del-trabajador" class="tramite-item">
                    <h4>FALLECIMIENTO DEL TRABAJADOR</h4>
                    <p>Para que los derechohabientes cobren la indemnización.</p>
                </a>
            </section>
            <p class="txt-gris mt-30">👉 <a href="<?= BASE_URL ?>contacto" style="color: var(--amarillo); font-weight: 600;">Consultá con nuestro equipo</a> para saber qué trámite corresponde en tu caso.</p>
        </section>
    </section>

    <section class="seccion-texto bg-gris">
        <section class="contenedor centro">
            <aside class="info-bloque">
                <h3 class="txt-dorado">¿NO SABÉS QUÉ TRÁMITE INICIAR?</h3>
                <p>Contanos tu caso y te orientamos sin costo. Definimos juntos el mejor camino para tu reclamo.</p>
                <br>
                <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">DEJANOS TU CONSULTA</a>
            </aside>
        </section>
    </section>
</main>
