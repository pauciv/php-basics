<?php

echo "<h1>Operators</h1>";

$a = 1;
$b = 2;
$c = "1";

//Arithmetic Operators
echo "<h2>Arithmetic</h2>";

var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a / $b);
var_dump($a % $b);
echo "<br>";

//Comparison Operators
echo "<h2>Comparison</h2>";

if ($a == $c) {
    echo "a es igual que c. <br>";
}

if ($a !== $c) {
    echo "a no es identica que c. <br>";
}

if ($a < $b) {
    echo "a es menor que b. <br>";
}

if ($a + $b > $b) {
    echo "a + b es mayor que b. <br>";
}

if ($a <= $b) {
    echo "a es inferior o igual que b. <br>";
}

if ($a * $b >= $b) {
    echo "a * b es superior o igual que b. <br>";
}

//Logical Operators
echo "<h2>Logical</h2>";
echo "<hr>";

//&& vs and
echo "<h3>&& / and</h3>";

$result1 = true && false; // (&&) has a higher precedence than (=).
$result2 = true and false; // (=) has a higher prececence than (and).

// if($result1) {
//     echo "es true (normal if)";
// } else {
//     echo "es false (normal if)";
// }
// echo "<br>";

// if($result2) {
//     echo "es true (normal if)";
// } else {
//     echo "es false (normal if)";
// }
// echo "<hr>";

#ternary operator
echo $result1 ? "es true" : "es false";
echo "<br>";
echo ($result2) ? "es true" : "es false";
echo "<br><br>";

# - without an (=) sign afecting the precedence both operators output the same.
echo (false && true) ? "es true" : "es false"; 
echo "<br>";
echo (false and true) ? "es true" : "es false";
echo "<hr>";

//|| vs or
echo "<h3>| | / or</h3>";

# - with an (=) sign afecting the precedence.
$result1 = false || true; // (||) has a higher precedence than (=).
$result2 = false or true; // (=) has a higher prececence than (or).

#simple way
echo($result1) ? "es true" : "es false";
echo "<br>";
echo($result2) ? "es true" : "es false";
echo "<br><br>";

# - without an (=) sign afecting the precedence both operators output the same.
echo(false || true) ? "es true" : "es false"; 
echo "<br>";
echo(false or true) ? "es true" : "es false";
echo "<hr>";

//XOR
echo "<h3>xor</h3>";

if ((true || true)) {
    echo "| |: true | | true = true. (pueden ser las dos true). <br>";
}

if ((true xor true)) {
    // no es true
} else {
    echo "xor: true xor true = false. (solo puede haber una true). <br>";
}
echo "<hr>";

//(!)
echo "<h3>!</h3>";

if (!(true && false)) {
    echo "!(true && false): es verdad que es mentira que esto sea true. <br>";
}
   
?>