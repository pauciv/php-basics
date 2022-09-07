<?php
  //Operadro ternario
  $condicion = true;
  $resultado = $condicion ? 'verdadero' : 'falso';
  echo $resultado;
  /*
    Es lo mismo que:
    if ($condicion) {
    $resultado = 'verdadero';
    } else {
    $resultado = 'falso';
    }
    echo $resultado;
  */

  echo "<br>";

  //Operador ternario encadenado
  $variable = 5;
//   echo ($variable > 0) ? "El número es mayor que 0" : ($variable < 0) ? "El número es menor que 0" : "El número es 0";
  /*  Es lo mismo que:
      if ($variable > 0){
        echo "El número es mayor que 0";
      } elseif ($variable < 0) {
        echo "El número es menor que 0";
      } else {
        echo "El número es 0";
      }
  */

  //Operador Elvis
  $variable = $valor ?: $valor_por_defecto;
  //El valor de $variable sería $valor si no es false. En caso contrario sería $valor_por_defecto
  /*  Es lo mismo que:
      if ($valor) {
        $variable = $valor;
      } else {
        $variable = $valor_por_defecto;
      }
  */

  //Operador Nulo
  $variable = $valor ?? $valor_por_defecto;
  //El valor de $variable sería $valor si este existe (isset()) y no es nulo. En caso contrario sería $valor_por_defecto
  /*  Es lo mismo que:
      if (isset($valor) && $valor !== null)  {
        $variable = $valor;
      } else {
        $variable = $valor_por_defecto;
      }
  */

?>