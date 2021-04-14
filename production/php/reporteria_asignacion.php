<?php
require('../fpdf/fpdf.php');

 date_default_timezone_set('America/Tegucigalpa');
// En windows
setlocale(LC_TIME, 'spanish');
$hoy = strftime('%A %e de %B de %C%g');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo (posicion y, posicion x, ancho img, alto img )
    $this->Image('../images/logogrupoalza.png',2,2,200,50);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    //$this->Cell(80);
    // Título
    //$this->Cell(80,80,'Asignacion de Equipo',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}




$pdf = new PDF();
$pdf-> AliasNbpages();
$pdf->AddPage();
$pdf->Cell(50);
$pdf->SetFont('Arial','B',24);
$pdf->Cell(40,70,'Asignacion de Equipo');
$pdf->Cell(-90);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,100,$hoy);

$pdf->Output();
?>
