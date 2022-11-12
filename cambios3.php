<html>
    <head> <TITLE> CAMBIOS FINALES </TITLE> </head>
    <body>
    <header> <img src="baner.png" width="1589" height="359" alt="baner"/>
    <span class="style10"><table align="center"><tr><td><a href="index.html"> Información </a></td>
    <td><a href="pagina2.php"> Registración </a></td>
    <td><a href="pagina3.html"> Tabla </a></td>
    </table></span></header> 
        <?php
            echo "CONECTANDO....";
            $conexion = new mysqli('localhost:3306', 'root', '', 'musica');
            $conexion->set_charset("utf8");
            $nombre=$_REQUEST['nombre'];
            $direccion=$_REQUEST['direccion'];
            $telefono= $_REQUEST['telefono'];
            $conexion->query("UPDATE alumnos SET nombre='$nombre', direccion='$direccion', telefono='$telefono' WHERE nombre='$nombre'");
            $conexion->close();
            echo "<BR>";
            echo "el alumno fue actualizado";
        ?>
            <br> <a href= "pagina2.php"> Regresar al Inicio </a><br> 
            <br> <a href= "paginacambios.php"> Actualizar Datos </a><br>
    </body>
</html>
