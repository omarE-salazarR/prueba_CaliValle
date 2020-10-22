<?php
 require '../Modelo/conexionBasesDatos.php';
    $objConexion = Conectarse();
    $sql = "select * from empleados";
    $resultado = $objConexion->query($sql);
    ?>

<div style="padding: 60px;">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Sexo</th>
      <th scope="col">Area</th>
      <th scope="col">Boletin</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  	<?php while ($res = $resultado->fetch_object()) { ?>
    <tr>
      <td><?php echo $res->nombre?></td>
      <td><?php echo $res->email?></td>
      <td><?php echo $res->sexo?></td>
      <td><?php echo $res->area_id?></td>
      <td><?php echo $res->boletin?></td>
      <td><a href="index2.php?pag=ActualizarEmpleado&id=<?php echo $res->id?>"> listar</a></td>
      <td>action</td>
    </tr>
    <?php } ?>

  </tbody>
</table>
	
</div>