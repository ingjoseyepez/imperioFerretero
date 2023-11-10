<?php
require('../pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    // Movernos a la derecha
    $this->Cell(120);
    // Título
    $this->Cell(70,10,' EL IMPERIO FERRETERO ',1,0,'C');
    $this->Ln(20);
    $this->Cell(20, 10,'CODIGO', 1, 0, 'C', 0);
    $this->Cell(100, 10,'DESCRIPCION', 1,0, 'C', 0);
    $this->Cell(40, 10, 'CATEGORIA', 1,0, 'C', 0);
    $this->Cell(30, 10,'PRECIO', 1,0, 'C', 0);
    $this->Cell(30, 10,'CANTIDAD', 1,0, 'C', 0);
    $this->Cell(30, 10, 'FECHA ING', 1,1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require '../conexion.php';
$consulta = "SELECT * FROM general";
$resul = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Arial','B',10);
while($row = $resul->fetch_assoc()){
$pdf->Cell(20, 10, $row['cod'], 1,0, 'C', 0);
$pdf->Cell(100, 10, $row['descr'], 1,0, 'C', 0);
$pdf->Cell(40, 10, $row['cate'], 1,0, 'C', 0);
$pdf->Cell(30, 10, $row['precio'], 1,0, 'C', 0);
$pdf->Cell(30, 10, $row['cant_a'], 1,0, 'C', 0);
$pdf->Cell(30, 10, $row['fecha'], 1,1, 'C', 0);
}
$pdf->Output();
?>