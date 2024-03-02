<?php

// Function to compute the addition of two matrices
function addMatrices($matrix1, $matrix2) {
    $result = array();

    // Check if matrices have the same dimensions
    if (count($matrix1) != count($matrix2) || count($matrix1[0]) != count($matrix2[0])) {
        return "Matrices must have the same dimensions for addition.";
    }


    for ($a = 0; $a < count($matrix1); $a++) {
        for ($b = 0; $b < count($matrix1[$a]); $b++) {
            $result[$a][$b] = $matrix1[$a][$b] + $matrix2[$a][$b];
        }
    }

    return $result;
}

echo "Enter the number of rows for the matrices: ";
$rows = intval(trim(fgets(STDIN)));

echo "Enter the number of columns for the matrices: ";
$columns = intval(trim(fgets(STDIN)));

$matrix1 = array();
$matrix2 = array();

// Input values for the first matrix
echo "Enter values for the first matrix:\n";
for ($a = 0; $a < $rows; $a++) {
    echo "Row $a: ";
    $row = explode(" ", trim(fgets(STDIN)));
    $matrix1[] = $row;
}

echo "Enter values for the second matrix:\n";
for ($a = 0; $a < $rows; $a++) {
    echo "Row $a: ";
    $row = explode(" ", trim(fgets(STDIN)));
    $matrix2[] = $row;
}

$resultMatrix = addMatrices($matrix1, $matrix2);

// Output the result
echo "Result Matrix:\n";
foreach ($resultMatrix as $row) {
    echo implode(" ", $row) . "\n";
}

?>
