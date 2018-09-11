<?php

class StatusCodes {
  private $codes = [
    200 => 'OK',
    404 => 'Not Found',
    400 => 'Bad Request'
  ];
  private $now_code = 200;

  public function check($code){
    if(array_key_exists($code, $this->codes)){
      $this->now_code = $code;
      return true;
    }

    return false;
  }

  public function getMessage(){
    return $this->codes[$this->now_code];
  }
}