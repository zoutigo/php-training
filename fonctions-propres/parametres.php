<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parametres</title>
</head>
<body>
  <?php
  function sayHelloToEverybody(array $users){
    foreach($users as $user){
      echo '<p>'.'Bonjour '.$user.'</p>';
    }
  }

  function whoAmI(string $name, int $age=null){
    echo'Votre nom est '.$name.'.'.'<br>';
    if($age){
      echo 'Vous avez '.$age.' ans'.'<br>';
    }
  }

  function greetings(string $name, int $age)
{
    echo "Bonjour, je m'appelle ".$name.'.' ;
    echo "J'ai ".$age.' ans.';
}

  ?>
<header>
    <h1>Paramètres</h1>
</header>
<div class="main">
  <div class="section">
  <?php 
  $players = ['Pierre','Paul','Jacques','Henry'];
  sayHelloToEverybody($players);
  whoAmI('Robert');
  whoAmI('Anne',45);
  greetings('Geremy',24);


  ?>
  </div>
</div>
  
</body>
</html>