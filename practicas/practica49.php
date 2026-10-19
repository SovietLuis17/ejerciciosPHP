<?php
// Read input
$score = 23;
$passingScore = 56;
$quantity = 5;

// TODO: Write your code below
// Use the ternary operator to determine if the score is a pass or fail
$result = $score >= $passingScore ? "Passed" : "Failed";

// Use the ternary operator to determine the shipping message
$shippingMessage = $quantity > 10 ? "Free shipping" : "Standard shipping";

// Output the results
echo $result . "\n";
echo $shippingMessage;
?>