<h1>2. Stringai (movie edition)</h1>

<?php

/*1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
*/ 
echo '1 uzduotis';
echo '<br><br>';

$vardas = 'Kempiniukas';
$pavarde = 'Placiakelnis';

if(strlen($vardas) < strlen($pavarde)) {
    echo $vardas;
} else {
    echo $pavarde;
}

// echo "$vardas $pavarde";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.*/
echo '2 uzduotis';
echo '<br><br>';

$vardas = 'Patrikas';
$pavarde = 'Zvaigzde';

$vardas = strtoupper($vardas);
$pavarde = strtolower($pavarde);

echo "$vardas $pavarde";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
 */
echo '3 uzduotis';
echo '<br><br>';

$vardas = 'Homer';
$pavarde = 'Simpson';
$pirmosRaides = substr( $vardas, 0, 1).substr($pavarde, 0, 1);
// $pirmosRaides = $vardas[0].$pavarde[0];

echo $pirmosRaides;


echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.*/
echo '4 uzduotis';
echo '<br><br>';

$vardas = 'Bart';
$pavarde = 'Simpson';

$paskutinesRaides = substr( $vardas, -3).substr( $pavarde, -3);
echo $paskutinesRaides;

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. */
echo '5 uzduotis';
echo '<br><br>';

$string = "An American in Paris";
$change = array('A', 'a');
$newSentense = str_replace($change,"*","An American in Paris!");

echo $newSentense;

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.*/
echo '6 uzduotis';
echo '<br><br>';

$string = "An American in Paris";
$kiekA = substr_count($string, 'A');
$kieka = substr_count($string, 'a');
echo  "Tekste 'An American in Paris'<br> raide 'a' pasikartoja: $kieka kartus<br> raide 'A' pasikartoja: $kiekA kartus";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. */
echo '7 uzduotis';
echo '<br><br>';

$string1 = "An American in Paris";
$string2 = "Breakfast at Tiffany's";
$string3 = "2001: A Space Odyssey";
$string4 = "It's a Wonderful Life";

$balses = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y", " ");
$string1 = str_replace($balses, "", $string1);
$string2 = str_replace($balses, "", $string2);
$string3 = str_replace($balses, "", $string3);
$string4 = str_replace($balses, "", $string4);
echo "Pasalinus balses is teksto 'An American in Paris', lieka: $string1<br>";
echo "Pasalinus balses is teksto 'Breakfast at Tiffany's', lieka: $string2<br>";
echo "Pasalinus balses is teksto '2001: A Space Odyssey', lieka: $string3<br>";
echo "Pasalinus balses is teksto 'It's a Wonderful Life', lieka: $string4<br>";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/* 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.*/
echo '8 uzduotis';
echo '<br><br>';

$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$int = (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT);
echo $string;
echo "<br>Epizodo numeris - $int";

echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.*/
echo '9 uzduotis';
echo '<br><br>';

$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$wordsCount1 = str_word_count($string1);
$separateWords1 = explode(" ", $string1);
$shorterWords1 = 0;
$wordsCount2 = str_word_count($string2);
$separateWords2 = explode(" ", $string2);
$shorterWords2 = 0;

for ($i = 0; $i < $wordsCount1 ; $i++) {
    if (mb_strlen($separateWords1[$i]) <= 5) {
        $shorterWords1++;
    }
}

for ($j = 0; $j < $wordsCount2 - 1 ; $j++) {
    if (mb_strlen($separateWords2[$j]) <= 5) {
        $shorterWords2++;
    }
}

// foreach($separateWords1 as $string1) {
//     if(mb_strlen($string1) <= 5) {
//         $shorterWords1++;
//         }
// }

echo "Tekste 'Don't Be a Menace to South Central While Drinking Your Juice in the Hood' yra $shorterWords1 zodziai(iu) trumpesni arba lygus 5 raidems<br>";
echo "Tekste 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale' yra $shorterWords2 zodziai(iu) trumpesni arba lygus 5 raidems";


echo '<br><br>';
echo '-------------------------------------------------------------------';
echo '<br>';

/*10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.*/
echo '10 uzduotis';
echo '<br><br>';

function random_alphanumeric_string($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($characters), 0, $length);
}

echo  random_alphanumeric_string(3);