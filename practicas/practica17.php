<?php

 $año= date("Y");
 $newAnio= (int)$año;

 /*
 echo $newAnio;

 if (is_int($newAnio)) {
 echo "Es entero";
 }
 else {
    echo "No es entero";
 }
*/

if ($_POST) {

$añoNac= $_POST['txtAñoNac'];
$newAñoNac = (int)$añoNac;

$anio_nacimiento =$newAnio-$newAñoNac;



if ($anio_nacimiento>=18) {
   echo "Eres mayor de edad - Bienvenido";
}
else {
    echo "No eres mayor de edad! Sal de aqui!";
}



}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Calcular edad</h4>
                </div>
                <div class="card-body">
                    <form action="practica17.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="edad" class="form-label">Ingresa tu año de Nacimiento:</label>
                            <input type="text" class="form-control" id="edad" required name="txtAñoNac">
                        </div>

                    
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>