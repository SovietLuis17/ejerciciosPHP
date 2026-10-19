<?php

if ($_POST) {

 $monto= $_POST['txtMonto'];
 settype($monto, 'integer');
 echo "settype(): ".$monto." (Tipo: ".gettype($monto).")\n";

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

  <form action="practica7.php" method="post">

  <label for="">Ingresa el monto a establecer</label>
  <input type="text" name="txtMonto" id="">
  <input type="submit" value="Enviar">


  </form>
    
</body>
</html>