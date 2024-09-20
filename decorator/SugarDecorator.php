<?php

require_once "CoffeeDecorator.php";

class SugarDecorator extends CoffeeDecorator
{
    public function getCost(): int
    {
        return parent::getCost() + 2;
    }

    public function getIngredients(): string
    {
        return parent::getIngredients().", Zucker";
    }
}