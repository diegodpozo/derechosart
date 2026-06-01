<?php
// VISTA: CALCULADORA DE INDEMNIZACION POR ACCIDENTE
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna bg-azul txt-blanco">
        <section class="contenedor">
            <h1>CALCULADORA DE ACCIDENTES</h1>
            <p class="subtitulo-hero">Calculá el monto estimado de tu indemnización por ART</p>
        </section>
    </section>

    <!-- CALCULADORA -->
    <section class="seccion-calculadora">
        <section class="contenedor">
            <article class="card-calculadora">
                <form id="formAccidente" class="form-fiel">
                    <section class="grid-form">
                        <section class="campo">
                            <label for="salario">Salario Bruto (IBM)</label>
                            <input type="number" id="salario" placeholder="Tu último salario bruto" required>
                            <small>Tu último salario bruto del recibo</small>
                        </section>
                        <section class="campo">
                            <label for="edad">Edad</label>
                            <input type="number" id="edad" placeholder="Tu edad al momento del accidente" required>
                            <small>Tu edad al momento del accidente</small>
                        </section>
                        <section class="campo">
                            <label for="incapacidad">Porcentaje de incapacidad</label>
                            <input type="number" id="incapacidad" placeholder="Ej: 10" step="0.1" required>
                            <small>Este porcentaje solo puede decírtelo un médico legista</small>
                        </section>
                        <section class="campo">
                            <label>¿Dónde ocurrió el accidente?</label>
                            <section class="radio-group">
                                <label for="lugar_trabajo"><input type="radio" name="lugar" id="lugar_trabajo" value="trabajo" checked> En el trabajo</label>
                                <label for="lugar_itinere"><input type="radio" name="lugar" id="lugar_itinere" value="itinere"> In itinere</label>
                            </section>
                        </section>
                    </section>
                    
                    <button type="button" onclick="calcularAccidente()" class="btn btn-amarillo">CALCULAR INDEMNIZACIÓN</button>
                </form>

                <aside id="resultadoAccidente" class="resultado-box hidden">
                    <h3>RESULTADO ESTIMADO</h3>
                    <section class="monto-final" id="montoFinal">$ 0,00</section>
                    <p id="detalleResultado"></p>
                    <section class="aviso-legal">
                        * Liquidación orientativa calculada según valores ingresados por el usuario. Sujeta a revisión legal y médica.
                    </section>
                    <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                        CONTACTO
                    </a>
                </aside>
            </article>
        </section>
    </section>
</main>

<script>
function calcularAccidente() {
    const ibm = parseFloat(document.getElementById('salario').value);
    const edad = parseInt(document.getElementById('edad').value);
    const incapacidad = parseFloat(document.getElementById('incapacidad').value) / 100;
    
    if (!ibm || !edad || !incapacidad) {
        alert("Por favor completá todos los campos.");
        return;
    }

    let total = 53 * ibm * incapacidad * (65 / edad);
    const formateador = new Intl.NumberFormat('es-AR', { style: 'currency', currency: 'ARS' });

    document.getElementById('montoFinal').innerText = formateador.format(total);
    document.getElementById('detalleResultado').innerText = `Te corresponden aproximadamente ${formateador.format(total / (incapacidad * 100))} por cada punto (%) de incapacidad laboral.`;
    document.getElementById('resultadoAccidente').classList.remove('hidden');
    document.getElementById('resultadoAccidente').scrollIntoView({ behavior: 'smooth' });
}
</script>
