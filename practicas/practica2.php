<?php

 if($_POST) {

    $numero=$_POST['txtNumero'];

    if($numero%2==0) {
         echo "El numero es par </br>";
    }
    else {
        echo "El numero es impar </br>";
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>

  <form action="practica2.php" method="post">
   <label for="numero"> Ingresa un numero : </label>
   <input type="text" name="txtNumero" id="">
   </br>
   <input type="submit" value="Enviar">
  </form>
    
</body>
</html>