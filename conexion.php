<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'certificados_catrinas'); // Cambié el nombre de la BD

if ($mysqli->connect_error) {
    echo "Error de conexión: " . $mysqli->connect_error;
    exit;
}
?>