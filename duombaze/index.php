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
$pdo = new PDO($dsn, $user, $pass, $options); // tarpininkas objektas, kuriam visus duomenis perduodam



//--------READ------

$sql = "SELECT `name`, `height`, `type` 
FROM trees 
WHERE (`type` = 1 AND `height` > 1.5) OR `type` <> 1 
ORDER BY `height` DESC
LIMIT 3"; //sakau duombazei, ka noriu paselect'int is lenteles; komandos sql kalba idetos i stringa

$stmt = $pdo->query($sql); //querinam ir gaunam statement'o objekta(pareiskima, kuriame yra mum reikalinga info)



while ($row = $stmt->fetch()) //traukiam eilute is statement
{
    echo $row['name'] . ' ' . $row['height'] . ' ' . $row['type'] . '<br>';
}


//--------CREATE------

$sql = 
"INSERT INTO trees (`name`, `height`, `type`)
VALUES ('Obelis', 2.85, 1) 
"; /* prie VALUES zodzius grieztai rasome viengubose kabutese*/

$pdo->query($sql); // querinam


//--------DELETE------

$sql = 
"DELETE FROM trees
WHERE `name` = 'Obelis' AND `id` > 8
";

$pdo->query($sql);


//--------UPDATE------

$sql = 
"UPDATE trees
SET `height`=3.2
WHERE `id` = 8
";

$pdo->query($sql);