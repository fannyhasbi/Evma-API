<?php

class Home {
  public function getHome(){
    Response::send([200, 'Mantap'],
      'Welcome to Evma API!'
    );
  }
}