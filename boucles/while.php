<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While</title>
</head>
<body>
  <header>
    <h1> While - Do While</h1>
  </header>
 <main>
   <?php

      $condition = false ;

      while($condition){
        echo '<p>'.'Boucle while'.'</p>' ;
      }

      do {
        echo '<p>'.'Boucle do while'.'</p>';
      } while ($condition) ;

      $compteur = 2 ;
      while($compteur <= 10){
        echo $compteur.' '.($compteur % 2 === 0 ? 'est pair' : 'est impair').'<br>';
        $compteur ++ ;
      }

      $number = 30;
      $numberOfTries = 0;
      $numberHasBeenFound = false ;

      do {
        $guess = rand(0,100);
        echo'<p>'.'je tente '.$guess.'<p>';

        if($guess === $number){
          echo'<p><strong> Touvé </strong> au bout de '.$numberOfTries.' essais'.'</p>';
         
        } 
        $numberOfTries ++ ;
      } while($guess !== $number);

      // aplliquer la notion

      $tries = 0;
$sticksNumber = 15;

while ($sticksNumber > 0) {
  $removedSticks = rand(1, 3);
  $playerNumber = ($tries % 2) + 1;
  $sticksNumber -= $removedSticks;
  echo 'Joueur '.$playerNumber.' retire '.$removedSticks.' bâtons. Il en reste '.$sticksNumber.'<br>';
  $tries++;
}


   ?>
 </main>
  
</body>
</html>