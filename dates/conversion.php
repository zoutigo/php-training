<?php

echo '03/01/2020 00:00:00 : '.date('d/m/Y H:i:s', mktime(0, 0, 0, 12, 34, 2019)).'<br>';
echo '01/12/2018 00:00:00 : '.date('d/m/y h:i:s', mktime(0, 0, 0, 0, 1, 2019)).'<br>';
echo '01/11/2018 00:00:00 : '.date('l jS \of F Y h:i:s A', mktime(0, 0, 0, -1, 1, 2019));


echo 'Demain : '.date('Y/m/d H:i:s', mktime(0, 0, 0, date('m'), date('d') + 1, date('Y'))).'<br>';
echo 'Le mois dernier : '.date('Y/m/d H:i:s', mktime(0, 0, 0, date('m') - 1, date('d'), date('Y')));




// 1
echo 'Nous sommes en semaine '.date('W')  . PHP_EOL;;

// 2
echo 'La date d\'aujourd\'hui au format ISO 8601 est : '.date('c', mktime(0, 0, 0))  . PHP_EOL;;

// 3
$nextXmas = mktime(0, 0, 0, 12, 25, date('Y') + 1);
echo 'Le 25 décembre '.date('Y', $nextXmas).' nous serons un '.date('l', $nextXmas) . PHP_EOL;;