<?php

require_once "PasswordCreator.php";
require_once "PasswordManager.php";

class Proxy implements PasswordCreator
{
    private PasswordManager $passwordManager;

    public function __construct(PasswordManager $passwordManager)
    {
        $this->passwordManager = $passwordManager;
    }

    public function create(string $password): void
    {
        if (strlen($password) < 6) {
            $this->sendError("Dein Passwort muss mindestens 6 Zeichen lang sein.");
        }
        if (!preg_match('/[a-zA-Z]/', $password)) {
            $this->sendError("Dein Passwort muss einen Buchstabe enthalten.");
        }
        if (!preg_match('/\d/', $password)) {
            $this->sendError("Dein Passwort muss eine Nummer enthalten.");
        }
        if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
            $this->sendError("Dein Passwort muss ein Sonderzeichen enthalten.");
        }

        $this->passwordManager->create($password);
        $this->log("Created Password", date("d.m.Y H:i:s"));
    }

    protected function sendError(string $error): void
    {
        header('location:index.php?error='.$error);
        exit;
    }

    protected function log($message, $date)
    {
        //logging
    }
}