<?php

class DvdPlayer
{
    private ?Movie $movie;

    public function __construct(?Movie $movie = null)
    {
        $this->movie = $movie;
    }

    public function turnOn(): void
    {
        echo "DVD Player angeschaltet<br>";
    }

    public function turnOff(): void
    {
        echo "DVD Player ausgeschaltet<br>";
    }

    public function play(): void
    {
        if ($this->movie != null)
            echo "Film (".$this->movie->getTitle().") wird abgespielt<br>";
        else
            throw new Exception("Kein Film ausgewählt");
    }

    public function stop(): void
    {
        echo "Film (".$this->movie->getTitle().") wird gestoppt<br>";
    }

    public function changeMovie(Movie $movie): void
    {
        $this->movie = $movie;
    }
}