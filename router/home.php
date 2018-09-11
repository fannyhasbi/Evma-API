<?php

$home = EvmaController::handle('home');

Flight::route('GET /', [$home, 'getHome']);