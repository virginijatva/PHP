<?php

class Bebras
{
    public $color = 'brown';
    private $tail = 45;

    private static $dam = 'wooden';

    //konstruktorius, kuriam galima kintamajam priskirti savybes reiksme by default
    public function __construct($param)
    {
        echo '<br>Konstruktorius<br>';
        if (is_string($param)) {
            $this->defaultColor($param);
        }
        if (is_integer($param)) {
            $this->defaultTail($param);
        }
    }

    private function defaultColor(string $color)
    {
        echo '<br>Konstruktorius COLOR<br>';
        $this->color = $color;
    }

    private function defaultTail(int $tail)
    {
        echo '<br>Konstruktorius TAIL<br>';
        $this->tail = $tail;
    }

    // public function __get($prop){
    //     echo '<br>Tokio dalyko kaip '.$prop.' Bebras neturi<br>';
    // }

    public function __get($prop)
    {
        if ('age' == $prop) {
            return $this->BeaverAge();
        }
        //padaryti daaaaaaug tikrinimu
        // return $this->$prop ?? 'nera ir nebus'; //reikia patikrinti, ar egzistuoja
    }

    public function __set($prop, $value)
    {
        //padaryti daaaaaaug tikrinimu
        // $this->$prop = $value;
    }

    private function BeaverAge()
    {
        return rand(5, 25);
    }

    public function sayHello()
    {
        echo '<br> Hello, I am a beaver.';
    }

    public function getTail()
    {
        return $this->tail; //prie savybes tail ar kt. $ negali buti, nes ji nera kintamasis!
    }

    public function setTail($tail)
    {
        if ($tail != 'long' && $tail != 'super long') {
            return;
        }
        $this->tail = $tail;
    }

    //kviecia save. self atstoja klases varda
    public function callHome()
    {
        echo '<br>' . self::$dam . '<br>';
    }
}
