<?php

$peserta = Evma::handle('peserta');

Flight::route('GET '. API_PATH .'/peserta', [$peserta, 'getPeserta']);