<?php

// Response Templating

class Response {
  private static $code;
  private static $message;
  private static $data;

  public static function send($code, $data, $halt = false){
    require_once __DIR__.'/StatusCodes.php';

    if(is_array($code)){
      self::$message = $code[1];
      $code = $code[0];
    }

    $status = new StatusCodes();
    if($status->check((int) $code)){
      self::$code = (int) $code;
      self::$message = self::$message != null ? self::$message : $status->getMessage();
      self::$data = $data;
      self::sendResponse($halt);
    }
    else {
      Flight::json([
        'code' => 500,
        'message' => 'Status code is unknown'
      ]);
      die();
    }
  }

  private static function sendResponse($halt){
    Flight::json([
      'code'    => self::$code,
      'message' => self::$message,
      'data'    => self::$data
    ]);

    
  }
}