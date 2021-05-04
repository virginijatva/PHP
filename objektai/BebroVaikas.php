<?php

class BebroVaikas extends Bebras implements Interfaceas
{

    public function __construct()
    {
        echo self::LABAS; //gali paveldeti konstanta is Interfaceas, tada ja gali panaudoti
    }

    public function someoneSaysSomething(string $aa): void
    {

        echo '<div style="color:orange">As bebras ir sakau Opaaa!</div>';
    }
}
