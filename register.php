<?php

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "register") {

}

if(!isset($_REQUEST['email'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <form action="register.php" method="post" id="formReg">
        <h1>REJESTRACJA</h1>
            <div>
            <label for="emailInput">Email:</label>
            <input type="email" name="email" placeholder="example@example.com" id="emailInput" required>
            </div>
            <div>
            <label for="passwordInput">Hasło:</label>
            <input type="password" name="password" id="passwordInput" required>
            </div>
            <div>
            <label for="passwordRepeatInput">Powtórz hasło:</label>
            <input type="password" name="passwordRepeat" id="passwordRepeatInput" required>
            </div>
            <input type="hidden" name="action" value="register">
            <input type="submit" value="Zarejestruj" id="subReg">
            <div>
            Masz już konto? <a href="login.php" id="goLog">Zaloguj się</a>
            </div>
        </form>
</body>    
</html>
<?php
}
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "register") {
    //resjestracja
    $db = new mysqli("localhost", "root", "", "uzytkownicy", "3310");
    $email = $_REQUEST['email'];
    //sprawdzanie maila
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //$_SESSION['user'] = $_POST['email'];
    $password = $_REQUEST['password'];
    $passwordRepeat = $_REQUEST['passwordRepeat'];
    if($password == $passwordRepeat) {
        //hasła takie same
        $q = $db->prepare("INSERT INTO user VALUES (NULL, ?, ?)");
        $passwordHash = password_hash($password, PASSWORD_ARGON2I);
        $q->bind_param('ss',$email, $passwordHash);
        $result = $q->execute();
        if($result) {
            echo " Zarejestrowano poprawnie <br>";
            echo $email;
            echo " Przejdź do panelu logowania ";
            echo '<a href="login.php" class="LinkLog"> Zaloguj się </a>';
        } else {
            echo "Coś poszło nie tak";
        }
    } else {
        echo "Hasła różnią się od siebie - spróbuj jeszcze raz";
    }
}
?>