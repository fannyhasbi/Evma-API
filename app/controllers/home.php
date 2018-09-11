<?php

class Home {
  public function getHome(){
    Response::send(200,
      'Welcome to Evma API!'
    );
  }
}