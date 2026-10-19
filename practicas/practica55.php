<?php

$method = $_SERVER['REQUEST_METHOD'];
$monto = 0.0;
$descuento = 0.0;
$totalPagar = 0.0;
$error = "";

if ($method === 'POST') { // Usa === para comparación estricta
    if (isset($_POST['txtMonto']) && !empty($_POST['txtMonto'])) {
        $monto = filter_var($_POST['txtMonto'], FILTER_VALIDATE_FLOAT);
        
        if ($monto === false || $monto <= 0) {
            $error = "❌ El monto debe ser un número válido mayor a 0";
        } else {
            // Ejemplo de cálculo (ajusta según tu lógica)
            $descuento = $monto * 0.20; // 20% de descuento
            $totalPagar = $monto - $descuento;
        }
    } else {
        $error = "❌ Por favor ingresa un monto";
    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular precio</title>
    <style>
        .error { color: red; margin: 10px 0; }
        .success { color: green; margin: 10px 0; padding: 10px; background: #e8f5e9; }
    </style>
</head>
<body>
    <h2>Tecnología Chroma Lab</h2>
    
    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    
    <?php if ($totalPagar > 0): ?>
        <div class="success">
            <h3>Resultado:</h3>
            <p>Monto original: $<?php echo number_format($monto, 2); ?></p>
            <p>Descuento: $<?php echo number_format($descuento, 2); ?></p>
            <p><strong>Total a pagar: $<?php echo number_format($totalPagar, 2); ?></strong></p>
        </div>
    <?php endif; ?>
    
    <form action="practica55.php" method="post">
        <label>Ingresa el precio de compra:</label>
        <input type="number" name="txtMonto" step="0.01" min="0.01" 
               value="<?php echo htmlspecialchars($monto); ?>" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>