<?php

require_once "CoffeeDecorator.php";

class MilkDecorator extends CoffeeDecorator
{
    public function getCost(): int
    {
        return parent::getCost() + 1;
    }

    public function getIngredients(): string
    {
        return parent::getIngredients().", Milch";
    }
}