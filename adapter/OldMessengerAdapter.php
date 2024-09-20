<?php

require_once "OldMessenger.php";
require_once "OldNotification.php";

class OldMessengerAdapter extends OldMessenger implements Notification
{
    private OldNotification $oldNotification;

    public function __construct(OldNotification $oldNotification)
    {
        $this->oldNotification = $oldNotification;
    }

    public function send(string $message, string $name): string
    {
        return "(Translated) ".$name.": ".$this->oldNotification->sendMessage($message);
    }
}