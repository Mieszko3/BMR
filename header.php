<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./header.css">
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
</body>
</html>