<!-- 5.Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->
<?php

if(isset($_GET['web'])){
    if($_GET['web'] == 1){
    header('Location: http://localhost/bebras/nd7-5red.php');
    die;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUE</title>
</head>
<body style="background-color:blue">
    <a style="color:white" href="http://localhost/bebras/nd7-5blue.php?web=1">Linkas i blue.php</a>
</body>
</html>