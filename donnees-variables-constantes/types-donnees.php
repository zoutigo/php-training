<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Types de données</title>
</head>
<body>
  <?php 
  echo 'Les types de variables scalaires sont :';
  echo'
  <ul>
  <li>Les chaines de caractère : string</li>
  <li>Les entiers : int</li>
  <li>Les decimaux : float</li>
  <li>Les booléens: bool</li>
  </ul>
  ';

  $userName = 'Paul';
  echo $userName.'<br>';

  // Ci dessous les gillemets double interpretent le contenu , contrairement au apostrophes
  $hello = "Bienvenue, $userName";
  echo $hello.'<br>';


  // Pour utiliser l'apostrophe dans un guillemet simple , on echappe avec antislash
  echo'J\'aime manger l\'abricot'.'<br>';
  echo "J'aime manger l'abricot".'<br>';

  $min = -100 ;
  $max = 200 ;

  echo 'Min : '.$min.'<br>';
  echo 'Max : '.$max.'<br>';

  $pi = 3.1456 ;
  $isLogged = true ;
  $isAdmin = false ;
  
  
  echo 'est connecté :'.$isLogged.'<br>';
  echo 'est admin :'.$isAdmin.'<br>';

  // la fonction var_dump affiche plus de detais : type, longueur, valeur
  echo var_dump($isLogged).'<br>';
  echo var_dump($pi).'<br>';

  // Appliquer la notion
  $name = "D'Artagnan";
  $fruit = 'L\'abricot';
  echo 'Je suis '.$name.'<br>';
  echo 'Je suis '.$fruit.'<br>';


  
  ?>
  
</body>
</html>