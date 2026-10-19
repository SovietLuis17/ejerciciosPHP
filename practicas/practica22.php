<?php

// Read input
$basePrice = 5033;
$taxPercent = 10;
$quantity = 7;

// TODO: Write your code below
// 1. Start with the base price
// 2. Add the tax (basePrice * taxPercent / 100)
$priceWithTax = $basePrice + ($basePrice * $taxPercent / 100);
// 3. Multiply by quantity
$total = $priceWithTax * $quantity;
// 4. Subtract discount of 15
$total -= 15;
// 5. Add shipping fee (quantity ** 2)
$finalTotal = $total + ($quantity ** 2);

// Output the final total
echo "el precio es : ".$finalTotal;

?>

