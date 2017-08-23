<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Funcion 7</title>
  </head>
  <body>
    <div class="uno">
      <?php

      function caracter($c){
        if ($c == 0 && 1 && 2 && 3 && 4 && 5 && 6 && 7 && 8 && 9) {
          echo "No es un numero <br>";
          echo "Caracter ingresado : $c";
        } else {
          echo "Es un numero <br>";
          echo "Caracter ingresado : $c";
        }
      }
       echo caracter('p');
      ?>
    </div>
  </body>
</html>
