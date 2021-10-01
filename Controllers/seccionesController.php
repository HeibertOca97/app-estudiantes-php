<?php namespace Controllers;

use Models\Seccion;

class seccionesController{

    private $secciones;
    
    public function __construct() {
      $this->secciones = new Seccion();
    }
  
    public function index(){
      $datos = $this->secciones->listar();
      return $datos;
    }
}