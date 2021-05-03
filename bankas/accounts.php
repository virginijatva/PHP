<?php
session_start();
$array_string = file_get_contents('bank.json');
$clients = json_decode($array_string);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['searchAccount'])) {
        foreach ($clients as $key => $val) {
            // jei kliento saskaita tuscia
            if ($val->Balance == 0) {
                // ir jei ieskomo kliento account numeris sutampa su masyve rasto kliento saskaita, galime ja istrinti, unset
                if ($val->Account_number == $_POST['searchAccount']) {
                    unset($clients[$key]);
                    // kai istrinam, perrasom likusi klientu sarasa i duombaze
                    $newList = json_encode(array_values($clients), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                    file_put_contents('bank.json', $newList);
                    $_SESSION['delete'] = 'You successfully deleted this account<br>!';
                    header('Location: http://localhost/bebras/bankas/accounts.php');
                    die;
                }
            } else {
                $_SESSION['delete'] = 'This account cannot be deleted because there are some funds inside.';
            }
        }
    }
}
$rezultatas = $_SESSION['delete'] ?? '';
unset($_SESSION['delete']);

//surikiuoja pagal abecele pavardes
usort($clients, function ($a, $b) {
    return $a->Last_name <=> $b->Last_name;
});
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="account">
    <div>
        <a href="http://localhost/bebras/bankas/main.php">Main menu</a>
        <a href="http://localhost/bebras/bankas/newAccount.php">New account</a><br><br>
    </div>
    <h3 class="rezultatas"><?= $rezultatas ?></h3>
    <h1>&#62;Bebro bank&#60;</h1>
    <h2>Accounts</h2>
    <div class="accounts-table">
        <table>
            <tr>
                <th>Last name</th>
                <th>Name</th>
                <th>ID number</th>
                <th>Account number</th>
                <th>Balance(EUR)</th>
                <th>Additional</th>
            </tr>

            <?php foreach ($clients as $val) {
                echo "<tr><td>$val->Last_name</td>
                <td>$val->Name</td>
                <td>$val->IDnumber</td>
                <td>$val->Account_number</td>
                <td>$val->Balance</td>
                <td>
                <form action=\"./accounts.php\" method=\"post\">
                <input type=\"hidden\" name=\"searchAccount\" value=\"$val->Account_number\">
                <button type=\"submit\">DELETE ACCOUNT</button><br>
                    </form>
                    <! -- Prie linku pridedam tai, ka noresim perduoti i kitus puslapius, pvz addfunds -->
                    <a href=\"http://localhost/bebras/bankas/addFunds.php?searchAccount=$val->Account_number&name=$val->Name&lastname=$val->Last_name&balance=$val->Balance\">Add funds</a><br>
                    <a href=\"http://localhost/bebras/bankas/deductFunds.php?searchAccount=$val->Account_number&name=$val->Name&lastname=$val->Last_name&balance=$val->Balance\">Deduct funds</a><br>
                </td></tr>";
            }
            ?>

        </table>
    </div>

</body>

</html>