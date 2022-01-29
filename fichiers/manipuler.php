<?php

  mkdir('./repertoire', 0777);
  mkdir('exemple/repertoire/recursif', 0755, true);

$results = scandir ('./');
foreach($results as $value) {
  if (is_dir($value)) {
    echo $value." est un répertoire \n";
  } else {
    echo $value." n'est pas un répertoire \n";
  }
}

$results = scandir('exemple/repertoire');
foreach($results as $value) {
  echo $value.' ';
}