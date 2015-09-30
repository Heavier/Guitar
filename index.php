<?php
    $dbc = mysqli_connect('localhost','root','root','guitarwars')
    or die ('No se ha podido conectar con la base de datos.');
/*
    $score = $_POST['score'];
    
    $consulta = "SELECT * FROM score_table";
    $resultado = mysqli_query($dbc,$consulta);

    while ($row = mysqli_fetch_array($resultado)){
        echo "<hr>";
        echo "Puntuaci&oacute;n: ".$score;
        echo "<br />";
        echo "Mensaje: ".$mensaje;
        echo "<br />";
        echo "Para: ".$row["Nombre"].", ". $row["Apellidos"].", ". $row["Email"]."<br />";
        echo "<hr>";
        echo "<br />";
        echo "<br />";
        }
    
*/
?>
<html>
<head>
    </head>
    <!-- Título de la página en una cabecera (div), registrar blabla en la siguiente división con un botón a su derecha y a partir de aquí las puntuaciones. Todo centrado y con márgenes. -->
<body>
    <div class="titulo">
        <h1>Guitar Wars</h1>
    </div>
    <div class="subtitulo">
        <h6>Resgistra tu puntuaci&oacute;n: <input type="button" name="input" value="Registrarme"></h6>
    </div>
    <div class="puntuaciones">
        <h2>Puntuaciones</h2>
    </div>
    </body>
</html>