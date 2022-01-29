<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utiliser les fonctions internes</title>
</head>
<body>
  <header>
    <h1>Utiliser les fonctions internes</h1>
  </header>
  <main>
    <?php
    // isset permet de verifier qu'une variable est bien déclarée et non null
    $name = 'Robert';
    echo isset($name) ; // true
    echo isset($value) ; // false

    // unset permet de détruire une variable
    $userName = 'Natacha';
    echo isset($userName) ; // true
    unset($userName) ;
    echo isset($userName) ; // false

    // is_array verifie qu'une variable est un tableau
    $anArray = [1,2,7] ;
    echo is_array($anArray) ; // true

    // is_int verifie qu'une variable est un entier
    $anInterger = 23 ;
    echo is_int($anInterger);

    // strtolower et strtoupper transfoment en minuscules , majuscules
    $chaine = 'Une Chaine De Caractères';
    echo '<p>'.strtolower($chaine).'</p>';
    echo '<p>'.strtoupper($chaine).'</p>';
    echo '<p>'.ucfirst($chaine).'</p>';
    echo '<p>'.ucwords($chaine).'</p>';

    // strlen determine la longueur d'une chaine
    echo'<p>'.strlen($chaine).'</p>' ;

    // date permet de récupérer la date du jour
    echo '<p>'.date("d/m/Y").'</p>'; // format jour/mois/année
    echo '<p>'.date("l").'</p>'; // jour de la semaine
    echo '<p>'.date("H:i:s").'</p>'; // l'heure


    // implode et explode permettent de convertir une chaine de caractère en tableau et inversement

    $array = ['mandarine', 'fraise', 'poire', 'pamplemousse'];
    $arrayToString = implode(',',$array);
    print_r($arrayToString);
    echo'<br>';

    $stringToArray = explode(',',$arrayToString);
    print_r($stringToArray);
    echo'<br>';

    // print_r permet d'afficher le contenu d'une variable de manière lisible
    // var_dump affiche les details d'un variable : type, valeur

    // Appliquer la notion
    $languages = ['PHP', 'HTML', 'JavaScript', 'C++', 'Python'];

    // Début du code à remplacer

    $listOfLanguages = implode(',',$languages);

    // $listOfLanguages = '';
    // // Pour chacun des éléments du tableau
    // foreach ($languages as $language) {
    //     // On concatène le langage à la chaîne de caractères
    //     $listOfLanguages .= $language . ', ';
    // }

    // Fin du code à remplacer

    // Affichera : PHP,HTML,JavaScript,C++,Python,
    echo $listOfLanguages;




    ?>
  </main>
  
</body>
</html>