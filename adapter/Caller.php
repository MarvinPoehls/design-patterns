<?php

class Caller
{
    public function call(Notification $notification, string $message, string $name): void
    {
        echo $notification->send($message, $name);
    }
}