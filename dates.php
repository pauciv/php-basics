<?php

// Documantation: 
// https://www.php.net/manual/es/function.date.php
// https://www.youtube.com/watch?v=R88DKPL_iNU

// date(string $format, int $timestamp);

# (Código Tony) Establecer zona horaria
// date_default_timezone_set("Europe/Madrid");

//Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
$dateTimeInstanced = new dateTime();
echo date_format($dateTimeInstanced, "Y-m-d");

//Get the current date in any format
$currentDate = date("d-m-y");
echo "Current Date (num format): $currentDate", "<br>";

$currentDateLetters = date("D-M-Y"); //por qué no lo hace en formato escrito?
echo "Current Date (let format): $currentDateLetters", "<br>";

//Get the current day
$currentDay = date("D");
echo "Current Day: $currentDay", "<br>";

//Get the current month in numerical format (1-12)
$currentMonth = date("m");
echo "Current Month: $currentMonth", "<br>";

//Get the current minute with leading zeros (00 - 59)
$currentMinute = date("i");
echo "Current Minute: $currentMinute", "<br>";

$currentHourMinuteSecond = date("h:i:s a");
echo "Current Hour, Minute and Second: $currentHourMinuteSecond", "<br>";

//Get the current miliseconds
echo "<h2>time()</h2>";
$currentMilisecond = time();
var_dump($currentMilisecond);
echo "Current Miliecond: $currentMilisecond", "<br>";

//Increment time in miliseconds
$time = time() + 1000;
echo "Date + 1000 miliseconds: " . date("d-m-y h:i:s a", $time), "<br>";

//Read timestamp
echo "<h2>getdate()</h2>";

$date = getdate();
var_dump($date);

?>