<?php
// Funkcja sprawdzająca, czy użytkownik jest zalogowany
function isUserLoggedIn() {
    return isset($_SESSION['email']);
}

// Wylogowanie użytkownika
if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    header('Location: login.php');
    exit();
}

// function checkLoginData($email, $password){
//     if(array_key_exists($email, emails) && emails[$email] === $password){
//         return true; 
//     }
//     else{
//         return false; 
//     }
// }
?>
