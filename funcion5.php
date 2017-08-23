<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Funcion 5</title>
  </head>
  <body>
    <div class="uno">
      <?php

      function grados($celsius, $grados){
        $resultado=0;
        if ($grados == "kelvin") {
          $resultado = $celsius + 273;
          echo "Grados celsius  : $celsius </br>";
          echo "El Resultado en grados kelvin es : ";
          echo "$resultado";
        } else if ($grados == "fahe") {
          $resultado = ($celsius*1.8)+32;
          echo "Gracos celsius : $celsius </br>";
          echo "El resultado en grados faherenheit es : ";
          echo "$resultado";
      }
      }
        echo grados(9,"kelvin");

      ?>
    </div>
  </body>
</html>
