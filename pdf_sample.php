<?php
require("fpdf17/fpdf.php"); // path to fpdf.php
$pdf = new FPDF();
$pdf->addPage();
$pdf->setFont("Arial", 'B', 16);
$pdf->cell(40, 10, "Samina mina Eh eh! Waka waka Eh Eh!");
$pdf->output();
?>