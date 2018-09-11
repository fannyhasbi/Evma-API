<?php

// Helper for Controller Loader

class Evma {
  private static $controller_folder = APP_PATH.'/controllers/';
  private static $file_extension = '.php';

  public static function handle($controller_path){
    require_once self::$controller_folder . $controller_path . self::$file_extension;

    $h = new $controller_path();
    return $h;
  }
}