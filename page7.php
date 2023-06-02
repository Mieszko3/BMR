<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./pages.css">
</head>
<body>
    <header>
    <?php require('header.php'); ?>
    </header>
    <?php 
    $szablon['host'] = 'localhost';
            $szablon['port'] = 3310;
            $szablon['user'] = 'root';
            $szablon['pass'] = '';
            $szablon['name'] = 'szablony';

            $conn = new mysqli($szablon['host'], $szablon['user'], $szablon['pass'], $szablon['name'] , $szablon['port']);
            if ($conn->connect_error) {
                die($conn->connect_error);
}

$query = 'SELECT * FROM szablony WHERE id = 7';
$result = $conn->query($query);

    while($row = $result->fetch_assoc()) {
        ?>
    <main>
        <section>
            <article>
                <nav class="username">
                <?= $row['Imię'] ?>
                <?= $row['Nazwisko'] ?>
                </nav>
                <div class="user" style="">
                <img class="img" src="./page7.png">
                <div class="desc">
                Wiek: <?= $row['Wiek']?> <br>
                Klasa: <?= $row['Klasa']?> <br>
                Zainteresowania: Prawo, sport, i Sprawieliwość, boks, obrona terytorialna <br>
                Przebieg: 5 <br>
                O mnie: W swoim życiu spotykałem się z wieloma dziewczynami ale niestety wszystkie były jak pierwszy naleśnik - do wy...rzucenia, teraz szukam takiej normalnej, swojskiej, dziewczyny, która będzie mi masować stopy.
                </div>
    </div>
        </article>
        </section>
    </main>
    <?php
    } ?>
    <footer>
    <?php require('footer.php'); ?>
    </footer>
</body>
</html>