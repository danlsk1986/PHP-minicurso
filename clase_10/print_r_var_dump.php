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

            //Versiones anteriores

            $tecnologias = ['HTML','CSS','Javascript','jQuery'];            

            ?>

            <?php
            
            $lenguajes = array('HTML','CSS','Javascript','jQuery','PHP', 'mySQL');            
                  
            ?>    

          <pre>
              <?php
                print_r($tecnologias);
              ?>
          </pre>

          <pre>
          <?php 
          
          var_dump($lenguajes);
          
          ?>          
          </pre>
          

            
            
          
        </div>
    </div>




  </body>
</html>
