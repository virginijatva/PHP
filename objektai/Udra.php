<?php

use Long\Long\Long\River;

class Udra extends River
{
    public $name = "Sesupe";

    public function __construct()
    {

        parent::__construct(); //is tevo imam jo prikalta metoda, jei reikia, kad butu abu construct'ai 
        echo '<div>UDRA CONSTRUCT</div>';
    }

    public function redRiver()
    {
        River::redRiver();
        echo '<div style="color:blue">'.$this->name.'</div>';
    }


    public function someoneSaysSomething(string $aa): void{
        echo '<div style="color:orange">As Udra ir sakau Titititititi!</div>';
    }
}