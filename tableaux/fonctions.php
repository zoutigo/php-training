<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les fonctions des tableaux</title>
</head>
<body>
<header> 
<h1> Les fonctions des tableaux</h1>  
</header>
<?php

$winningNumbers = [4,905,65,78,87] ;
echo implode(' Hello  <br>',$winningNumbers);
echo'<br>';
sort($winningNumbers);

echo implode('<br>',$winningNumbers);

echo'<br>';
$animals = ['zèbre', 'chat', 'lion', 'koala'];
sort($animals);
echo implode(' <br>',$animals);

// ksort et rsort permettent de trier un tableau associatif en fonction de ses clés

echo'<br>';
var_dump(in_array('chat',$animals)); // true


echo'<br>';
echo '<p>'.'il y a '.count($animals).' animaux dans le tableaux'.'</p>';

// https://www.php.net/manual/fr/ref.array.php

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

echo'<br>';
echo'<br>';

$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));

?>
  
</body>
</html>