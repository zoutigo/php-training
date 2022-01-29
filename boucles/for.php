<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For - Foreach</title>
</head>
<body>
  <header>
    <h1>For - ForEach</h1>
  </header>

  <section>
  <h2> For </h2>

  <?php
  for($compteur=2; $compteur <10; $compteur++){
    echo '<p>'.$compteur.' '.($compteur % 2 === 0 ? 'est pair' : 'est impair').'</p>' ;
  };

  $nombres = [1,2,4,6,9,33];
  for($i=0; $i<count($nombres) ; $i++){
    echo'<p>'.$nombres[$i].'</p>';
  }

  // appliquer la notion
  $messages = [
    [
      'from' => 'John',
      'title' => 'Rendez-vous urgent !'
    ],
    [
      'from' => 'Sarah',
      'title' => 'Tu as vu le match d\'hier ?'
    ],
    [
      'from' => 'John',
      'title' => 'Le client est ravi =) !'
    ],
    [
      'from' => 'John',
      'title' => 'Prêt pour la mise en production ?'
    ],
    [
      'from' => 'Robert',
      'title' => 'Tu es le 1000000 visiteur, tu as gagné un smartphone !'
    ],
  ];

  echo'<ul>';
  for($i=0; $i < count($messages); $i++){
    echo '<li>'.$messages[$i]['title'].'</li>';
  }
  echo'</ul>';


  ?>
  </section>
  <section>
    <?php
    echo'<ul>';
  foreach($messages as $key => $message){
    echo '<li>'.$key.' '.$message['title'].'</li>';
  }
    echo'</ul>';

    // Modifier les valeurs du tableau
    $numbers = [4, 8, 15, 16, 23, 42];

foreach($numbers as &$value) {
  $value *= 2;
}

// a la fin d'une boucle, il faut detruire la variable de stockage
unset($message);

var_dump($numbers);

    ?>



  </section>


  
</body>
</html>