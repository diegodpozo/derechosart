<?php
$filename = __DIR__ . '/Hora.docx';
$zip = new ZipArchive();
if ($zip->open($filename) === TRUE) {
    $xml = $zip->getFromName('word/document.xml');
    $zip->close();
    if ($xml) {
        $dom = new DOMDocument();
        $dom->loadXML($xml, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
        echo strip_tags($dom->saveXML());
    } else {
        echo "No se pudo encontrar word/document.xml en el docx.\n";
    }
} else {
    echo "No se pudo abrir el archivo docx.\n";
}
?>
