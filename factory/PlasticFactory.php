<?php

require_once "ToyFactory.php";

class PlasticFactory implements ToyFactory
{
    const MATERIAL = "Plastik";

    public function createDoll(): Doll
    {
        return new Doll(self::MATERIAL);
    }

    public function createCar(): Car
    {
        return new Car(self::MATERIAL);
    }
}