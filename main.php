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
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <header>
    <nav id='navbar'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul class="menu">
          <li><a class='dropdown-arrow' href='#'>Osoby do poznania</a>
            <ul class='sub-menus'>
              <li><a href='all.php'>Wszyscy</a></li>
              <li><a href='women.php'>Kobiety</a></li>
              <li><a href='men.php'>Mężczyźni</a></li>
            </ul>
          </li>
          <li><a href='./met.php'>Osoby zapoznane dzięki naszej stronie</a></li>
          <li><a href='./about.php'>Twórcy projektu</a></li>
          <div id="loggedIn">
          <div>
            <a href="./main.php">
              <img src="./logo11.png" alt="logo" id="logo">
            </a>
        </div>
            Zalogowany:<br>
            <p id = userLog>
            <?php
            echo $_SESSION['user'];
            ?>
            </p>
            <a href="logout.php" id="logoutLink">Wyloguj</a>
            </div>
          <li><a href="./main.php" id="glowna">Strona główna</a></li>
          <div id="loggedInMenu">
          Zalogowany:
            <p>
            <?php
            echo $_SESSION['user'];
            ?>
            </p> 
            <a href="logout.php" id="logoutLink">Wyloguj</a>
        </ul>
      </nav>
    </header>
    <main>
    <aside>
    </aside>
    <section>
        <article style= "margin:70px">
               <p id="best"> NAJPOPULARNIEJSZY UŻYTKOWNIK </p>
        <div id="papiez" style="">
                <img src="./papiez (1).jpg" id="papiezimg" alt="papiez">
            <div id="desc" style="display: block; margin: 15px; font-size: 30px; text-align: justify;"> Stefan jest niesamowitą osobą, jego charakter odpowiada prawie każdej osobie na tej planecie. Stefan złapał zainteresowanie od pierwszego momentu, kiedy pojawił się na naszej stronie. Jest bardzo towarzyski i przystojny, ma bardzo dużo zainteresowań, jeździ konno, biega maratony, lata w kosmos i leczy choroby. Po godzinach studiuje prawo aby ciemna strona nocy bała się popełniać jakieś niegrzeczne rzeczy. Kiedy wraca z uczelni prowadzi wykłady online dla osób niewidomych, ale że jest to online to rzadko kiedy ma jakiś ludzi, po tym wydarzeniu robi trening ponieważ dba o swoje zdrowie. Kiedy kończy siłownie wraca do domu i robi szybką regenerację. Niestety muszę zasmucić jego przyszłą wybrankę ponieważ nie spędzi z tobą nocy bo jest batmanem. Stefan dlatego jest rozchwytywany ponieważ każda kobieta chciała by takiego mężczyznę. Jeżeli jesteś już na naszej stronie koniecznie odwiedź jego profil.
</div>
            </div>
    </div>
        </article>
    </section>
    <aside></aside>
    </main>
    <footer>
            &copy;
            <div>
                Mieszko Winiarski
            </div>
            <div>
                Marcin Papież
            </div>
            <div>Marcin Staszel</div>
        </footer>
        </body>
</html>