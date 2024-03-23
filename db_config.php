<?php
// Dane do połączenia z bazą
$db_host = 'eu-cluster-west-01.k8s.cleardb.net';  // Host bazy danych (często localhost)
$db_name = 'heroku_3d9b81ee31eb9ad';     // Nazwa bazy danych
$db_user = 'b1bf96cb456b47'; // Nazwa użytkownika
$db_password = '5a731034';  // Hasło

// Nawiązanie połączenia
try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Włączanie wyjątków w przypadku błędów PDO
} catch (PDOException $e) {
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    exit(); // Wyświetlanie błędu i przerywanie dalszego wykonywania
}
