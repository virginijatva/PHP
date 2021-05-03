<?php

require __DIR__ .'/Bebras.php';

//objekto kurimas:
$zveris1 = new Bebras; 
$zveris2 = new Bebras();// galima rasyti ir be skliausteliu
$zveris3 = $zveris1; 

//irasome klasei savybe:
$zveris3->color = 'yellow';
$zveris3->age = 14;
//nuskaitom savybes, bet tik tas, kurios yra public:
echo $zveris1->color;
echo '<br>';

var_dump($zveris1);
echo '<br>';
var_dump($zveris2);
echo '<br>';
var_dump($zveris3);
echo '<br>';