<?php


if(isset($_GET['web'])){
    if($_GET['web'] == 2){
    header('Location: http://localhost/bebras/nd7-5blue.php');
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
    <title>RED</title>
</head>
<body style="background-color:red">
<a href="?web=2">Linkas i red.php</a>
</body>
</html>