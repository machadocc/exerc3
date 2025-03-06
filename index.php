<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$html = '
    <h1>Atenção</h1>
    <p>Ola mundo</p>
';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>