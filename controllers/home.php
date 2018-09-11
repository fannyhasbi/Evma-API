<?php

class Home {
  public function getHome(){
    Flight::json([
      'code' => 200,
      'message' => 'OK'
    ]);
  }
}