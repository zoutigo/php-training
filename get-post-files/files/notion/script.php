<?php

function printPostFormValue($key)
{
    if (!isset($_POST[$key])) {
        echo sprintf("La clé %s n/'a pas été definie <br/>", $key);
        return;
    };

    echo sprintf("La valeur de la clé %s est : " . PHP_EOL, $key);
    print_r($_POST[$key]);
    echo '<br/>';
};

function loadFile($key){
  print_r($_FILES[$key]);

  $extensions = ['jpeg','png','gif'];
  $limit = 2000000 ;
  $fileInfo = pathinfo($_FILES[$key]['name']);

  if(isset($_FILES[$key]) && ((int) $_FILES[$key]['error'] !== 1)) {
    if($_FILES[$key]['size'] > $limit){
      echo 'Le fichier est trop grand';
      return ;
    }
    if(!in_array($fileInfo['extension'],$extensions)){
      echo "Le fichier n'est pas autorisé";
      return ;
    }

    if(!is_dir('files')){
      try {
        mkdir('files');
        echo 'Le repertoire files a été crée';
      } catch (Exception $e) {
        echo 'une erreur est survenue à la creation du repertoire'.$e->getMessage();
      }
     
    }
    $filename = uniqid();

    try {
      move_uploaded_file($_FILES[$key]['temp_name'],'files/'.$filename);
    } catch (Exception $e) {
      echo 'une erreur est à l\'envoi du fichier'.$e->getMessage();
    }
    
    
  }
else {
    echo 'les fichiers '.$key.' n\'ont pas été téléchargés';
    return ;
  }
}


  





printPostFormValue('civilite');
printPostFormValue('name');
printPostFormValue('tos');
loadFile('cni');
loadFile('photo');