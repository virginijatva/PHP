<?php
session_start();
$bankCountry = 'LT37';
$bankNumber = '73500';
$accNumber = rand(10000000000, 10009999999);
$account = $bankCountry . $bankNumber . $accNumber;
$array_string = file_get_contents('bank.json');
$clients = json_decode($array_string);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //tikrinu, ar langeliuose irasoma teisinga informacija
    if (nameLength($_POST['fname']) && nameLength($_POST['lname']) && !IDcheck($clients) && isValidID($_POST['IDnumber'])) {
        $fileName = 'bank.json';
        //tikrinu, ar jau egzistuoja json file'as
        if (file_exists("$fileName")) {
            $array_string = file_get_contents('bank.json');
            $clients = json_decode($array_string);
            $client =
                [
                    'Name' => $_POST['fname'],
                    'Last_name' => $_POST['lname'],
                    'Account_number' => $_POST['accountNumber'],
                    'IDnumber' => $_POST['IDnumber'],
                    'Balance' => 0,
                ];
            $clients[] = $client;
            $array_string = json_encode($clients);
            file_put_contents('bank.json', $array_string);
        } else {
            $clients[] = $client;
            $array_string = json_encode($clients);
            file_put_contents('bank.json', $array_string);
        }
        //success message
        $_SESSION['message'] = 'New account was created successfully!';
        header('Location: http://localhost/bebras/bankas/newAccount.php');
        die;
    } else {
        //fail message
        $_SESSION['message'] = 'It was not possible to create new account!';
    }
}

$rezultatas = $_SESSION['message'] ?? '';
unset($_SESSION['message']);

//tikrinu, ar nera saskaitos su tokiu paciu ID 
function IDcheck($data)
{
    if (is_array($data)) {
        if (!empty($data)) {
            foreach ($data as $val) {
                if ($val->IDnumber == $_POST['IDnumber']) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}

//tikrina, ar IDnumber atitinka visus reikalavimus
function isValidID($ID)
{
    $valid = false;
    if (strlen($ID) == 11) {
        if ($ID[0] > 2 && $ID[0] < 7) {
            if (checkdate(substr($ID, 3, 2), substr($ID, 5, 2), substr($ID, 1, 2))) {
                $str = $ID[0] * 1 + $ID[1] * 2 + $ID[2] * 3 + $ID[3] * 4 + $ID[4] * 5 + $ID[5] * 6 + $ID[6] * 7 + $ID[7] * 8 + $ID[8] * 9 + $ID[9] * 1;
                $str = $str % 11;
                if ($str == 10) {
                    $str = $ID[0] * 3 + $ID[1] * 4 + $ID[2] * 5 + $ID[3] * 6 + $ID[4] * 7 + $ID[5] * 8 + $ID[6] * 9 + $ID[7] * 1 + $ID[8] * 2 + $ID[9] * 3;
                    $str = $str % 11;
                    if ($str == 10 && substr($ID, 10, 1) == "0")
                        $valid = true;
                    elseif ($str == substr($ID, 10, 1))
                        $valid = true;
                } elseif ($str == substr($ID, 10, 1))
                    $valid = true;
            }
        }
    }
    return $valid;
}

//tikrinu, ar reikiamo ilgio vardas/pavarde ir ar jis nera tuscias
function nameLength($name)
{
    if (!empty($name)) {
        if (strlen($name) > 2) {
            if (!preg_match('~[0-9]+~', $name)) {
                return true;
            }
        } else {
            echo 'Name/Last name has to be longer that two letters<br>';
            return false;
        }
    } else {
        echo 'Name/Last name cannot be empty<br>';
        return false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="new-account">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand">&#62;Bebrobank&#60;</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="http://localhost/bebras/bankas/main.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="http://localhost/bebras/bankas/accounts.php">Existing accounts</a>
            </div>
        </div>
    </nav>

    <h3 class="rezultatas"><?= $rezultatas ?></h3>
    <h1>&#62;Bebrobank&#60;</h1>
    <div class="newaccount">
    <h3>Open new account</h3>
        <form action="" method="POST">
            
            <label for="fname">Name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="account">Account number:</label><br>
            <input type="text" disabled id="account" name="account" placeholder="<?= $account ?>"><br>
            <label for="IDnumber">ID number:</label><br>
            <input type="number" id="IDnumber" name="IDnumber"><br><br>
            <input type="hidden" name="accountNumber" value="<?= $account ?>">
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</body>

</html>