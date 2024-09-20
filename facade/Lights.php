<?php

class Lights
{
    private float $brightness;

    public function __construct(float $brightness)
    {
        $this->brightness = $brightness;
    }

    public function turnOn(): void
    {
        echo "Lichter angeschaltet (".$this->brightness."W)<br>";
    }

    public function dim(): void
    {
        echo "Lichter gedimmt<br>";
    }
}