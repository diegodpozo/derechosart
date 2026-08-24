<?php
// VISTA: DESPIDOS E INDEMNIZACIONES - NUEVA ESTETICA
?>

<main class="fade-in">
    <p class="tl-dr">Despidos e indemnizaciones laborales en Argentina. Conocé tus derechos: despido sin causa, con causa, por ayuda económica y más. Calculá tu liquidación con la Ley 20.744 y asesorate gratis con DerechosART.</p>
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>DESPIDOS E INDEMNIZACIONES</h1>
            <p class="subtitulo-hero">Defendemos tu trabajo y aseguramos tu indemnización justa</p>
        </section>
    </section>

    <!-- INTRODUCCION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿TE <span class="subrayado-amarillo">DESPIDIERON</span>? SABÉ QUÉ HACER</h2>
            <p class="txt-gris">El despido es una de las situaciones más difíciles para un trabajador. Es fundamental contar con <a href="<?= BASE_URL ?>contacto" style="color:inherit;text-decoration:none;">asesoramiento legal inmediato</a> para evitar perder derechos o aceptar liquidaciones insuficientes.</p>
            
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3>DESPIDO SIN CAUSA</h3>
                    <p>Si te despidieron sin un motivo justificado, te corresponde la <a href="<?= BASE_URL ?>calculadora-despidos" style="color:inherit;text-decoration:none;">indemnización completa por antigüedad (Art. 245 LCT)</a>, preaviso y vacaciones no gozadas.</p>
                </article>
                <article class="info-bloque">
                    <h3>TRABAJO EN NEGRO</h3>
                    <p>Si trabajabas total o parcialmente "en negro", las multas a tu favor incrementan significativamente el monto de la indemnización.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- RECURSO CALCULADORA -->
    <section class="seccion-recursos bg-gris" style="padding: 2.5rem 0;">
        <section class="contenedor centro">
            <h3>CALCULÁ TU <span class="subrayado-amarillo">DESPIDO</span></h3>
            <p class="descripcion-seccion">Desarrollamos una herramienta gratuita para que puedas estimar tu liquidación legal en segundos.</p>
            <section style="max-width: 25rem; margin: 0 auto;">
                <a href="<?= BASE_URL ?>calculadora-despidos" class="derecho-item">
                    <?= render_icon('calculator') ?>
                    <h4>IR A LA CALCULADORA</h4>
                </a>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section style="background: #1A1A1A; padding: 2.5rem 0; color: var(--blanco);">
        <section class="contenedor" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.875rem;">
            <article>
                <h3>NO TE QUEDES CON LA DUDA</h3>
                <p style="color: #CCC;">Mandanos tu telegrama de despido por WhatsApp y lo revisamos en el momento sin cargo.</p>
            </article>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                CONTACTO
            </a>
        </section>
    </section>
</main>
