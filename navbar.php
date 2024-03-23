<?php
session_start();

function displayNavbar() {
    echo '
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid" id="navbar-container">
            <a class="navbar-brand" href="index.php">Bowlix</a>
                            
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Rejestracja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn mb-2" id="btn-reservation">Rezerwuj tor</button>
                    </li>
                </ul>
            </div>
        </div>  
    </nav>';
}