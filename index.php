<?php

// Composer Autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Application Global Constant
defined('APP_PATH') ?: define('APP_PATH', __DIR__);

// DOTENV
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Systems
require_once __DIR__.'/systems/autoload.php';

// Global Constants
require_once __DIR__.'/config/constants.php';

// Router Loader
require_once __DIR__.'/config/routes.php';

Flight::start();