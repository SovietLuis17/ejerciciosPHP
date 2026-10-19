<?php
$clave_correcta = "1234";
$entrada = "";
while ($entrada !== $clave_correcta) {
    $entrada = readline("Ingresa la clave: ");
}
echo "¡Acceso concedido!\n";
?>