<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Personal - Día de Muertos</title>
    <!-- Importación de las fuentes Lobster y Dancing Script -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            background-color: #000;
            position: relative;
        }

        /* Video de fondo */
        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Fondo transparente y contenido */
        .content {
            margin-left: 0;
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            color: white;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.9); /* Sombra suave */
        }

        /* Título estilizado con la fuente Dancing Script */
        #cabecera h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 4rem;
            color: #ff4081; /* Color alusivo al Día de Muertos */
            padding: 20px 0;
            margin: 0;
            text-align: center;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7); /* Sombra pronunciada */
        }

        /* Contenido del formulario */
        #contenido {
            margin: 40px auto;
            width: 90%;
            max-width: 800px;
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro semitransparente */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
        }

        h1 {
            font-family: 'Lobster', cursive; /* Fuente bonita y gruesa para subtítulos */
            font-size: 2.5rem;
            font-weight: 700; /* Texto grueso */
            color: #ffae42; /* Naranja vibrante para destacar */
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6); /* Sombra en el subtítulo */
        }

        label {
            font-family: 'Dancing Script', cursive;
            font-size: 1.2rem;
            display: block;
            margin-top: 10px;
            color: #fff;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            width: 100%;
            text-align: center;
            font-size: 16px;
        }

        /* Estilo del botón en negro */
        .btn-info {
            background-color: #000;
        }

        .btn-info:hover {
            background-color: #333;
        }

        a {
            text-decoration: none;
        }

        a:hover .btn {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <!-- Video de fondo -->
    <video autoplay muted loop>
        <source src="video.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de video.
    </video>

    <div class="content">
        <div id="cabecera">
            <h1>DÍA DE MUERTOS</h1>
        </div>

        <div id="contenido">
            <h1>REGÍSTRATE</h1>
            <form action="insertar.php" method="POST">
               
                <label>Nombre completo: </label>
                <input type="text" id="nombretra" name="nombretra" required>

                <label>Edad: </label>
                <input type="number" id="edad" name="edad" required>

                <label>Correo Electrónico: </label>
                <input type="text" id="email" name="email" required>

                <label>Teléfono: </label>
                <input type="number" id="telefono" name="telefono" required>

                <label>Descripción del traje: </label>
                <input type="text" id="descr" name="descr" required>

                <br>
                <input type="submit" value="REGISTRAR" class="btn btn-info">
            </form>
        </div>
    </div>
</body>
</html>
