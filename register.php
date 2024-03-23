<?php
require_once 'navbar.php';
displayNavbar();
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
                <form>
                    <div class="form-group pb-3">
                      <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Imię">
                    </div>
                    <div class="form-group pb-3">
                      <input type="name" class="form-control" id="secondName" placeholder="Nazwisko">
                    </div>
                    <div class="form-group pb-3">
                        <input type="e-mail" class="form-control" id="Email" placeholder="E-Mail">
                    </div>
                    <div class="form-group pb-3">
                        <input type="phone" class="form-control" id="telephone" placeholder="Numer Telefonu">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" class="form-control" id="password" placeholder="Hasło">
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