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
                echo 10 + 20;

                //Mezclando strings con enteros

                echo '<br>';

                echo "10+20:" . (10+20);
            ?>

            <hr>

            <?php
                  $numero1 = 10;
                  $numero2 = 20;
                  $numero3 = 30;
                  $numero4 = 40;

                  //suma

                  echo "Suma: ".($numero1 + $numero2);
                  echo "<hr>";

                  //Resta

                  echo "Resta: ".($numero4 - $numero3);
                  echo "<hr>";

                  //Multiplicacion

                  echo "Multiplicacion: ".($numero1 * $numero2);
                  echo "<hr>";

                  //Division
                  echo "Division: ".($numero4 / $numero1);
                  echo "<hr>";

                  //Parentesis

                  echo ($numero1 + $numero2) * ($numero1* .16);
                  echo "<hr>";

                  //Incremento por 1
                  $numero1++;

                  echo $numero1;
                  echo "<hr>";

                  //Decremento por 1

                  $numero2--;

                  echo $numero2;
                  echo "<hr>";

                  // Incremento en la misma variable
                  $total = 0;
                  $total += 10;
                  $total += 20;
                  $total += 10;

                  echo $total;
                  echo "<hr>";

                  // Decremento en la misma variable

                  $total2 = 100;
                  $total2 -= 10;
                  $total2 -= 20;
                  $total2 -= 10;

                  echo $total2;

                  echo "<hr>";


                  //Resto en PHP
                  
                  echo 20 % 3;




            
            
            ?>

        </div>
    </div>




  </body>
</html>
