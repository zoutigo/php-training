<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Declarations des fonctions</title>
</head>
<body>
<?php 


function apprecieDessert(string $dessert) {
  $fruits = ['mangue', 'papaye','goyave'];
  if(in_array($dessert,$fruits)){
    echo 'Tu as de bons gouts';
  }else {
    echo 'Tu manges mal';
  }
};

function sayHi(){
  return 'Bienvenu inconnu';
}

function dateNow(){
  return date("Y-m-d H:i:s");
}
?>
  <header>
    <h1>Declaration des fonctions</h1>
  </header>
  <main>
    <?php
    apprecieDessert('mangue');

    ?>
    <p>
      <?= sayHi() ?>

    </p>

  </main>
  
  <!-- Appliquer la notion -->

  <div class="">
    <?= dateNow() ?>
  </div> 
  
</body>
</html>