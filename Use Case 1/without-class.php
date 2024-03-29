<?php

$groceries = [
    ['name' => 'Bananas', 'amount' => 6, 'price' => 1, 'tax' => 6],
    ['name' => 'Apples', 'amount' => 3, 'price' => 1.5, 'tax' => 6],
    ['name' => 'Bottles of wine', 'amount' => 2, 'price' => 10, 'tax' => 21],
];

function calculateTax($itemTotal, $taxRate) {
    return $itemTotal * ($taxRate / 100); // Assuming tax rate is in percentage
}

$totalCost = 0;
$totalTax = 0;

foreach ($groceries as $item) {
    $itemTotal = $item['amount'] * $item['price'];
    $taxAmount = calculateTax($itemTotal, $item['tax']);

    $totalCost += $itemTotal;
    $totalTax += $taxAmount;
}

echo "Total cost of groceries: $totalCost<br>";
echo "Total tax amount: $totalTax<br>";