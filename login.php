<?php
session_start();

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
    $_SESSION['user'] = $_POST['email'];
}

if(!isset($_SESSION['user'])){
?>
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="./login.css">
        </head>
        <body>
        <h1>Zaloguj się</h1>
        <form action="login.php" method="post" id="formLog">
            <div id="divEmail">
            <label for="emailInput">Email:</label>
            <input type="email" name="email" id="emailInput" required>
            </div>
            <div id="divPassword">
            <label for="passwordInput">Hasło:</label>
            <input type="password" name="password" id="passwordInput" required>
            </div>
            <input type="hidden" name="action" value="login">
            <input type="submit" value="Zaloguj">
    </form>
        <div id="regLink">
            lub <a href="register.php" class="goReg">Zarejestruj się</a>
        </div>
    </body>
    </html>
    <?php
    }


?>
<?php
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $_SESSION['user'] = $_POST['email']; 

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    //obiektowo
    $db = new mysqli("localhost", "root", "", "uzytkownicy", "3310");
    //prepared statements
    $q = $db->prepare("SELECT * FROM user WHERE email = ? LIMIT 1" );
    //podstawianie wartości
    $q->bind_param("s", $email);
    //wykonaj
    $q->execute();
    $result = $q->get_result();
    $userRow = $result->fetch_assoc();
    $userAlert = $_SESSION['user'];
    if($userRow == null) {
        //nie ma konta
        echo "Błędne hasło lub login <br>";    
    } else {
        //konto istnieje
        if(password_verify($password, $userRow['passwordHash']) && isset($_SESSION['user'])) {
        //hasło poprawne
            echo "<script type='text/javascript'>alert('Witamy na naszej stronie! $userAlert');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    Zalogowany: 
    <?php
    echo $_SESSION['user'];
    ?>
    <a href="logout.php" id="logoutLink">Wyloguj</a>
    <div id="jsonDane"></div>
    <script src="./login.js"></script>
</body>
</html>
<?php
        } else {
            //hasło błędne
            echo "Błędne hasło lub login";
            echo '<br><a href="login.php" class="linkBack">Wróć do panelu logowania</a>';
            session_destroy();
        }
    }
}
?>