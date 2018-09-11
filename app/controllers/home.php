<?php

class Home extends EvmaController {
  public function getHome(){
    Response::send(200,
      'Welcome to Evma API!'
    );
  }
}