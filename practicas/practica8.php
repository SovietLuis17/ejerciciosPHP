<?php

$numeros=array(1,2,4,6,12,34,34,22,33,112);

echo "La suma de todos los numeros del arreglo es  :".array_sum($numeros);

echo "<br/>  El numero de elementos de este arreglo es :".count($numeros)."<br/>";

for($indice=0;$indice<count($numeros);$indice++) {

     echo "<br/> Elemento : ".$numeros[$indice]."<br/>";

}

?>