<?php

function operaciones($n1, $n2, $operacion){
$resultado = 0;
if ($operacion == "Suma") {
  $resultado = $n1 + $n2;
  echo "A elegido sumar los numeros $n1 y $n2 el resultado es = ";
} else if ($operacion == "Resta") {
  $resultado = $n1 - $n2;
  echo "A elegido restar los numeros $n1 y $n2 el rsultado es = ";
} else if ($operacion == "Multiplicar") {
  $resultado = $n1 * $n2;
  echo "A elegido multiplicar los numeros $n1 y $n2 el resultado es = ";
}
return $resultado;
}

echo operaciones(1, 8, "Multiplicar");
?>
