<?php

$directories = glob( './*' , GLOB_ONLYDIR);

$directories = array_filter($directories, function($dir) {
    return $dir != './info';
});

include "view.php";

function cleanTitle($string): string
{
    return ucfirst(ltrim($string, './'));
}
