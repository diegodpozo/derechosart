<?php if (isset($mostrar_header_admin) && $mostrar_header_admin): ?>
    <footer class="site-footer-admin">
        <div class="footer-admin-contenedor">
            <p>&copy; <?= date("Y") ?> DERECHOS ART. SISTEMA PRIVADO DE GESTION. <span class="version-tag">VERS 3.5</span></p>
        </div>
    </footer>
<?php elseif (!isset($hide_layout_elements) || !$hide_layout_elements): ?>
    <footer class="footer-art-principal">

    <div class="footer-art-contenedor">
        <div class="footer-art-grid">
            
            <!-- BLOQUE 1: BIO Y LOGO -->
            <div class="footer-art-col">
                <div class="footer-art-bio-destacada">
                    <span class="subrayado-amarillo"><strong>No tenés que resolver esto solo/a.</strong></span><br>
                    Escribinos y te explicamos tu caso sin compromiso.
                </div>
                
                <div class="footer-art-logo-wrap">
                    <a href="<?= BASE_URL ?>inicio">
                        <?= render_img('Logo_blanco_fondotrans.png', 'DerechosART Logo', ['class' => 'footer-art-logo-img']) ?>
                    </a>
                </div>
                
                <div class="footer-art-bio-texto">
                    DerechosART es un estudio juridico ubicado en Argentina, especializado en accidentes laborales, despidos y enfermedades profesionales.
                </div>
            </div>

            <!-- BLOQUE 2: LINKS -->
            <div class="footer-art-col">
                <h4 class="footer-art-titulo">MAPA DEL SITIO</h4>
                <ul class="footer-art-links">
                    <li><a href="<?= BASE_URL ?>calculadora-accidentes">Calculadora por accidentes</a></li>
                    <li><a href="<?= BASE_URL ?>calculadora-despidos">Calculadora Despidos</a></li>
                    <li><a href="<?= BASE_URL ?>que-hacer">Qué hacer ante un accidente</a></li>
                    <li><a href="<?= BASE_URL ?>cual-es-mi-art">¿Cuál es mi ART?</a></li>
                    <li><a href="<?= BASE_URL ?>zonas-atencion" style="color: #ffcc00;">Ver todas las zonas de atención</a></li>
                    <li><a href="<?= BASE_URL ?>comisiones-medicas" style="color: #1a1a1a !important; cursor: default; pointer-events: none;">Comisiones Médicas SRT</a></li>
                </ul>
            </div>

            <!-- BLOQUE 3: CONTACTO Y SEDES -->
            <div class="footer-art-col">
                <h4 class="footer-art-titulo">CONTACTO Y SEDES</h4>
                    <div class="footer-art-info">
                    <div class="footer-art-item">
                        <a href="https://wa.me/5491124786144" target="_blank">
                            <?= render_icon('whatsapp', '', '', '#FFCC00') ?> <span>11-2478-6144</span>
                        </a>
                    </div>
                    <div class="footer-art-item">
                        <a href="https://www.instagram.com/derechosart/" target="_blank">
                            <?= render_icon('instagram', '', '', '#FFCC00') ?> <span>Instagram</span>
                        </a>
                    </div>
                    
                    <!-- SEDE CABA Y GBA -->
                    <div class="footer-art-item">
                        <a href="<?= BASE_URL ?>landings/abogados-art-caba-y-gba"><strong>Abogados ART en CABA</strong> y <strong>GBA</strong></a>
                        <a href="https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z/data=!3m1!4b1!4m6!3m5!1s0x95bccbcdd64fb57f:0x905c231692a97c49!8m2!3d-34.6061376!4d-58.3950228!16s%2Fg%2F11w8jvhmkp" target="_blank" class="mt-5 display-block">
                            <?= render_icon('location-dot', '', '', '#FFCC00') ?> <span>Ayacucho 283</span>
                        </a>
                    </div>

                    <!-- SEDE ROSARIO -->
                    <div class="footer-art-item">
                        <a href="<?= BASE_URL ?>landings/abogados-art-rosario"><strong>Abogados ART en Rosario</strong></a>
                        <a href="https://www.google.com.ar/maps/place/DerechosART+Rosario+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-32.9488217,-60.6325779,19.83z/data=!4m6!3m5!1s0x95b7abd41f51e0f7:0x7d49a7c112d2fcfe!8m2!3d-32.9488527!4d-60.6322239!16s%2Fg%2F11x98t34k7" target="_blank" class="mt-5 display-block">
                            <?= render_icon('location-dot', '', '', '#FFCC00') ?> <span>Rioja 644</span>
                        </a>
                    </div>

                    <!-- SEDE NEUQUEN Y RIO NEGRO -->
                    <div class="footer-art-item">
                        <a href="<?= BASE_URL ?>landings/abogados-art-neuquen-y-rio-negro"><strong>Abogados ART en Neuquén</strong> y <strong>Río Negro</strong></a>
                        <a href="https://www.google.com/maps/place/DerechosART+Neuqu%C3%A9n+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-38.949361,-68.0691958,17z/data=!3m1!4b1!4m6!3m5!1s0x960a33f6c915bc75:0xc722f152dcea3961!8m2!3d-38.949361!4d-68.0691958!16s%2Fg%2F11y_t7z_pq" target="_blank" class="mt-5 display-block">
                            <?= render_icon('location-dot', '', '', '#FFCC00') ?> <span>Fotheringham 516</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-art-barra">
        <div class="footer-art-contenedor">
            <p>DERECHOSART - 2025 - TODOS LOS DERECHOS RESERVADOS</p>
        </div>
    </div>
</footer>
<?php endif; ?>

<?php if (!isset($hide_layout_elements) || !$hide_layout_elements): ?>
<a href="https://wa.me/5491124786144" class="whatsapp-flotante" target="_blank">
    <?= render_icon('whatsapp', '', '', '#FFFFFF') ?>
</a>
<?php endif; ?>

<!-- <script src="<?php echo BASE_URL; ?>publico/js/jquery.min.js"></script> -->
<!-- <script src="<?php echo BASE_URL; ?>publico/js/navegacion.js?v=2.4"></script> -->

</body>
</html>
