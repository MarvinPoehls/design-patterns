<?php

interface Notification
{
    public function send(string $message, string $name): string;
}