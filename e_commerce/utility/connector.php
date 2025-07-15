<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$conexion = mysqli_connect($servidor, $usuario, $contraseña) or die("Error fatal, conexion incompleta");
mysqli_query($conexion, "use e_commerce");
//mysqli_query($conexion, "insert into productos values('idtest', 'nombretest', 'descripciontest', 10, 'categoriatest')");
?>