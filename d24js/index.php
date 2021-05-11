<?php
// GET Distance
if ('POST' == $_SERVER['REQUEST_METHOD']) {

    // get the raw POST data
    $rawData = file_get_contents("php://input");

    // this returns null if not valid json
    $data = json_decode($rawData);


    $curl_handle = curl_init(); //gaunam nauja URL objekta, resursa
    curl_setopt($curl_handle, CURLOPT_URL, 'https://www.distance24.org/route.json?stops=' . $data->from . '|' . $data->to); //gauta objekta modifikuojame pagal savo poreikius
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

    $buffer = curl_exec($curl_handle); //kreipimasis i serveri

    curl_close($curl_handle);

    $answer = json_decode($buffer);

    header('Content-type: application/json');

    echo json_encode(['dist' => $answer->distance]);


    die;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <script src="https://unpkg.com/axios/dist/axios.min.js" defer></script>
    <script src="app.js"></script>
    <title>Distance 24</title>
</head>

<body>
    <h1>Distance 24</h1>

    From: <input type="text" name="from">
    To: <input type="text" name="to">
    <button type="button">Get distance</button>


        <h2 style="color: red;"></h2>

</body>

</html>