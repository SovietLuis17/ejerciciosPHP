<?php
// Read input
$temperature = 5;
$hour = 22;

// TODO: Write your code below
// Determine the weather message based on temperature
if ($temperature < 0) {
    echo "Freezing conditions";
} elseif ($temperature < 15) {
    echo "Cold weather";
} elseif ($temperature < 25) {
    echo "Pleasant weather";
} else {
    echo "Hot weather";
}

echo "\n";

// Determine the greeting based on hour
if ($hour < 12) {
    echo "Good morning!";
} elseif ($hour < 18) {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}
?>