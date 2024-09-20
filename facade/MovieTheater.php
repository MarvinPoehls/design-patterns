<?php

require_once "Movie.php";
require_once "DvdPlayer.php";
require_once "SoundSystem.php";
require_once "Lights.php";
require_once "Library.php";

class MovieTheater
{
    private DvdPlayer $dvdPlayer;
    private SoundSystem $soundSystem;
    private Lights $lights;
    private Library $library;

    public function __construct()
    {
        $this->dvdPlayer = new DvdPlayer();
        $this->soundSystem = new SoundSystem();
        $this->lights = new Lights(100);
        $this->library = new Library();
    }

    public function startMovie(string $title): bool
    {
        echo "<strong>Film wird gestartet..</strong><br>";

        if ($movie = $this->library->getMovie($title)) {
            $this->dvdPlayer->changeMovie($movie);

            $this->soundSystem->setVolume(100);

            $this->dvdPlayer->turnOn();
            $this->soundSystem->turnOn();
            $this->lights->dim();

            $this->dvdPlayer->play();
        } else {
            echo 'Film wird abgebrochen<br>';
        }
        return (bool)$movie;
    }

    public function endMovie(): void
    {
        echo "<strong>Film wird beendet..</strong><br>";

        $this->lights->turnOn();
        $this->dvdPlayer->stop();
        $this->dvdPlayer->turnOff();
        $this->soundSystem->turnOff();
    }

    public function pauseMovie(): void
    {
        $this->dvdPlayer->stop();
    }

    public function playMovie(): void
    {
        $this->dvdPlayer->play();
    }

    public function getAvailableMovies(): array
    {
        return $this->library->getAvailableMovies();
    }
}