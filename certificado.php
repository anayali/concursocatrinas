<?php
require 'fpdf/fpdf.php';
require 'conexion.php';
require 'phpqrcode/qrlib.php'; // Asegúrate de tener esta línea para cargar la biblioteca

// Verificar si se ha recibido el ID del participante
if (isset($_GET['participante'])) {
    $idParticipante = intval($_GET['participante']); // Asegúrate de que sea un número entero

    // Consulta para obtener el nombre del participante
    $sql = "SELECT nombre, idParticipante FROM participantes WHERE idParticipante = $idParticipante";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        $datos = $resultado->fetch_assoc();

        // Generar el código QR
        $qrText = "file:///C:/xampp/htdocs/Certificado5BP/oficial.html";
        $qrFilePath = 'temp/qr_' . $idParticipante . '.png';
        QRcode::png($qrText, $qrFilePath);

        $pdf = new FPDF('L', 'mm', 'Letter'); // Crear documento PDF horizontal
        $pdf->AddPage();
        $pdf->SetFont('times', 'B', 16);
        $pdf->SetCreator('Ana Maria Nuñez Reyes');

        // Reemplaza con la ruta de la imagen de tu certificado
        $pdf->Image('Imagen/DIPLOMA.png', 0, 0, 280, 216);

        // Nombre del participante
        $pdf->SetFont('times', 'B', 30);
        $pdf->SetXY(115, 90); // Ajusta la posición según tu diseño
        $pdf->Cell(160, 5, mb_convert_encoding($datos['nombre'], 'ISO-8859-1', 'UTF-8'), 0, 1, 'C');

       
        // Agregar el código QR al PDF
        $pdf->Image($qrFilePath, 180, 180, 30, 30); // Ajusta la posición y el tamaño según tu diseño

        // Generar el PDF
        $pdf->Output();

        // Opcional: eliminar el archivo QR después de generar el PDF
        unlink($qrFilePath);
    } else {
        echo "No se encontró el participante.";
    }
} else {
    echo "No se ha seleccionado ningún participante.";
}
?>