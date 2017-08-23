<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Funcion 2</title>
  </head>
  <body>
    <div class="uno">
      <?php

      function cuadrado($n1, $cuadrado){
        $resultado=0;
        if ($cuadrado == "cuadrado") {
          $resultado = $n1*$n1;
          echo "El cuadrado de $n1 es : $resultado";
        }
        return $resultado;
      }
        echo cuadrado(3, "cuadrado");
      ?>

    </div>
  </body>
</html>
