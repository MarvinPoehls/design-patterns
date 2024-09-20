<?php

require_once "Subject.php";

class NewsPublisher implements Subject
{
    protected array $observers;

    public function notify($news)
    {
        foreach ($this->observers as $observer) {
            $observer->update($news);
        }
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function addNews($news) {
        $this->notify($news);

        //save news
    }
}