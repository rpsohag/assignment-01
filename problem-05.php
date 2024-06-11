<?php
// Problem 05
function sumOfDigits($n) {
    // Convert the integer to a string
    $str = strval($n);

    // Initialize the sum
    $sum = 0;

    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        $sum += intval($str[$i]);
    }

    return $sum;
}


// Output the results
echo sumOfDigits(62343); // Output: 18
// echo sumOfDigits(1000); // Output: 1
