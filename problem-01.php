<?php

// Problem Number 01

function findMinAbsoluteValue($arr) {
    $minAbsoluteValue = PHP_INT_MAX; // minimum value from a large number
    // iterate each number from given array
    foreach ($arr as $num) {
        $absoluteValue = abs($num); // take absulate value from current number

        // check if this absolute value is smaller than the current minimum then update the minimum value
        if ($absoluteValue < $minAbsoluteValue) {
            $minAbsoluteValue = $absoluteValue;
        }
    }

    return $minAbsoluteValue; // return updated minimum value
}


// Outputs
echo findMinAbsoluteValue([10, 12, 15, 189, 22, 2, 34]); // 2
// echo findMinAbsoluteValue([10, -12, 34, 12, -3, 123]); // 3