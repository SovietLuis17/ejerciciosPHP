<?php
// Variables para mostrar resultados o errores


// Verificar si se envió el formulario
if ($_POST) {
 /*Operador de fusión de null (??)
¿Qué hace?
El operador ?? se usa para proporcionar un valor predeterminado si una variable no existe o es null*/

    // Obtener los valores (con valor predeterminado vacío si no existen)
    $num1 = $_POST['numero1'] ?? '';
    $num2 = $_POST['numero2'] ?? '';

    // Validar que ambos sean numéricos
    if (is_numeric($num1) && is_numeric($num2)) {
        // Convertir a float para manejar enteros y decimales
        $n1 = (float) $num1;
        $n2 = (float) $num2;

        $resultado = $n1 + $n2;

        // Formatear el resultado (eliminar .0 si es entero)
        echo " El resultado de la suma es : $resultado ";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
</head>
<body>

<h2>Suma de dos números</h2>

<form method="POST" action="practica41.php">
    <label>Número 1:</label>
    <input type="text" name="numero1" >

    <label>Número 2:</label>
    <input type="text" name="numero2">

    <br><br>
    <button type="submit">Sumar</button>
</form>

</body>
</html>