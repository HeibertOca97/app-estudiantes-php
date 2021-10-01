<?php namespace Config;

class Request{
  private $controlador;
  private $metodo;
  private $argumento;

  public function __construct(){
    if(isset($_GET["url"])){
      $ruta = filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL);
      $ruta = explode("/", $ruta);
      $ruta = array_filter($ruta);
      if($ruta[0] == "index.php"){
        $this->controlador = "estudiantes";
      }else{
        $this->controlador = strtolower(array_shift($ruta)); //posicion [0]
      }
      
      $this->metodo = strtolower(array_shift($ruta)); //posicion [1]
      
      if(!$this->metodo){ //Si no existe metodo - posicion[1]
        $this->metodo = "index";
      }

      $this->argumento = $ruta; //posicion [2] - restante

    }else{
      //Por defecto
      $this->controlador = "estudiantes";
      $this->metodo = "index";
    }
  }

  public function get($propiedad){
    if(property_exists($this, $propiedad)){
      return $this->$propiedad;
    }
  }
}