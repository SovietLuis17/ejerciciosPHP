<?php
$frutas = ["Hola", "Perro", "gato"];
$contador = count($frutas); // Renombrado para claridad (almacena cantidad, no índice)
echo "Total de elementos: $contador" . PHP_EOL; // Etiqueta clara + salto de línea

// Corrección CRÍTICA: Cambiado <= a < para evitar "Undefined offset"
for ($i = 0; $i < $contador; $i++) {
    echo "Índice: $i - Valor: " . $frutas[$i] .PHP_EOL;
}

foreach ($frutas as $indice => $valor) {
    echo "Índice: $indice - Valor: $valor" . PHP_EOL;
}
?>