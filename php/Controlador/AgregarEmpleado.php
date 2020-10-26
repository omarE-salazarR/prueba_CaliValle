<?php

extract($_REQUEST);
require '../Modelo/conexionBasesDatos.php';
$objConexion=  Conectarse();
$sql="insert into empleados (nombre, email, sexo, area_id, boletin, descripcion) values ('$_REQUEST[name]', '$_REQUEST[correo]', '$_REQUEST[sexo]', '$_REQUEST[area]', '$_REQUEST[boletin]', '$_REQUEST[descripcion]')";

$resultado=$objConexion->query($sql);

if($resultado){

$objConexion=  Conectarse();
$sql="SELECT * FROM empleados ORDER by id DESC LIMIT 1";
$consulta=$objConexion->query($sql);

while ($con = $consulta->fetch_object()) { 
 $id = $con->id;
}

if($consulta){
$objConexion=  Conectarse();
$sql="insert into empleado_rol (empleado_id, rol_id) values ('$id', '$_REQUEST[Rol1]')";

$resultadoD=$objConexion->query($sql);


if ($resultadoD) {
   header('location:../Vista/index2.php?pag=ListarEmpleados&msj=5');
}else{
   header('location:../Vista/index2.php?pag=ListarEmpleados&msj=6');
}

}else{
	echo "error";
}

}else{
 echo " error";
}












//  
//}
//