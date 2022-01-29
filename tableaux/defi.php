<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Defi</title>
</head>
<body>
  <header>
    <h1>Defi</h1>
  </header>
  <main>
    <?php
   
$student1 = [
  'fullName' => 'Hugo Dubois',
  'marks' => [
      [
          'name' => 'mathématiques',
          'values' => [18, 12, 14, 8, 16]
      ],
      [
          'name' => 'physique',
          'values' => [11, 9, 7, 14, 18]
      ],
  ]
];

$student2 = [
  'fullName' => 'Simone Durand',
  'marks' => [
      [
          'name' => 'informatique',
          'values' => [12, 11, 12, 10, 17]
      ],
      [
          'name' => 'chimie',
          'values' => [12, 8, 18, 14, 11]
      ],
  ]
];

$result1 = [
  [
      'name' => $student1['marks'][0]['name'],
      'average' => array_sum($student1['marks'][0]['values'])/count($student1['marks'][0]['values']),
  ],
  [
      'name' => $student1['marks'][1]['name'],
      'average' => array_sum($student1['marks'][1]['values'])/count($student1['marks'][1]['values']),
  ]
];

$result2 = [
  [
      'name' => $student2['marks'][0]['name'],
      'average' => array_sum($student2['marks'][0]['values'])/count($student2['marks'][0]['values']),
  ],
  [
      'name' => $student2['marks'][1]['name'],
      'average' => array_sum($student2['marks'][1]['values'])/count($student2['marks'][1]['values']),
  ]
];

var_dump($result1, $result2);


    ?>
  </main>
  
</body>
</html>