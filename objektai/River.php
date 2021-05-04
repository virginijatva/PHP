<?php

class River
{
    private $name = 'Volga'; //jei public, Bebras gali overwrite'inti, jei private, negali, jei protected - kreipiantis is isores jo niekas nemato

    public static $h2o = 'vanduo';

    public function __construct()
    {
        echo '<div>RIVER CONSTRUCT</div>';
    }

    public function redRiver()
    {
        echo '<div style="color:orange">'.self::$h2o.'</div>';
        echo '<div style="color:lightblue">'.static::$h2o.'</div>';
        echo '<div style="color:red">' . $this->name . '</div>';
    }
}
