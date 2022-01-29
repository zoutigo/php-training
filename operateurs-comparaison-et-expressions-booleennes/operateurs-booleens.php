<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opérateurs booléennes</title>
</head>
<body>
  <?php

  define('PSEUDO','robert');

  $isUserConnected = true ;
  $isUserActivated = true ;

  $userCanAccessPage = $isUserConnected && $isUserActivated ;
  echo var_dump($userCanAccessPage);
  if($userCanAccessPage){
    echo '<p>'.'Vous etes connectés et vous avez accès à cette page.'.'</p>';
  }

  $userIsModerator = true ;
  $userIsNormal = true ;
  $userIsAdmin = !$userIsNormal ;

  $canAccessDashboard = $userIsModerator || $userIsAdmin;

  if($canAccessDashboard){
    echo'<p>'.'Bonjour '.'<span style="color:blue;font-weight:bold;text-transform:capitalize">'.PSEUDO.'</span>'.'</p>';
  }

  // Appliquer la notion

  $isGroupFull = true;
  $isPlaneAvailable = true;
  $isDestinationDangerous = false;

  // Cette variable décide du départ
  $canWeGo = !$isDestinationDangerous && $isPlaneAvailable && $isGroupFull;
  $canRisklyGo = (!$isGroupFull) || (!$isDestinationDangerous);

  if ($canWeGo) {
    echo 'Départ imminent !';
  }


  ?>
  
</body>
</html>