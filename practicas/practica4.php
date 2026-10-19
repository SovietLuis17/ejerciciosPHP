<?php

function realizarOperacion($opc,$num1,$num2) {

    switch($opc) {
       case 1: 
          $total = $num1 + $num2;
          echo "EL RESULTADO DE LA SUMA ES : ".$total." <br/> ";
       break;
       case 2: 
          $total = $num1 - $num2;
          echo "EL RESULTADO DE LA RESTA ES : ".$total." <br/> ";
       break;
       case 3: 
          $total = $num1 * $num2;
          echo "EL RESULTADO DE LA MULTIPLICACION ES : ".$total." <br/> ";
       break;
       case 4: 
          $total = $num1 / $num2;
          echo "EL RESULTADO DE LA DIVISION ES : ".$total." <br/> ";
       break;
       case 5:
       echo "SALIENDO!  ";
       break; 

    }

}

if ($_POST) {

 $opcion=$_POST['btnValor'];
 $numeroUno=$_POST['txtNum1'];
 $numeroDos=$_POST['txtNum2'];

 realizarOperacion($opcion,$numeroUno,$numeroDos);

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

   <form action="practica4.php" method="post">
     <label for="">INGRESA DOS NUMEROS : </label> <br/>
     <input type="text" name="txtNum1" id=""> <br/>
     <input type="text" name="txtNum2" id=""> <br/>

     <label for="">SELECCIONA UNA OPCION :</label> <br/>
     <input type="submit" value="1" name="btnValor"> <br/>
     <input type="submit" value="2" name="btnValor"> <br/>
     <input type="submit" value="3" name="btnValor"> <br/>
     <input type="submit" value="4" name="btnValor"> <br/>
     <input type="submit" value="5" name="btnValor"> <br/>
   </form>

 
</body>
</html>