<?php

class Grybas extends Krepsys
{
    private $valgomas, $sukirmijes, $svoris;

    function __construct()
    {
        $this->valgomas = (bool)random_int(0, 1);
        $this->sukirmijes = (bool)random_int(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

  
}
