<?php 

// foreach ($_SERVER as $key => $serv) {
//    echo "[$key] = $serv<br>";
// }

// phpinfo();

// var_dump($_ENV);
// getenv();

foreach (getenv() as $key => $value) {
  echo "[$key] => $value<br>";
}

putenv('nouvelle-variable=test');

foreach (getenv() as $key => $value) {
    echo "[$key] => $value<br>";
}


// Exemple de connexion à la base.
new PDO("mysql:host=".$_ENV['database_host'].";dbname=".$_ENV['database_name']."", $_ENV['database_name'], $_ENV['database_password']);
