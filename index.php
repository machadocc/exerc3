<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$html = '
    <h1>Atenção!!!!!</h1>
    <p>Melhor camisa 10 em atividade no futebol brasileiro abaixo</p>
    <img src="https://www.estadao.com.br/resizer/v2/GCO4W72LJJFG7PYCXH65MQFRDM.jpg?quality=80&auth=884b3c5b55121676f3136ca1322143a807dea12dd1bc40ca5e44c1dbf49c1f2f&width=380">
';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>