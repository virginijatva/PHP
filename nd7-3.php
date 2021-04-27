<!-- 3.Perdarykite 2 uždavinį taip, kad spalvą būtų galima įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->

<?php

if(isset($_GET['color'])){
    echo "<body style=\"background-color:#" . $_GET['color'] ."\"
</body>";
}

?>
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">PASPAUSK</button>
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:bisque;">
    <a href="?color=1">Pink</a>
</body>
</html>