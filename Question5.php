<?php

// Declare and initialize the array alpha
$alpha = array();

for ($i = 0; $i < 25; $i++) {
    $alpha[$i] = pow($i, 2);
}

for ($i = 25; $i < 50; $i++) {
    $alpha[$i] = 3 * $i;
}

// Print the array 10 element per line
echo "Array alpha:\n";
for ($i = 0; $i < 50; $i++) {
    echo $alpha[$i] . " ";
    if (($i + 1) % 10 == 0) {
        echo "\n";
    }
}

?>
