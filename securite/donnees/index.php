<?php


// controler les depassements de valeurs
$count = $_GET['count'];
$count = in_array($count, [10, 20, 50]) ? $count : 10;
for ($i = 0; $i < $count; $i++) {
    echo 'Item n°'.$i.'<br>';
};


// Typer les fonctions et verifier les données
function getEmail(): ?string {} ;
function setEmail(?string $email): self {}

is_numeric($_GET['count']);
ctype_digit($_GET['count']);

// traiter l'absence de données
$count = $_GET['count'] ?? 10;
$count = in_array($count, [10, 20, 50]) ? $count : 10;
for ($i = 0; $i < $count; $i++) {
    echo 'Item n°' . $i;
};

// appliquer la notion
$posts = [
	1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
	['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
	['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];

if (!ctype_digit($_GET['id']) || $_GET['id'] <= 0) {
  die('Une erreur est survenue. Merci de réessayer.');
}

$id = (int) $_GET['id'];



$post = $posts[$id];
if(!isset($post)){
  die("une erreur est survenue");
}

echo 'L\'article "'.$post['title'].'" a été publié le '.$post['createdAt']->format('d/m/Y').'.';
