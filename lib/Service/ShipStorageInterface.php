<?php

interface ShipStorageInterface
{

    /**
     * Returns an array of ship arrays, with keys id, name, weaponPower, defense.
     *
     * @return array
     */

    public function fetchAllShipData();

    /**
     * @param integer $id
     *
     * @return array
     */

    public function fetchSingleShipData($id);


}