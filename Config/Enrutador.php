<?php namespace Config;

class Enrutador{
  
  public static function run(Request $request){
    $controlador = $request->get('controlador') . "Controller";
    $ruta = ROOT . "Controllers" . DS . $controlador .".php";
    $metodo = $request->get("metodo");
    if($metodo == "index.php"){
      $metodo = "index";
    }
    $argumento = $request->get("argumento");
    if(is_readable($ruta)){
      require_once $ruta;
      $mostrar = "Controllers\\".$controlador;
      $controlador = new $mostrar;
      
      if(!isset($argumento)){
        $datos = call_user_func(array($controlador, $metodo));
      }else{
        $datos = call_user_func_array(array($controlador, $metodo), $argumento);
      }
    }

    //Cargar vista
    $ruta = ROOT . "Views" . DS . $request->get('controlador') . DS . $request->get('metodo') . ".php";
    if(is_readable($ruta)){
      require_once $ruta;
    }else{
      print "<h3>No se encontro el archivo</h3>";
    }
  } 

}