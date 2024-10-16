<?php
require 'fpdf/fpdf.php';
require 'conexion.php';
function setText($pdf,$texto ,$longitud, $x,$y)
{
    $pdf->SetXY($x, $y);
    $pdf->Cell($longitud,5, mb_convert_encoding($texto, 'ISO-8859-1','UTF-8'),0,1, 'C');
}

//como mandar a llamar 
$sql = "SELECT participantes.nombre AS participante,
cursos.nombre AS curso,
cursos.instructor AS instructor FROM participantes
INNER JOIN cursos ON participantes.idCurso = cursos.idCurso
WHERE participantes.idCurso = $idCurso";

$resultado = $mysqli->query($sql);

$pdf=new FPDF('L','mm','Letter');
while($datos=$resultado->fetch_assoc()){




$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetCreator('Ana Maria Nuñez Reyes');

$pdf->Image('Imagen/boleto.png',0,0,280,216);

$pdf->setFont('Arial','B', 20);
setText($pdf, $datos['participante'], 160, 60, 115);
setText($pdf, $datos['curso'], 160, 60, 140);
$pdf->SetFont('times','B', 18);
setText($pdf, $datos['instructor'], 130, 8, 165);
setText($pdf, "Lorenzo Camargo Serrano", 160,130,167);
setText($pdf, "Instructor", 130,10,175);
setText($pdf, "Director", 160,130,175);

setText($pdf,date('d/m/y'), 0,0,190);
}
$pdf->Output();
?>