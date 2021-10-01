<h3 class="text-center mt-4 mb-4">Listado de secciones</h3>

<div class="container-xl">
      <p class="bg-success text-white p-2">Listado de secciones</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Seccion</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php  
        while ($item = mysqli_fetch_array($datos)) {
        ?>
        <tr>
          <th scope="row"><?php print $item["id"]; ?></th>
          <td><?php print $item["nombre"]; ?></td>
          <td>
              <a href="<?php echo URL."secciones/editar/".$item["id"] ?>"class="btn btn-warning" type="button">Editar</a>
              <a href="<?php echo URL."secciones/eliminar/".$item["id"] ?>"class="btn btn-danger" type="button">Eliminar</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
</div>