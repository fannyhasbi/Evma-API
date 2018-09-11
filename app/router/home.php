<?php

$home = Evma::handle('home');

Flight::route('GET /', [$home, 'getHome']);