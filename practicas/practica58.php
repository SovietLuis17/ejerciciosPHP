<?php
$entradaArreglo = "";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 if (isset($_POST['textInput']) && !empty($_POST['textInput'])){

 $entradaArreglo =$_POST['textInput'];

 $items = explode(",",$entradaArreglo);

 print_r($items);

 }
 else {
    echo "<h2> DATOS VACIOS DE INGRESO </h2>";
 }

}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Moderno</title>
  
</head>
<body>
    <div class="form-container">
        <h1>Formulario Moderno</h1>
        <form id="modernForm" method="POST" action="practica58.php">
            <div class="input-group">
                <label for="textInput">Ingrese su texto:</label>
                <input 
                    type="text" 
                    id="textInput" 
                    name="textInput" 
                    placeholder="Escribe algo aquí..." 
                    required
                >
            </div>
            <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>

 
</body>
</html>