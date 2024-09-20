<?php

require "Proxy.php";
require_once "PasswordManager.php";

$error = getRequestParameter('error');
$success = getRequestParameter('success');
$password = getRequestParameter('password');

if ($password || $password === '') {
    $passwordManager = new PasswordManager();
    $proxy = new Proxy($passwordManager);
    $proxy->create($password);
}

require "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}
