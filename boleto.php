<?php
require 'conexion.php';
$sql = "SELECT * FROM participantes";
$resultado = $mysqli->query($sql);




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera boleto de participacion</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Pacifico', cursive;
            color: #FFF;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column; /* Cambiado a columna */
            justify-content: center; /* Centra el contenido verticalmente */
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            background-color: #2c2c2c; /* Fondo oscuro para contraste */
        }
        h3 {
            font-family: 'Lobster', cursive;
            font-size: 48px;
            text-shadow: 2px 2px 4px rgba(255, 215, 0, 0.8); /* Efecto de brillo dorado */
            margin-bottom: 40px; /* Separa más el título del formulario */
            margin-top: 20px; /* Agregado para margen superior */
        }
        form {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            position: relative;
            display: inline-block; /* Para centrar el formulario */
        }
        select {
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            margin-top: 10px;
            width: 200px;
        }
        button {
            background-color: #FF5733; /* Color vibrante para el botón */
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        button:hover {
            background-color: #C70039; /* Color más oscuro al pasar el mouse */
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
            opacity: 0.5; /* Efecto de opacidad para el video */
        }
        /* Estilos adicionales para decoraciones de Día de Muertos */
        .skeleton {
            position: absolute;
            z-index: 1;
            top: 20px;
            left: 20px;
            width: 100px;
            height: auto;
        }
        .flower {
            position: absolute;
            z-index: 1;
            bottom: 10px;
            right: 10px;
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>

    <video autoplay muted loop>
        <source src="10.mp4" type="video/mp4"> <!-- Reemplaza "tu_video.mp4" con la ruta de tu video -->
        Tu navegador no soporta el video.
    </video>

   

    <h3>Genera tu boleto de Participacion</h3>
    <form action='boleto1.php' method='get'>
        <p>
            <label for="participante">Participantes:</label>
        </p>
        <p>
            <select name="participante" id="participante" required>
                <option value="">Seleccionar participante</option>
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['idParticipante']; ?>">
                        <?php echo $row['nombre']; ?>
                    </option>
                <?php } ?>
            </select>  
        </p>
        <button type="submit">Generar</button>
    </form>

</body>
</html>
