<?php
// Read input
$age = intval(fgets(STDIN));
$membershipType = trim(fgets(STDIN));
$promoCode = trim(fgets(STDIN));
$cartTotal = intval(fgets(STDIN));

// TODO: Write your code below

// 1. Age Category (use if-elseif-else)
if ($age < 13) {
    echo "Child\n";
} elseif ($age < 20) {
    echo "Teen\n";
} elseif ($age < 65) {
    echo "Adult\n";
} else {
    echo "Senior\n";
}

// 2. Membership Discount (use switch)
switch ($membershipType) {
    case "gold":
        echo "20% off\n";
        break;
    case "silver":
        echo "10% off\n";
        break;
    case "bronze":
        echo "5% off\n";
        break;
    default:
        echo "No discount\n";
}

// 3. Promo Status (use null coalescing)
$appliedPromo = null;
$displayPromo = $appliedPromo ?? $promoCode;
echo $displayPromo . "\n";

// 4. Shipping (use ternary)
echo $cartTotal >= 50 ? "Free shipping" : "Standard shipping";
?>