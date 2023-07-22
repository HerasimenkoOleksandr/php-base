<?php

class Greeting
{
    public string $name  = 'аноним';
    function hi (): void
    {
        echo 'Hi, ' . $this -> name;
    }
    function hello (): void
    {
        $a = 1;
        echo 'Hello, ' . $this -> name;
    }
}

$greeting  = new Greeting();
$greeting -> hi();
echo PHP_EOL;

$greeting ->name = 'Sasha';
$greeting->hello();
echo PHP_EOL;
