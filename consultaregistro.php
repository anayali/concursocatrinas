<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Personal</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Color de fondo suave */
        }

        .navbar {
            width: 100%;
            background-color: #ff69b4; /* Color de fondo del menú superior */
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around; /* Distribuye los elementos del menú */
        }

        .navbar ul li {
            padding: 14px 20px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .navbar ul li a:hover {
            background-color: #ff1493; /* Color de fondo al pasar el mouse */
            border-radius: 4px;
        }

        #cabecera {
            background-color: #ff1493; /* Color de fondo de la cabecera */
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 10px 0;
        }

        #contenido {
            max-width: 1200px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin: 20px auto; /* Centra el contenido */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #dee2e6; /* Color del borde de la tabla */
        }

        table thead {
            background-color: #ff1493; /* Color de fondo del encabezado de la tabla */
            color: white;
        }

        table tbody tr:nth-child(odd) {
            background-color: #ffcccb; /* Color de fondo de filas impares */
        }

        table tbody tr:nth-child(even) {
            background-color: #ffe4e1; /* Color de fondo de filas pares */
        }

        table tbody tr:hover {
            background-color: #ffb6c1; /* Color de fondo al pasar el mouse */
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .btn-info {
            background-color: #ff69b4; /* Color de fondo del botón de información */
        }

        .btn-warning {
            background-color: #ffc107; /* Color de fondo del botón de advertencia */
        }

        .btn-danger {
            background-color: #dc3545; /* Color de fondo del botón de peligro */
        }

        .btn:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    

    <div class="content">
        <div id="cabecera">
            <h1>LISTA DE INSCRIPCIONES</h1>
        </div>

        <div id="contenido">
            <table>
                <thead>
                    <tr>
                        <th>Numero Participante</th>
                        <th>Nombre </th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Traje</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
$conexion = mysqli_connect("mysql.webcindario.com", "catrinas", "anayali", "catrinas");
                    $sentencia = "SELECT * FROM personal";
                    $resultado = mysqli_query($conexion, $sentencia);

                    while ($filas = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $filas['idParticipante'] . "</td>";
                        echo "<td>" . $filas['nombretra'] . "</td>";
                        echo "<td>" . $filas['edad'] . "</td>";
                        echo "<td>" . $filas['email'] . "</td>";
                        echo "<td>" . $filas['telefono'] . "</td>";
                        echo "<td>" . $filas['descr'] . "</td>";
                       
                    
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

