<?php

require "Coffee.php";

class BasicCoffee implements Coffee
{
    public function getCost(): int
    {
        return 5;
    }

    public function getIngredients(): string
    {
        return "Kaffee";
    }
}