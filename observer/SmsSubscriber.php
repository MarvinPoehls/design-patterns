<?php

require_once "Observer.php";

class SmsSubscriber implements Observer
{
    protected array $numbers = [];

    public function update($news)
    {
        foreach ($this->numbers as $number) {
            echo "Sending SMS to <strong>$number</strong>: ".$news."<br>";
        }
    }

    public function subscribe($number): void
    {
        if(!in_array($number, $this->numbers)) {
            $this->numbers[] = $number;
        }
    }

    public function getSubscribers(): array
    {
        return $this->numbers;
    }
}