<?php

echo "Enter three numbers separated by spaces: ";
$input = trim(fgets(STDIN));

$numbers = explode(" ", $input);
if (count($numbers) !== 3) {
    echo "Please enter three numbers.\n";
    exit;
}
// change strings to integers
$numbers = array_map('intval', $numbers);

// Sort the numbers in ascending order
sort($numbers);

//Display result
echo "Number input in ascending order: " . implode(" ", $numbers) . "\n";

?>
