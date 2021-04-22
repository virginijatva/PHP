cia yra failas

<h1>labas dienas</h1>


<?php
$pirmas = 10;
echo ++$pirmas;

echo '<br>';

$vardas = 'Ona';
$pavarde = 'Onaite';

echo "$vardas $pavarde";


$color = ['blue', 'red', 'green', 'yellow'];
foreach($color as &$val) {}

foreach($color as $val) {
    echo "<br>$val";
}