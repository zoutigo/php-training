<?php
setcookie('moncookie','premier cookie');

setcookie('username', 'JohnDoe', time() + 86400);

// supprimer un cookie
setcookie('username', '', time() - 60);


// disponible au prochain rechargement de page
setcookie('username', 'JohnDoe', time() + 3600);
print_r($_COOKIE);