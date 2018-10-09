<?php

class RebelShip extends Ship
{

    public function getFavouriteJedi()
    {
        $coolJedis = ['Yoda', 'Ben Kenobi'];
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

}