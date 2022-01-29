<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Defi</title>
  <style>
    body{
      padding: 1rem 8rem ;
    }
    header{
      background:yellow;
    }
    h1{
      color:green;
    }
  </style>
</head>
<body>
  
  <header>
    <h1>Defi sur les opérateurs</h1>
  </header>
  <main>
    <?php
    $isPremium = true;
    $unreadMessages = 1000;
    $readMessages = 30;
    $junkMessages = 10;
    $spamMessages = 3;
    $messagesCountLimit = 50;
    $premiumCountLimit = 100;
    
    $totalMessages = $unreadMessages + $readMessages + $junkMessages + $spamMessages ;
    $hasUnreadMessages = $unreadMessages > 0;
    $mustCleanMessages = $junkMessages !==0 || $spamMessages !==0;
    $isMessageboxFull = (!$isPremium && ($totalMessages > $messagesCountLimit)) || ($isPremium && ($totalMessages > $premiumCountLimit) );
    
    if ($hasUnreadMessages) {
      echo 'Vous avez '.$unreadMessages.' messages non lus<br>';
    }
    
    if ($mustCleanMessages) {
      echo 'Vous avez des messages à nettoyer<br>';
    }
    
    if ($isMessageboxFull) {
      echo 'Attention : vous avez dépassé la limite de messages autorisée !<br>';
    }

    ?>
  </main>
  
</body>
</html>