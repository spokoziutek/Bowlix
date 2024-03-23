<?php
require_once 'navbar.php';
displayNavbar();

// // Sprawdź czy formularz został wysłany
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Tutaj możesz dodać logikę weryfikacji logowania
//     // Na przykład sprawdzenie czy podane dane są poprawne
//     // Poniżej znajduje się tylko prosta wersja weryfikacji, która nie jest bezpieczna i wymaga ulepszenia.

//     // Pobranie danych z formularza
//     $email = $_POST['Email'];
//     $password = $_POST['password'];

//     // Tutaj możesz dodać kod weryfikacji danych logowania, na przykład sprawdzenie w bazie danych

//     // Przykładowa weryfikacja - przykładowe dane użytkownika
//     $valid_email = "przykladowy@mail.com";
//     $valid_password = "przykładweHasło";

//     // Prosta weryfikacja
//     if ($email == $valid_email && $password == $valid_password) {
//         // Jeśli dane są poprawne, możesz przekierować użytkownika na inną stronę lub wykonać inne operacje
//         echo "<script>alert('Zalogowano pomyślnie!');</script>";
//     } else {
//         // Jeśli dane są niepoprawne, możesz wyświetlić odpowiedni komunikat lub przekierować użytkownika na stronę logowania
//         echo "<script>alert('Niepoprawny e-mail lub hasło.');</script>";
//     }
// }
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
                <form>
                    <div class="form-group pb-3">
                        <input type="e-mail" class="form-control" id="Email" placeholder="E-Mail">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" class="form-control" id="password" placeholder="Hasło">
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