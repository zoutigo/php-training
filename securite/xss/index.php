<?php

$commentaireUtilisateur = "<strong>Mon commentaire</strong>";
echo htmlspecialchars($commentaireUtilisateur, ENT_QUOTES);
// Affichera "<strong>Mon commentaire</strong>" et non "Mon commentaire" en gras.



$posts = [
  1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
  ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
  ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
  ['title' => 'Que se passe-t-il lorsqu\'on fait un <script>alert(\'Raté\')</script> ?', 'createdAt' => new \DateTime('2020-01-31')],
];
?>

<h1>Foire aux questions</h1>

<?php foreach ($posts as $id => $post) : ?>
  <h2> <i> <?= htmlentities($post['title']) ?> </i> publié le <?= $post['createdAt']->format('d/m/Y') ?> </h2>
<?php endforeach;