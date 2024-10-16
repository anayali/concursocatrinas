<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code with Background</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }
        video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            opacity: 0.7;
        }
        .qr-container {
            position: absolute;
            bottom: 70px;
            right: 50%;
            transform: translate(50%, 0);
            margin: 20px;
            z-index: 1;
            display: flex;
            gap: 555px;; /* Espacio entre los dos códigos QR */
        }
        img {
            border: 2px solid #fff;
            padding: 3px;
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>

    <video autoplay muted loop>
        <source src="11.mp4" type="video/mp4">
        Tu navegador no soporta el video.
    </video>

    <div class="qr-container">
        <?php
        require "phpqrcode/qrlib.php";

        $dir = "imagen/";

        if (!file_exists($dir))
            mkdir($dir);

        // Generar el primer código QR
        $filename1 = $dir . 'imgqr1.png';
        $contenido1 = "http://localhost/Certificado5BP/index.php";
        QRcode::png($contenido1, $filename1, 'L', 6, 3);
        echo '<img src="' . $dir . basename($filename1) . '"/>';

        // Generar el segundo código QR
        $filename2 = $dir . 'imgqr2.png';
        $contenido2 = "http://localhost/Certificado5BP/boleto.php";
        QRcode::png($contenido2, $filename2, 'L', 6, 3);
        echo '<img src="' . $dir . basename($filename2) . '"/>';
        ?>
    </div>

</body>
</html>
