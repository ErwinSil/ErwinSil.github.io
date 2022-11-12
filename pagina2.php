<html>
    <head>
        <title> ALTAS </title>
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
    <br>
        <form action= "altas2.php" method= "POST">
            <h1>Dar de alta</h1>
            Ingrese su nombre: <input type="text" name="nombre"><br><br>
            Ingrese su dirección: <input type="text" name="direccion"><br><br>
            Ingrese su telefono: <input type="text" name="telefono"><br><br>
            <input type="submit" name="Registrar"><br><br>
        </form>
    </table></span></header> 
    <h1>Dar de baja</h1>
    <form action= "bajas2.php" method= "POST">
            Ingrese nombre del alumno a borrar: <input type="text" name="nombre"><br><br>
            <input type="submit" name="Borrar"><br><br>
        </form>
        <table align="center"><tr><td><a href="paginacambios.php"> Hacer cambios </a></td>

    </body>
</html>
