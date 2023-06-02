<?php 
session_start();

session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fail.css">
</head>
<body>
    <div>
Błędne hasło lub login &#128531;<br>
   <a href="./login.php"> Spróbuj jeszcze raz </a>
</div>
</body>
</html>
