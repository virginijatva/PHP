<?php

require __DIR__ .'/Krepsys.php';
require __DIR__ .'/Grybas.php';

$krepsys = new Krepsys();

while($krepsys->detiGryba(new Grybas, 500)){};


var_dump($krepsys);