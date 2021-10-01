<h3 class="text-center mt-4 mb-4">Listado de estudiantes</h3>

<div class="container-xl">
      <p class="bg-success text-white p-2">Listado de estudiantes</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Foto</th>
          <th scope="col">Nombres</th>
          <th scope="col">Edad</th>
          <th scope="col">Promedio</th>
          <th scope="col">Seccion</th>
          <th scope="col">Fecha de creacion</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php  
        while ($item = mysqli_fetch_array($datos)) {
        ?>
        <tr>
          <th scope="row"><?php print $item["id"]; ?></th>
          <td><img src="<?php print URL."Views/template/image/avatars/".$item["imagen"]; ?>" style="width: 75px; display: block; border-radius: 100%;"></td>
          <td><?php print $item["nombre"]; ?></td>
          <td><?php print $item["edad"]; ?></td>
          <td><?php print $item["promedio"]; ?></td>
          <td><?php print $item["nombre_seccion"]; ?></td>
          <td><?php print $item["fecha"]; ?></td>
          <td>
              <a href="<?php echo URL."estudiantes/editar/".$item["id"] ?>"class="btn btn-warning" type="button">Editar</a>
              <a href="<?php echo URL."estudiantes/eliminar/".$item["id"] ?>"class="btn btn-danger" type="button">Eliminar</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
</div>