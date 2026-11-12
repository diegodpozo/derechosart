<?php
/**
 * ARTÍCULO: Despido sin causa 2026
 * Basado en el calendario editorial de noviembre 2026.
 * Utiliza cabecera, navegación, CTA, bloque de autor y estilos comunes del blog.
 */
$DatosCabeceraBlog = [
    'categoria_url' => 'despidos',
    'categoria_miga' => 'Despidos',
    'miga' => 'Despido sin causa 2026',
    'categoria' => 'DESPIDOS',
    'titulo' => 'Despido sin causa 2026: qué te corresponde cobrar y qué cambió con la reforma laboral',
    'lead' => 'Te despidieron sin causa y querés saber qué te corresponde. Revisamos los rubros de la liquidación, la indemnización por antigüedad y qué cambió con la Ley 27.802, con una guía clara para trabajadores. Cada caso depende de sus circunstancias.',
    'actualizado' => 'Noviembre 2026',
    'lectura' => '9 min',
];

$ItemsSidebarBlog = [
    ['id' => 'que-es', 'texto' => 'Qué es un despido sin causa'],
    ['id' => 'rubros', 'texto' => 'Qué conceptos revisar en la liquidación'],
    ['id' => 'indemnizacion-245', 'texto' => 'Cómo funciona la indemnización por antigüedad'],
    ['id' => 'reforma-27802', 'texto' => 'Qué cambió con la Ley 27.802'],
    ['id' => 'primeras-48-horas', 'texto' => 'Qué hacer al recibir el despido'],
    ['id' => 'errores', 'texto' => 'Errores que conviene evitar'],
    ['id' => 'plazo', 'texto' => 'Plazo general para reclamar'],
    ['id' => 'preguntas-frecuentes', 'texto' => 'Preguntas frecuentes'],
];

$TituloCtaSidebarBlog = '¿Te despidieron sin causa?';
$DescripcionCtaSidebarBlog = 'Revisamos la notificación y los rubros de tu liquidación.';
$FuentesNormativasBlog = 'Ley 20.744 (LCT), arts. 80, 123, 156, 231 a 233, 245, 245 bis, 256 y 277; Leyes 27.802, 27.742 y 23.592; Decretos 408/2026 y 1228/2026.';

$faqDespido2026 = [
    [
        'pregunta' => '¿Qué me corresponde cobrar si me despiden sin causa?',
        'respuesta' => 'Según el caso, pueden corresponder la indemnización por antigüedad del artículo 245 de la LCT, indemnización sustitutiva de preaviso, integración del mes de despido cuando se cumplen sus requisitos, salarios pendientes y rubros proporcionales como sueldo anual complementario y vacaciones no gozadas. La liquidación debe revisarse con los datos concretos del vínculo.'
    ],
    [
        'pregunta' => '¿Cómo se calcula la indemnización por antigüedad?',
        'respuesta' => 'El artículo 245 de la LCT establece como regla un mes de sueldo por cada año de servicio o fracción mayor de tres meses, sobre la mejor remuneración mensual, normal y habitual devengada durante el último año o el tiempo trabajado si fuera menor. La base y el tope requieren revisar remuneraciones, convenio y situación individual.'
    ],
    [
        'pregunta' => '¿La Ley 27.802 eliminó la indemnización por despido sin causa?',
        'respuesta' => 'No. El texto vigente del artículo 245 de la LCT mantiene la indemnización por antigüedad y regula la base salarial, el tope y el piso. Pueden existir sistemas de cese previstos por convenio colectivo; su aplicación debe verificarse para la actividad y el caso.'
    ],
    [
        'pregunta' => '¿Pueden pagar la indemnización en cuotas?',
        'respuesta' => 'El artículo 277 de la LCT regula cuotas para cancelar sentencias judiciales condenatorias: hasta seis cuotas para grandes empresas y hasta doce para micro, pequeñas y medianas empresas. No conviene trasladar esa regla automáticamente a cualquier liquidación directa o acuerdo; hay que revisar el instrumento y su homologación.'
    ],
    [
        'pregunta' => '¿Qué plazo tengo para reclamar?',
        'respuesta' => 'El artículo 256 de la LCT establece como regla general dos años para las acciones relativas a créditos individuales de trabajo. El inicio, la interrupción o suspensión del cómputo pueden depender del reclamo y de actuaciones realizadas, por lo que conviene consultar pronto.'
    ],
];
?>

