<!-- 7.Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->

<?php
if((!empty($_GET)) && (empty($_POST))){
    $color = 'green';
} elseif(!empty($_POST)){
   $color = 'yellow';
   header('Location: http://localhost/bebras/nd7-7.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>;">
    <form action="" method="get">
        <button type="submit" name="get">Zalias</button>
    </form>
    <form action="" method="post">
        <button type="submit" name="post">Geltonas</button>
    </form>
</body>
</html>