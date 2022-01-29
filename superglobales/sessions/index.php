<?php
session_start();

$_SESSION['username'] = 'JohnDoe';
echo "Bonjour " . $_SESSION['username'];
print_r($_SESSION);

unset($_SESSION['variable']);

$_SESSION = [];
print_r($_SESSION);

session_destroy();
setcookie('PHPSESSID', '', time() - 3600);