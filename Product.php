<?php

namespace Opdracht3;

abstract class Product
{
    private string $name;
    private float $purchasePrice;
    private int $tax;
    private string $description;
    private float $profit;
    protected string $category;

    public function __construct(string $name, float $purchasePrice, int $tax, string $description, float $profit)
    {
        $this->name = $name;
        $this->puchasePrice = $purchasePrice;
        $this->tax = $tax;
        $this->description = $description;
        $this->profit = $profit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getSalesPrice(): float
    {
        
    }

    public function printInfo(): string
    {
        
    }

    abstract public function getInfo();
    abstract public function getSalesCategory();
}