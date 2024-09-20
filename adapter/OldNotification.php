<?php

interface OldNotification
{
    public function sendMessage(string $text): string;
}