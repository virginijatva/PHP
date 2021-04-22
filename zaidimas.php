<?php
$petras =  rand(10, 20);
$jonas = rand(5, 25);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žaidimas</title>
</head>
<body>
<h1>Petras <?php echo $petras ?> - Jonas <?= $jonas ?></h1>
<?php if($petras > $jonas): ?>
<h2>Laimėjo Petras. Valio Petrui!</h2>
<?php elseif($petras < $jonas): ?>
<h2>Laimėjo Jonas. Ura Jonui!</h2>
<?php else: ?>
<h2>Visi pralošė. Niekam ne Valio.</h2>
<?php endif ?>
</body>
</html>
