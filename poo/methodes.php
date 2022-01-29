<?php
require_once './classes/User.php';
require_once './classes/Moto.php';


$paul = new User('PAUL', 'MBELE');
// $paul->name = 'MBELE';
// $paul->username = 'Paul';

echo $paul->sayHello();


$winner = new Moto('Mercedes', 'red', 450);
// $winner->brand = 'Mercedes';
// $winner->color = 'green';
// $winner->maxSpeed = 329;

echo $winner->getDescription();
