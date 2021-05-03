<?php
session_start();
$array_string = file_get_contents('bank.json');
$clients = json_decode($array_string);

$nam = $_GET['name'];
$last = $_GET['lastname'];
$bal = $_GET['balance'];
$get = $_GET['searchAccount'];
foreach ($clients as $key => $val) {
    if (isset($_POST['addFunds'])) {
        // lygina, ar sutampa kliento account su rasto sarase kliento account'u
        if ($val->Account_number == $get) {
            // jei netuscia ir nemazesne ivesta suma uz nuli, vykdom:
            if (!empty($_POST['addFunds']) && !($_POST['addFunds'] < 0)) {
                (float) $val->Balance += (float) $_POST['addFunds'];
                $bal = $val->Balance;
                // nauja gauta balance irasom i json file
                $newList = json_encode(array_values($clients), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                file_put_contents('bank.json', $newList);
                // success zinute
                $_SESSION['addFunds'] = 'You successfully added funds to this account!<br>';
                // prie link'o pridedam nauja name, lname, balance, kad atsinaujintu ekrane
                header("Location: http://localhost/bebras/bankas/addFunds.php?searchAccount=$get&name=$nam&lastname=$last&balance=$bal");
                die;
                break;
            } else {
                $_SESSION['addFunds'] = 'Warning! Fund were not added!<br>';
            }
        }
    }
}
// unsetinam isvesta i ekrana zinute, kad perkrovus jos nebutu
$rezultatas = $_SESSION['addFunds'] ?? '';
unset($_SESSION['addFunds']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add funds</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="add-funds">
    <div>
        <a href="http://localhost/bebras/bankas/main.php">Main menu</a>
        <a href="http://localhost/bebras/bankas/accounts.php">Existing accounts</a>
        <a href="http://localhost/bebras/bankas/newAccount.php">New account</a><br><br>
    </div>
    <h3 class="rezultatas"><?= $rezultatas ?></h3>
    <h1 style="text-align:center">&#62;Bebro bank&#60;</h1>
    <div>
        <table class="addtable">
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Balance(EUR)</th>
                <th>Add funds</th>
            </tr>
            <tr>
                <td><?= $_GET['name'] ?></td>
                <td><?= $_GET['lastname'] ?></td>
                <td><?= $_GET['balance'] ?></td>
                <td>
                    <form action="./addFunds.php?searchAccount=<?= $get ?>&name=<?= $_GET['name'] ?>&lastname=<?= $_GET['lastname'] ?>&balance=<?= $_GET['balance'] ?>" method="post">
                        <input type="text" name="addFunds">
                        <button type="submit">ADD FUNDS</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>