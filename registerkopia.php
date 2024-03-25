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
    $sql = "INSERT INTO użytkownik (imie, nazwisko, email, nr_tel, haslo) VALUES (:imie, :nazwisko, :email, :nr_tel, :haslo)";
//dane z formularza
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $email = $_POST["email"];
    $nr_tel = $_POST["nr_tel"];
    $haslo = $_POST["haslo"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_message'] = "Błąd: Wprowadzono nieprawidłowy format adresu email.";
    }else{
        $sqlEmailExist = "SELECT Count(*) as count FROM użytkownik WHERE email = :email";
        $stmtEmailExist = $conn->prepare($sqlEmailExist);
        $stmtEmailExist->bindParam(':email',$email);
        $stmtEmailExist->execute();
        $ifEmailExist = $stmtEmailExist->fetch(PDO::FETCH_ASSOC);
        

        if ($ifEmailExist['count'] > 0 ) {
            echo '<div class="alert alert-danger" role="alert">Konto z podanym adresem już istnieje.</div>';
        }else{
            //przypisanie parametrow do zmiennych
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':imie',$imie);
            $stmt->bindParam(':nazwisko',$nazwisko);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':nr_tel',$nr_tel);
            $stmt->bindParam(':haslo',$haslo);
        //zapytaniebd
        if($stmt->execute()) {
            echo '<div class="alert alert-danger" role="alert">Konto zostało utworzone pomyślnie.</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">Coś poszło nie tak, spróbuj ponownie lub skontaktuj się z nami!</div>';
        }
        // header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}
}
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
    <link rel="stylesheet" href="css/register.css">
    <title>Rejestracja</title>
</head>
<body>
    
    <!-- FORMULARZ REJESTRACYJNY -->
    <div class="container" id="register-container">
        <div class="row">
            <div class="col-sm-12 col-lg-6" id="left-side">
                <h2>Rejestracja</h2></br>
                <form method="post" action="">
                    <div class="form-group pb-3">
                      <input name="imie" type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Imię">
                    </div>
                    <div class="form-group pb-3">
                      <input name="nazwisko"type="name" class="form-control" id="secondName" placeholder="Nazwisko">
                    </div>
                    <div class="form-group pb-3">
                        <input name="email" type="e-mail" class="form-control" id="Email" placeholder="E-Mail">
                    </div>
                    <div class="form-group pb-3">
                        <input name="nr_tel" type="phone" class="form-control" id="telephone" placeholder="Numer Telefonu">
                    </div>
                    <div class="form-group pb-3">
                        <input name="haslo" type="password" class="form-control" id="password" placeholder="Hasło">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" class="form-control" id="repeat-password" placeholder="Powtórz hasło">
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6 text-center pt-5">
                    <button type="submit" class="btn btn-primary" id="submit-btn">Zarejestruj</button>
                </form>
                <h4 class="pt-2">Masz już konto? <a href="#">Zaloguj się</a></h4>
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