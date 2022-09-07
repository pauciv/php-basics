<?php

//For -----
for($i = 0; $i <= 5; $i++) {
    echo $i;
}
echo "<br>";

//For each -----
$arrColores = ["rojo", "verde", "azul"];
foreach ($arrColores as $color) {  //&$color ??
    echo "Color: $color. ";
}
echo "<br>";

//While -----
$n = 1;
while ($n < 5) {
    echo $n;
    $n++;
}
echo "<br>";

//Do while -----
$n = 1;
do {
    $n++;
    echo $n;
} while ($n <= 5);
echo "<br>";

?>