<?php

class Stikline
{
    private $turis;
    public $kiekis = 0;
    // private static $stiklinesObject;


    private function __construct($param)
    {
        $this->turis = $param;
    }

    // public static function makeStikline($params)
    // {
    //     return self::$stiklinesObject ?? self::$stiklinesObject = new self($params);
    // }

    public function ipilti($kiekis){
        // if ($kiekis <= 0) {
        //     return;
        // }
        if ($this->kiekis + $kiekis > $this->turis) {
            $this->kiekis = $this->turis;
            echo 'Dabar stiklineje yra '.$this->kiekis.'ml.<br>';
        } else {
            $this->kiekis += $kiekis;
            echo 'Dabar stiklineje yra '.$this->kiekis.'ml.<br>';
        }
    }

    public function ispilti(){
    }

}
