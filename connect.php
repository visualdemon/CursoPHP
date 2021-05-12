<?php

require ("datos-conexion.php");

$conexion=mysqli_connect($db_host,$db_user,$db_pass);
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion, $db_name) or die("No se encuentra base de datos");

mysqli_set_charset($conexion, 'utf8'); //para habilitar las tildes

$sql = "SELECT * FROM `artículos`";


$resultado=mysqli_query($conexion, $sql);

while ($fila=mysqli_fetch_row($resultado)) {

    echo $fila[0] . " " . "<br />";
    echo $fila[1] . " " . "<br />";
    echo $fila[2] . " " . "<br />";
    echo $fila[3] . " " . "<br />";
    echo $fila[4] . " " . "<br />";
}

mysqli_close($conexion);