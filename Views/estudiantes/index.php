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
        if($datos->num_rows > 0){
            while ($item = mysqli_fetch_array($datos)) {
        ?>
        <tr>
          <th scope="row"><?php print $item["id"]; ?></th>
          <td><img src="<?php print URL."Views/template/image/avatars/".$item["imagen"]; ?>" style="width: 75px; display: block; border-radius: 100%;"></td>
          <td><a href="<?php print URL."estudiantes/ver/".$item['id']; ?>"><?php print $item["nombre"]; ?></td>
          <td><?php print $item["edad"]; ?></td>
          <td><?php print $item["promedio"]; ?></td>
          <td><?php print $item["nombre_seccion"]; ?></td>
          <td><?php print $item["fecha"]; ?></td>
          <td>
              <a href="<?php print URL."estudiantes/editar/".$item["id"]; ?>"class="btn btn-warning m-2" type="button">Editar</a>
              <a href="<?php print URL."estudiantes/eliminar/".$item["id"]; ?>"class="btn btn-danger m-2" type="button">Eliminar</a>
          </td>
        </tr>
        <?php }/** end while **/ }else { ?>
        <tr>
            <td colspan="8">Por el momento no hay ningun registro</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>