<html>
    <head>
        <title> CAMBIOS </title>
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
form, a{
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
        <form action= "cambios2.php" method= "POST">
            Ingrese el nombre del alumno a actualizar: <input type="text" name="nombre"><br><br>
            <input type="submit" name="BUSCAR"><br><br>
        </form>
    </body>
</html>
