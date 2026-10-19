<?php

$var = "1234";
$var1 = (int)$var;

//echo "El dato es : ".$var1;

if (is_int($var1)) {
    echo " Es un entero : $var1 ";
}
else {
    echo "No es un entero";
}

?>