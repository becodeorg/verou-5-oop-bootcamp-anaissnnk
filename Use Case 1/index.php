<?php

declare(strict_types=1);

class GroceryItem
{
    public $name;
    public $quantity;
    public $price;
    public $taxAmount;

    public function __construct(string $name, int $quantity, float $price, float $taxAmount)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->taxAmount = $taxAmount;
    }

    public function calculateTotal() {
        $totalPrice = $this->quantity * $this->price; 
        return $totalPrice;
    }

    public function calculateTax() {
        $totalPrice = $this->calculateTotal();
        $taxTotal = $totalPrice * $this->taxAmount;
        return $taxTotal;
    }
}

$banana = new GroceryItem("Bananas", 6, 1, 0.06);
$apples = new GroceryItem("Apples", 3, 1.5, 0.06);
$wine = new GroceryItem("Wine", 2, 10, 0.21);

echo "The total cost of all items is " . $banana->calculateTotal() + $apples->calculateTotal() + $wine->calculateTotal() . "<br>";
echo "The total tax amount of all items is " . $banana->calculateTax() + $apples->calculateTax() + $wine->calculateTax(); 