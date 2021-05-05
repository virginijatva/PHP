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
                    $_SESSION['deductFunds'] = 'You successfully deducted funds from this account!<br>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="add-funds">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand" >&#62;Bebrobank&#60;</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="http://localhost/bebras/bankas/main.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="http://localhost/bebras/bankas/newAccount.php">New account</a>
                <a class="nav-item nav-link" href="http://localhost/bebras/bankas/accounts.php">Existing accounts</a>
            </div>
        </div>
    </nav>
    
    <h3 class="rezultatas"><?= $rezultatas ?></h3>
    <h1 style="text-align:center">&#62;Bebrobank&#60;</h1>
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
                        <button type="submit" class="btn btn-secondary">DEDUCT FUNDS</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>