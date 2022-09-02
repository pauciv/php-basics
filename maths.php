<?php

//Define a variable whose value is the result of the function that returns an absolute value.
function returnAbsoluteValue($a) {
    return abs($a);
}

$absolute = returnAbsoluteValue(-20);
echo $absolute;
echo "<br><br>";

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
function roundValueToNextHighestInteger($a) {
    return ceil($a);
}

$rounded = roundValueToNextHighestInteger(5.1);
echo $rounded;
echo "<br><br>";

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
function returnHighestValue($a) {
    return max($a);
}

$highest = returnHighestValue([4,10,2,8]);
echo $highest;
echo "<br><br>";

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
function returnLowestValue($a) {
    return min($a);
}

$lowest = returnLowestValue([4,10,2,8]);
echo $lowest;
echo "<br><br>";

//Define a variable whose value is the result of the function that returns a random number
function randomNumber() {
    return rand(); //mt_rand()
}

$lowest = randomNumber();
echo $lowest;
echo "<br><br>";

?>