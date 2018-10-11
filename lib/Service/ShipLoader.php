<?php

namespace Service;

use Model\RebelShip;
use Model\Ship;
use Model\AbstractShip;

class ShipLoader
{

    private $shipStorage;

    public function __construct(ShipStorageInterface $shipStorage)
    {

        $this->shipStorage = $shipStorage;

    }

    /**
     * @return AbstractShip[]
     */

    public function getShips()
    {

        try {

            $shipsData = $this->shipStorage->fetchAllShipsData();

        } catch (\Exception $e) {

            trigger_error('Exception! '.$e->getMessage());
            $shipsData = [];
        }

        $ships = array();

        foreach ($shipsData as $shipData) {

            $ships[] = $this->createShipFromData($shipData);
        }

        return $ships;
    }

    /**
     * @param $id
     *
     * @return null|AbstractShip
     */

    public function findOneById($id)
    {

        $shipArray = $this->shipStorage->fetchSingleShipData($id);

        return $this->createShipFromData($shipArray);
    }

    private function createShipFromData(array $shipData)
    {

        if ($shipData['team'] == 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }

        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setStrength($shipData['strength']);

        return $ship;

    }

}