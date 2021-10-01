<?php namespace Config;

class Autoload{
  public static function run(){
    spl_autoload_register(function($class){
      $ruta = "./".str_replace("\\", "/", $class) . ".php";
      if(is_callable($ruta, true, $class)){
        require_once $ruta;
      }else{
        print "a fallado";
      }
    });
  }

}

// error_reporting(0);