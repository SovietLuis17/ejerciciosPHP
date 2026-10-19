<?php
// Read input values
$temperature = intval(fgets(STDIN));
$isRainingStr = trim(fgets(STDIN));
$hasUmbrellaStr = trim(fgets(STDIN));
$hasRaincoatStr = trim(fgets(STDIN));

// TODO: Convert string values to booleans by comparing them to "true"
$isRaining = $isRainingStr === "true";
$hasUmbrella = $hasUmbrellaStr === "true";
$hasRaincoat = $hasRaincoatStr === "true";

// TODO: Evaluate and print the three conditions using var_dump():
// 1. Check if it's NOT raining
var_dump(!$isRaining);

// 2. Check if the person should stay inside (raining AND no umbrella AND no raincoat)
var_dump($isRaining && !$hasUmbrella && !$hasRaincoat);

// 3. Check if the person can go outside comfortably
var_dump($temperature >= 15 && (!$isRaining || $hasUmbrella || $hasRaincoat));

?>