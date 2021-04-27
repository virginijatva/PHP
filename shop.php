<?php

session_start();
//redirektinam; POST scenarijus
if(!empty($_POST)){
    $_SESSION['ar'] = $_POST['arbata'];
    header('Location: http://localhost/bebras/shop.php');
    die;
}

//GET scenarijus
if(!isset($_GET['rodyk'])){
    echo '<br>Ka norite perziureti?';
}
elseif($_GET['rodyk'] == 'bebra'){
    echo '<br>BEBRAS';
}
elseif($_GET['rodyk'] == 'zuiki'){
    echo '<br>ZUIKIS';
}
else{
    echo '<br>Tokio mes neturime';
}

?>

<form action="" method="get">
    <input type="text" name="rodyk">
    <button type="submit">PASPAUSK</button>

</form>

<form action="" method="post">
    <input type="text" name="arbata">
    <button type="submit">Siusk arbata</button>

</form>

<?php

$arbata = $_SESSION['ar'] ?? '<br>NERA ARBATOS';
unset($_SESSION['ar']);
echo '<br>';
echo $arbata;

_d($_GET, 'GET');
_d($_POST, 'POST');