<?php

if ($_POST) {  // si hay un envio

// ejecuta este bloque de codigo
$nombre=$_POST['txtNombre'];

echo " <h1> Bievenido!  , $nombre </h1>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="practica26.php" method="post">
        <label for="nombre">Escribe tu nombre : </label>
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>