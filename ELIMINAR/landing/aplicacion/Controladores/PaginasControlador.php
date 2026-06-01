<?php

require_once __DIR__ . '/../Modelos/FormModel.php';

class PaginasControlador {

    private $baseUrl = "https://derechosartconsultas.com/";

    public function Inicio() {
        $MetaTitulo = "Abogados especialistas en accidentes de trabajo y despidos - CABA, Buenos Aires y Rosario";
        $MetaDescripcion = "Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.";
        $MetaCanonical = $this->baseUrl;
        $ClaseBody = "home";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/inicio.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function QuienesSomos() {
        $MetaTitulo = "Quienes Somos - DerechosART";
        $MetaDescripcion = "Conoce al equipo de abogadas de DerechosART. Mas de 8 años de trayectoria defendiendo los derechos de los trabajadores en Argentina.";
        $MetaCanonical = $this->baseUrl . "?url=quienes-somos";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/quienes-somos.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function Accidentes() {
        $MetaTitulo = "Accidentes de trabajo - DerechosART";
        $MetaDescripcion = "Todo lo que necesitas saber sobre accidentes de trabajo: que hacer, como reclamar a la ART y calcular tu indemnizacion. Asesoramiento gratuito.";
        $MetaCanonical = $this->baseUrl . "?url=accidentes-de-trabajo";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/accidentes-de-trabajo.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function Despidos() {
        $MetaTitulo = "Despidos e Indemnizaciones - DerechosART";
        $MetaDescripcion = "Asesoramiento legal por despidos injustificados, trabajo en negro y liquidaciones finales. Defendemos tus derechos laborales.";
        $MetaCanonical = $this->baseUrl . "?url=despidos";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/despidos.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function Enfermedades() {
        $MetaTitulo = "Enfermedades Profesionales - DerechosART";
        $MetaDescripcion = "¿Sufris una enfermedad causada por tu trabajo? Te ayudamos a que la ART reconozca tu dolencia y te indemnice correctamente.";
        $MetaCanonical = $this->baseUrl . "?url=enfermedades-profesionales";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/enfermedades-profesionales.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function CalculadoraIndemnizacion() {
        $MetaTitulo = "Calculadora de Accidentes de Trabajo (ART) - DerechosART";
        $MetaDescripcion = "Calcula online el monto estimado de tu indemnización por accidente laboral según el Baremo y la Ley de Riesgos del Trabajo.";
        $MetaCanonical = $this->baseUrl . "?url=calculadora-indemnizacion";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/calculadora-indemnizacion.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function CalculadoraDespidos() {
        $MetaTitulo = "Calculadora de Despidos - DerechosART";
        $MetaDescripcion = "Estimá tu indemnización por despido sin causa, falta de preaviso e integración del mes. Herramienta gratuita para trabajadores.";
        $MetaCanonical = $this->baseUrl . "?url=calculadora-despidos";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/calculadora-despidos.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function CalculadoraAccidentes() {
        $MetaTitulo = "Calculadora de Indemnización por Accidente ART - DerechosART";
        $MetaDescripcion = "Calculá online el monto estimado de tu indemnización por accidente laboral según la Ley de Riesgos del Trabajo.";
        $MetaCanonical = $this->baseUrl . "?url=calculadora-accidentes";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/calculadora-accidentes.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function ComisionesMedicas() {
        $MetaTitulo = "Trámites en Comisiones Médicas (SRT) - DerechosART";
        $MetaDescripcion = "Te asesoramos en tus trámites ante la Superintendencia de Riesgos del Trabajo para el reconocimiento de tu incapacidad laboral.";
        $MetaCanonical = $this->baseUrl . "?url=comisiones-medicas";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/comisiones-medicas.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function QueHacer() {
        $MetaTitulo = "¿Qué hacer ante un accidente de trabajo? - DerechosART";
        $MetaDescripcion = "Guía paso a paso sobre cómo actuar ante un accidente laboral, cómo hacer la denuncia a la ART y cómo asegurar tu atención médica.";
        $MetaCanonical = $this->baseUrl . "?url=que-hacer";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/que-hacer.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function CualEsMiArt() {
        $MetaTitulo = "¿Cuál es mi ART? Consulta de Aseguradora - DerechosART";
        $MetaDescripcion = "Aprendé cómo consultar cuál es tu ART con tu CUIL y encontrá los teléfonos de emergencia de todas las aseguradoras de Argentina.";
        $MetaCanonical = $this->baseUrl . "?url=cual-es-mi-art";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/cual-es-mi-art.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function FormulariosSrt() {
        $MetaTitulo = "Formularios SRT para trámites de ART - DerechosART";
        $MetaDescripcion = "Descarga y guía para completar los formularios necesarios para tus reclamos ante la Superintendencia de Riesgos del Trabajo.";
        $MetaCanonical = $this->baseUrl . "?url=formularios-srt";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/formularios-srt.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function BuscadorComisiones() {
        $MetaTitulo = "Buscador de Comisiones Médicas SRT - DerechosART";
        $MetaDescripcion = "Encontrá la sede de la Superintendencia de Riesgos del Trabajo más cercana a tu domicilio o lugar de trabajo.";
        $MetaCanonical = $this->baseUrl . "?url=buscador-comisiones";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/buscador-comisiones.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function TablaIncapacidad() {
        $MetaTitulo = "Tabla de Incapacidad Laboral (Baremo) - DerechosART";
        $MetaDescripcion = "Consulta la tabla oficial de porcentajes de incapacidad por accidentes y enfermedades laborales según el Decreto 659/96.";
        $MetaCanonical = $this->baseUrl . "?url=tabla-incapacidad";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/tabla-incapacidad.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function Contacto() {
        $formModel = new FormModel();
        $provincias = $formModel->getProvincias();
        $categorias = $formModel->getCategorias();
        $art_empresas = $formModel->getArtEmpresas();
        $catIds = $formModel->getCategoriaIds();

        $MetaTitulo = "Contacto - Consultas Gratuitas - DerechosART";
        $MetaDescripcion = "Comunicate con nuestros abogados laboralistas para recibir asesoramiento gratuito por accidentes de trabajo o despidos. Atendemos en todo el país.";
        $MetaCanonical = $this->baseUrl . "?url=contacto";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/contacto.php';
        require_once 'vistas/pie_pagina.php';
    }

    public function Faq() {
        $MetaTitulo = "Preguntas Frecuentes (FAQ) - DerechosART";
        $MetaDescripcion = "Respondemos tus dudas sobre accidentes laborales, despidos, reclamos a la ART y trámites ante la SRT. Asesoramiento legal gratuito.";
        $MetaCanonical = $this->baseUrl . "?url=faq";
        $ClaseBody = "interna";
        require_once 'vistas/encabezado.php';
        require_once 'vistas/paginas/faq.php';
        require_once 'vistas/pie_pagina.php';
    }

}
