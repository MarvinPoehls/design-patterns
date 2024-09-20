<?php

require "Messenger.php";
require "OldMessenger.php";
require "OldMessengerAdapter.php";
require "Caller.php";

$name = getRequestParameter('name');
$message = getRequestParameter('message');

if ($name && $message) {
    $messenger = new Messenger();
    $caller = new Caller();

    $oldMessenger = new OldMessenger();
    $oldMessengerAdapter = new OldMessengerAdapter($oldMessenger);
}

require "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}
