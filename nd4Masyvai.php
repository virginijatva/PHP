<h1>4. Masyvai</h1>
<?php

/*1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.*/ 
echo '1 uzduotis';
echo '<br><br>';

for($i = 0; $i <= 29; $i++){
    $array1[] = rand(5, 25);
}
print_r($array1);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 2. Naudodamiesi 1 uždavinio masyvu:
1)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
2)Raskite didžiausią masyvo reikšmę;
3)Suskaičiuokite visų reikšmių sumą;
4)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
5)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
6)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
7)Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
8)Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
9)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;*/
echo '2 uzduotis';
echo '<br><br>';

// a)
$higher = 0;
foreach($array1 as $val) {
    echo " $val, ";
    if($val > 10){
        $higher++;
    }
}
echo '<br>a) Masyve reikšmių didesnių už 10 yra: ', $higher;
echo '<br><br>';

// b)

$didReiksme = 5;
foreach($array1 as $val){
    if($val > $didReiksme) {
        $didReiksme = $val;
    }
}
echo '<br>b) Masyve didziausia reiksme yra: ', $didReiksme;
// echo '<br>b) Masyve didziausia reiksme yra: ',max($array1);
echo '<br><br>';

// c)
$suma = 0;
foreach($array1 as $val){
    $suma += $val;
}
echo '<br>c) Masyvo reiksmiu suma yra: ', $suma;
// echo '<br>c) Masyvo reiksmiu suma yra: ', array_sum($array1);
echo '<br><br>';

// d)
$array2 = [];
foreach ($array1 as $key => $value) {
    $array2[] = $value - $key;
}
// foreach ($array1 as $val) {
//     $array2[] = $val;
// }
// for($i = 0; $i <= 29; $i++){
//     $array2[$i] = $array2[$i] - $i;
// }

echo '<br>d) Naujas masyvas is pirmo masyvo reiksmiu atemus tos reiksmes indeksa: ';
print_r( $array2);
echo '<br><br>';

// e)
echo '<br>e) Masyvas papildomas 10 elementų su reikšmėmis nuo 5 iki 25: <br>';

for($i = 0; $i < 10; $i++) {
    $array2[] += rand(5, 25);
}
print_r( $array2);
echo '<br><br>';
// f)

$arrayPoriniai = [];
$arrayNePoriniai = [];

    foreach ($array2 as $key => $val)  {
            if ($key % 2 === 0){
                $arrayPoriniai[] = $val;               
            }
            else {
                $arrayNePoriniai[] = $val;               
            }
    }
    
    echo '<br> f) Naujas masyvas sudarytas is neporiniu indeksu: <br>';
    print_r($arrayPoriniai);
    echo '<br>';
    echo '<br> f) Naujas masyvas sudarytas is poriniu indeksu: <br>';
    print_r($arrayNePoriniai);
    echo '<br><br>';

    // g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

    foreach ($arrayPoriniai as $key => $val)  {
        if (($key % 2 === 0) && $val > 15){
            $arrayPoriniai[$key] = 0; 
        }
        else {
            $val = $val;
        }
}
echo '<br> g) Masyvo poriniu elementu reiksmiu, didesniu uz 15 pakeitimas 0: <br>';
        print_r($arrayPoriniai);
echo '<br><br>';

// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

foreach ($array2 as $key => $val)  {
    if (($key < $key + 1) && $val > 10){
        echo 'h) e uzduoties masyvo pirmas indeksas, kurio elemento reikšmė didesnė už 10:<br> ';
        echo "[$key] - $val<br>";
        break;
    }
}
echo '<br><br>';
// 9)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

foreach ($array2 as $key => $val)  {
    if ($key % 2 === 0){
       unset($array2[$key]);
    }
}
echo '<br>i) e uzduoties masyvas, istrynus visus elementus turinčius porinį indeksą:<br> ';
print_r($array2);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės. */
echo '3 uzduotis';
echo '<br><br>';

$Acount = 0;
$Bcount = 0;
$Ccount = 0;
$Dcount = 0;
for($i = 0;$i <= 199; $i++) {
    $raide = rand(1, 4);
    if ($raide == 1){
        $raidziuMasyvas[$i] = 'A';
        $Acount++;
    } if ($raide == 2){
        $raidziuMasyvas[$i] = 'B';
        $Bcount++;
    } if ($raide == 3) {
        $raidziuMasyvas[$i] = 'C';
        $Ccount++;
    } if ($raide == 4) {
        $raidziuMasyvas[$i] = 'D';
        $Dcount++;
    }
}
print_r($raidziuMasyvas);
echo '<br>';
echo 'A raidziu yra: ',$Acount;
echo '<br>B raidziu yra: ',$Bcount;
echo '<br>C raidziu yra: ',$Ccount;
echo '<br>D raidziu yra: ',$Dcount;

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. */
echo '4 uzduotis';
echo '<br><br>';
echo '3 uždavinio masyvas isrusiuotas pagal abecėlę: <br>';
sort($raidziuMasyvas);
foreach ($raidziuMasyvas as $key => $val) {
    echo "[" . $key . "] = " . $val . "\n";
}

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote. */
echo '5 uzduotis';
echo '<br><br>';

