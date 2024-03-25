<?php
require_once 'config.php';
require_once 'navbar.php';
displayNavbar();
define('DB_SERVER', 'localhost');
define('DB_NAME', 'bowlix');
define('DB_USER', 'root');
define('DB_PASS', '');

// połączenie mysql
$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8",DB_USER,DB_PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->query('SET NAMES UTF8;');
$conn->query('SET CHARACTER SET UTF8;');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $haslo = $_POST["haslo"];

    // Zapytanie SQL sprawdzające, czy istnieje użytkownik o podanym adresie e-mail i haśle
    $sql = "SELECT * FROM użytkownik WHERE email = :email AND haslo = :haslo";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':haslo', $haslo);
    $stmt->execute();

    
    // Sprawdź, czy zapytanie zwróciło dokładnie jeden rekord
    if($stmt->rowCount() == 1){
        // Użytkownik został zalogowany poprawnie, zapisz jego adres e-mail do sesji
        $_SESSION['email'] = $email;
        // Przekieruj użytkownika na stronę główną lub inną stronę po zalogowaniu
        header("Location: index.php");
        exit;
    } else {
        // Jeśli nie znaleziono użytkownika o podanym adresie e-mail i haśle, wyświetl komunikat o błędzie
        echo '<div class="alert alert-danger" role="alert">Błędne dane logowania. Spróbuj ponownie.</div>';
    }
}

// Zamykanie połączenia z bazą danych
$conn = null;
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Logowanie</title>
</head>
<body>

    <!-- FORMULARZ REJESTRACYJNY -->
    <div class="container" id="register-container">
        <div class="row">
            <div class="col-sm-12 col-lg-6" id="left-side">
                <h2>Logowanie</h2></br>
                <form method="post">
                    <div class="form-group pb-3">
                        <input name="email" type="e-mail" class="form-control" id="Email" placeholder="E-Mail">
                    </div>
                    <div class="form-group pb-3">
                        <input name="haslo" type="password" class="form-control" id="password" placeholder="Hasło">
                    </div>
                    <a href="#" class="m-4">Przypomnij hasło</a>
                </div>

                <div class="col-sm-12 col-lg-6 text-center pt-5">
                    <button type="submit" class="btn btn-primary" id="submit-btn">Zaloguj</button>
                </form>
                <h4 class="pt-2">Nie masz konta?<a href="#"> Zarejestruj się</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- FORMULARZ REJESTRACYJNY -->

    <!-- STOPKA -->
    <div class="contaner-fluid pb-5" id="footer">
        <section class="">
            <footer class="text-center text-md-start" id="footer-padding">
                <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h4 class="text-uppercase">Skontaktuj się z nami</h4>
              
                        <ul class="list-unstyled mb-0">
                            <li>
                                <p class="footer-text">bowlix@gmail.com</p>
                            </li>
                            <li>
                                <p class="footer-text">+48 123 123 123</p>
                            </li>
                            <li>
                            <a href="" class="footer-text">Formularz kontaktowy</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Linki</h5>
              
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="footer-text">Facebook</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">Instagram</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">YouTube</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <!-- STOPKA -->

</body>
</html>