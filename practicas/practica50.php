<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
     $username=$_POST['username'] ?? '';
     $email=$_POST['email'] ?? '';

     if (empty($username) && empty($email)) {
         echo "<h3> Lo siento, el registro no puede ser procesado </h3> ";
     }
     else {
        echo "<h3> Bienvenido al sistema ! </h3>";
     }
}





?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Coloca tu edad : </title>
</head>
<body>

<h2>Coloca tus datos :</h2>

<form method="POST" action="practica50.php">
    <label>USERNAME :</label>
    <input type="text" name="username" >
    <br><br>
    <label >EMAIL :</label>
    <input type="text" name="email" id="">
    <br><br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>