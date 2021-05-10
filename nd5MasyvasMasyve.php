<h1>5. Masyvai</h1>

<?php

// /*1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.*/ 
// echo '1 uzduotis';
// echo '<br><br>';

// $array [][] = [];
// for($i = 0; $i < 10; $i++) {
//     for($j = 0; $j < 5; $j++) {
//         $array[$i][$j] = rand(5, 25);
//     }
// }
// echo 'Masyvas iš 10 elementų, kurie yra masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25: ';
// echo '<pre>';
// print_r($array);

// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

// /* 2. Naudodamiesi 1 uždavinio masyvu:*/
// echo '2 uzduotis';
// echo '<br><br>';

// // a)Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// $higher = 0;
// foreach($array as $val){
//     foreach($val as $value){
//         if($value > 10) {
//             $higher++;
//         }
//     }
// }
// echo '<br>a) Masyve reikšmių didesnių už 10 yra: ', $higher;

// // b)Raskite didžiausio elemento reikšmę;
// $didReiksme = 5;
// foreach($array as $val){
//     foreach($val as $value){
//         if($value > $didReiksme) {
//             $didReiksme = $value;
//         }
//     }
// }
// echo '<pre>';
// echo '<br>b) Masyve didziausia reiksme yra: ', $didReiksme;
// echo '<br>';

// // c)Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
// $suma = [0, 0, 0, 0, 0];
// foreach($array as $key => $val){  
//     foreach($val as $key1 => $value){
//         $suma[$key1] += $value;
//     }
// }
// echo '<br>c) Antro lygio masyvų su vienodais indeksais sumos yra: <br>';
// print_r($suma);
// echo '<br>';

// // d)Visus masyvus “pailginkite” iki 7 elementų

// foreach ($array as $key => $value) {
//     for ($i=5; $i < 7; $i++) { 
//         $array[$key][$i] = rand(5, 25);
//     }
// }

// // $extra = 2;
// // for($i = 0; $i < count($array); $i++) {
// //     $innerArray = $array[$i];
// //     $innerLength = count($array[$i]);
// //         for($j = $innerLength; $j < $extra + $innerLength; $j++) {
// //             $number = rand(5, 25);
// //             $array[$i][$j] = $number;
// //         }
// // }
// echo '<br>d) Masyvai, pailginti iki 7elementu: <br>';
// print_r($array);

// echo '<br><br>';

// // e)Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai.


// foreach($array as $val) {
//     $sum = 0;
//     foreach($val as $value){
//         $sum += $val;
//     }
//     $array[] = $sum;
// }
// print_r($array);
// echo '<br>e) Naujas masyvas is antro lygio masyvų elementų sumos: <br>';

// print_r($array);

// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

// /* 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
//  */
// echo '3 uzduotis';
// echo '<br><br>';

// $array1[][] = [];
// $alphabet = range('A', 'Z');
// $length = 10;
// for($i = 0; $i < $length; $i++) {
//     for($j = 0; $j < rand(2, 20); $j++) {
//         $array1[$i][$j] = $alphabet[array_rand($alphabet)];   
//     }
// }

// foreach($array1 as $key => $val) {
//     foreach($val as $key1 => $value) {
//     sort($array1[$key]);
//     }
// }
// echo '<pre>';
// print_r($array1);

// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

// /* 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų viršuje.  */
// echo '4 uzduotis';
// echo '<br><br>';

// sort($array1);
// foreach($array1 as $key => $val) {
//     foreach($val as $key1 => $value) { 
//         if(($val[$key1] == 'K') >= 1){
//             unset($array1[$key]);
//             array_unshift($array1,$val);
//         }    
//     }
// }

// echo 'Išrūšiuotas trečio uždavinio pirmo lygio masyvas taip, kad elementai kurių masyvai trumpiausi eitų pradžioje: <br>';
// echo '<pre>';
//  print_r($array1);

// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

// /* 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.  */
// echo '5 uzduotis';
// echo '<br><br>';
 
// $users = [];
// $arrayCheck = [];
// do { 
//     $userID = rand(1, 1000000);
//     $placeInRow = rand(0, 100);
//     if (!in_array($userID, $arrayCheck)){
//         $users[count($users)]['user_id'] = $userID;
//         $users[count($users)-1]['place_in_row'] = $placeInRow;
//         array_push($arrayCheck, $userID);
//     }
// } while(count($users) < 30);

// print_r($users);


// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

// /* 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
//   */
// echo '6 uzduotis';
// echo '<br><br>';

// $IDColumn = array_column($users, 'user_id');
// array_multisort($IDColumn, SORT_ASC, $users);
// echo 'Masyvas isrusiuotas pagal ID didejimo tvarka: <br>';
// print_r($users);

// $placeColumn = array_column($users, 'place_in_row');
// array_multisort($placeColumn, SORT_DESC, $users);
// echo 'Masyvas isrusiuotas pagal place_in_row mazejimo tvarka: <br>';
// print_r($users);

// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

// /* 7.Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15. */
// echo '7 uzduotis';
// echo '<br><br>';

// $alphabet = range('A', 'Z');
// foreach ($users as $key => $value) {
//     $random_string1 = '';
//     $random_length1 = rand(5, 15);
//     for ($i=0; $i < $random_length1; $i++) { 
//         $random_string1 .= $alphabet[array_rand($alphabet)];
//     }
//     $random_string2 = '';
//     $random_length2 = rand(5, 15);
//     for ($i=0; $i < $random_length2; $i++) { 
//         $random_string2 .= $alphabet[array_rand($alphabet)];
//     }
//     $users[$key]['name'] = $random_string1;
//     $users[$key]['surname'] = $random_string2;
// }
// echo 'Masyvas, papildytas name ir surname elementais iš random stingu: <br>';
// print_r($users);

// echo '<br><br>';
// echo '-------------------------------------------------------------------';
// echo '<br>';

/* 8.Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.*/
echo '8 uzduotis';
echo '<br><br>';

$array = [];
for($i = 0; $i < 10; $i++){
    $random = rand(0, 5);
    for($j = 0; $j <= $random; $j++){
        if($random !== 0){
            $array[$i][$j] = rand(0, 10);
        } else {
            $array[$i] = rand(0, 10);
        }
    }
}
echo '<pre>';
print_r($array);

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 9.Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.*/
echo '9 uzduotis';
echo '<br><br>';

usort($array, function($a, $b){
    $_1 = 0;
    $_2 = 0;
       if (is_array($a) ) {
           $_1 = array_sum($a);
       } else {
           $_1 = $a;
       }
       if (is_array($b)) {
            $_2 = array_sum($b);
       } else {
        $_2 = $b;
       }
       return $_1 <=> $_2;
   });
   print_r($array);
   
echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 10.Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
*/
echo '10 uzduotis';
echo '<br><br>';

$array1 = [];
$value = '';
$characters = str_split('#%+*@裡');
for($i = 0; $i < 10; $i++){
    //$array1[$i] = [];
    for($j = 0; $j < 10; $j++){
        $array1[$i][$j] = [];

        for ($k = 0; $k <10; $k++){
            $value = $characters[mt_rand(0, 6)];
        $color = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        $array1[$j][$k] = [
            'value' => $value,
            'color' => '#'.$color,
        ];
        }
}
}

print_r($array1);
