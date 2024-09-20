<?php

interface PasswordCreator
{
    public function create(string $password): void;
}