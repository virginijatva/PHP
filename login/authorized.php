<?php
require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== 1) {
    header('Location: http://localhost/bebras/login/login.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Hello</title>
</head>

<body>
    <div class="menu">
        <a href="http://localhost/bebras/login/">Home</a>
        <a href="./authorized.php">Data about Forests</a>
        <a href="./login.php">Login</a>
        <a href="./login.php?logout">LogOut</a>
    </div>
    <?php if ($msg) : ?>
        <div class="alert alert-<?= $msgType ?>" role="alert"><?= $msg ?></div>
    <?php endif ?>
    <main>
        Authorized User: <?= $_SESSION['name'] ?>
    </main>
</body>

</html>