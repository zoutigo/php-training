<?php

function getContext()
{
  switch ($_ENV['CONTEXTE']) {
    case 'DEVELOPPEMENT':
      echo 'serveur de développement';
      break;
    case 'QUALIFICATION':
      echo 'serveur de recette interne';
      break;
    case 'PRE-PRODUCTION':
      echo 'serveur de recette client';
      break;
    case 'PRODUCTION':
      echo 'serveur de production';
      break; 
    default:  
      echo 'Autre serveur';
  }
}