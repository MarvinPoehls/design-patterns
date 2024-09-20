<?php

class Logger
{
    private static Logger $instance;

    private array $log;

    protected function __construct() { }

    public static function getInstance(): Logger
    {
        if (!isset(self::$instance)) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public function log(string $text): void
    {
        $this->log[] = $text;
    }

    public function displayLog(): string
    {
        return implode("<br>", $this->log);
    }
}