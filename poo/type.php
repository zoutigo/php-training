<?php
require_once './classes/Couple.php';

$laure = new User('GODEN', 'Laure');
$andre = new User('WAMBA', 'Andre');

$couple = new Couple($laure, $andre);
