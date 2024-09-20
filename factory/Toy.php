<?php

class Toy
{
    protected string $material;
    protected string $name;

    public function __construct(string $material)
    {
        $this->material = $material;
    }

    public function display(): string
    {
        return "Ich bin ein/e <strong>".$this->name."</strong> und ich bestehe aus <strong>".$this->material."</strong>.";
    }
}