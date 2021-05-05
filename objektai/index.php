<?php

use Zveris\Bebras;

// require __DIR__ .'/Tree.php';
// require __DIR__ .'/Interfaceas.php';
// require __DIR__ .'/Medis.php';
// require __DIR__ .'/River.php';
// require __DIR__ .'/Bebras.php';
// require __DIR__ .'/Udra.php';
// require __DIR__ .'/BebroVaikas.php';

require __DIR__ .'/vendor/autoload.php';

// spl_autoload_register(function ($class) {
//     $prefix = 'Zveris\\';
//     $base_dir = __DIR__ . '/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $prefix = '';
//     $base_dir = __DIR__ . '/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $prefix = 'Long\\Long\\Long\\';
//     $base_dir = __DIR__ . '/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

echo Interfaceas::LABAS;
echo '<br>';
//objekto kurimas:
// $zveris1 = Bebras::makeBebras(12); // galima rasyti ir be skliausteliu
// $zveris2 = Bebras::makeBebras('yellow');
$zveris3 = new BebroVaikas; 

echo '<br>';
echo '<br>';
// // echo Bebras::$dam;
// echo $zveris1->name;
// echo '<br>';
// echo $zveris2->redRiver();
// echo '<br>';
// // echo $zveris3->redRiver();
// echo '<br>';


// var_dump($zveris1);
// echo '<br>';
// var_dump($zveris2);
// echo '<br>';
var_dump($zveris3);
// echo '<br>';
// echo '<br>';


// $zveris1->callHome();
// $zveris2->callHome();


// echo '<br>';
// echo $zveris1->age;
// echo '<br>';

// //irasome klasei savybe:
// // $zveris3->color = 'black';
// $zveris3->age = 14;
// $zveris1->setTail('super long');

// //nuskaitom savybes, bet tik tas, kurios yra public:
// echo $zveris1->color;
// $zveris1->sayHello();

// $zveris1->tail = [];

// echo '<br>';
// echo 'My tail is '.$zveris1->tail.'<br>';
// echo 'My tail is '.$zveris1->getTail();
// echo '<br>';  

