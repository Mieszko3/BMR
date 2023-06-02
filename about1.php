<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./about1.css">
</head>
<body>
<header>
    <nav id='navbar'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul class="menu">
          <li><a class='dropdown-arrow' href='#'>Osoby do poznania</a>
            <ul class='sub-menus'>
              <li><a href='./all1.php'>Wszyscy</a></li>
              <li><a href='./women1.php'>Kobiety</a></li>
              <li><a href='./men1.php'>Mężczyźni</a></li>
            </ul>
          </li>
          <li><a href='./met1.php'>Osoby zapoznane dzięki naszej stronie</a></li>
          <li><a href='./about1.php'>Twórcy projektu</a></li>
          <li><a href='./login.php'>Zaloguj się</a></li>
          <li><a href='./register.php'>Zarejestruj się</a></li>
          <li><a href="./glowna.php" id="glowna">Strona główna</a></li>
        </ul>
        <div>
            <a href="./glowna.php">
              <img src="./logo11.png" alt="logo" id="logo">
            </a>
        </div>
      </nav>
    </header>
    <main>
    <aside>
    </aside>
    <section>
        <article>
            <div class="user">
                Aby zobaczyć tę stronę musisz być zalogowany 
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