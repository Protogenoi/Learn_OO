<?php

require __DIR__ . '/lib/Ship.php';

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;


printShipSummary($myShip);

echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';

if ($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name . ' has more strength';
} else {
    echo $myShip->name . ' has more strength';

}
