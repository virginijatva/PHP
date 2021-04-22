<h1>1. Kintamieji ir sąlygos</h1>

<?php

/*1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".*/ 
echo '1 uzduotis';
echo '<br><br>';

$vardas = 'Virginija';
$pavarde = 'Tvaskiene';
$gimimoMetai = 1993;
$data = date("Y");
$amzius = $data - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).";
echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.*/
echo '2 uzduotis';
echo '<br><br>';

$pirmas = rand(0, 4);
$antras = rand(0, 4);
$rezultatas = 0;
echo "Pirmas: $pirmas <br>";
echo "Antras: $antras <br>";

if($pirmas >= $antras && $antras != 0) {
    $rezultatas = $pirmas / $antras;
    echo 'Dalybos rezultatas: '.round($rezultatas, 2);
} elseif($pirmas <= $antras && $pirmas != 0) {
    $rezultatas = $antras / $pirmas;
    echo 'Dalybos rezultatas: '.round($rezultatas, 2);
} else {
    echo 'Dalyba is 0 negalima.';
}


echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. */
echo '3 uzduotis';
echo '<br><br>';

$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);

echo "Pirmas: $pirmas <br>";
echo "Antras: $antras <br>";
echo "Trecias: $trecias <br>";

if($pirmas > $antras && $pirmas < $trecias || $pirmas < $antras && $pirmas > $trecias) {
    echo "Vidurine reiksme yra pirmas skaicius: $pirmas";
} elseif($pirmas < $antras && $antras < $trecias ||  $pirmas > $antras && $antras > $trecias) {
    echo "Vidurine reiksme yra antras skaicius: $antras";
} elseif($pirmas > $trecias && $antras < $trecias || $pirmas < $trecias && $antras > $trecias) {
    echo "Vidurine reiksme yra trecias skaicius: $trecias";
}


echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  */
echo '4 uzduotis';
echo '<br><br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Pirma krastine: $a <br>";
echo "Antra krastine: $b <br>";
echo "Trecia krastine: $c <br>";

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Trikampis gali susidaryti';
} else {
    echo 'Is tokiu krastiniu trikampis negali susidaryti';
}


echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems  
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). */
echo '5 uzduotis';
echo '<br><br>';

$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

echo "Pirmas: $pirmas <br>";
echo "Antras: $antras <br>";
echo "Trecias: $trecias <br>";
echo "Ketvirtas: $ketvirtas <br>";

if ($pirmas === 0) {
    $nuliai++;
}elseif($pirmas === 1) {
    $vienetai++;
}else{
    $dvejetai++;
}

if ($antras === 0) {
    $nuliai++;
}elseif($antras === 1) {
    $vienetai++;
}else{
    $dvejetai++;
}

if ($trecias === 0) {
    $nuliai++;
}elseif($trecias === 1) {
    $vienetai++;
}else{
    $dvejetai++;
}

if ($ketvirtas === 0) {
    $nuliai++;
}elseif($ketvirtas === 1) {
    $vienetai++;
}else{
    $dvejetai++;
}

echo "Nuliu yra: $nuliai<br> Vienetu yra: $vienetai<br> Dvejetu yra: $dvejetai";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>*/
echo '6 uzduotis';
echo '<br><br>';

$dydis = rand(1, 6);

echo "<h$dydis>Antraste, $dydis</h$dydis>";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.  */
echo '7 uzduotis';
echo '<br><br>';

$pirmas = rand(-10, 10);
$antras = rand(-10, 10);
$trecias = rand(-10, 10);

if($pirmas < 0) {
    echo "<h1 style=color:green>$pirmas</h1>";
} elseif($pirmas > 0) {
    echo "<h1 style=color:blue>$pirmas</h1>";
} else {
    echo "<h1 style=color:red>$pirmas</h1>";
}

if($antras < 0) {
    echo "<h1 style=color:green>$antras</h1>";
} elseif($antras > 0) {
    echo "<h1 style=color:blue>$antras</h1>";
} else {
    echo "<h1 style=color:red>$antras</h1>";
}

if($trecias < 0) {
    echo "<h1 style=color:green>$trecias</h1>";
} elseif($trecias > 0) {
    echo "<h1 style=color:blue>$trecias</h1>";
} else {
    echo "<h1 style=color:red>$trecias</h1>";
}

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.*/
echo '8 uzduotis';
echo '<br><br>';

$kiekis = rand(5, 3000);
$nuolaida = 0;

if ($kiekis <= 1000) {
    echo "Jei pirksite $kiekis zvakes(iu), mokesite $kiekis eur suma.";
} elseif($kiekis > 1000 || $kiekis < 2000) {
    $nuolaida = $kiekis * 0.97;
    echo "Jei pirksite $kiekis zvakes(iu), mokesite $nuolaida eur suma.";
} elseif($kiekis >= 2000){
    $nuolaida = $kiekis * 0.96;
    echo "Jei pirksite $kiekis zvakes(iu), mokesite $nuolaida eur suma.";
}

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.*/
echo '9 uzduotis';
echo '<br><br>';

$pirmas = rand(0, 100);
$antras = rand(0, 100);
$trecias = rand(0, 100);
$vidurkis = round(($pirmas + $antras + $trecias) / 3);

echo "Pirmas: $pirmas <br>";
echo "Antras: $antras <br>";
echo "Trecias: $trecias <br>";
echo "Vidurkis: $vidurkis<br>";

    if($pirmas < 10 || $pirmas > 90){
        $pirmas = 0;
    } 

    if($antras < 10 || $antras > 90){
        $antras = 0;
    } 

    if($trecias < 10 || $trecias > 90){
        $trecias = 0;
    } 

    if($pirmas == 0 || $antras == 0 || $trecias == 0) {
        $vidurkis2 = round(($pirmas + $antras + $trecias) / 2);
        echo "Vidurkis, atmetus reiksmes mazesnes uz 10 ir didesnes uz 90: $vidurkis2";
    }elseif($pirmas == 0 && $antras == 0 || $pirmas == 0 && $trecias == 0 || $antras == 0 && $trecias == 0){
        $vidurkis2 = ($pirmas + $antras + $trecias);
        echo "Vidurkis, atmetus reiksmes mazesnes uz 10 ir didesnes uz 90: $vidurkis2";
    } else {
        $vidurkis2 = round(($pirmas + $antras + $trecias) / 3);
        echo "Vidurkis, atmetus reiksmes mazesnes uz 10 ir didesnes uz 90: $vidurkis2";
    }

   
echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/
echo '10 uzduotis';
echo '<br><br>';

$valandos = rand(0, 24);
$minutes = rand (0, 60);
$sekundes = rand (0, 60);
$papildom = rand(0, 300);

echo "Dabar yra: $valandos : $minutes : $sekundes <br>";

$verciuSekundem = $minutes * 60 + $valandos * 3600 + $sekundes + $papildom;
$velesnisLaikas = gmdate("H:i:s", $verciuSekundem);
echo "Veliau bus: $velesnisLaikas";



echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';
