<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opérations simples</title>
</head>
<body>
  <?php

  // Addition
  $expenses = 25543 + 67990 ;
  $incomes = 890655 + 76788 ;
  $balance = $incomes - $expenses ;

  echo 'Balance commerciale: '.$balance.' €'.'<br>';

  // Division et mutiplication

  $totalNumberShares = 1525;
  $myShares = 607.57;

  echo 'My Share : '.($myShares*100/$totalNumberShares).'<br>';

  // Concaténation

  $hello = "Bienvenu sur notre site &nbsp";
  $userName = 'John';
  $message = $hello .': ' .$userName ;
  
  echo $message.'<br>';

  // Affectations
  $x = 10 ;
  $y = 5 ;

  $x +=$y ;

  echo 'Résultat addition : '.$x.'<br>';

  $welcome = 'Bienvenue';
  $lastName = 'Marie';

  $welcome .=' : '.$lastName;

  echo $welcome.'<br><br>';

  // Appliquer la notion

  $amount = 50 + 2*3 ;
  $amount /=2 ;
  echo '<p>'.'Le montant est : '.$amount.'</p>';

  $firstName = 'Pierre';
  $greeting = 'Bonjour';
  $sentence = $greeting ;
  $sentence .= '&nbsp'.$firstName ;

  echo '<p>'.'La phrase est: '.$sentence.'</p>';

  $counter = 5;
  $counter++;
  $counter++;
  $counter++;
  $counter++;
  $counter++;
  $counter++;
  $counter *= 2;

  echo '<p>'.'Le total est : '.$counter.'</p>';

  ?>
  
</body>
</html>