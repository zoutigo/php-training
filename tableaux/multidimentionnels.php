<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les tableaux multidimentionnels</title>
</head>
<body>
  <header>
    <h1>Les tableaux multidimentionnels</h1>
  </header>
  <?php

  $users = [
    ['lastName' => 'Martin', 'firstName' => 'Jean'],
    ['lastName' => 'Doe', 'firstName' => 'Jane'],
    ['lastName' => 'Dupont', 'firstName' => 'Marc'],
  ];

  $users[]=['lastName'=>'Mbele','firstName'=>'Paul'];
  var_dump($users[1]);
  echo'<p>'.$users[2]['lastName'].'</p>';

  // Appliquer la notion

  $teams = [
    [
        'name' => 'Golden Guardians', 
        'members' => [
            ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
            ['firstName' => 'Can', 'lastName' => 'Çelik'],
            ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
            ['firstName' => 'Victor', 'lastName' => 'Huang'],
            ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],  
            ['firstName' => 'Yuri', 'lastName' => 'Jew'], 
        ]
    ],
    [
        'name' => 'Immortals', 
        'members' => [
            ['firstName' => 'Paul', 'lastName' => 'Boyer'],
            ['firstName' => 'Jake', 'lastName' => 'Puchero'],
            ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
            ['firstName' => 'Johnny', 'lastName' => 'Ru'],
            ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],  
        ]
    ],
];

$newTeams = [];

foreach($teams as $team){
  
  $coach =[];
  if($team['name'] === 'Golden Guardians'){

    $coach = ['lastName'=>'Smith', 'firstName'=>'Nick'];

  } else{
    $coach = ['lastName'=>'Thomas', 'firstName'=>'Si-Hassen'];
   
  }
  $team['coach']=$coach;
  $newTeams[]=$team ;
 
}

// var_dump($newTeams[0]['coach']);

  ?>

  <section>
    <h6><?= $teams[1]['members'][0]['lastName']  ?></h6>
  </section>
 
  <section>
    <ul>
      <li>Nom du Premier coach : <?= $newTeams[0]['coach']['lastName'] ?> </li>
      <li>Nom du Second coach : <?= $newTeams[1]['coach']['lastName'] ?> </li>
    </ul>
  
  </section>

 
  
</body>
</html>