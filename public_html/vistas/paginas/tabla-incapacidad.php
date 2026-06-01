<?php
// VISTA: TABLA DE INCAPACIDAD (BAREMO)
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna bg-azul txt-blanco">
        <section class="contenedor">
            <h1>TABLA DE INCAPACIDAD</h1>
            <p class="subtitulo-hero">Baremo Laboral (Decreto 659/96) - Porcentajes de Indemnización</p>
        </section>
    </section>

    <!-- EXPLICACION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿QUÉ ES EL BAREMO LABORAL?</h2>
            <p>Es la tabla oficial que utilizan los médicos de las Comisiones Médicas (SRT) para determinar qué porcentaje de incapacidad te corresponde tras un accidente o enfermedad laboral. Este número es el factor clave para calcular tu indemnización final.</p>
            
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3>FACTORES QUE SUMAN %</h3>
                    <ul class="lista-simple">
                        <li><i class="fas fa-plus-circle txt-dorado"></i> Limitación funcional del miembro.</li>
                        <li><i class="fas fa-plus-circle txt-dorado"></i> Edad del trabajador.</li>
                        <li><i class="fas fa-plus-circle txt-dorado"></i> Dificultad para tareas habituales.</li>
                    </ul>
                </article>
                <article class="info-bloque">
                    <h3>ÁREAS EVALUADAS</h3>
                    <p>El Baremo cubre desde fracturas óseas y lesiones de columna, hasta cicatrices estéticas, pérdida de audición y afecciones psicológicas.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- EJEMPLO DE CÁLCULO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor centro">
            <h3>¿YA TENÉS TU PORCENTAJE?</h3>
            <p class="descripcion-seccion">Si ya tenés un dictamen médico o una oferta de la ART, usá nuestra calculadora para ver si el monto es justo.</p>
            <a href="<?= BASE_URL ?>calculadora-indemnizacion" class="btn btn-amarillo">
                CALCULAR AHORA
            </a>
        </section>
    </section>
</main>
