<?php

$directories = glob( './*' , GLOB_ONLYDIR);

include "view.php";

function cleanTitle($string): string
{
    return ucfirst(ltrim($string, './'));
}
