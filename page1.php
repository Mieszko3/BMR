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

$query = 'SELECT * FROM szablony WHERE id = 1';
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
                <img class="img" src="./page1.png">
                <div class="desc">
                Wiek: <?= $row['Wiek']?> <br>
                Klasa: <?= $row['Klasa']?> <br>
                Zainteresowania: Piłka nożna, imprezowanie, spotkania towarzyskie, Ty <br>
                Przebieg: 18 <br>
                O mnie: Jestem tym typem osoby, która zawsze zapomina odłożyć mleko do lodówki.
                Mam nadzieję, że lubisz złych chłopaków, bo jestem zły (beznadziejny) praktycznie we wszystkim, czym się zajmuję.
                Szukam czegoś mega luźnego, takiego jak ślub i dzieci. Nic poważnego!
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