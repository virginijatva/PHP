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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="account">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand" >&#62;Bebrobank&#60;</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="http://localhost/bebras/bankas/main.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="http://localhost/bebras/bankas/newAccount.php">New account</a>
            </div>
        </div>
    </nav>

    <h3 class="rezultatas"><?= $rezultatas ?></h3>
    <h1>&#62;Bebrobank&#60;</h1>
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
                <button class=\"btn btn-danger\" type=\"submit\">DELETE ACCOUNT</button><br>
                    </form>
                    <! -- Prie linku pridedam tai, ka noresim perduoti i kitus puslapius, pvz addfunds -->
                    <button type=\"button\" class=\"btn btn-success\"><a style=\"color:white;\" href=\"http://localhost/bebras/bankas/addFunds.php?searchAccount=$val->Account_number&name=$val->Name&lastname=$val->Last_name&balance=$val->Balance\">Add funds</a></button><br>
                    <button type=\"button\" class=\"btn btn-secondary\"><a style=\"color:white;\" href=\"http://localhost/bebras/bankas/deductFunds.php?searchAccount=$val->Account_number&name=$val->Name&lastname=$val->Last_name&balance=$val->Balance\">Deduct funds</a></button><br>
                </td></tr>";
            }
            ?>

        </table>
    </div>

</body>

</html>