for($i = 0;$i <= 199; $i++) {
    $raide = rand(1, 4);
    if ($raide == 1){
        $raidziuMasyvas1[$i] = 'A';
    } if ($raide == 2){
        $raidziuMasyvas1[$i] = 'B';
    } if ($raide == 3) {
        $raidziuMasyvas1[$i] = 'C';
    } if ($raide == 4) {
        $raidziuMasyvas1[$i] = 'D';
    }
}
for($i = 0;$i <= 199; $i++) {
    $raide = rand(1, 4);
    if ($raide == 1){
        $raidziuMasyvas2[$i] = 'A';
    } if ($raide == 2){
        $raidziuMasyvas2[$i] = 'B';
    } if ($raide == 3) {
        $raidziuMasyvas2[$i] = 'C';
    } if ($raide == 4) {
        $raidziuMasyvas2[$i] = 'D';
    }
}
for($i = 0;$i <= 199; $i++) {
    $raide = rand(1, 4);
    if ($raide == 1){
        $raidziuMasyvas3[$i] = 'A';
    } if ($raide == 2){
        $raidziuMasyvas3[$i] = 'B';
    } if ($raide == 3) {
        $raidziuMasyvas3[$i] = 'C';
    } if ($raide == 4) {
        $raidziuMasyvas3[$i] = 'D';
    }
}
echo 'Sugeneruoti 3 nauji masyvai:<br>';
echo '1 masyvas:<br>';
print_r($raidziuMasyvas1);
echo '<br>2 masyvas:<br>';
print_r($raidziuMasyvas2);
echo '<br>3 masyvas:<br>';
print_r($raidziuMasyvas3);
echo '<br><br>';
foreach ($raidziuMasyvas1 as $key => $val) {
    $bendrasMasyvas[$key] = $val.$raidziuMasyvas2[$key].$raidziuMasyvas3[$key];
}

echo '<br>Sujungtos triju masyvu reiksmes i viena masyva:<br>';
print_r($bendrasMasyvas);
echo '<br><br>';

$uniqueArr = array_unique($bendrasMasyvas);
$uniqueKiekis = count($uniqueArr);

echo "Unikaliu reiksmiu kombinaciju kiekis: $uniqueKiekis";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).*/
echo '6 uzduotis';
echo '<br><br>';
$array1 = [];
$array2 = [];
for($i = 0; count($array1) < 100; $i++){
    $number = rand(100, 999);
        if(!in_array($number, $array1)){
            array_push($array1, $number);
        }
}
for($i = 0; count($array2) < 100; $i++){
    $number = rand(100, 999);
        if(!in_array($number, $array2)){
            array_push($array2, $number);
        }
}
echo '<br>Pirmas array unikaliomis reiksmemis:<br>';
print_r($array1);
echo '<br>';
echo '<br>Antras array unikaliomis reiksmemis:<br>';
print_r($array2);
echo '<br>';

// echo '<br>';
// print_r(count(array_unique($array1)));
// echo '<br>';
// $uniqueArr1 = count(array_unique($array1));
// echo '<br>';
// print_r($uniqueArr1);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.  */
echo '7 uzduotis';
echo '<br><br>';
$arrayUnique = [];
foreach($array1 as $val){
    if(in_array($val, $array1) !== in_array($val, $array2)){
        array_push($arrayUnique, $val);
    }
}
echo '<br>Pirmo array reiksmes, kuriu nera 7 uzdavinio masyve:<br>';
print_r($arrayUnique);
echo '<br>';

// 2 bandymas;
// for ($i = 0; $i < 100; $i++)
// {
//     if (!in_array($array1[$i], $array2)) {
//         array_push($arrayUnique, $array1[$i]);
//         echo $array1[$i], "<br>";
//     }
// }
// print_r($arrayUnique);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.*/
echo '8 uzduotis';
echo '<br><br>';

$arrayUnique1 = [];
// $arrayUnique1 = array_intersect($array1, $array2);
foreach($array1 as $val){
    if(in_array($val, $array1) === in_array($val, $array2)){
        array_push($arrayUnique1, $val);
    }
}
echo '<br>Abieju array vienodos reiksmes:<br>';
print_r($arrayUnique1);
echo '<br>';

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės būtų iš antrojo masyvo.*/
echo '9 uzduotis';
echo '<br><br>';

$newArray = [];

    foreach($array1 as $key => $val){
        $newArray = $array2;
    }

    foreach($array1 as $key => $val){
        $newkey = $val;
        $oldkey = $key;
        $newArray[$newkey] = $newArray[$oldkey];
        unset($newArray[$oldkey]);
    }
    print_r($newArray);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai - atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t. */
echo '10 uzduotis';
echo '<br><br>';

$number1 = rand(5, 25);
$number2 = rand(5, 25);
$max = 10;
$array = [$number1, $number2];

for ( $i = 2; $i < $max; ++$i ) {
    $array[$i] = $array[$i-1] + $array[$i-2];
   }

   print_r($array);