<?php

extract($_REQUEST);
require '../Modelo/conexionBasesDatos.php';
$objConexion=  Conectarse();
$sql="delete from empleados where id= '$id'";

$resultado=$objConexion->query($sql);

if($resultado){
    header('location:../Vista/index2.php?pag=ListarEmpleados&msj=4');
}else{
     header('location:../Vista/index2.php?pag=ListarEmpleados&msj=3');
}
