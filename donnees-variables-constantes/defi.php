<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Defi</title>
</head>
<body>
  <?php

  define('EURO_TO_DOLLAR',1.08);
  define('EURO_TO_YEN',120.34);
  define('EURO_TO_BITCOINS',120.34);

  $value = 15 ;

  echo $value.' euros = ';
  echo ($value*EURO_TO_DOLLAR).' dollars , ';
  echo ($value*EURO_TO_YEN).' yens ';
  echo 'et ';
  echo ($value*EURO_TO_BITCOINS).' bitcoins.';

  ?>
  
</body>
</html>