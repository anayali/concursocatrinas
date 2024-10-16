<?php
require 'conexion.php';
$sql = "SELECT  * FROM  cursos";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UFT-8">
    
    <head>
    <title> GENERA DIPLOMAS MASIVOS </title>
</head>
<body>
    
<h3>Genera Diplomas masivos </h3>
<form action='diplomas.php' method ='get'>
    <p>
        <label for= "cursos"> cursos:</label>
</p>

<p>
        <select name= "curso"  id ="curso" required>
            <option value="">seleccionar curso</option>
          <?php while($row=$resultado->fetch_assoc()) {
            ?> <option value="<?php echo $row['idCurso'] ; ?>">
            <?php echo $row ['nombre']; ?></option>
            <?php } ?>   
</select>  
<button type="submit">Generar</button>

</form>
</body>
</html>