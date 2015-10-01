<?php
    $dbc = mysqli_connect('localhost','root','root','guitarwars')
    or die ('No se ha podido conectar con la base de datos.');

?>
<html>
<head><link rel="stylesheet" media="screen" href="style.css" ></head>
    <!-- Título de la página en una cabecera (div), registrar blabla en la siguiente división con un botón a su derecha y a partir de aquí las puntuaciones. Todo centrado y con márgenes. -->
<body>
    <div class="contenedor">
    <div class="titulo">
        <h1>Guitar Wars_</h1>
    </div>
    <div class="subtitulo">
        <h6>Registra tu puntuaci&oacute;n: <!--<input type="button" name="input" value="Registrarme">--><a href="#" class="myButton">Registrarme</a></h6>
    </div>
    <div class="puntuaciones">
        <?php
        $consulta = "SELECT * FROM score_table";
        $resultado = mysqli_query($dbc,$consulta);

        while ($row = mysqli_fetch_array($resultado)){
            echo "".$row["score"]."<br>". $row["nombre"]."<br>". $row["date_score"]."<br>";
            echo "<hr>";
        }
        ?>
    </div>  
    </div>
    
    </body>
</html>
