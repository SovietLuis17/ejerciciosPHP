<?php

$edad = 15;

if ($edad <= 18) {
  echo "Eres mayor de edad, y de la generacion GENIAL  <br/>";
}
elseif ($edad >18 && $edad <= 30) {
    echo "Tienes $edad años y eres de la generacion JOVEN <br/>";
}
elseif($edad>30 && $edad <=40) {
   echo "Tienes $edad años y eres de la generacion de ORO <br/>";
}
elseif ($edad>40 && $edad <= 50) {
   echo "Tienes $edad años y eres de la generacion MADURA <br/>";
}
elseif ($edad>50 && $edad <= 80) {
  echo "Tienes $edad años y eres de la generacion de VANGUARDIA <br/>";
}
else {
    echo "Eres de la generacion de Cipiano Castro";
}

?>