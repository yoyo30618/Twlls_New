<?php
require_once('tcpdf.php');
$pdf = new TCPDF_FONTS();
$fontname = $pdf->addTTFfont('msyh.ttf', 'TrueTypeUnicode');
var_dump($fontname);
?>