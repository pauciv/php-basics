<?php

//https://www.w3schools.com/php/php_ref_string.asp

// Print a text string
print "Print a text string. <br>";

// Print a text string that interpret variables
$number = 23;
print "I'm $number years old. <br>";

// Concatenate a previously declared variable in a text string
print "I'm " . $number . " years old. <br><br>";

$string = "I'm a string and I will be modifyed. ";
echo $string, "<br>";

// Execute the function that allows you to replace text in a string (case sensitive)
# str_replace ( $searchVal, $replaceVal, $subjectVal, $count )
echo "<h3>Replace Text in a String | str_replace()</h3>";
echo str_replace("and", "Modification in the string", $string), "<br>";
echo str_replace("a", "A", $string), "<br>";

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)

// Execute the function that allows you to write a text N times
# str_repeat ( string $input, int $multiplier )
echo "<h3>Write a text N times | str_repeat()</h3>";
echo str_repeat($string, 3), "<br>";

// Execute the function that allows to obtain the length of a text string
echo "<h3>Obtain the length of a text string | strlen()</h3>";
echo strlen($string), "<br>";

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo "<h3>Obtain the position of the first occurrence of a text | strpos()</h3>";
echo strpos($string, "a"), "<br>";

// Execute the function that allows a text string to be capitalized
echo "<h3>Capitalize the string | strtoupper()</h3>";
echo strtoupper($string), "<br>";

// Execute the function that allows you to transform a text string to lowercase
echo "<h3>Lowercase the string | strtolower()</h3>";
echo strtolower($string), "<br>";

// Execute the function that allows to obtain a text substring from a given position
# substr(string,start,length)
echo "<h3>Obtain a text substring from a given position | substr()</h3>";
echo substr($string, 1, 7), "<br>";
echo substr($string, 1, -2), "<br>";
echo substr($string, 7), "<br>";

?>