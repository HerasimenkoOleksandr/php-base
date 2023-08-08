<?php

class User
{
    public string $name;
    public $email;
    public $phones = [];

    public function __construct(protected string $name, protected string $email)
    {
        $name;
        $this->email;
    }
    function getPhones()
    {
        return $this->phones;
    }
    function getName()
    {
        return $this->name;
    }
}

$user = new  User('Sasha', 'qwe@qwe.wq');
echo $user->name;
$user->phones = '1234452346';