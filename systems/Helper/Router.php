<?php

// Helper for Router Loader

class EvmaRouter {
  private static $router_folder = APP_PATH.'/router/';
  private static $file_extension = '.php';

  public static function to($route_path){
    require_once self::$router_folder . $route_path . self::$file_extension;
  }
}