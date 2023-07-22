<?php

class UserService
{
    /**
     * @var User[]
     */
    protected  array $users = [];
    public static function createUser( string $name, string $email)
    {
        $user = new User($name, $email);
        self::$users[] = $user;
        return $user;
    }

    public function checkEmaail (string $email, User $user)
    {

    }


}