<?php

  if ($_POST) {
     
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];

    echo "El nombre es : ".$nombre." y el apellido es : ".$apellido;

  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <form action="practica1.php" method="post">
    <p>Nombre : </p>
    <input type="text" name="txtNombre" id="">
    </br>
    <p> Apellido : </p>
    <input type="text" name="txtApellido" id="">
    </br>
    <input type="submit" value="Enviar">
  </form>


</body>
</html>
