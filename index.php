<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

Flight::route('GET /', function(){
  Flight::render('home');
});

Flight::start();