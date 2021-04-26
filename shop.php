
<form action="" method="get">
    <input type="text" name="rodyk">
    <button type="submit">PASPAUSK</button>

</form>

<form action="" method="post">
    <input type="text" name="arbata">
    <button type="submit">Siusk arbata</button>

</form>

<?php
//redirektinam su POST
if(!empty($_POST)){
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

_d($_GET, 'GET');
_d($_POST, 'POST');