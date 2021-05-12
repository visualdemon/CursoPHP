<?php

//almacenando variables del formulario

$sec=$_GET["seccion"];
$nom=$_GET["nombre-articulo"];
$fec=$_GET["fecha"];
$pai=$_GET["pais-origen"];
$pre=$_GET["precio"];


require("datos-conexion.php");
$conexion = mysqli_connect($db_host, $db_user, $db_pass);

if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion, $db_name) or die("No se encuentra base de datos");

mysqli_set_charset($conexion, 'utf8'); //para habilitar las tildes

$sql = "INSERT INTO `artículos` (`seccion`, `nombre-articulo`, `fecha`, `pais-origen`, `precio`) VALUES ('$sec','$nom','$fec','$pai','$pre')";

$resultado = mysqli_query($conexion, $sql);

if($resultado==false){
    echo "No se ha grabao";
} else {

    echo "felicitaciones se ha guardao";
    echo "<table>
            <tr><td>$sec</td></tr>
          </table>
         ";
    echo "<table>
            <tr><td>$nom</td></tr>
          </table>
         ";
    echo "<table>
            <tr><td>$fec</td></tr>
          </table>
         ";
    echo "<table>
            <tr><td>$pai</td></tr>
          </table>
         ";
    echo "<table>
            <tr><td>$pre</td></tr>
          </table>
         ";

}



mysqli_close($conexion);