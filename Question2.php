<?php

// Function that find the index of the smallest element in an array
function smallestIndex($arr, $size) {
    if (empty($arr)) {
        return -1; // Return -1 if the array is empty
    }

    $smallest = $arr[0];
    $smallestIndex = 0;

    for ($i = 1; $i < $size; $i++) {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $smallestIndex = $i;
        }
    }

    // Return the index of the smallest element
    return $smallestIndex;
}

// Testing the function
$testArray = [5, 3, 8, 1, 9];
$testSize = count($testArray);
$smallestIdx = smallestIndex($testArray, $testSize);

echo "The smallest element is at index: $smallestIdx\n";

?>
