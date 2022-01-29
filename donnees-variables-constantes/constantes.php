<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les constantes</title>
</head>
<body>
  <?php 

  // une constante ne peut pas etre modifiée
    define('USERNAME','John');
    echo '<p>'.'Ma constante USERNAME est : '.USERNAME.'</p>';

    define('BANK_RATE',2.05);
    echo '<p>'.'Mon taux banque est : '.BANK_RATE.'</p>';
  ?>
  
</body>
</html>