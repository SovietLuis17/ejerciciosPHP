<?php

// clase calculadora

class Calculadora {

 public $numeroUno;
 public $numeroDos;
 public $opc;

 public static function realizarOperacion($opc,$numeroUno,$numeroDos) {
   
  switch($opc) {

    case 1:

     $total = $numeroUno + $numeroDos;

      echo "El resultado de la SUMA ES :$total ";

     break; 
     
     case 2:

      $total = $numeroUno - $numeroDos;

      echo "El resultado de la RESTA ES :$total ";
      break;

      case 3:

      $total = $numeroUno * $numeroDos;

      echo "El resultado de la MULTIPLICACION ES :$total ";
      break;

      case 4:

      $total = $numeroUno / $numeroDos;

       echo "El resultado de la DIVISION ES :$total ";
      break;

 }

 }

}

if ($_POST) {

$numeroOne=$_POST['txtNumeroUno'];
$numeroTwo=$_POST['txtNumeroDos'];
$opc=$_POST['btnValor'];

//casteo

$numeroOne = (float) $numeroOne;
$numeroTwo = (float) $numeroTwo;


// acceder al metodo estatico

/*
$calculadora = new Calculadora();
$calculadora->realizarOperacion($opc,$numeroOne,$numeroTwo);
*/

Calculadora::realizarOperacion($opc,$numeroOne,$numeroTwo);

}








?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Basica Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Calculadora</h4>
                </div>
                <div class="card-body">
                    <form action="practica18.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="numeroUno" class="form-label">Ingresa el primer numero : </label>
                            <input type="text" class="form-control" id="numeroUno" required name="txtNumeroUno">
                        </div>

                        <div class="mb-3">
                            <label for="numeroDos" class="form-label">Ingresa el segundo numero : </label>
                            <input type="text" class="form-control" id="numeroDos" required  name="txtNumeroDos">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" value="1" name="btnValor">Suma (+)</button>
                            <button type="submit" class="btn btn-secondary" value="2" name="btnValor">Resta (-)</button>
                            <button type="submit" class="btn btn-danger" value="3" name="btnValor">Multiplicacion (*)</button>
                            <button type="submit" class="btn btn-info" value="4" name="btnValor">Division (/)</button>
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