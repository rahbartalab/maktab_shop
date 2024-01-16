<?php

use Car\Peykan;

require_once __DIR__ . '/vendor/autoload.php';

class User
{
    private string $name;
    public static int $countOfUser = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$countOfUser++;
    }

    public function getCountOfUser()
    {
        return self::$countOfUser;
    }

    public function increase() {
        self::$countOfUser++;
    }

    public function getName() {return $this->name;}
}

echo User::$countOfUser . '<br>';

$userOne = new User('hossein');
$userOne->increase();
echo User::$countOfUser . '<br>';

$userTwo = new User('bahar');

echo User::$countOfUser . '<br>';

dd($userOne->getCountOfUser() , $userOne->getName() , $userTwo->getCountOfUser() , $userTwo->getName());