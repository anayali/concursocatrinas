<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code with Background</title>
    <style>
        body {
            background-image: url('fondo.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            position: relative;
        }
        .qr-container {
            position: absolute;
            bottom: 20px; /* Mover más hacia abajo */
            right: 500px; /* Mover más hacia la izquierda */
            margin: 20px;
        }
        img {
            border: 2px solid #fff;
            padding: 3px;
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="qr-container">
        <?php
        require "phpqrcode/qrlib.php";

        $dir="imagen/";

        if(!file_exists($dir))
        mkdir($dir);

        $filename=$dir.'imgqr.png';

        $tam=6; // Reducir tamaño del QR
        $precision='L';
        $frameSize=3;
        $contenido="http://localhost/Certificado5BP/certificado.php?participante=1";

        QRcode::png($contenido, $filename, $precision, $tam, $frameSize);

        echo '<img src="'.$dir.basename($filename).'"/>';
        ?>
    </div>
</body>
</html>
