<?php

  $startDate = 1577836800; // 01/01/2020 00:00:00
  $endDate = 1577901600; // 01/01/2020 18:00:00
  
  if ($startDate < $endDate) {
    echo 'La date de départ est avant celle de fin'; 
  }

  $startDate = 1577836800; // 01/01/2020 00:00:00
  $endDate = 1577901600; // 01/01/2020 18:00:00
  $randomDate = 1199145600; // 01/01/2008 00:00:00
  $dates = [$startDate, $endDate, $randomDate];
  
  echo 'tableau initial :<br>';
  foreach ($dates as $date) {
    echo $date.'<br>';
  }

  sort($dates);
  echo 'tableau trié :<br>';
  foreach ($dates as $date) {
    echo $date.'<br>';
  }

  // Appliquer la notion
  $timestamps = [1654863436, 1407673368, 1581337036, 1644495436, 1399724236, 1586521368, 1628598168];
  $comparisonTimestap = 1637222925 ;

  $comparisonFunction = function (int $timestamp ) use($comparisonTimestap)
  {
    return $comparisonTimestap > $timestamp ;
  };

  print_r(array_filter($timestamps,$comparisonFunction)) ;
