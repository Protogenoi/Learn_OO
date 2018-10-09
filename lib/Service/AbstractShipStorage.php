<?php

abstract class AbstractShipStorage
{

    abstract public function fetchAllShipData();

    abstract public function fetchSingleShipData($id);


}