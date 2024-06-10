<?php
// Dane do połączenia z bazą
$db_host = ' ';  // Host bazy danych (często localhost)
$db_name = ' ';     // Nazwa bazy danych
$db_user = ' '; // Nazwa użytkownika
$db_password = ' ';  // Hasło

// Nawiązanie połączenia
try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Włączanie wyjątków w przypadku błędów PDO
} catch (PDOException $e) {
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    exit(); // Wyświetlanie błędu i przerywanie dalszego wykonywania
}
?>

