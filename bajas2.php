<html>
    <head> <title> BAJAS </title>
    <style type="text/css">
a:hover{ 
color: red;
background-color:#00CCCC;
}
table{
table-layout: fixed;
border: 3px solid black;
background-color: #00CCFF;
text-align: center;
}
 th, td {
padding: 15px;
border: 3px solid black;
}
body{
background-color: #3399FF;
}
a, form{
font-size: 1.3em;
font-family: Verdana, Arial, Helvetica, sans-serif;
}
    </style>
    </head>
    <body>
    <header> <img src="baner.png" width="1589" height="359" alt="baner"/>
    <span class="style10"><table align="center"><tr><td><a href="index.html"> Información </a></td>
    <td><a href="pagina2.php"> Registración </a></td>
    <td><a href="pagina3.php"> Tabla </a></td>
    </table></span></header> 
    <?php 
    echo "CONECTANDO...";
    $conexion=new mysqli('localhost:3306', 'root', '', 'musica');
    $conexion->set_charset("utf8");
    
    $conexion->query("delete from alumnos where nombre='$_REQUEST[nombre]'");

    $conexion->close();

    echo "el alumno fue dado de baja";
    ?>
    <br> <a href= "pagina2.php"> Regresar a la página principal </a> <br>
    </body>

</html>
