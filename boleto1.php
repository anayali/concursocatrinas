<?php
require 'fpdf/fpdf.php';
require 'conexion.php';
require 'phpqrcode/qrlib.php'; // Asegúrate de incluir la biblioteca PHP QR Code

// Verificar si se ha recibido el ID del participante
if (isset($_GET['participante'])) {
    $idParticipante = intval($_GET['participante']); // Asegúrate de que sea un número entero

    // Consulta para obtener el nombre del participante
    $sql = "SELECT nombre, idParticipante FROM participantes WHERE idParticipante = $idParticipante";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        $datos = $resultado->fetch_assoc();

        // Generar el código QR
        $qrData ="https://maps.app.goo.gl/zvGf1t3FnJ5sAvfu8"; // Cambia esto según lo que quieras codificar
        $qrFilePath = 'Imagen/qr_' . $idParticipante . '.png'; // Ruta donde se guardará el código QR
        QRcode::png($qrData, $qrFilePath); // Genera el código QR

        $pdf = new FPDF('L', 'mm', 'Letter'); // Crear documento PDF horizontal
        $pdf->AddPage();
        $pdf->SetFont('times', 'B', 16);
        $pdf->SetCreator('Ana Maria Nuñez Reyes');

        // Reemplaza con la ruta de la imagen de tu certificado
        $pdf->Image('Imagen/12.png', 0, 0, 280, 216);

        // ID del participante
        $pdf->SetFont('times', 'B', 45);
        $pdf->SetXY(199, 130); // Ajusta la posición según tu diseño
        $pdf->Cell(130, 5, "" . $datos['idParticipante'], 0, 1, 'C');

        // Agregar el código QR al PDF
        $pdf->Image($qrFilePath, 142, 165, 38); // Ajusta la posición y tamaño según tu diseño

        // Generar el PDF
        $pdf->Output();
    } else {
        echo "No se encontró el participante.";
    }
} else {
    echo "No se ha seleccionado ningún participante.";
}



?>



