<?php

$edad = 25;
$tieneTicket = false;
$esVIP = false;

//condicion para pasar 
if ($edad >= 18 && ($tieneTicket == true || $esVIP == true)) {
  echo "Bievenido tienes autorizacion para pasar al CLUB!, <br/> <h2> DISFRUTA DEL ESPECTACULO </h2>";
}
else {
    echo "<h2> No tienes autorizacion para pasar al CLUB! </h2>";
}

?>