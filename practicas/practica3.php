<?php

if($_POST) {

    $boton=$_POST['btnValor'];

    switch($boton) {

        case 'Lunes': 
            echo "El dia es Lunes, y debes hacer una rutina de espalda";
        break;
        case 'Martes': 
            echo "El dia es martes y debes hacer una rutina de piernas";  
        break;    
        case 'Miercoles': 
            echo "El dia es miercoles y debes hacer una rutina de brazo";  
        break;    
        case 'Jueves': 
            echo "El dia es Jueves y debes hacer una rutina de hombros y pecho";    
        break; 

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

  <form action="practica3.php" method="post">
    
    <input type="submit" value="Lunes" name="btnValor">
    <br/>
    <input type="submit" value="Martes" name="btnValor">
    <br/>
    <input type="submit" value="Miercoles" name="btnValor">
    <br/>
    <input type="submit" value="Jueves" name="btnValor">
    <br/>
    

  </form>
    
</body>
</html>
