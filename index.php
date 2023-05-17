<?php

include __DIR__.'/Models/Movie.php';

$films = [
    new Movie ('Il Padrino','The Godfather','1972-03-24','9.2','en',new Genre('novel')),
    new Movie ('Via Col Vento','Gone With The Wind','1939-12-15','8.6','en',new Genre('classic')),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP | STAMP</title>
</head>
<body>

<header>
    <h1>Lista di film:</h1>
</header>

<main>
<ul>
    <?php foreach ($films as $film): ?>
        <li>
            nome : <?php echo $film->title; ?>
            <br>
            <?php echo $film->original_title; ?>
            <br>
            uscita : <?php echo $film->date; ?>
            <br>
            voti: <?php echo $film->votes; ?>
            <br>
            lingua :<?php echo $film->country; ?>
        </li>
    <?php endforeach; ?>
</ul>
</main>
    
</body>
</html>