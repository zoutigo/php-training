<?php
$string = '456789 123456789';
$pattern = '/^123/';

preg_match($pattern, $string, $matches);

var_dump($matches);

$string = '123456789 123456789';
$pattern = '/123$/';

preg_match($pattern, $string, $matches);

var_dump($matches);