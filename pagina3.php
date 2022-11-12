<html>
    <head>
        <title> Calcular precio </title>
        <meta charset="utf-8">
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
    <td><a href="pagina3.php"> Calcular Precios </a></td>
    </table></span></header>
    <br> 
    <table align="center">
    <tr><th>CURSO 1: Canto $200/mes</th>
    <th>CURSO 2: Instrumentos de percusión $250/mes</th>
    <th>CURSO 3: Instrumentos de cuerda $300/mes</th></tr>
    <tr><td></td><td><form action="pagina3.php" method="post"> Introduce el precio del curso deseado para saber cual sera el costo en el limite
        de la inscripción de 10 alumnos
    <input type="text" name="n"/>
    <input type="submit" id="enviar" name="enviar" value="Tabla de multiplicar"/></td></table>
    </form>   
    <br>
</body>
</html>
    <?php
    if($_POST){
        $num = $_POST["n"];
        $i=0;
        while($i<=10){
            print $i. "x" .$num. " = ".($i*$num)."<br>";
            $i++;
        }
    }
    
    ?>
 
