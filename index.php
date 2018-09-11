<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// global constants
require_once __DIR__.'/config/constants.php';

// router loader
require_once __DIR__.'/config/routes.php';

Flight::route('GET /', function(){
  Flight::render('home');
});

Flight::start();