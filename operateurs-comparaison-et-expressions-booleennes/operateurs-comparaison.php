<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1{
      color:green
    }

  </style>
</head>
<body>
  <h1>Opérateurs de comparaison</h1>
  <?php

  $userCount = 10 ;
  if($userCount > 5){
    echo'<p>'.'Il n\'y a plus de place dans ce vol.'.'</p>';
  }

  $messageCount = 20 ;
  if($messageCount >= 15){
    echo'<p>'.'Vous avez plus de 14 messages non lus.'.'</p>';
  }

  // Appliquer la notion

  $walletAmount = 0;

  $isEmpty = $walletAmount === 0;
  $hasLowAmount = 5 <= $walletAmount  && $walletAmount <= 10 ;
  $isVip = $walletAmount > 500;

  if ($isEmpty) {
    echo 'Votre porte-monnaie est vide';
  }

  if ($hasLowAmount) {
    echo 'Consultez notre rayon \'promotions\' !';
  }

  if ($isVip) {
    echo 'Le rayon VIP vous attend !';
  }


  ?>
  
</body>
</html>