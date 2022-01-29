<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>valeurs de retour</title>
</head>
<body>
  <?php
  function returnArray():array{
    return ['mangue', 'banane','avaocat'];
  }
  function sayHello(): void
{
    echo 'Salut';
}

function printDateTime(): string
{
    return date('d/m/Y h:i');
}

printDateTime();
  ?>
  <div class="header">
   <h1>Valeurs de retour des fonctions</h1>
  </div>
  <div class="main">
    <div class="section">
      <?php
      $values = returnArray();
      foreach($values as $value){
        echo'<p>'.$value.'</p>';
      }
     

      ?>
    </div>
    <div class="section">
      <?= printDateTime() ?>
    </div>
  </div>

  
</body>
</html>