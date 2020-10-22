<?php
session_start();
extract($_REQUEST);

if (!isset($_REQUEST['pag']))
    $pag = 'RegistrarEmpleado';

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<title>index</title>
</head>
<body> hola
        <div id="encabezado"><?php include "encabezado.php" ?></div>
        <div id="menu"><?php include "menu.php" ?></div>
        <div id="contenido"><?php include $pag . ".php" ?></div>
</body>
</html>
    