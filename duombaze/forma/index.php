<?php

$host = '127.0.0.1';
$db   = 'barsukas'; //duombazes vardas
$user = 'root'; //user vardas
$pass = ''; //slaptazodis
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['action'] == 'cut') {
        $sql =
            "DELETE FROM trees
            WHERE `name` = ?
            ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['tree_name']]);


        // $pdo->query($sql); sitaip nedaryti
    }

    if ($_POST['action'] == 'add') {
        $sql =
            "INSERT INTO trees (`name`, `height`, `type`)
            VALUES (:n, :h, :typ) /*vietoje indexu galima rasyti klaustukus (?, ?, ?)*/
            ";
         $stmt = $pdo->prepare($sql);
         $stmt->execute(['n'=>$_POST['tree_name'], 'h'=>$_POST['tree_height'], 'typ'=>$_POST['tree_type']]);


        // $pdo->query($sql); // querinam labai blogai
    }

    header('Location: http://localhost/bebras/duombaze/forma/');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIADB FORMA</title>
</head>

<body>
    <h1>Add Tree</h1>
    <form action="" method="post">
        Name: <input type="text" name="tree_name">
        Height: <input type="text" name="tree_height">
        Type: <input type="text" name="tree_type">
        <input type="hidden" name="action" value="add">
        <button type="submit">ADD</button>
    </form>
    <hr>
    <h1>Cut Tree</h1>
    <form action="" method="post">
        Name: <input type="text" name="tree_name">
        <input type="hidden" name="action" value="cut">
        <button type="submit">CUT</button>
    </form>
    <hr>
    <?php

    //READ
    $sql = "SELECT `name`, `height`, `type` 
FROM trees 
ORDER BY `height` DESC
"; //sakau duombazei, ka noriu paselect'int is lenteles; komandos sql kalba idetos i stringa

    $stmt = $pdo->query($sql); //querinam ir gaunam statement'o objekta(pareiskima, kuriame yra mum reikalinga info)

    while ($row = $stmt->fetch()) //traukiam eilute is statement
    {
        echo '<div style="font-size:17px;">' . $row['name'] . ' ' . $row['height'] . ' ' . $row['type'] . '<br>' . '</div>';
    }
    ?>


</body>

</html>