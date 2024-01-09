<?php

declare(strict_types=1);

class GroceryItem
{
    public $name;
    public $quantity;
    public $price;
    public $taxeAmount;

    public function __construct(string $name, int $quantity, float $price, float $taxeAmount)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->taxeAmount = $taxeAmount;
    }

    public function calculateTotal() {
        $totalPrice += $this->quantity * $this->price; 
        return $totalPrice;
    }

    public function calculateTax() {
        $taxTotal += $totalPrice * $taxAmount;
        return $taxeAmount;
    }
    
}
