<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Funcion 4</title>
  </head>
  <body>
    <div class="uno">
      <?php


      function operaciones($n1, $n2,$operacion){
        $resultado=0;
        if ($operacion == "sumar") {
          $resultado = $n1+$n2;
          echo "Numero 1 : $n1 </br>";
          echo "Numero 2 : $n2 </br>";
          echo "El Resultado de la suma es : ";
          echo "$resultado";
        } else if ($operacion == "restar") {
          $resultado = $n1-$n2;
          echo "Numero 1 : $n1 </br>";
          echo "Numero 2 : $n2 </br>";
          echo "El resultado de la resta es : ";
          echo "$resultado";
        } else if ($operacion == "multiplicar") {
          $resultado = $n1*$n2;
          echo "Numero 1 : $n1 </br>"; 
          echo "Numero 2 : $n2 </br>";
          echo "El el resultado de la multiplicacion es : ";
          echo "$resultado";
        } else if ($operacion == "dividir") {
          $resultado = $n1/$n2;
          echo "Numero 1 : $n1 </br>";
          echo "Numero 2 : $n2 </br>";
          echo "El el resultado de la division es : ";
          echo "$resultado";
        } else if ($operacion == "potencia") {
          $resultado = pow($n1,$n2);
          echo "Numero 1 : $n1 </br>";
          echo "Numero 2 : $n2 </br>";
          echo "La potencia de los numeros es : ";
          echo "$resultado";
        } else if ($operacion == "raiz") {
          $resultado = sqrt($n1);
          echo "Numero 1 : $n1 </br>";
          echo "Numero 2 : $n2 </br>";
          echo "La raiz de numero 1 es : ";
          echo "$resultado";
          echo "</br>";
          $resultado = sqrt($n2);
          echo "La raiz de numero 2 es : ";
          echo "$resultado";
        }
      }
        echo operaciones(9,3,"potencia");



      ?>
    </div>
  </body>
</html>
