<!doctype html>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <style>

        h1{
            text-align:center;
            color:#00F;
            border-bottom:dotted #0000FF;
            width:50%;
            margin:auto;


        }

        table{
            border:1px solid #ff0000;
            padding:20px 50px;
            margin-top:50px;
        }

        body{
            background-color:#FFC;
        }


    </style>
</head>

<body>
<h1>Registro de Artículos</h1>
<form name="form1" method="get" action="Insertar_Registro.php">
    <table border="0" align="center">
        <tr>
            <td>Sección</td>
            <td><label for="seccion"></label>
                <input type="text" name="seccion" id="seccion"></td>
        </tr>
        <tr>
            <td>Nombre artículo</td>
            <td><label for="nombre-articulo"></label>
                <input type="text" name="nombre-articulo" id="nombre-articulo"></td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td><label for="fecha"></label>
                <input type="text" name="fecha" id="fecha"></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><label for="precio"></label>
                <input type="text" name="precio" id="precio"></td>
        </tr>
        <tr>
            <td>País de Origen</td>
            <td><label for="pais-origen"></label>
                <input type="text" name="pais-origen" id="pais-origen"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
            <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
        </tr>
    </table>
</form>
</body>
</html>