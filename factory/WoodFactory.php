<?php

require_once "ToyFactory.php";
require_once "Car.php";
require_once "Doll.php";

class WoodFactory implements ToyFactory
{
    const MATERIAL = "Holz";

    public function createDoll(): Doll
    {
        return new Doll(self::MATERIAL);
    }

    public function createCar(): Car
    {
        return new Car(self::MATERIAL);
    }
}