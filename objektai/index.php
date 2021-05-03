<?php

require __DIR__ .'/Bebras.php';

//objekto kurimas:
$zveris1 = new Bebras(12); // galima rasyti ir be skliausteliu
$zveris2 = new Bebras('yellow');
$zveris3 = $zveris1; 

echo '<br>';
echo '<br>';
// echo Bebras::$dam;
echo '<br>';

$zveris1->callHome();
$zveris2->callHome();


echo '<br>';
echo $zveris1->age;
echo '<br>';

//irasome klasei savybe:
// $zveris3->color = 'black';
$zveris3->age = 14;
$zveris1->setTail('super long');

//nuskaitom savybes, bet tik tas, kurios yra public:
echo $zveris1->color;
$zveris1->sayHello();

$zveris1->tail = [];

echo '<br>';
echo 'My tail is '.$zveris1->tail.'<br>';
echo 'My tail is '.$zveris1->getTail();
echo '<br>';  

var_dump($zveris1);
echo '<br>';
var_dump($zveris2);
echo '<br>';
var_dump($zveris3);
echo '<br>';