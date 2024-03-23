<?php   
require_once 'config.php';
require_once 'navbar.php';
getLoginLogoutLink();
session_destroy();
header('Location: index.php');
exit();
?>