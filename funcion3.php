<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Funcion 3</title>
  </head>
  <body>
    <div class="uno">
      <?php


      function cuadrado($p1, $p2, $p3, $promedio){
        $resultado=0;
        if ($promedio == "calcular") {
          $resultado = ($p1+$p2+$p3)/3;

          echo "Precio 1 : $p1 </br>";
          echo "Precio 2 : $p2 </br>";
          echo "Precio 3 : $p3 </br>";
          echo "El promedio es : ";
          echo "$resultado";
        }
      }
        echo cuadrado(3000,3000,3000, "calcular");



      ?>
    </div>
  </body>
</html>
