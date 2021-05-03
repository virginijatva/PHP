<?php
session_start();
$array_string = file_get_contents('bank.json');
$clients = json_decode($array_string);

$nam1 = $_GET['name'];
$last1 = $_GET['lastname'];
$bal1 = $_GET['balance'];
$get1 = $_GET['searchAccount'];
foreach ($clients as $key => $val) {
    if (isset($_POST['deductFunds'])) {
        if ($val->Account_number == $get1) {
            if (!empty($_POST['deductFunds'])) {
                //palyginti ar balance nera mazesnis uz norima issimti suma ir ar balance nera 0
                if ((float) $val->Balance > (float) $_POST['deductFunds'] && (float) $_POST['deductFunds'] > 0) {
                    (float) $val->Balance -= (float) $_POST['deductFunds'];
                    $bal1 = $val->Balance;
                    $newList = json_encode(array_values($clients), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                    file_put_contents('bank.json', $newList);
                    $_SESSION['deductFunds'] = 'You successfully deducted funds to this account!<br>';
                    header("Location: http://localhost/bebras/bankas/deductFunds.php?searchAccount=$get1&name=$nam1&lastname=$last1&balance=$bal1");
                    die;
                    break;
                } else {
                    $_SESSION['deductFunds'] = 'There are less funds in the account that you want to deduct! Please, pick other amount of funds.<br>';
                }
            } else {
                $_SESSION['deductFunds'] = 'Warning! Fund were not deducted!<br>';
            }
        }
    }
}

$rezultatas = $_SESSION['deductFunds'] ?? '';
unset($_SESSION['deductFunds']);
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
                <th>Deduct funds</th>
            </tr>
            <tr>
                <td><?= $_GET['name'] ?></td>
                <td><?= $_GET['lastname'] ?></td>
                <td><?= $_GET['balance'] ?></td>
                <td>
                    <form action="./deductFunds.php?searchAccount=<?= $get1 ?>&name=<?= $_GET['name'] ?>&lastname=<?= $_GET['lastname'] ?>&balance=<?= $_GET['balance'] ?>" method="post">
                        <input type="text" name="deductFunds">
                        <button type="submit">DEDUCT FUNDS</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>