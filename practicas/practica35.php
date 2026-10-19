<?php 
$hasTicket = true;
$age = 18;
$enterEvent = $age >= 18 && $hasTicket;
echo "Puede entrar al evento, Bienvenido !".var_dump($enterEvent);


?>