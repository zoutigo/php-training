<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableaux indexés</title>
</head>
<style>
  main{
    margin-left:2rem;
  }
</style>
<body>
  <header>
    <h1>Tableaux indexés</h1>
  </header>
  <main>
   <?php 
    $myArray = [];
    $numbers = [4,5,20,30];
    $animals = ['chien','chat','rat'];
    $animals[] = 'chacal';

    foreach($animals as $animal){
      echo '<p>'.$animal.'</p>';
    }

    echo'<p>'.'Le 2eme élément est : '.ucfirst($animals[1]).'</p>';
    $animals[1] = 'chevre';
    echo'<p>'.'Le 2eme élément est maintenant : '.strtoupper($animals[1]).'</p>';

    // Appliquer la notion
    $names = ['Lisa', 'Mathieu', 'Laure', 'Simon'];
    echo'<p>'.'Bonjour '.strtoupper($names[2]).'</p>';
    $names[]='Valery';
    echo count($names);
    echo'<p>'.'Bienvenu '.strtolower($names[count($names)-1]).'</p>';


   ?>
  </main>
  
</body>
</html>