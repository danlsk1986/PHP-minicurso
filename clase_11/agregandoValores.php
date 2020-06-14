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

            $tecnologias = ['CSS','HTML','Javascript','jQuery']; 
            
            ?>

            <pre><?php  print_r($tecnologias) ?></pre>

            <br>
            <?php

            $tecnologias[] = 'Python';
            $tecnologias[5]= 'Java';            

            ?>

            <pre><?php  print_r($tecnologias) ?></pre>

            <?php
            
            //borrar el ultimo elemento y traerlo en variable
            $java = array_pop($tecnologias);           
            
            ?>

            <h1><?php echo $java; ?></h1>

            <br>

            <pre>
            
            <?php  print_r($tecnologias) ?>
            
            </pre>

            <?php
            //remover el primer elemento de un array o cualquier en base al index
            unset($tecnologias[0]); 
            
            ?>

            <pre><?php  print_r($tecnologias) ?></pre>

            <br>

            <?php
            
            //remover el primer elemento y agregarlo a variable
            $html = array_shift($tecnologias);
                       
            ?>

            <h1><?php echo $html;?></h1>


            <pre><?php  print_r($tecnologias) ?></pre>
          

            <br>

            <?php
            
            //remover ciertos elementos y agregar otros
            $array = array_splice($tecnologias, 1, 1, array('Angular JS','Jquery'));
                       
            ?>

            <pre>
              <?php print_r($array)?>
            </pre>


            <pre><?php  print_r($tecnologias) ?></pre>
          







            
            
          
        </div>
    </div>




  </body>
</html>
