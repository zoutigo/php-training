<?php

$subject = 'chaîner enchaîner enchaînement';
$pattern = '/enchaîner|enchaînement/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);

echo'<br>';

$subject = 'chaîner enchaîner enchaînement';
$pattern = '/enchaîn(er|ement)/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);

echo'<br>';
echo'<br>';

// notion

$sentence = "Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”";
$pattern ='/(s|t)he/';

preg_match_all($pattern,$sentence,$matches);
var_dump($matches);
