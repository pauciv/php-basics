<?php

// https://www.php.net/manual/en/language.types.php

$boolean = false;
var_dump($boolean);
echo "<br><br>";

$integer = 3;
var_dump($integer);
echo "<br><br>";

$float = 1.5;
var_dump($float);
echo "<br><br>";

$string = "hello";
var_dump($string);
echo "<br><br>";

$null = null;
var_dump($null);
echo "<br><br>";

//Array -----
$arrColores = ["rojo", "verde", "azul"];
// $arrColores = array("rojo", "verde", "azul");

echo "Variable Array: $arrColores[1]. | Dump: ";
var_dump($arrColores);
echo "<br><br>";

//Array con Propiedades -----
$arrVerduras = [
    "verdura1"=>"calabacín", 
    "verdura2"=>"berenjena"
];
// $arrVerduras = (array("verdura1"=>"calabacín", "verdura2"=>"berenjena"));

echo "Variable Array con Propiedades: $arrVerduras[verdura1]. | Dump: "; //En lugar de seleccionar con el índice, lo hacemos a través de su propiedad.
var_dump($arrVerduras);
echo "<br><br>";

//Array Objeto -----
$objFrutas = (object)["fruta1"=>"manzana", "fruta2"=>"pera"];
echo "Variable Objeto: $objFrutas->fruta1. | Dump: ";
var_dump($objFrutas);
echo "<br><br>";

?>