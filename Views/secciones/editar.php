<h3 class="text-center mt-4 mb-4">Editar seccion</h3>
<div class="container-sm" style="width: 18rem;">
    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php print $datos['id']; ?>">
        </div>
        
        <div class="form-group">
            <label for="nombre">Nombre de la seccion</label>
            <input type="text" class="form-control" id="nombre" name="nombre" autocomplete="off" value="<?php print $datos['nombre']; ?>">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success">ACTUALIZAR</button>
            <a href="<?php print URL ?>secciones/editar/<?php print $datos['id']; ?>" class="btn btn-warning">BORRAR</a>
        </div>
    </form>
</div>