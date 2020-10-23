<?php

extract($_REQUEST);
require '../Modelo/conexionBasesDatos.php';
$objConexion=  Conectarse();
$sql="update empleados set nombre='$_REQUEST[name]', email='$_REQUEST[correo]', sexo='$_REQUEST[sexo]', area_id='$_REQUEST[area]', boletin='$_REQUEST[boletin]', descripcion='$_REQUEST[descripcion]' where id='$_REQUEST[id]'";

$resultado=$objConexion->query($sql);

if($resultado){
    header('location:../Vista/index2.php?pag=ListarEmpleados&msj=1');
}else{
     header('location:../Vista/index2.php?pag=ListarEmpleados&msj=2');
}
