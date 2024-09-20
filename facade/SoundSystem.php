<?php

class SoundSystem
{
    private float $volume;

    public function turnOn(): void
    {
        echo "Sound System angeschaltet<br>";
    }

    public function turnOff(): void
    {
        echo "Sound System ausgeschaltet<br>";
    }

    public function setVolume(float $volume): void
    {
        $this->volume = $volume;
    }
}