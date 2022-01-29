<html>
  <head>
    <title>page dynamique</title>
  </head>
  <body>
  <?php 
  $animals = ['rat','mouton','lion','canard','belette','tigre'];
  // la fonction suffle melange aléatoirement
  shuffle($animal);
  echo '<h2>Liste des animaux </h2>';
  echo '<ul>';
  foreach($animals as $animal){
    // ne pas consider le commentaire
    echo '<li>'.$animal.'</li>';
  }
  echo '</ul>';
  ?>

    <!-- <p> Un texte qui n'est pas intégré </p> -->
    <!-- <?php echo 'Je suis bien content' ?> -->

    <?php
      $userName = 'John'; // Le nom de l'utilisateur
      $newMessages = [
        'RDV 12h', 
        'Projet X', 
        'MAJ Document',
      ]; // La liste des messages non lus 

      echo '<h1>Hello ' . $userName . ' !</h1>'; // On affiche "Hello" suivi du nom de l'utilisateur
      echo '<p>Vous avez <strong>' . count($newMessages) . ' nouveaux</strong> messages . </p>'; // On utilise PHP pour compter le nombre de messages de notre liste de messages

      echo '<ul>';
      foreach($newMessages as $id => $message) {
        echo '<li><a href="/readMessage/' . $id . '">' . $message . '</a></li>'; // On affiche une liste de messages
      }
      echo '</ul>';
    ?>
  </body>
</html>