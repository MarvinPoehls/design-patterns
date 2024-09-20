<?php

require_once "Observer.php";

class EmailSubscriber implements Observer
{
    protected array $emails = [];

    public function update($news)
    {
        foreach ($this->emails as $email) {
            echo "Sending E-Mail to <strong>$email</strong>: ".$news."<br>";
        }
    }

    public function subscribe($email): void
    {
        if(!in_array($email, $this->emails)) {
            $this->emails[] = $email;
        }
    }

    public function getSubscribers(): array
    {
        return $this->emails;
    }
}