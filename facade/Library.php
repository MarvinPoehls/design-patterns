<?php

require_once "Movie.php";

class Library
{
    private array $availableMovies;

    public function __construct()
    {
        $this->availableMovies = [
            'Spiderman',
            'Spiderman 2',
            'Spiderman 3',
            'Titanic',
            'Star Wars',
            'Der Herr der Ringe',
        ];
    }

    public function getMovie($title): ?Movie
    {
        if (in_array($title, $this->availableMovies)) {
            return new Movie($title);
        }
        echo 'Der Film "'.$title.'" ist leider nicht in userer Bibliothek vorhanden<br>';
        return null;
    }

    public function getAvailableMovies(): array
    {
        return $this->availableMovies;
    }
}