<?php
 require '../Modelo/conexionBasesDatos.php';
    $objConexion = Conectarse();
    $sql ="SELECT empleados.id as iden, empleados.nombre, empleados.email, empleados.sexo, empleados.area_id, empleados.boletin, empleados.descripcion, areas.id, areas.nombre as name from empleados, areas where areas.id=empleados.area_id";
    $resultado = $objConexion->query($sql);
    ?>

<div style="padding: 60px;">
	
	<a  href="index2.php?pag=RegistrarEmpleado"  class="btn btn-primary">Crear<i class="fas fa-user-plus"></i></a>
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


      <td><?php echo $res->name?></td>
      <td><?php echo $res->boletin?></td>
      <td><a href="index2.php?pag=ActualizarEmpleado&id=<?php echo $res->iden?>"><i class="fas fa-edit"></i></a></td>
      <td><a href="../Controlador/Eliminar.php?id=<?php echo $res->id?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
	
</div>

<?php
if ($msj == 1){
 ?>

 <div class="alert alert-primary" role="alert">
  Se edito Correctamente
</div>

<?php

}
if ($msj == 2){
  ?>  
  <div class="alert alert-danger" role="alert">
  Error al editar el empleado !
</div>

<?php
}


if ($msj == 3){
  ?>  
  <div class="alert alert-danger" role="alert">
  Error al eliminar el empleado !
</div>

<?php
}

if ($msj == 4){
 ?>

 <div class="alert alert-primary" role="alert">
  Se elimino Correctamente Correctamente
</div>

<?php

}
if ($msj == 5){
 ?>

 <div class="alert alert-primary" role="alert">
  Agregado Correctamente
</div>

<?php

}
if ($msj == 6){
  ?>  
  <div class="alert alert-danger" role="alert">
  Error al agregar el Empleado!
</div>

<?php
}
?>

</div>