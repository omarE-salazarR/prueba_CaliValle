<?php

function Conectarse() {
    $objConexion = new mysqli("localhost", "root", "", "empleados");
    if ($objConexion->connect_errno) {
        echo "Error de conexion a la Base de Datos " . $objConexion->connect_error;
    } else {
        echo"";
        return $objConexion;
    } 
}

?>