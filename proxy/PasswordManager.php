<?php

require_once "PasswordCreator.php";

class PasswordManager implements PasswordCreator
{
    public function create(string $password): void
    {
        //create password
        header('location:index.php?success=Dein Passwort wurde erstellt.');
    }
}