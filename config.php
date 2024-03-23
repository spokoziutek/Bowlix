<?php
// Definiujemy pary loginu i hasła (hasła są zaszyfrowane za pomocą md5)
define('emails', [
    'user1@wp.pl' => 'e10adc3949ba59abbe56e057f20f883e',  // Dla hasła "123456"
    'user2' => '5f4dcc3b5aa765d61d8327deb882cf99',  // Dla hasła "password"
    'user3' => '098f6bcd4621d373cade4e832627b4f6'   // Dla hasła "test"
]);

// Funkcja do szyfrowania hasła
function encryptPassword($password) {
    return md5($password);
}

// Funkcja sprawdzająca, czy użytkownik jest zalogowany
function isUserLoggedIn() {
    return isset($_SESSION['Email']);
}

// Wylogowanie użytkownika
if (isset($_SESSION['Email'])) {
    unset($_SESSION['Email']);
    header('Location: login.php');
    exit();
}

function checkLoginData($email, $password){
    if(array_key_exists($email, emails) && emails[$email] === md5($password)){
        return true; 
    }
    else{
        return false; 
    }
}
?>
