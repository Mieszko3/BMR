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
    <link rel="stylesheet" href="./met.css">
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
        <article>
            <div class="met">
                <img src="./duda.jpg" alt="">
                <div class="linkfrom">Źródło: <br>https://s3.viva.pl/newys/andrzej-duda-419200-GALLERY_BIG.jpg</div>
                <div class="metdesc">Andrzej był mocno skrytym informatykiem, chciał się przełamać aby znaleźć dziewczynę i wyjść poza schemat informatyka. Pewnego razu zgłosił się na naszą stronę w poszukiwaniu wybranki swojego serca. Agata była dość rozpoznawalną osobą w naszej szkole, z nudów postanowiła odwiedzić stronę BMR, okazało się że urzekła ją tam pewna osoba, był to właśnie Andrzej. Od pierwszej chwili coś między nimi zaiskrzyło, zaczęli się ze sobą spotykać na przerwach a później poza szkołą. Teraz są parą prezydencką - a resztę historii już znacie.</div>
            </div>
            <div class="met">
                <img src="./lewy.jpg" alt="">
                <div class="linkfrom">Źródło: <br> https://dziendobry.tvn.pl/gwiazdy/cdn-zdjecie-awqegc-anna-lewandowska-i-robert-lewandowski-5642397/WODZ4662.JPG</div>
                <div class="metdesc">Robert od małego czuł zamiłowanie do piłki nożnej, nie wiadomo jakim trafem znalazł się w naszej szkole, która ze sportem ma tyle związanego co Najman z profesjonalnymi walkami. Skupiał się jedynie na sporcie ale nie mógł znaleźć osoby, która by zrozumiała jego pasje. Wtedy do pierwszej klasy przyszła Ania, zakochana w sporcie i trenująca w każdej możliwej chwili. Akurat w tym czasie wychodziła nasza strona, ludzie zaczęli ją odwiedzać i Ania z Robertem posiadając te same zainteresowania połączyli się. Teraz są super parą i mają dzieci, nasza strona działa.</div>
            </div>
            <div class="met">
                <img src="./quebo.png" alt="">
                <div class="linkfrom">Źródło: <br>https://ocdn.eu/pulscms-transforms/1/488k9kpTURBXy81ZmQyMzdlZjBlZjY5NTcyYmQ5N2FkMGYyNDJiMmE0Yy5wbmeUlQMAAM0HR80EGJUDAADNB0fNBBiVAs0HgADCw5UCAM0EOMLD3gACoTACoTEB</div>
                <div class="metdesc">Jakub Kuba Quebo Grabowski inaczej nazywany Kuba z Ciechanowa oraz jego wspaniała partnerka Natalia Szroeder jeszcze parę lat temu nie wiedzieli, że będzie to miłość prawdopodobnie na całe życie. Dzięki naszej stronie BMR zapoznali się w szkole i zaczęli nabierać rozpędu. Tak się rozpędzili, że dzisiaj stanowią jedną z najgorętszych par Pudelka. Kubę i Natalię serdecznie pozdrawiamy i życzymy wszystkiego co najlepsze na ich drodze życia.</div>
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

