<?php

require_once "Coffee.php";

abstract class CoffeeDecorator implements Coffee
{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost();
    }

    public function getIngredients(): string
    {
        return $this->coffee->getIngredients();
    }
}