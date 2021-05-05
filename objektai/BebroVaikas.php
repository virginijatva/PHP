<?php

use Zveris\Bebras;

class BebroVaikas extends Bebras implements Interfaceas
{

    use Tree;

    public function __construct()
    {
        // echo self::LABAS; //gali paveldeti konstanta is Interfaceas, tada ja gali panaudoti

        $this->eatTree();

    }

    public function someoneSaysSomething(string $aa): void
    {

        echo '<div style="color:orange">As bebras ir sakau Opaaa!</div>';
    }
}
