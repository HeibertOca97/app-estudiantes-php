<h3 class="text-center mt-4 mb-4">Agregar estudiantes</h3>
<div class="container-sm" style="width: 28rem;">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombres completos</label>
            <input type="text" class="form-control" id="nombre" name="nombre" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="promedio">Promedio</label>
            <input type="number" class="form-control" id="promedio" name="promedio" autocomplete="off" step="any">
        </div>

        <div class="form-group">
            <label for="secciones">Secciones</label>
            <select class="form-control" id="secciones" name="id_seccion">
                  <?php  
                  while ($item = mysqli_fetch_array($datos)) {
                  ?>
                <option value="<?php print $item['id']; ?>"><?php print $item["nombre"]; ?></option>
                <?php } ?>
              </select>
            </div>
            
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" class="form-control-file" name="imagen" id="imagen">
            </div>
          
            <div class="form-group">
                <button type="submit" class="btn btn-success">REGISTRAR</button>
                <a href="<?php echo URL ?>estudiantes/agregar" class="btn btn-warning">BORRAR</a>
            </div>
    </form>
</div>