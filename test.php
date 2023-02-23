<?php 
    session_start();
    echo $_SESSION['user'];
    echo ' <a href="logout.php" class="link1">Wyloguj</a>';

?>
