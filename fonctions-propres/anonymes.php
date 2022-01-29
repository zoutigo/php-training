<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fonctions anonymes</title>
</head>
<body>
  <header>
    <h1> Fonctions anonymes </h1>
  </header>
  <div class="main">
    <div class="section">
      <?php

      $cube = function(int $n): int 
      {
        return ($n * $n * $n);
      };
      echo $cube(3);

      // La fonction range permet de générer un tableau contenant un intervalle d'éléments
      $array = range(1,5);

      $cubes = array_map($cube,$array);
      foreach($cubes as $result){
        echo'<p>'.$result.'<p>';
      };

      $by = 5;
      $multiplyBy = function ($n) use ($by)
      {
          return ($n * $by);
      };

      $array = range(1, 5);
      print_r(array_map($multiplyBy, $array));

      ?>
    </div>
    <div class="section">
      <?php 
      $array = range(1, 27, 3);
      $numberToAdd = 7;

      $add = function(int $n) use ($numberToAdd) : int
      {
        return $n + $numberToAdd ;
      };

      $newArray = array_map($add,$array);
      print_r($newArray);
      

      ?>
    </div>
  </div>
  
</body>
</html>