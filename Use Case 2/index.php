<?php

declare(strict_types=1);

class GroceryItem
{
    public $name;
    public $quantity;
    public $price;
    public $taxAmount;
    public $isFruit;

    public function __construct(string $name, int $quantity, float $price, float $taxAmount, bool $isFruit)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->taxAmount = $taxAmount;
        $this->isFruit = $isFruit;
    }

    public function calculateTotal() {
        if ($this->isFruit == true) {
            $totalPrice = ($this->quantity * $this->price)/2; 
            return $totalPrice;
        } else {
            $totalPrice = $this->quantity * $this->price; 
            return $totalPrice;
        }
    }

    public function calculateTax() {
        $totalPrice = $this->calculateTotal();
        $taxTotal = $totalPrice * $this->taxAmount;
        return $taxTotal;
    }
}

$banana = new GroceryItem("Bananas", 6, 1, 0.06, true);
$apples = new GroceryItem("Apples", 3, 1.5, 0.06, true);
$wine = new GroceryItem("Wine", 2, 10, 0.21, false);

echo "The total cost of all items is " . $banana->calculateTotal() + $apples->calculateTotal() + $wine->calculateTotal() . "<br>";
echo "The total tax amount of all items is " . $banana->calculateTax() + $apples->calculateTax() + $wine->calculateTax(); 