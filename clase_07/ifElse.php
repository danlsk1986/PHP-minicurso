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
                 if(1 < 0){
                   echo "1 es menor";
                 }else {
                   echo "1 es mayor";
                 }

                 echo "<hr>";

                 $edad1 = 13;
                 $edad2 = 12;
                 if($edad1 < $edad2){
                   echo "La edad1 es menor";
                 }
                 elseif($edad1 == $edad2){
                  echo "La edad1 y la edad2 son iguales";
                 }                 
                 else{
                   echo "La edad2 es menor";
                 }

                 echo "<hr>";

                 $numero1 = 1;

                 if($numero1 % 2 == 0){
                   echo "el numero es par";
                 }else{
                   echo "el numero es impar";
                 }








            ?>
        </div>
    </div>




  </body>
</html>
