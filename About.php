<?php 
session_start();
// echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./about.css">
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
          <li><a href="#" id="glowna">Strona główna</a></li>
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
        <article>
            <div class="user">
                <img src="./Marianabout.png" alt="">
                <div class="userdesc">Marcin:
                  Uczeń 4 klasy technikum w Zakopanem. Minął się z powołaniem i nie wie co robi w tej klasie, uczy się przeciętnie ale stabilnie. Dziewczyny pchają się drzwiami i oknami, generalnie ciężko się od nich odpędzić. Nie chodzi tu o moją skromność. Wręcz powiedziałbym, że jest to denerwujące. Szkoda, że mówię tylko o życiu na moviestarplanet. Lubię imprezować, spędzać czas ze znajomymi, napić się napoi tak zwanych lekko gazowanych. Lubię czasem zagrać w ligę legend (roadtoplatyna), czasem lubię też oddać się oglądaniu seriali na netflixie. Pasjonuję się piłką nożną i ręczną.</div>
            </div>
            <div class="user">
                <img src="./Mieszkoabout.png" alt="">
                <div class="userdesc">Mieszko:
                  Uczeń 4 klasy technikum w Zakopanem. Minął się z powołaniem i nie wie co robi w tej klasie, uczy się przeciętnie ale stabilnie. Uprawiam wiele sportów i w każdym staram się dawać z siebie wszystko. Nie lubię przegrywac, ale już się przyzwyczaiłem do tego nie tylko w sporcie ale i w życiu. Interesuję się szerokopojętą muzyką i grą na różnych instrumentach, jak i na nerwach. Lubię czasem poimprezować i oddać się chwili. Nie mogę mieć zbyt wielu znajomych, raczej staram się dobierać towarzystwo dość skrupulatnie. Jakby trzeba było to potrafię coś ugotować. </div>
            </div>
            <div class="user">
                <img src="./Papiezabout.jpg" alt="">
                <div class="userdesc">Marcin:
                  Uczeń 4 klasy technikum w Zakopanem. Minął się z powołaniem i nie wie co robi w tej klasie, uczy się przeciętnie ale stabilnie. Dość wysoki chłopak, ale zajęty także nie róbcie sobie nadziei. Niespełniona kariera piłkarska, zakończona kontuzją ale to historia znana przez każdego wuefistę. W wolnym czasie lubię sobie wypić oczywiście wodę bo woda to my. Lubie zbierać kwiatki chodzić do babci na obiadki, obejrzeć sobie meczyk jak gra FC Barcelona bo to najlepszy klub na świecie. W przyszłości planuje nie pracować a zarabiać, mieszkać w Hiszpanii i mieć życie usłane różami.
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