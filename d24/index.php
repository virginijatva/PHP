<?php
session_start();
// GET Distance
if ('POST' == $_SERVER['REQUEST_METHOD']) {

    $from = $_POST['from'] ?? '';
    $to = $_POST['to'] ?? '';

    $curl_handle = curl_init(); //gaunam nauja URL objekta, resursa
    curl_setopt($curl_handle, CURLOPT_URL,'https://www.distance24.org/route.json?stops='.$from.'|'.$to); //gauta objekta modifikuojame pagal savo poreikius
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

    $buffer = curl_exec($curl_handle); //kreipimasis i serveri

    curl_close($curl_handle);

    $answer = json_decode($buffer);
    $_SESSION['d'] = $answer->distance;

    $_SESSION['from'] = $from;
    $_SESSION['to'] = $to;


    header('Location: http://localhost/bebras/d24/');
    die;
}

//show distance
$distance = $_SESSION['d'] ?? '';
$from = $_SESSION['from'] ?? '';
$to = $_SESSION['to'] ?? '';
unset($_SESSION['d'], $_SESSION['from'], $_SESSION['to']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Distance 24</title>
</head>

<body>
    <h1>Distance 24</h1>
    <form action="" method="post">
        From: <input type="text" name="from" value="<?= $from ?>">
        To: <input type="text" name="to" value="<?= $to ?>">
        <button type="submit">Get distance</button>
    </form>

    <?php if($distance): ?>
        <h2 style="color: red;"><?= $distance ?> km</h2>
    <?php endif ?>
</body>

</html>