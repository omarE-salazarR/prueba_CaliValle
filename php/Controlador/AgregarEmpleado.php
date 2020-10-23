<?php

extract($_REQUEST);
require '../Modelo/conexionBasesDatos.php';
$objConexion=  Conectarse();
$sql="insert into empleados (nombre, email, sexo, area_id, boletin, descripcion) values ('$_REQUEST[name]', '$_REQUEST[correo]', '$_REQUEST[sexo]', '$_REQUEST[area]', '$_REQUEST[boletin]', '$_REQUEST[descripcion]')";

$resultado=$objConexion->query($sql);

if($resultado){
     header('location:../Vista/index2.php?pag=ListarEmpleados&msj=5');
}else{
      header('location:../Vista/index2.php?pag=ListarEmpleados&msj=6');
}
