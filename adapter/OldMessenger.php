<?php

require_once "OldNotification.php";

class OldMessenger implements OldNotification
{
    public function sendMessage(string $text): string
    {
        return $text;
    }
}