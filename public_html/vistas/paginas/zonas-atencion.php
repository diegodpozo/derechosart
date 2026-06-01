<?php
/**
 * VISTA: ZONAS DE ATENCION - MAPA ESTRATEGICO PARA SEO LOCAL
 */
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Zonas de <span class="subrayado-amarillo"><strong>Atención</strong></span></h1>
            <p class="subtitulo-hero">Brindamos asesoramiento legal especializado en todo el país. Conocé nuestras áreas de cobertura.</p>
        </section>
    </section>

    <!-- LISTADO DE LOCALIDADES -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            
            <section class="grid-zonas">
                
                <!-- CABA Y GBA -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>landings/abogados-art-caba-y-gba"><?= render_icon('city', 'txt-amarillo') ?> Abogados ART en CABA y GBA</a>
                    </h2>
                    <a href="https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z/data=!3m1!4b1!4m6!3m5!1s0x95bccbcdd64fb57f:0x905c231692a97c49!8m2!3d-34.6061376!4d-58.3950228!16s%2Fg%2F11w8jvhmkp" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN EN CABA
                    </a>
                </article>

                <!-- ROSARIO -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>landings/abogados-art-rosario"><?= render_icon('landmark', 'txt-amarillo') ?> Abogados ART en Rosario</a>
                    </h2>
                    <a href="https://www.google.com.ar/maps/place/DerechosART+Rosario+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-32.9488217,-60.6325779,19.83z/data=!4m6!3m5!1s0x95b7abd41f51e0f7:0x7d49a7c112d2fcfe!8m2!3d-32.9488527!4d-60.6322239!16s%2Fg%2F11x98t34k7" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN EN ROSARIO
                    </a>
                </article>

                <!-- SUR -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>landings/abogados-art-neuquen-y-rio-negro"><?= render_icon('mountain', 'txt-amarillo') ?> Abogados ART en Neuquén y Río Negro</a>
                    </h2>
                    <a href="https://www.google.com/maps/place/DerechosART+Neuqu%C3%A9n+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-38.949361,-68.0691958,17z/data=!3m1!4b1!4m6!3m5!1s0x960a33f6c915bc75:0xc722f152dcea3961!8m2!3d-38.949361!4d-68.0691958!16s%2Fg%2F11y_t7z_pq" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN EN NEUQUÉN Y RÍO NEGRO
                    </a>
                </article>

            </section>

            <!-- LISTADO SEO DISCRETO PARA BUSCADORES -->
            <section class="mt-60 pt-40 border-top">
                <h3 class="centro mb-30">Todas nuestras localidades de cobertura</h3>
                
                <section class="grid-zonas-seo">
                    <!-- CABA Y GBA -->
                    <article class="col-seo">
                        <h4 class="fw-700 mb-10 border-bottom pb-5">CABA y GBA</h4>
                        <div class="lista-seo-links">
                            <a href="<?= BASE_URL ?>landings/abogados-art-palermo">Palermo</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-belgrano">Belgrano</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-avellaneda">Avellaneda</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-lanus">Lanús</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-quilmes">Quilmes</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-san-isidro">San Isidro</a>
                            <details>
                                <summary class="cursor-pointer txt-gris fs-08">Ver más en CABA y GBA</summary>
                                <div class="flex-column gap-5 mt-5 pl-10">
                                    <h5 class="fs-07 fw-700 mt-5">CABA</h5>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-caballito">Caballito</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-flores">Flores</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-recoleta">Recoleta</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-almagro">Almagro</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-nunez">Núñez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-urquiza">Villa Urquiza</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-agronomia">Agronomía</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-balvanera">Balvanera</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-barracas">Barracas</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-boedo">Boedo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-chacarita">Chacarita</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-coghlan">Coghlan</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-colegiales">Colegiales</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-constitucion">Constitución</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-floresta">Floresta</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-la-boca">La Boca</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-la-paternal">La Paternal</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-liniers">Liniers</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-mataderos">Mataderos</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-monte-castro">Monte Castro</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-monserrat">Monserrat</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-nueva-pompeya">Nueva Pompeya</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-parque-avellaneda">Parque Avellaneda</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-parque-chacabuco">Parque Chacabuco</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-parque-chas">Parque Chas</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-parque-patricios">Parque Patricios</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-puerto-madero">Puerto Madero</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-retiro">Retiro</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-saavedra">Saavedra</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-cristobal">San Cristóbal</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-nicolas">San Nicolás</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-telmo">San Telmo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-velez-sarsfield">Vélez Sársfield</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-versalles">Versalles</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-crespo">Villa Crespo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-del-parque">Villa del Parque</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-devoto">Villa Devoto</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-general-mitre">Villa General Mitre</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-lugano">Villa Lugano</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-luro">Villa Luro</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-ortuzar">Villa Ortúzar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-pueyrredon">Villa Pueyrredón</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-real">Villa Real</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-riachuelo">Villa Riachuelo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-santa-rita">Villa Santa Rita</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-soldati">Villa Soldati</a>
                                    
                                    <h5 class="fs-07 fw-700 mt-15">GBA</h5>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-lomas-de-zamora">Lomas de Zamora</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-vicente-lopez">Vicente López</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-tigre">Tigre</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-moron">Morón</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-olivos">Olivos</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-florida">Florida</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-la-lucila">La Lucila</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-munro">Munro</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-carapachay">Carapachay</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-adelina">Villa Adelina</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-martinez">Martínez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-boulogne">Boulogne</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-beccar">Beccar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-acassuso">Acassuso</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-fernando">San Fernando</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-victoria">Victoria</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-virreyes">Virreyes</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-general-pacheco">General Pacheco</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-don-torcuato">Don Torcuato</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-benavidez">Benavídez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-rincon-de-milberg">Rincón de Milberg</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-el-talar">El Talar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-escobar">Escobar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-belen-de-escobar">Belén de Escobar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-garin">Garín</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ingeniero-maschwitz">Ingeniero Maschwitz</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-pilar">Pilar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-del-viso">Del Viso</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-presidente-derqui">Presidente Derqui</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-rosa">Villa Rosa</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-martin">San Martín</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-ballester">Villa Ballester</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-andres">San Andrés</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-jose-leon-suarez">José León Suárez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-lynch">Villa Lynch</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-tres-de-febrero">Tres de Febrero</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-caseros">Caseros</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ciudadela">Ciudadela</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-santos-lugares">Santos Lugares</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-loma-hermosa">Loma Hermosa</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-castelar">Castelar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-haedo">Haedo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-el-palomar">El Palomar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-hurlingham">Hurlingham</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-tesei">Villa Tesei</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-william-morris">William Morris</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ituzaingo">Ituzaingó</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-udaondo">Villa Udaondo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-merlo">Merlo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-antonio-de-padua">San Antonio de Padua</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-parque-san-martin">Parque San Martín</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-moreno">Moreno</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-paso-del-rey">Paso del Rey</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-la-reja">La Reja</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-francisco-alvarez">Francisco Álvarez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-general-rodriguez">General Rodríguez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-sarandi">Sarandí</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-wilde">Wilde</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-dock-sud">Dock Sud</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-lanus-este">Lanús Este</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-lanus-oeste">Lanús Oeste</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-remedios-de-escalada">Remedios de Escalada</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-banfield">Banfield</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-temperley">Temperley</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-turdera">Turdera</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-bernal">Bernal</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ezpeleta">Ezpeleta</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-francisco-solano">San Francisco Solano</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-berazategui">Berazategui</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ranelagh">Ranelagh</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-hudson">Hudson</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-florencio-varela">Florencio Varela</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-bosques">Bosques</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-zeballos">Zeballos</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-almirante-brown">Almirante Brown</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-adrogue">Adrogué</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-burzaco">Burzaco</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-glew">Glew</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-claypole">Claypole</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-rafael-calzada">Rafael Calzada</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-esteban-echeverria">Esteban Echeverría</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-monte-grande">Monte Grande</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-el-jaguel">El Jagüel</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-canning">Canning</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ezeiza">Ezeiza</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-tristan-suarez">Tristán Suárez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-la-union">La Unión</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-la-matanza">La Matanza</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-justo">San Justo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ramos-mejia">Ramos Mejía</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-lomas-del-mirador">Lomas del Mirador</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-laferrere">Laferrere</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-gonzalez-catan">González Catán</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-virrey-del-pino">Virrey del Pino</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-malvinas-argentinas">Malvinas Argentinas</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-los-polvorines">Los Polvorines</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-tortuguitas">Tortuguitas</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-grand-bourg">Grand Bourg</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-de-mayo">Villa de Mayo</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-jose-c-paz">José C. Paz</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-sol-y-verde">Sol y Verde</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-miguel">San Miguel</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-bella-vista">Bella Vista</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-campo-de-mayo">Campo de Mayo</a>
                                </div>
                            </details>
                        </div>
                    </article>

                    <!-- ROSARIO -->
                    <article class="col-seo">
                        <h4 class="fw-700 mb-10 border-bottom pb-5">Rosario y Alrededores</h4>
                        <div class="lista-seo-links">
                            <a href="<?= BASE_URL ?>landings/abogados-art-rosario">Rosario</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-centro">Rosario Centro</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-fisherton">Fisherton</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-alberdi">Alberdi</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-villa-gobernador-galvez">Villa Gob. Gálvez</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-san-lorenzo">San Lorenzo</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-funes">Funes</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-roldan">Roldán</a>
                            <details>
                                <summary class="cursor-pointer txt-gris fs-08">Ver más en Santa Fe</summary>
                                <div class="flex-column gap-5 mt-5 pl-10">
                                    <a href="<?= BASE_URL ?>landings/abogados-art-granadero-baigorria">Granadero Baigorria</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-capitan-bermudez">Capitán Bermúdez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-perez">Pérez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-fray-luis-beltran">Fray Luis Beltrán</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-puerto-general-san-martin">Puerto Gral San Martín</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-soldini">Soldini</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-arroyo-seco">Arroyo Seco</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ricardone">Ricardone</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ibarlucea">Ibarlucea</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-pueblo-esther">Pueblo Esther</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-alvear">Alvear</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-alvarez">Álvarez</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-acebal">Acebal</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-zavalla">Zavalla</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-fighiera">Fighiera</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-coronel-bogado">Coronel Bogado</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-pinero">Piñero</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-villa-amelia">Villa Amelia</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-carmen-del-sauce">Carmen del Sauce</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-pueblo-munoz">Pueblo Muñoz</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-pueblo-uranga">Pueblo Uranga</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-albarellos">Albarellos</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-arminda">Arminda</a>
                                </div>
                            </details>
                        </div>
                    </article>

                    <!-- SUR -->
                    <article class="col-seo">
                        <h4 class="fw-700 mb-10 border-bottom pb-5">Neuquén y Río Negro</h4>
                        <div class="lista-seo-links">
                            <a href="<?= BASE_URL ?>landings/abogados-art-neuquen">Neuquén</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-cipolletti">Cipolletti</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-general-roca">General Roca</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-viedma">Viedma</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-allen">Allen</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-villa-regina">Villa Regina</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-fernandez-oro">Fernández Oro</a>
                            <a href="<?= BASE_URL ?>landings/abogados-art-cinco-saltos">Cinco Saltos</a>
                            <details>
                                <summary class="cursor-pointer txt-gris fs-08">Ver más en el Sur</summary>
                                <div class="flex-column gap-5 mt-5 pl-10">
                                    <a href="<?= BASE_URL ?>landings/abogados-art-centenario">Centenario</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-plottier">Plottier</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-senillosa">Senillosa</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-el-chanar">El Chañar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-patricio-del-chanar">San Patricio del Chañar</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-vista-alegre">Vista Alegre</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-el-sauce">El Sauce</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-carlos-de-bariloche">San Carlos de Bariloche</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-catriel">Catriel</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-choele-choel">Choele Choel</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-lamarque">Lamarque</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-luis-beltran">Luis Beltrán</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-chimpay">Chimpay</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-san-antonio-oeste">San Antonio Oeste</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-las-grutas">Las Grutas</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-sierra-grande">Sierra Grande</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-ingeniero-jacobacci">Ingeniero Jacobacci</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-maquinchao">Maquinchao</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-el-bolson">El Bolsón</a>
                                    <a href="<?= BASE_URL ?>landings/abogados-art-dina-huapi">Dina Huapi</a>
                                </div>
                            </details>
                        </div>
                    </article>

                </section>
            </section>

        </section>
    </section>
</main>
