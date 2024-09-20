<?php

require "MovieTheater.php";

$movieTheater = new MovieTheater();
if ($title = getRequestParameter('title')) {
    if ($movieTheater->startMovie($title)) {
        //wait till movie is over
        $movieTheater->endMovie();
    }
}

require "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}
