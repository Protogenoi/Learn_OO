<?php

class Ship
{

    public $name;

    public $weaponPower = 0;

    public $jediPower = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo "hello";
    }

    public function getName()
    {
        return $this->name;
    }

}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

echo 'Ship name: ' . $myShip->name;


echo '<hr/>';
$myShip->sayHello();
echo '<hr/>';
echo $myShip->getName();
echo '<hr/>';
var_dump($myShip->weaponPower);