<?php

require_once "CoffeeDecorator.php";

class CreamDecorator extends CoffeeDecorator
{
    public function getCost(): int
    {
        return parent::getCost() + 3;
    }

    public function getIngredients(): string
    {
        return parent::getIngredients().", Sahne";
    }
}