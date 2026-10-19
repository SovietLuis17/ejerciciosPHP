<?php

//array asociativo

$frutas = array("f"=>"fresa","p"=>"pera","m"=>"manzana");
//print_r($frutas);
//echo $frutas["f"];

foreach($frutas as $indice=>&$valor){

    echo " --- <br/> VALOR: ".$valor."-- INDICE : ".$indice." <br/>";
    // echo $frutas[$indice];
}

?>