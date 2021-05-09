<?php

require './fpdf/fpdf.php';

$pdf = new FPDF();

$conn = mysqli_connect('localhost', 'root', '', 'coffeesoft');

$sql = "select * from product";

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_row($query);

var_dump($result[0]);

$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(10,10,'Factura');

//$pdf->Output();