<?php namespace Views;

$template = new Template();

class Template{
  public function __construct() {
?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de estudiantes</title>
    <!-- <link rel="stylesheet" href="<?php echo URL ?>Views/template/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <a class="navbar-brand" href="<?php echo URL ?>">Administracion de Estudiantes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL ?>">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="estudiantes_link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Estudiantes
                </a>
                <div class="dropdown-menu" aria-labelledby="estudiantes_link">
                  <a class="dropdown-item" href="<?php echo URL ?>estudiantes">Listado</a>
                  <a class="dropdown-item" href="<?php echo URL ?>estudiantes/agregar">Agregar</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="secciones_link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Secciones
                </a>
                <div class="dropdown-menu" aria-labelledby="secciones_link">
                  <a class="dropdown-item" href="<?php echo URL ?>secciones">Listado</a>
                  <a class="dropdown-item" href="<?php echo URL ?>secciones/agregar">Agregar</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

<?php
  }

  public function __destruct() {
?>   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
  </html>
<?php

  }
}