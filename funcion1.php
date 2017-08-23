<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Funcion 1</title>
  </head>
  <body>
    <div class="uno">
      <?php

      function saludo($saludo){
        if ($saludo=="Hola") {
          echo "Hola Mundo";
        }
      }
      echo saludo("Hola");
      ?>
    </div>
  </body>
</html>