<main class="blog-container fade-in" data-scrollspy-blog>
    <section class="contenedor grid-blog" aria-label="Guía sobre despido sin causa y liquidación final">
        <section class="articulo-header-wrapper">
            <?php include __DIR__ . '/../blog/cabecera-articulo.php'; ?>
        </section>

        <?php include __DIR__ . '/../blog/sidebar.php'; ?>

        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">
                <aside class="alerta-importante mt-0 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                    <span class="alerta-icon" aria-hidden="true">⚠️</span>
                    <p class="m-0 fs-09"><strong>Respuesta rápida:</strong> si el empleador extingue el vínculo sin expresar una causa válida, pueden corresponder varios rubros, entre ellos la indemnización por antigüedad del artículo 245 de la LCT y, según las circunstancias, preaviso e integración del mes de despido. La Ley 27.802 modificó reglas de la LCT, incluida la base de cálculo. El resultado depende de fechas, remuneraciones, convenio colectivo, modalidad contractual y documentación.</p>
                </aside>

                <section id="que-es" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué es un despido sin causa</a></h2>
                    <p>En términos generales, se habla de despido sin causa cuando el empleador decide terminar la relación laboral sin invocar una justa causa en los términos de la ley. También puede discutirse la causa comunicada cuando los hechos o la gravedad alegados no la sostienen; eso requiere analizar la notificación y las circunstancias, no alcanza con el nombre que la empresa le dé.</p>
                    <p>Guardá la carta documento, telegrama u otra comunicación completa y anotá cuándo la recibiste. La fecha y el texto pueden importar para revisar el preaviso, la liquidación y cualquier respuesta necesaria.</p>
                    <p>Esta guía se refiere al régimen general de la Ley de Contrato de Trabajo. El empleo público, casas particulares, trabajo agrario y otros regímenes pueden tener reglas propias o de aplicación distinta.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="rubros" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué conceptos conviene revisar en la liquidación</a></h2>
                    <p>La liquidación final puede incluir rubros distintos de la indemnización por antigüedad. La procedencia y el cálculo dependen de la fecha de ingreso y egreso, la remuneración, el convenio aplicable, el preaviso y los pagos ya realizados.</p>
                    <div class="custom-table-blog mt-25">
                        <table>
                            <caption>Rubros que pueden integrar la liquidación por despido</caption>
                            <thead><tr><th scope="col">Concepto</th><th scope="col">Qué revisar</th></tr></thead>
                            <tbody>
                                <tr><th scope="row">Indemnización por antigüedad</th><td>La regla del artículo 245 de la LCT, la remuneración base y el tope aplicable.</td></tr>
                                <tr><th scope="row">Preaviso</th><td>Si se otorgó y respetó el plazo que corresponda; si no, puede proceder la indemnización sustitutiva de los artículos 231 y 232.</td></tr>
                                <tr><th scope="row">Integración del mes de despido</th><td>Puede corresponder si el despido sin preaviso ocurre en una fecha distinta del último día del mes; revisar excepciones y requisitos del artículo 233.</td></tr>
                                <tr><th scope="row">Sueldo anual complementario proporcional</th><td>El proporcional devengado hasta la extinción, conforme al artículo 123 de la LCT y normas aplicables.</td></tr>
                                <tr><th scope="row">Vacaciones no gozadas</th><td>La indemnización por el descanso proporcional a la fracción del año trabajada prevista en el artículo 156.</td></tr>
                                <tr><th scope="row">Salarios y diferencias pendientes</th><td>Días trabajados, adicionales, comisiones u otros conceptos adeudados que correspondan al caso.</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-20">El sueldo anual complementario proporcional y las vacaciones no gozadas son rubros separados de la base de la indemnización por antigüedad; que no integren esa base no significa que desaparezcan de la liquidación.</p>
                    <p>Para calcular un escenario inicial, podés usar la <a href="<?= BASE_URL ?>calculadora-despidos">calculadora de despidos</a>. Es una estimación y no reemplaza la revisión de recibos, convenio, fechas y conceptos variables.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="indemnizacion-245" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo funciona la indemnización por antigüedad</a></h2>
                    <p>El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/25552/texact.htm" target="_blank" rel="noopener">artículo 245 de la LCT</a> establece, como regla, una indemnización equivalente a un mes de sueldo por cada año de servicio o fracción mayor de tres meses, una vez transcurrido el período de prueba. La norma toma como base la mejor remuneración mensual, normal y habitual devengada durante el último año, o durante el tiempo trabajado si fuera menor.</p>
                    <p>La Ley 27.802 define qué conceptos mensuales se consideran remuneración para esta base, fija criterios para habitualidad y conceptos variables, establece un tope vinculado al convenio colectivo y dispone que el tope no puede llevar la base por debajo del 67% de la remuneración mensual, normal y habitual definida por el artículo. También conserva un mínimo de un mes de sueldo calculado según ese sistema.</p>
                    <p>Por eso no alcanza con multiplicar el último sueldo por los años trabajados. Hay que identificar qué conceptos se pagaron, con qué frecuencia, qué convenio rige y cuál es el tope homologado pertinente. La ley prevé además que un convenio colectivo pueda sustituir el régimen por un fondo o sistema de cese laboral; no se presume que eso aplique sin revisar el convenio de la actividad.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <span aria-hidden="true">📄</span>
                        <p class="m-0 fs-09"><strong>Para revisar:</strong> reuní recibos de sueldo del último año, constancia de antigüedad, convenio o categoría, notificación de despido y una liquidación desglosada. Los conceptos variables y el tope pueden cambiar sustancialmente el cálculo.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="reforma-27802" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Qué cambió con la Ley 27.802</a></h2>
                    <p>La <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/420000-424999/423680/norma.htm" target="_blank" rel="noopener">Ley 27.802</a>, publicada el 6 de marzo de 2026, modificó distintos artículos de la LCT. Para el despido sin causa, el cambio central está en el texto del artículo 245 sobre la remuneración computable, la habitualidad de conceptos, el promedio de ciertos conceptos variables y la regla del tope y su piso. La indemnización por antigüedad continúa prevista.</p>
                    <div class="custom-table-blog mt-25">
                        <table>
                            <caption>Puntos de la reforma que conviene verificar en el caso concreto</caption>
                            <thead><tr><th scope="col">Tema</th><th scope="col">Qué establece la norma</th></tr></thead>
                            <tbody>
                                <tr><th scope="row">Base de cálculo del art. 245</th><td>Mejor remuneración mensual, normal y habitual devengada durante el último año o el tiempo de trabajo si fuera menor; la ley precisa exclusiones y criterios para conceptos habituales y variables.</td></tr>
                                <tr><th scope="row">Tope y piso</th><td>El tope se vincula con tres veces el salario mensual promedio del convenio colectivo aplicable y no puede reducir la base por debajo del 67% que establece el artículo.</td></tr>
                                <tr><th scope="row">Despido discriminatorio</th><td>El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/400000-404999/401266/norma.htm" target="_blank" rel="noopener">artículo 245 bis, incorporado por la Ley 27.742</a>, prevé un agravamiento del 50% de la indemnización por antigüedad, que el juez puede elevar hasta el 100% según la gravedad, si una sentencia corrobora la discriminación. No se aplica automáticamente; la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/20000-24999/20465/norma.htm" target="_blank" rel="noopener">Ley 23.592</a> y la prueba del caso también requieren análisis.</td></tr>
                                <tr><th scope="row">Pago en juicio</th><td>El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/420000-424999/423680/norma.htm" target="_blank" rel="noopener">artículo 277 de la LCT</a> regula cuotas para sentencias judiciales condenatorias: hasta seis para grandes empresas y hasta doce para micro, pequeñas y medianas empresas. No es una regla automática para toda liquidación o acuerdo.</td></tr>
                                <tr><th scope="row">Fondo de Asistencia Laboral</th><td>La <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/420000-424999/423680/norma.htm" target="_blank" rel="noopener">Ley 27.802, arts. 58 y 64</a>, establece que el FAL no sustituye ni altera el régimen indemnizatorio y que la existencia o insuficiencia del fondo no reduce la responsabilidad del empleador. Su vigencia fue prorrogada al 1 de diciembre de 2026 por el <a href="https://servicios.infoleg.gob.ar/infolegInternet/verNorma.do?id=431406" target="_blank" rel="noopener">Decreto 1228/2026</a>.</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-20">Si la contratación empezó antes de la reforma y el despido fue posterior, el régimen temporal aplicable puede plantear cuestiones de derecho transitorio. No corresponde resolverlo con una frase general: hay que revisar fechas, hechos, normas vigentes y, si resulta necesario, jurisprudencia actualizada.</p>
                    <p>El despido motivado por discriminación requiere un análisis particular de los hechos y de la prueba. No todo despido injustificado es discriminatorio ni el porcentaje agravado se aplica automáticamente. La modificación del artículo 245 bis provino de la Ley 27.742; no la atribuyas a la Ley 27.802.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="primeras-48-horas" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Qué hacer al recibir la notificación de despido</a></h2>
                    <p>Las primeras horas sirven para preservar documentación y obtener orientación; “48 horas” es una lista práctica, no un plazo legal universal para todos los reclamos.</p>
                    <ol class="lista-items-blog mt-20">
                        <li><strong>Guardá la notificación completa.</strong> Conservá carta documento, telegrama, correo, mensajes y el sobre o constancia donde figure la fecha de recepción.</li>
                        <li><strong>Reuní los documentos laborales.</strong> Buscá recibos, contrato, constancias de alta, registros de jornada, comisiones y comunicaciones relevantes.</li>
                        <li><strong>Pedí el detalle de la liquidación.</strong> Compará cada rubro con las fechas, pagos y remuneraciones. No confundas la liquidación final con la indemnización por antigüedad.</li>
                        <li><strong>No firmes una conformidad que no entendés.</strong> Pedí copia de cualquier propuesta o documento y consultá antes de aceptar, desistir o firmar un acuerdo.</li>
                        <li><strong>Buscá asesoramiento pronto.</strong> La vía, la respuesta y los plazos pueden variar según la causal, el régimen aplicable y si existe una situación especial.</li>
                    </ol>
                    <p class="mt-20">Si el despido ocurre durante una licencia por accidente de trabajo, revisá por separado la cobertura ART y el régimen laboral: son cuestiones relacionadas, pero no idénticas. También podés consultar la guía sobre <a href="<?= BASE_URL ?>blog/despido-con-licencia-por-accidente-de-trabajo">despido durante una licencia por accidente</a>. Para una comunicación formal, revisá la guía de <a href="<?= BASE_URL ?>blog/telegrama-laboral-modelos-accidente-despido">telegrama laboral</a>; si trabajabas sin registrar, consultá <a href="<?= BASE_URL ?>blog/despido-en-negro">despido en negro</a>.</p>
                    <div class="embed-social mt-30" aria-label="Reel de DerechosART en Instagram">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DcjvKxVou7z/" data-instgrm-version="14" style="background:#FFF;border:0;border-radius:3px;box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);margin:1px auto;max-width:540px;min-width:280px;padding:0;width:100%;">
                            <a href="https://www.instagram.com/reel/DcjvKxVou7z/" target="_blank" rel="noopener noreferrer">Ver este reel de DerechosART en Instagram</a>
                        </blockquote>
                        <script async src="https://www.instagram.com/embed.js"></script>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="errores" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Errores que conviene evitar</a></h2>
                    <div class="custom-table-blog mt-25">
                        <table>
                            <caption>Frases frecuentes y qué verificar antes de actuar</caption>
                            <thead><tr><th scope="col">Lo que te dicen</th><th scope="col">Qué conviene revisar</th></tr></thead>
                            <tbody>
                                <tr><th scope="row">“Esto es lo único que te corresponde”</th><td>Pedí la liquidación desglosada y verificá preaviso, antigüedad, salarios pendientes y proporcionales.</td></tr>
                                <tr><th scope="row">“La reforma eliminó la indemnización”</th><td>El artículo 245 de la LCT sigue contemplando indemnización por antigüedad; cambió la regulación de su base y otros aspectos.</td></tr>
                                <tr><th scope="row">“Te lo pagamos en cuotas porque siempre es así”</th><td>La disposición de cuotas del artículo 277 se refiere a sentencias judiciales condenatorias; verificá si ese supuesto aplica al instrumento que te ofrecen.</td></tr>
                                <tr><th scope="row">“Firmá y después vemos”</th><td>Leé el documento completo y consultá antes de firmar, desistir o aceptar una suma como cancelación total.</td></tr>
                                <tr><th scope="row">“El plazo de dos años corre desde cualquier fecha”</th><td>La LCT fija un plazo general para acciones por créditos laborales; el comienzo y los efectos de actuaciones deben analizarse por reclamo.</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="plazo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Plazo general para reclamar</a></h2>
                    <p>El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/25552/texact.htm" target="_blank" rel="noopener">artículo 256 de la LCT</a> establece un plazo general de dos años para las acciones relativas a créditos provenientes de relaciones individuales de trabajo. El artículo 257 contempla efectos de determinadas reclamaciones administrativas; su alcance y el cómputo concreto requieren identificar el crédito, la fecha en que pudo reclamarse y las actuaciones realizadas.</p>
                    <p>No tomes el plazo general como garantía de que todos los rubros se cuentan igual ni esperes al final para consultar. La fecha de extinción, las comunicaciones y la vía elegida pueden ser relevantes.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Preguntas frecuentes sobre el despido sin causa</a></h2>
                    <section class="lista-faq-blog" aria-label="Preguntas frecuentes sobre despido sin causa">
                        <?php foreach ($faqDespido2026 as $faq): ?>
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer"><?= htmlspecialchars($faq['pregunta'], ENT_QUOTES, 'UTF-8') ?></summary>
                            <p class="mt-15 fs-09"><?= htmlspecialchars($faq['respuesta'], ENT_QUOTES, 'UTF-8') ?></p>
                        </details>
                        <?php endforeach; ?>
                    </section>

                    <aside class="mt-30 p-25 bg-gris border-radius-15" aria-label="Más información sobre despidos">
                        <h3 class="fw-700"><span class="subrayado-amarillo">AMPLIÁ LA INFORMACIÓN</span></h3>
                        <ul class="lista-items-blog mt-15">
                            <li>👉 <a href="<?= BASE_URL ?>blog/despido-con-licencia-por-accidente-de-trabajo">Despido durante una licencia por accidente de trabajo: derechos y qué revisar</a></li>
                            <li>👉 <a href="<?= BASE_URL ?>blog/despido-en-negro">Despido en negro: qué rubros revisar y cómo documentar la relación laboral</a></li>
                            <li>👉 <a href="<?= BASE_URL ?>blog/telegrama-laboral-modelos-accidente-despido">Telegrama laboral: cuándo comunicarte ante un despido</a></li>
                        </ul>
                    </aside>

                    <?php
                        $titulo = '¿Te despidieron y querés revisar la liquidación?';
                        $descripcion = 'Contanos qué recibiste y te orientamos sobre los rubros y los pasos a considerar.';
                        $ancho = '100%';
                        $margen_top = '1.2';
                        include __DIR__ . '/../componentes/cta-whatsapp.php';
                    ?>

                    <footer class="articulo-footer-meta mt-50 flex-between fs-08 txt-gris-medio">
                        <span>✅ Solo cobramos si vos cobrás.</span>
                        <span class="italic">⚖️ DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía informativa</span>
                    </footer>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>
            </section>
        </article>

        <?php include __DIR__ . '/../componentes/bloque-autor.php'; ?>
    </section>
</main>

<?php
$faqJsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(static function (array $faq): array {
        return [
            '@type' => 'Question',
            'name' => $faq['pregunta'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['respuesta'],
            ],
        ];
    }, $faqDespido2026),
];
?>
<script type="application/ld+json"><?= json_encode($faqJsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
