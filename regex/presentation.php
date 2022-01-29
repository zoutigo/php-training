<?php

$subject = 'Comment chercher une chaîne dans une autre ?';
$pattern = '/chaîne/';

preg_match($pattern, $subject, $matches);

var_dump($matches);

echo'<br>';
$subject = '0123456789';
$search = '456';
$pattern = "/$search/";

if (preg_match($pattern, $subject)) {
  echo "$search est présent dans $subject";
} else {
  echo "$search n'est pas présent dans $subject";
}

// preg_match_all retourne le nombre de fois où la chaîne a été trouvée.

// offset specifie une position pour le debut de la recherche

echo'<br>';
echo'<br>';

$subject = '0123456789';
$search = '456';
$pattern = "/$search/";

$offset = 5;

if (preg_match($pattern, $subject, $matches, null, $offset)) {
    echo "$search est présent dans ".substr($subject, $offset);
} else {
    echo "$search n'est pas présent dans ".substr($subject, $offset);
}


$pattern = '#chaîne#';
$pattern = '%chaîne%';
$pattern = '~chaîne~';

// Appliquer la notion

$name ="Alice";

$pattern = "/$name/";
$subject = "Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”.";

if(preg_match($pattern, $subject)){
  echo $name.'est bien dans la phrase'.'<br>';
}

$sentence = 'Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”.';

$count = preg_match_all('/Alice/', $sentence, $matches);

echo 'Le mot Alice est présent '. $count .' fois.';


