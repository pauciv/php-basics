<?php

echo "<h1>Conditionals</h1>";

//Evaluate the current day
echo "<h3>Evaluate Current Day</h3>";

$currentDay = date("D");
var_dump($currentDay);

if ($currentDay === "Mon") {
    echo "We are on Monday.";
}

echo "<br>";

//Evaluate the current month
echo "<h3>Evaluate Current Month</h3>";

$currentMonth = date("M");
var_dump($currentMonth);

if ($currentMonth === "Oct") {
    echo "We are on Monday.";
} else {
    echo $currentMonth;
}

//Evaluate  the current minute
echo "<h3>Evaluate Current Minute</h3>";

$currentMinute = date("i");
var_dump($currentMinute);

if ($currentMinute < 10) {
    echo "the current minute is less than 10";
} elseif ($currentMinute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}

//Switch
echo "<h3>Switch to evaluate the Current Day</h3>";

$day = date("D");
var_dump($day);

switch ($day) {
    case "Mon":
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday.";
        break;
    case "Sat":
        echo "Today is Saturday.";
        break;
    default:
        echo "Today is Sunday.";
}

?>
