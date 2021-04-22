<h1>3. Ciklai</h1>

<?php

/*1. Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; */ 
echo '1 uzduotis';
echo '<br><br>';

$starsLine = str_repeat('*', 400);
echo $starsLine;

echo '<p style="overflow-wrap: anywhere;">';
echo 'a):<br><br>';
$line = 400;
for($i = 1; $i <= $line; $i++) {
    echo '*';
}
echo "</p>";

echo 'b):<br><br>';

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.*/
echo '2 uzduotis';
echo '<br><br>';

$count = 0;
for($i = 0; $i < 300; $i++){
    $sk = rand(0, 300);   
    if ($sk > 150) {
        if ($sk > 275) {
            echo "<span style=color:red>$sk </span>";
        }else{
        echo $sk.' '; 
        }
        $count++;  
    }
    echo $sk.' ';
}

echo "<br>There are $count numbers higher than 150";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 3.Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.*/
echo '3 uzduotis';
echo '<br><br>';

$num1 = 1;
$num2 = rand(3000, 4000);
$numbers = 0;
for($i = 1; $i < $num2; $i++) {
    if(($i % 77) === 0) {
        $numbers .= "$i, ";
    }
}
$numbers = rtrim($numbers, ", ");
echo $numbers;

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.*/
echo '4 uzduotis ir 5 uzduotis';
echo '<br><br>';
?>
<div style="line-height: 6px;">
<?php
$line = 100;
for($i = 0; $i < $line; $i++){
    for($j = 0; $j < $line; $j++){
        if($i == $j || $i + $j == $line - 1) {
            echo "<span style=color:red>*</span>";
        } else{
        echo "*";
    }
    }
    echo '<br>';
 }

 ?>
</div>
<?php

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
1)Iškritus herbui;
2)Tris kartus iškritus herbui;
3)Tris kartus iš eilės iškritus herbui;*/
echo '6 uzduotis';
echo '<br><br>';

echo '1)Iškritus herbui:<br>';

do{
   $metimas = rand(0, 1);
    if($metimas == 0) {
        echo 'H<br>';
    } else {
        echo 'S<br>';
    }
}
while($metimas !== 0);

echo '2)Tris kartus iškritus herbui:<br>';
$herbas = 0;
do{
    $metimas = rand(0, 1);
     if($metimas == 0) {
         echo 'H<br>';
         $herbas++;
     } else {
         echo 'S<br>';
     }
 }
 while($herbas != 3);


echo '3)Tris kartus iš eilės iškritus herbui:<br>';

$herbas = 0;
$metimuKartai = 0;
while ($herbas < 3) {
    $metimas = rand(0,1);
    $metimuKartai ++;
    if ($metimas == 0){
        $herbas ++;
        echo 'H<br>';
    }
    else {
        $herbas = 0;
        echo 'S<br>';
    }
}

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 7.Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. */
echo '7 uzduotis';
echo '<br><br>';


$petroAnkstesni = 0;
$kazioAnkstesni = 0;

do {
    $petroTaskai = rand(10, 20);
    $kazioTaskai = rand(5, 25);
    if($petroTaskai > $kazioTaskai) {
        echo "Petro taskai: $petroTaskai, Kazio taskai: $kazioTaskai<br>";
        echo 'Partiją laimėjo: ​Petras<br>';
    }elseif($petroTaskai < $kazioTaskai){
        echo "Petro taskai: $petroTaskai, Kazio taskai: $kazioTaskai<br>";
        echo 'Partiją laimėjo: Kazys<br>';
    }elseif($petroTaskai == $kazioTaskai){
        echo 'Lygiosios<br>';
    }
    $petroAnkstesni += $petroTaskai;
    $kazioAnkstesni += $kazioTaskai;
    echo "Dabar Petras turi: $petroAnkstesni tasku, Kazys: $kazioAnkstesni<br>";
    if($petroAnkstesni >= 222 || $kazioAnkstesni >= 222){
        break;
    }
} while ($petroAnkstesni < 222 || $kazioAnkstesni < 222);

if($petroAnkstesni > $kazioAnkstesni){
    echo 'Zaidima laimejo Petras!!!';
}elseif($petroAnkstesni < $kazioAnkstesni){
    echo 'Zaidima laimejo Kazys!!!';
}else{
    echo 'Lygiosios';
}
// echo 'Partiją laimėjo: ​Jonas';

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).*/
echo '8 uzduotis';
echo '<br><br>';

// $rgb = rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255);

//         $star .= '<p style="color:rgb(' . $rgb . ');display:inline;line-height:20px;margin:0;">*</p>';

echo "<pre>";
for ($i = 1; $i < 21; $i++) {
    for ($j = $i; $j < 21; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
$n = 21;
for ($i = 21; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
echo "</pre>";
echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*9. Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
$c = "10 bezdzioniu \n suvalge 20 bananu.";
Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
$c = '10 bezdzioniu \n suvalge 20 bananu.';
(Stringas viengubose ir dvigubose kabutėse)*/
echo '9 uzduotis';
echo '<br><br>';
$starttime = microtime(true);

for ($i = 0; $i <= 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}

$diff = microtime(true) - $starttime;
$sec = intval($diff);
$micro = $diff - $sec;

$final = strftime('%T', mktime(0, 0, $sec)) . str_replace('0.', '.', sprintf('%.3f', $micro));
echo 'Viengubos kabutes uztrunka: ',$final ,'<br>';

$starttime1 = microtime(true);
for ($j = 0; $j <= 1000000; $j++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$diff1 = microtime(true) - $starttime1;
$sec1 = intval($diff1);
$micro1 = $diff1 - $sec1;
$final1 = strftime('%T', mktime(0, 0, $sec1)) . str_replace('0.', '.', sprintf('%.3f', $micro1));
echo 'Dvigubos kabutes uztrunka: ',$final1 ,'<br>';
if($final < $final1) {
    echo 'Greiciau ivykdomas kodas viengubose kabutese';
}elseif($final > $final1) {
    echo 'Greiciau ivykdomas kodas dvigubose kabutese';
}

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
1)“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
2)“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/
echo '10 uzduotis';
echo '<br><br>';


$vinis = 85; // 8.5cm
$maziSmugiai = 0;
for ($viniuIlgis = 425; $viniuIlgis > 0;){  //viniuIlgis = 85mm * 5vinys
    $mazas = rand(5, 20);
    $viniuIlgis = $viniuIlgis-$mazas;
    $kiek = $vinis / $mazas;
    $maziSmugiai++;     
}
echo '1) 5 vinims ikalti reikes ', $maziSmugiai,' mazu smugiu<br>';

$dideliSmugiai = 0;
for ($viniuIlgis = 425; $viniuIlgis > 0;){  
    $tikimybe = rand(0, 1); //0 - nepataikys, 1 - pataikys
        if($tikimybe == 1){
            $didelis = rand(20, 30);
            $viniuIlgis = $viniuIlgis-$didelis;
            $kiek = $vinis / $didelis;
            $dideliSmugiai++;
    } else{
        $dideliSmugiai++;
    }  
}
echo '2) 5 vinims ikalti reikes ', $dideliSmugiai,' dideliu smugiu su 50% tikimybe, kad nepataikys';