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

    if ($valorA==$valorB) {

      echo "El valor de A es mayor que el valor de B </br>";

       if ($valorA==10) {
           echo "El valor es 10  </br>";
       }

       if ($valorA==15){
         echo "El valor es igual a 15 </br>";
       }
 
    }

    if (($valorB!=$valorA)&&($valorB > $valorA)) {
         echo "El valor B es mayor al valor A  </br>";

         if ($valorB==20) {
           echo "El valor B es 20 </br>";
         }
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

   <form action="ejercicio11.php" method="post">
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