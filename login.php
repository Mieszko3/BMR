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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./login.css">
        </head>
        <body>
        <form action="./login.php" method="post" id="formLog">
            <h1>Zaloguj się</h1>
            <div id="divEmail">
            <label for="emailInput">Email:</label>
            <input type="email" name="email" id="emailInput" required>
            </div>
            <div id="divPassword">
            <label for="passwordInput">Hasło:</label>
            <input type="password" name="password" id="passwordInput" required>
            </div>
            <input type="hidden" name="action" value="login">
            <input type="submit" value="Zaloguj" id="goLog">
            <div id="regLink">
            lub <a href="register.php" id="goReg">Zarejestruj się</a>
            </div>
    </form>
    </body>
    </html>
    <?php
    }

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    // $_SESSION['user'] = $_POST['email']; 
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
            header("Location: ./main.php");
            echo "<script type='text/javascript'>alert('Witamy na naszej stronie! $userAlert');</script>";

//             $szablon['host'] = 'localhost';
//             $szablon['port'] = 3310;
//             $szablon['user'] = 'root';
//             $szablon['pass'] = '';
//             $szablon['name'] = 'szablony';

//             $conn = new mysqli($szablon['host'], $szablon['user'], $szablon['pass'], $szablon['name'] , $szablon['port']);
//             if ($conn->connect_error) {
//                 die($conn->connect_error);

// require_once('./login.php');

// $query = 'SELECT `Imię`, `Nazwisko` FROM szablony WHERE id = 1';
// $result = $conn->query($query);

//     while($row = $result->fetch_assoc()) {
//     }
    ?>
<?php
        } else {
            //hasło błędne

            echo "<script type='text/javascript'>alert('Błędne hasło lub login');</script>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ./fail.php");
            ?>
            <br>
            <div class="linkBack">
                <a href="./login.php" id="linkBack">Wróć do panelu logowania</a>;
            </div> 
            <?php
            // session_destroy();
            }
        }
    }
?>
</body>
</html>