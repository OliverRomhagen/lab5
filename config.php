<?php

$url = $_SERVER['REQUEST_URI'];

$strings = explode('/', $url);

$current_page = end($strings);

$dbname = 'lab3';
$dbuser = 'root';
$dbpass = 'olga';
$dbserver = 'localhost';

?>
