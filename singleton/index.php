<?php

include "Logger.php";

$logger1 = Logger::getInstance();
$logger1->log("Logger 1 got instantiated. | From Logger 1");
$logger2 = Logger::getInstance();
$logger2->log("Logger 2 got instantiated. | From Logger 2");

include "view.php";