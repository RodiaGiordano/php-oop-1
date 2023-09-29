<?php 
    require_once __DIR__ . './db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $film_1->getFullInfo(); ?>
    <br>
    <?= $film_2->getFullInfo(); ?>
</body>
</html>