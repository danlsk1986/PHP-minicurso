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
          <h2>Agenda telefonica</h2>
            <?php
                 $agenda = array();

                 function guardarUsuario($nombre,$tel){
                   global $agenda;
                   $agenda[] = array($nombre,$tel);
                 }

                 guardarUsuario('Juan','1234-5678');
                 guardarUsuario('Miguel','1011-1213');
                 guardarUsuario('Pedro','2222-2222');
                 guardarUsuario('Daniel','3333-3333');

                 function mostrarUsuario($id){
                    global $agenda;
                    $usuario = $agenda[$id];
                    foreach($usuario as $user){
                      echo $user . '<br/>';
                    }
                 }

                mostrarUsuario(2);

            ?>
        </div>
    </div>




  </body>
</html>
