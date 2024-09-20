<?php

require_once "WoodFactory.php";
require_once "PlasticFactory.php";

$toy = getRequestParameter('toy');
$material = getRequestParameter('material');

if ($material == 'wood') {
    $factory = new WoodFactory();
}
if ($material == 'plastic') {
    $factory = new PlasticFactory();
}

if ($toy == 'doll') {
    $toy = $factory->createDoll();
}
if ($toy == 'car') {
    $toy = $factory->createCar();
}

include "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}