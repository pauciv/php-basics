<?php

// Create a function that given two numbers returns the sum of both
function sum($a, $b) {
    return $a + $b;
}
echo sum(1, 2);

echo "<br>";

// Create a function that given two numbers returns the multiplication of both
function multiply($a, $b) {
    return $a * $b;
}
echo multiply(1, 2);

echo "<br>";

// Create a function that given two numbers returns the division of both
function divide($a, $b) {
    return $a / $b;
}
echo divide(1, 2);

echo "<br>";

// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function operate($a, $b, $operation) {
    if($operation == "+") {
        return sum($a, $b);
    } else if ($operation == "*") {
        return multiply($a, $b);
    } else if ($operation == "/") {
        return divide($a, $b);
    } else {
        return "error";
    }
}
echo operate(3, 2, "*");

echo "<br>";

?>