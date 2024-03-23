<?php
session_start();
require_once 'config.php';

function displayNavbar() {
    echo '
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid" id="navbar-container">
            <a class="navbar-brand" href="index.php">Bowlix</a>
                            
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    '.getRegisterLink() .'
                    </li>
                    <li class="nav-item">
                    '.getLoginLogoutLink() .'
                    </li>
                    <li class="nav-item">
                    '.getProfileLink() .'
                    </li>
                    <li class="nav-item">
                        <button class="btn mb-2" id="btn-reservation">Rezerwuj tor</button>
                    </li>
                </ul>
            </div>
        </div>  
    </nav>';
}
function getLoginLogoutLink(){
    if (isUserLoggedIn()) {   
        return '<a class="nav-link" href="logout.php">Wyloguj</a>';
    } else {
        return '<a class="nav-link" href="login.php">Logowanie</a>';
    }
}

function getProfileLink() {
    if (isUserLoggedIn()) {
        return '<a class="nav-link" href="profile.php">Profil</a>';
    } else {
        return ''; // Ukrywamy link do profilu, jeśli użytkownik nie jest zalogowany
    }
}

function getRegisterLink() {
    if (isUserLoggedIn()) {
        return ''; // Ukrywamy link do rejestracji, jeśli użytkownik jest zalogowany
    } else {
        return '<a class="nav-link" href="register.php">Rejestracja</a>';
    }
}
?>