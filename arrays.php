<?php

// Strings
echo "<h3>Strings</h3>";
$arrStrings = ["a", "b", "c"];
var_dump($arrStrings);
echo "<br>";

// Numbers
echo "<h3>Numbers</h3>";
$arrNumbers = [3, 4.2, 1];
var_dump($arrNumbers);
echo "<br>";

// Multidimensional
echo "<h3>Multidimensional</h3>";
$arrMultidimensional = [
    "Pau",
    ["a", "b", "c"],
    [3, 4.2, 1]
];
var_dump($arrMultidimensional);
echo "<br>";

// Length
echo "<h3>Length</h3>";
$arrLength = count($arrStrings);
echo $arrLength;
echo "<br>";

// Combination
echo "<h3>Combination</h3>";
$arrCombination = array_merge($arrStrings, $arrNumbers);
print_r(array_merge($arrStrings, $arrNumbers)); 
echo "<br>";
var_dump($arrCombination);
echo "<br>";

// Last element of an array
echo "<h3>Last element of an array</h3>";
$arrLastElement = end($arrStrings);
echo $arrLastElement;
echo "<br>";

// New element to an array
echo "<h3>New element to an array</h3>";
$arrAddElement = array_push($arrStrings, "d", "e");
print_r($arrStrings); 
echo "<br>";
var_dump($arrStrings);
echo "<br>";

echo $arrAddElement;
echo "<br>";

?>