<?php
require_once 'user.php';
include 'language.php';

$user = getUser();
$name = $user['name'];
loadLanguage($user['language']);
$sports = getUserSports($user);

include 'template.php';