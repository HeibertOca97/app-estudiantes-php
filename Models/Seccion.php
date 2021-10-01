<?php namespace Models;

class Seccion{
  private $id, $nombre, $con;

  public function __construct(){
    $this->con = new Conexion();
  }

  public function listar(){
    $sql = "SELECT * FROM secciones";
    return $this->con->consultaRetorno($sql);
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
    $sql = "UPDATE FROM secciones SET nombre='{$this->nombre}' WHERE id = {$this->id}";
    
    $this->con->consultaSimple($sql);
  }

  public function view(){
    $sql = "SELECT * FROM secciones WHERE id={$this->id}";

    $datos = $this->con->consultaRetorno($sql);
    return mysqli_fetch_assoc($datos);
  }

}