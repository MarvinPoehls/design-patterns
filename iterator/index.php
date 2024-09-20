<?php

require "Basket.php";

$items = getRequestParameter('items');

$basket = new Basket();
if ($items) {
    foreach (explode(',', $items) as $item) {
        $basket->addItem($item);
    }
}

include "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}
