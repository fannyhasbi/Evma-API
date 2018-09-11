<?php

// Composer Autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Application Global Constant
defined('BASE_PATH') ?: define('BASE_PATH', __DIR__);
defined('APP_PATH') ?: define('APP_PATH', __DIR__.'/app');

// Change Flight default views path folder
Flight::set('flight.views.path', APP_PATH.'/views');

// DOTENV
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Systems
require_once BASE_PATH.'/systems/autoload.php';

// Global Constants
require_once APP_PATH.'/config/constants.php';

// Router Loader
require_once APP_PATH.'/config/routes.php';

Flight::start();