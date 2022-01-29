<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les variables</title>
</head>
<body>
  <?php
  $userName = 'John';
  $userAge = 36 ;
  echo $userName ;
  echo "<p>$userName</p>";
  echo "<p>$userAge  ans</p>";

  $login = 'Remi';
  $messageCount = 0 ;
  $unreadMessageCount = 28 ;
  $readMessageCount = 12 ;
  $messageCount += $unreadMessageCount ;
  $messageCount += $readMessageCount ;

  echo 'Bonjour '.$login." Il y a ".$messageCount." messages dans votre boite de reception !";
  echo '<p>Bonjour '.$login." Il y a ".$messageCount." messages dans votre boite de reception !".'</p>';
 
  ?>
  
</body>
</html>