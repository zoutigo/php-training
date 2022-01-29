<?php

$password = '123456789 abcdefghijklmnopqrstuvwxyz';
$pattern = '/[789]|[lmnop]/';

preg_match_all($pattern, $password, $matches);

var_dump($matches);

echo'<br>',


$password = '123456789 abcdefghijklmnopqrstuvwxyz';
$pattern = '/[7-9]|[l-p]/';

preg_match_all($pattern, $password, $matches);

var_dump($matches);

echo'<br>',
$password = '123456789';
$pattern = '/[^7-9]/';

preg_match_all($pattern, $password, $matches);

var_dump($matches);

$string = 'recherche des caracteres autres qu\'alphanumerique !';
$pattern = '/\W/';

preg_match_all($pattern, $string, $matches);

var_dump($matches);

// notion

echo'<br>';

$emailAddresses = [
    'john@doe.fr',
    'john@localhost',
    'john+1@localhost',
    '@doe.fr',
    'john@.fr',
];

foreach ($emailAddresses as $emailAddress) {
    if (preg_match('/[\w+]+@\w+(\.\w*)?/', $emailAddress)) {
        echo "$emailAddress est au bon format.".PHP_EOL;
    } else {
        echo "$emailAddress n'est pas au bon format.".PHP_EOL;
    }
}
