<?php
$age = 25;
$hasLicense = true;

$canDrive = $age >= 18 && $hasLicense;
echo "Esta autorizado a manejar : ".var_dump($canDrive); // bool(true)

$age = 16;
$canDrive = $age >= 18 && $hasLicense;
echo "No esta autorizado a manejar : ".var_dump($canDrive); // bool(false) - la condición de edad falla
?>