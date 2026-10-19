<?php

 if($_POST) {

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if(($valorA != $valorB) && ($valorA > $valorB)) {
      echo "El valor A es mayor que el valor B";
    }
    else {
      echo "Son valores iguales. o B es mayor que A";
    }

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

   <form action="ejercicio10.php" method="post">
    <p> Ingresa un valor A : </p>
    <input type="text" name="valorA" id="">
    </br>
    <p> Ingresa un valor B : </p>
    <input type="text" name="valorB" id="">
    </br>
    <input type="submit" value="Enviar">
    
   </form>
    
</body>
</html>