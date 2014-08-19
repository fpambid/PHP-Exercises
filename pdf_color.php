<?php
require("fpdf17/fpdf.php");
$pdf = new FPDF();
$pdf->addPage();
$pdf->setFont("Times", 'U', 15);
$pdf->setTextColor(128);
$pdf->cell(0, 5, "Times font, Underlined and FIFTY shades of Grey Text", 0, 0, 'L');
$pdf->ln();
$pdf->setTextColor(255, 0, 0);
$pdf->cell(0, 5, "Times font, Underlined and Red'S REVENGE Text", 0, 0, 'L');
$pdf->output();
?>