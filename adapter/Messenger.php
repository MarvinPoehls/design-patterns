<?php

require_once "Notification.php";

class Messenger implements Notification
{

    public function send(string $message, string $name): string
    {
        return $name.": ".$message;
    }
}