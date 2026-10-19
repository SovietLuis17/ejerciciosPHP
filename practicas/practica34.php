<?php
$isWeekend = true;
$isHoliday = false;

$dayOff = $isWeekend || $isHoliday;
var_dump($dayOff); // bool(true) - el fin de semana es verdadero

$isWeekend = false;
$dayOff = $isWeekend || $isHoliday;
var_dump($dayOff); // bool(false) - ambas son falsas
?>