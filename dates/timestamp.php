<?php
include 'timestamp.html';

echo 'time : '.time().'<br>';
echo 'microtime : '.microtime().'<br>';
echo 'microtime flottant : '.microtime(true);

echo 'time : '.time().'<br>';
echo 'mktime : '.mktime().'<br>';
echo '31/03/1979 00:00:00 : '.mktime(0,0,0,3,31,1979);
// Les arguments sont heure,minute,seconde,mois,jour,année)
echo '03/01/2020 00:00:00 : '.mktime(0, 0, 0, 3, 31, 1979).'<br>'; //Ajout de jours au 1er janvier 2020
echo '03/01/2020 00:00:00 : '.mktime(0, 0, 0, 12, 34, 2019).'<br>'; //Ajout de (34-31) jours au 1er janvier 2020
echo '01/12/2018 00:00:00 : '.mktime(0, 0, 0, 0, 1, 2019).'<br>'; // Soustraction d'un mois depuis le 01/01/2019
echo '01/11/2018 00:00:00 : '.mktime(0, 0, 0, -1, 1, 2019).'<br>'; // Soustraction de deux mois depuis le 01/01/2019
echo '01/01/2020 00:00:00 : '.mktime(0, 0, 0, 1, 1, 2020).'<br>';
echo'01/01/2020 00:00:00 : '. mktime(0, 0, 0, 1, 1, 20); // Format d'année sur deux chiffres


// Appliquer la notion
$date1 = mktime(0,41,0,12,21,2012);
$date2 = mktime(0,0,0,1,20,2020);
$date3 = time() - 3600 ;

// il y a une heure
mktime(-1);

// Aujourd'hui à minuit 
mktime(0,0,0);

