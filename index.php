<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$html = '
    <h1>Hello world</h1>
    <p>atividade 03 de progweb</p>
';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>
