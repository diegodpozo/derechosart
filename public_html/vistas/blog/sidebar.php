<?php
/**
 * COMPONENTE: SIDEBAR DE NAVEGACION DEL ARTICULO
 */
?>
<aside class="blog-sidebar">
    <div class="sidebar-sticky">
        <details class="sidebar-acordeon-movil" open>
            <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
            <nav class="sidebar-nav">
                <ul>
                    <li id="preg-1"><a href="#que-es-accidente" class="active"><span class="nav-num">1</span> Qué es un accidente laboral</a></li>     
                    <li id="preg-2"><a href="#accidente-itinere"><span class="nav-num">2</span> Qué es un accidente in itinere (y por qué también te cubre)</a></li>
                    <li id="preg-3"><a href="#como-denunciar"><span class="nav-num">3</span> Cómo hacer la denuncia a la ART paso a paso</a></li>      
                    <li id="preg-4"><a href="#cobertura-art"><span class="nav-num">4</span> Qué tiene que cubrir la ART durante el tratamiento</a></li>
                    <li id="preg-5"><a href="#alta-con-dolor"><span class="nav-num">5</span> Qué hacer si te dan el alta pero seguís con dolor</a></li>
                    <li id="preg-6"><a href="#como-funciona-indemnizacion"><span class="nav-num">6</span> Cómo funciona la indemnización por accidente laboral</a></li>
                    <li id="preg-7"><a href="#art-rechaza"><span class="nav-num">7</span> Qué hacer si la ART rechaza tu accidente</a></li>
                    <li id="preg-8"><a href="#errores-comunes"><span class="nav-num">8</span> Errores que perjudican el reclamo (y cómo evitarlos)</a></li>
                    <li id="preg-9"><a href="#documentacion"><span class="nav-num">9</span> Qué documentación guardar desde el primer día</a></li>     
                    <li id="preg-10"><a href="#preguntas-frecuentes"><span class="nav-num">10</span> Preguntas frecuentes sobre accidentes laborales</a></li>
                </ul>
            </nav>
        </details>

        <!-- CTA SIDEBAR -->
        <div class="sidebar-cta bg-amarillo border-radius-15 p-20 mt-30">
            <div class="flex-start gap-15">
                <?= render_icon('whatsapp', '', '', '#000000') ?>
                <div>
                    <h4 class="m-0">¿TENÉS DUDAS?</h4>
                    <p class="fw-700">ESCRIBINOS POR WHATSAPP</p>
                </div>
            </div>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-negro w-100 flex-between">
                CONSULTAR AHORA <?= render_icon('chevron-right') ?>
            </a>
        </div>
        <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
            <span style="font-size: 2em;">🛡</span> Solo cobramos si vos cobrás.
        </p>
    </div>
</aside>
