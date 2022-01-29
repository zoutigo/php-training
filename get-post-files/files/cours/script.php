<?php
$extensions = array('jpg', 'png', 'gif');

if (isset($_FILES['cni']) && !$_FILES['cni']['error']) {
  $fileInfo = pathinfo($_FILES['cni']['name']);

  if ($_FILES['cni']['size'] <= 2000000) {
    if (in_array($fileInfo['extension'], $extensions)) {
      if(!is_dir('images')){
        echo 'reprtoire crée';
        mkdir('images');
      }else {echo "le repertoire images existe"; }

      $filename = uniqid();

      move_uploaded_file($_FILES['cni']['tmp_name'],'images/'.$filename.$_FILES['cni']['name']);
      
      echo "Le fichier a bien été enregisté";

    } else {
      echo 'Ce type de fichier est interdit';
    }
  } else {
    echo 'Le fichier dépasse la taille autorisée';
  }
} else {
  echo 'Une erreur est survenue lors de l\'envoi du fichier';
}
?>