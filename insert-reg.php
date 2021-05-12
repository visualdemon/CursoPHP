<?php

require ("datos-conexion.php");

$conexion=mysqli_connect($db_host,$db_user,$db_pass);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion, $db_name) or die("No se encuentra base de datos");

mysqli_set_charset($conexion, 'utf8'); //para habilitar las tildes

$sql = "INSERT INTO `artículos` (`seccion`, `nombre-articulo`, `fecha`, `pais-origen`, `precio`) VALUES (\'TECNOLOGÍA\', \'Celular3\', \'2020/01/01\', \'Colombia\', \'25\')";

$resultado=mysqli_query($conexion,$sql);



mysqli_close($conexion);
