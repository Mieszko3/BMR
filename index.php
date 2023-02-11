<?php
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

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
    if($userRow == null) {
        //nie ma konta
        echo "Błędne hasło lub login <br>";    
    } else {
        //konto istnieje
        if(password_verify($password, $userRow['passwordHash'])) {
            //hasło poprawne
            echo "Poprawnie zalogowano <br>";
        } else {
            //hasło błędne
            echo "Błędne hasło lub login";
        }
    
    }

}
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "register") {
    //resjestracja
    $db = new mysqli("localhost", "root", "", "uzytkownicy", "3310");
    $email = $_REQUEST['email'];
    //sprawdzanie maila
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $password = $_REQUEST['password'];
    $passwordRepeat = $_REQUEST['passwordRepeat'];
    if($password == $passwordRepeat) {
        //hasła takie same
        $q = $db->prepare("INSERT INTO user VALUES (NULL, ?, ?)");
        $passwordHash = password_hash($password, PASSWORD_ARGON2I);
        $q->bind_param('ss',$email, $passwordHash);
        $result = $q->execute();
        if($result) {
            echo "Zarejestrowano poprawnie";
        } else {
            echo "Coś poszło nie tak";
        }
    } else {

        echo "Hasła różnią się od siebie - spróbuj jeszcze raz";
    }
}


?>
<h1>Zaloguj się</h1>
<form action="index.php" method="post">
    <label for="emailInput">Email:</label>
    <input type="emial" name="email" id="emailInput">
    <label for="passwordInput">Hasło:</label>
    <input type="password" name="password" id="passwordInput">
    <input type="hidden" name="action" value="login">
    <input type="submit" value="Zaloguj">
</form>

<h1>Zarejestruj się</h1>
<form action="index.php" method="post">
    <label for="emailInput">Email:</label>
    <input type="emial" name="email" id="emailInput">
    <label for="passwordInput">Hasło:</label>
    <input type="password" name="password" id="passwordInput">
    <label for="passwordRepeatInput">Powtórz hasło:</label>
    <input type="password" name="passwordRepeat" id="passwordRepeatInput">
    <input type="hidden" name="action" value="register">
    <input type="submit" value="Zarejestruj">
</form>