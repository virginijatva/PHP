<h1>6. Funkcijos</h1>

<?php

/*1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;*/ 
echo '1 uzduotis';
echo '<br><br>';

function echoText($text){
    return '<h1>'. $text .'</h1>';
}
echo echoText('Hello world!!!');

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;*/
echo '2 uzduotis';
echo '<br><br>';

function Text($text, $hTag){
return "<h$hTag>". $text ."</h$hTag>";
}
echo Text('Ką jūs? Ką vakare?', rand(1, 6));

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Jeigu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();*/
echo '3 uzduotis';
echo '<br><br>';

$string = md5(time());
$numbers = '';
for ($i=0; $i < strlen($string); $i++) {
    if (ctype_digit($string[$i])) {
    $numbers .= $string[$i];
    }
}
    echo "<h1> $string <br></h1>";
    function countLetters($matches) {
        return "<h1>".$matches ."</h1>";
        }
        $pattern = '!\d+!';
        print_r(preg_replace_callback($pattern, function ($matches) {
        return countLetters($matches[0]);
        }, $string));

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;  */
echo '4 uzduotis';
echo '<br><br>';

function task4($a) { 
    if($a === intval($a)) {
        $kiekis = 0;
        for($i = 2; $i < $a; $i++){ 
            if($a % $i === 0) {
                $kiekis++;
            }  
        } 
        return $kiekis;
    } elseif($a !== intval($a)){
        return 'Turi buti sveikasis skaicius';
    }
}
echo task4(15);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją. */
echo '5 uzduotis';
echo '<br><br>';
 
$array = [];
for($i = 0; $i < 100; $i++){
    $array[$i] = rand(33, 77);
}
echo '<br>Sukurtas naujas array: <br>';
print_r($array);

usort($array, function($a, $b){
       return task4($a) <=> task4($b);
   });
   echo '<br>Isrusiuotas array pagal dalikliu kieki mazejimo tvarka: <br>';
   print_r($array);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.*/
echo '6 uzduotis';
echo '<br><br>';

$array = [];
for($i = 0; $i < 100; $i++){
    $array[$i] = rand(333, 777);
    if(task4($array[$i]) == 0) {
        unset($array[$i]);
        sort($array);
    }
}
print_r($array);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 7.Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;(lipinti is apacios i virsu su neanonimine f-ja) */
echo '7 uzduotis';
echo '<br><br>';

$array = [];
$depth = rand(10,30);//2
$array = rek($array,$depth);

function rek($arr,$depth)
{
    $times = rand(10,20);//15
    for ($i=0; $i < $times - 1; $i++) { 
        $arr[] = rand(0,10);
    }
    if($depth>0){
        $arr[] = rek([],$depth-1);
    }else{
        $arr[] = 0;
    }
    return $arr;
}
echo '<pre>';
print_r($array);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 8.Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.*/
echo '8 uzduotis';
echo '<br><br>';

function sumArray($arr){
   static $sum = 0;
        foreach($arr as $val) {
            if(!is_array($val)) {
                $sum += $val;
            } else {
                sumArray($val);
            }
    }
    return $sum;
}
echo 'Septinto uzdavinio elementu, kurie nera masyvai, suma: <br>';
echo sumArray($array);
// array_walk_recursive($array, function($number) use (&$sum) {
//     $sum += $number;
// });

// echo $sum;
echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 9.Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. */
echo '9 uzduotis';
echo '<br><br>';


   
echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 10.Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. */
echo '10 uzduotis';
echo '<br><br>';

