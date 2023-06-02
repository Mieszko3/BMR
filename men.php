<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./all.css">
</head>
<body>
<header>
    <nav id='navbar'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul class="menu">
          <li><a class='dropdown-arrow' href='#'>Osoby do poznania</a>
            <ul class='sub-menus'>
              <li><a href='./all.php'>Wszyscy</a></li>
              <li><a href='./women.php'>Kobiety</a></li>
              <li><a href='./men.php'>Mężczyźni</a></li>
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
        <article class="homepage">
            <div class="tile">
                <a href="./page1.php">
                <img src="./page1.png" alt="">
                </a>
            <div class="desc">Imię: Leonidas<br>Nazwisko: Midas<br>Wiek: 18 <br> Klasa: 4A</div>
            </div>
            <div class="tile">
                <a href="./page4.php">
                <img src="./page4.png" alt="">
                </a>
            <div class="desc">Imię: Zygfryd<br>Nazwisko: Szczebrzeszyński<br>Wiek: 18 <br> Klasa: 3G</div></div>
            <div class="tile">
                <a href="./page5.php">
                <img src="./page5.png" alt="">
                </a>
            <div class="desc">Imię: Korneliusz<br>Nazwisko: Zbereźnik<br>Wiek: 16 <br> Klasa: 2T</div></div>
            <div class="tile">
                <a href="./page7.php">
                <img src="./page7.png" alt="">
                </a>
            <div class="desc">Imię: Stefan<br>Nazwisko: Moczypościel<br>Wiek: 19 <br> Klasa: 4Ip</div></div>
            <div class="tile">
                <a href="./page9.php">
                <img src="./page9.png" alt="">
                </a>
            <div class="desc">Imię: Abraham<br>Nazwisko: Tesla<br>Wiek: 19 <br> Klasa: 4E</div></div>
            <div class="tile">
                <a href="./page11.php">
                <img src="./page11.png" alt="">
                </a>
            <div class="desc">Imię: Goliat<br>Nazwisko: Skrępowany<br>Wiek: 20 <br> Klasa: 4Tg</div></div>
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
