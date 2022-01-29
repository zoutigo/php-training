<?php

$password = 'aaazerty zerty';
$pattern = '/a?zerty/';

preg_match_all($pattern, $password, $matches);

var_dump($matches);


$subject = 'john@doe.com';
$pattern = '/@+/';

if (preg_match($pattern, $subject)) {
  echo "$subject semble être une adresse email valide";
}

echo'<br>';

$password = 'aaazerty';
$pattern = '/a*zerty/';

preg_match($pattern, $password, $matches);

var_dump($matches);

echo'<br>';

$password = 'zerty azerty aazerty aaazerty aaaazerty';
$pattern = '/a{2,4}zerty/';

preg_match_all($pattern, $password, $matches);

var_dump($matches);

echo'<br>';

$subject = 'azerty azazerty boerty erty';
$pattern = '/(az|bo){1,2}erty/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);