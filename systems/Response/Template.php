<?php

// Response Templating

class Response {
  private static $code;
  private static $message;
  private static $data;
  private static $halt = false;

  private static function sendResponse(){
    Flight::json([
      'code'    => self::$code,
      'message' => self::$message,
      'data'    => self::$data
    ]);

    if(self::$halt)
      die();
  }

  public static function send($code, $data = null, $halt = false){
    if(is_array($code)){
      if(count($code) == 2){
        self::$message = $code[1];
        $code = $code[0];
      }
      else {
        die('Fatal error : Array must contain only 2 values: [code, message]');
      }
    }

    require_once __DIR__.'/StatusCodes.php';
    $status = new StatusCodes();

    if($status->check((int) $code)){
      self::$code = (int) $code;
      self::$message = self::$message != null ? self::$message : $status->getMessage();
      self::$data = $data;
      self::$halt = $halt;
      self::sendResponse();
    }
    else {
      Flight::json([
        'code' => 500,
        'message' => 'Status code is unknown'
      ]);
      die();
    }
  }
}