<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
            <?php
                $nombre = 'Daniel';
                $apellido = 'Lasauskas';

                echo $nombre .' '. $apellido;

                $edad = 34;

                echo "<br>"."edad: ".$edad;
            ?>
        </div>
    </div>




  </body>
</html>