<h3 class="text-center mt-4 mb-4">Editar estudiantes</h3>

<div class="container-sm" style="width: 28rem;">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?php print URL."Views/template/image/avatars/".$datos['estudiante']["imagen"]; ?>" class="img-thumbnail" alt="">
        </div>
        <form class="col-sm-8" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php print $datos['estudiante']['id']; ?>" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombres completos</label>
                <input type="text" class="form-control" id="nombre" name="nombre" autocomplete="off" value="<?php print $datos['estudiante']['nombre']; ?>" required>
            </div>
    
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" autocomplete="off" value="<?php print $datos['estudiante']['edad']; ?>" required>
            </div>
    
            <div class="form-group">
                <label for="promedio">Promedio</label>
                <input type="number" class="form-control" id="promedio" name="promedio" autocomplete="off" step="any" value="<?php print $datos['estudiante']['promedio']; ?>" required>
            </div>
    
            <div class="form-group">
                <label for="secciones">Secciones <strong>(Seccion actual: <?php print $datos['estudiante']['nombre_seccion']; ?>)</strong></label>
                <select class="form-control" id="secciones" name="id_seccion">
                    <option value="<?php print $datos['estudiante']['id_seccion']; ?>"><?php print $datos['estudiante']['nombre_seccion']; ?></option>
                    <?php  
                      while ($item = mysqli_fetch_array($datos["secciones"])) {
                    ?>
                    <option value="<?php print $item['id']; ?>"><?php print $item["nombre"]; ?></option>
                    <?php } ?>
                  </select>
                </div>
              
                <div class="form-group">
                    <button type="submit" class="btn btn-success">ACTUALIZAR</button>
                    <a href="<?php print URL ?>estudiantes/editar/<?php print $datos['estudiante']['id']; ?>" class="btn btn-warning">BORRAR</a>
                </div>
        </form>
    </div>
</div>