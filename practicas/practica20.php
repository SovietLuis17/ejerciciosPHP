<?php

if ($_POST) {

$base= $_POST['base'];
$exponente= $_POST['exponente'];

echo "El resultado es : ".$base ** $exponente;

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

   <form action="practica20.php" method="post">
    <label for="base">Ingresa la base : </label>
    <input type="text" name="base" placeholder="20" required><br/>
    <label for="exponente">Ingresa el exponente :</label>
    <input type="text" name="exponente"  placeholder="5" required>
    <input type="submit" value="Enviar">
   </form>
    
</body>
</html>
