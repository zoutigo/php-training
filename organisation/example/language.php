<?php
if($user['language']==='fr'){
  include 'languages/language_fr.php';
}else {
  include 'languages/language_en.php';
};

function loadLanguage(string $language)
{
  if ($language == 'fr') {
    require_once('languages/language_fr.php');
  } else {
    require_once('languages/language_en.php');
  }
};