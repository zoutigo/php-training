<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les tableaux associatifs</title>
</head>
<body>
  <header>
    <h1>Les tableaux associatifs</h1>
  </header>
  <?php
  $myArray = ['firstname'=>'Valery','lastname'=>'Robert','age'=>25];
  $myArray['city'] = 'Tignieu';
  $myArray['email'] = 'toto@yahoo.fr';

  echo'<p>'.'Firstname : '.ucfirst($myArray['firstname']).'</p>';
  $myArray['age'] = 30;
  echo'<p>'.'Age : '.strtoupper($myArray['age']).'</p>';

  // Appliquer la notion
  $ron = ['name' => 'Ron Weasley', 'knuts' => 10, 'sickles' => 2, 'galleons' => 0];
  $knuts = $ron['knuts'];
  $knuts += $ron['sickles'] * 29;
  $knuts += $ron['galleons'] * 17 * 29;
  echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

  $mornilles = 0;
  $mornilles += $ron['sickles'];



  ?>
  
</body>
</html>