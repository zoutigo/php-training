<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
  <?php 

  $admin = $_GET['admin'];
  $name = $_GET['name'];
  
  if(isset($admin) && 1 === (int) $admin){

    if(isset($name)){
      // echo sprintf("Bonjour, mon nom est %s et j'ai %s ans. <br/>", $_GET['nom'], $_GET['age']);
      echo sprintf('Bienvenue %s', $name);
    };
    include_once 'admin.php';
  } else {
    include_once 'error.php';
  }
  
  ?>


</body>
<style>
/**
    Attention, ce CSS est là uniquement pour rendre le formulaire "agréable" à la lecture sans que vous n'ayez
    à récupérer deux fichiers distincts.
    Dans un cas d'usage "réel", ces éléments doivent être externalisés
     */
    body {
        font-family: Calibri, serif;
    }

    h1, h2 {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        margin: auto;
    }

    table, th, td {
        border: 1px solid black;
    }

    thead {
        background-color: beige;
        font-weight: bold;
        text-align: center;
    }

    p {
        width: 50%;
        margin: auto auto 10px;
    }

    p.greetings {
        background-color: ivory;
        font-weight: bold;
        font-size: 16px;
        padding: 5px;
        border: 1px solid gray;
    }

</style>
</html>