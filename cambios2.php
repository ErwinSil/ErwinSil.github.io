<html>
    <head> <TITLE> CAMBIOS 2 </TITLE> </head>
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
$registros= $conexion->query("select nombre,direccion, telefono from alumnos where nombre='$_REQUEST[nombre]'");

if($reg=mysqli_fetch_array($registros))
{
    ?>
   <form action = "cambiofinal.php" method= "POST">
    Nombre: <input type="text" name="nombre" value = '<?php echo $reg[0]; ?>'/>
   <br>
   Dirección: <input type="text" name="direccion"  value = '<?php echo $reg[1]; ?>'/>
   <br>
   Teléfono: <input type="text" name="telefono" value = '<?php echo $reg[2]; ?>'/>
   <br>
   <input type ="submit" name = "Actualizar">
   </form>
  <?php
 }
 else
 {
     echo "No existe alumno con ese nombre";
 }
$conexion->close();
?>

<br> <a href= "pagina2.php"> Regresar al Inicio </a><br> 
<br> <a href= "paginacambios.php"> Actualizar otro </a><br>

</body>
</html>
