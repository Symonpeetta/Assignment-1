<?php

// Accept input from user
echo "Enter a string: ";
$inputString = rtrim(fgets(STDIN));

$upperCaseString = strtoupper($inputString);

// Output the string in uppercase
echo "String in uppercase: $upperCaseString\n";

?>
