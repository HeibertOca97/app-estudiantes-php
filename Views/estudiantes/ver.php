<h3 class="text-center mt-4 mb-4">Perfil estudiantes</h3>

<div class="container-sm" style="width: 28rem;">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?php print URL."Views/template/image/avatars/".$datos["imagen"]; ?>" class="img-thumbnail" alt="">
        </div>
        <div class="col-sm-8">
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombres completos:</strong> <?php print $datos['nombre']; ?></li>
                <li class="list-group-item"><strong>Edad:</strong> <?php print $datos['edad']; ?></li>
                <li class="list-group-item"><strong>Promedio:</strong> <?php print $datos['promedio']; ?></li>
                <li class="list-group-item"><strong>Seccion:</strong> <?php print $datos['nombre_seccion']; ?></li>
            </ul>
            <div>
                <a href="<?php print URL."estudiantes/agregar"; ?>"class="btn btn-primary m-2" type="button">Nuevo</a>
                <a href="<?php print URL."estudiantes/editar/".$datos["id"]; ?>"class="btn btn-warning m-2" type="button">Editar</a>
                <a href="<?php print URL."estudiantes/eliminar/".$datos["id"]; ?>"class="btn btn-danger m-2" type="button">Eliminar</a>
            </div>
        </div>
    </div>
</div>