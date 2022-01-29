<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SWITCH</title>
</head>
<body>
  <?php

  $userName = 'Marie' ;
  $sentence = $userName === 'Marie' ? 'C\'est Marie' : 'Ce n\'est pas Marie' ;

  echo $sentence ;

 switch ($userName) {
    case 'Paul':
    case 'Marie':
      echo 'Tu es bien Marie';
      break;
    case 'John':
      echo 'Je veux pas te voir John';
      break;
    
    default:
     echo 'Que veux tu inconu';
      break;
  }

  echo '<p>'.$welcome.'</p>';

  // defi 



$type = 'voiture'; // À changer à chaque réparation

switch ($type) {
    case 'voiture':
    case 'quad':
        $nbPneus = 4;
        break;
    case 'trike':
        $nbPneus = 3;
        break;
    case 'moto':
    case 'scooter':
        $nbPneus = 2;
        break;
    default:
        $nbPneus = 1;
}

$pneufPrice = $nbPneus*60;
if ($nbPneus === 4) {
    $pneufPrice *= 0.85;
}

$rouesCoolPrice = $nbPneus*75;
if ($nbPneus >= 3) {
    $rouesCoolPrice *= 0.75;
}

if ($pneufPrice < $rouesCoolPrice) {
    echo 'pneuf';
} else {
    echo 'rouesCool';
}



  ?>
  
</body>
</html>