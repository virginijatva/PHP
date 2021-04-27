<!-- 6.Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->
<?php

if((!empty($_GET)) && (empty($_POST))){
    $color = 'green';
} elseif(!empty($_POST)){
   $color = 'yellow';
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