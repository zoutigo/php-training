<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les fonctions internes</title>
</head>
<style>
  header,main{
    text-align:center ;
  }
  h1{
    color:green;
  }
</style>
<body>
  <header>
    <h1>Les fonctions internes</h1>
  </header>
  <main>
    <?php 

    $result = sqrt(9);
    echo '<p>'.'La racine carrée de 9 est '.$result.'</p>';

    $max = max(12,54);
    echo '<p>'.'le max entre 12 et 54 est '.$max.'</p>';

    // https://www.php.net/manual/fr/funcref.php

    // Appliquer la nootion
    $var = 0;
    // Évaluée à vrai car $var est vide
    if(empty($var)){
      echo'<p>'.'$var vaut soit 0, vide , ou pas defini du tout'.'</p>';
    }

    // Évaluée à vrai car $var est définie
    if (isset($var)) {
      echo '<p>'.'$var est définie même si elle est vide'.'</p>';
    }

    $var1 = 'foo';
    $var2 = [];
    $var3 = 0;

   



    ?>

  </main>
  
</body>
</html>