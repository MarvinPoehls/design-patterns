<?php

require "BasicCoffee.php";
require "MilkDecorator.php";
require "SugarDecorator.php";
require "CreamDecorator.php";

$milk = getRequestParameter('milk');
$sugar = getRequestParameter('sugar');
$cream = getRequestParameter('cream');
$send = getRequestParameter('send');

$coffee = new BasicCoffee();

if ($milk)
    $coffee = new MilkDecorator($coffee);
if ($sugar)
    $coffee = new SugarDecorator($coffee);
if ($cream)
    $coffee = new CreamDecorator($coffee);

include "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}