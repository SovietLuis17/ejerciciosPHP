<?php 

 if ($_POST) {

  $edad =$_POST['edad'] ?? '';

  if (is_numeric($edad)) {

    $edadFinal = (int)$edad;

    if ($edadFinal >= 18) {
      echo "<h2> Bievenido , eres mayor de edad </h2>";
    }
    else {
        echo "<h2> SAL DE AQUI , no eres mayor de edad </h2>";
    }

  }

 }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Coloca tu edad : </title>
</head>
<body>

<h2>Coloca tu edad :</h2>

<form method="POST" action="practica42.php">
    <label>Edad :</label>
    <input type="text" name="edad" >
    <br><br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>