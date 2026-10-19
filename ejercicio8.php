<?php

 if($_POST) {

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma= $valorA + $valorB;
    $resta= $valorA - $valorB;
    $multiplicacion= $valorA * $valorB;
    $division=$valorA / $valorB;



    echo "Total de la suma es : ".$suma." </br>";
    echo "Total de la resta es : ".$resta." </br>";
    echo "Total de la multiplicacion es : ".$multiplicacion." </br>";
    echo "Total de la division es : ".$division." </br>";


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

   <form action="ejercicio8.php" method="post">
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