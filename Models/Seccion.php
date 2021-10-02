<?php namespace Models;

class Seccion{
  private $id, $nombre, $con;

  public function __construct(){
    $this->con = new Conexion();
  }

  public function set($propiedad, $valor){
    if(property_exists($this, $propiedad)){
      $this->$propiedad = $valor;
    }
  }

  public function get($propiedad){
    if(property_exists($this, $propiedad)){
      return $this->$propiedad;
    }
  }

  public function listar(){
    $sql = "SELECT * FROM secciones ORDER BY nombre ASC";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

  public function add(){
    $sql = "INSERT INTO secciones(id, nombre) VALUES(null, '{$this->nombre}')";

    $this->con->consultaSimple($sql);
  }

  public function delete(){
    $sql = "DELETE FROM secciones WHERE id = {$this->id}";
    
    $this->con->consultaSimple($sql);
  }

  public function edit(){
    $sql = "UPDATE secciones SET nombre='{$this->nombre}' WHERE id = {$this->id}";
    
    $this->con->consultaSimple($sql);
  }

  public function view(){
    $sql = "SELECT * FROM secciones WHERE id={$this->id}";

    $datos = $this->con->consultaRetorno($sql);
    return mysqli_fetch_assoc($datos);
  }

  public function viewDifferent(){
    $sql = "SELECT * FROM secciones WHERE id != {$this->id}";
    $datos = $this->con->consultaRetorno($sql);

    return $datos;
  }

}