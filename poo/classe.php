<?php
require_once './classes/User.php';
require_once './classes/Moto.php';

$user = new User();
echo $user->name;

$laure = new User();
$laure->name = 'laure';
$laure->firstname = 'Dupond';

$moto1 = new Moto();
$moto1->brand = 'Yamaha';
$moto1->color = 'rouge';
$moto1->maxSpeed = 210;
