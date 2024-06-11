<?php
// Problem Number 04
function printPattern($n) {
    // Loop through each level of the pattern
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = $i; $j < $n; $j++) {
            echo " ";
        }
        // Print *
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Move to the next line
        echo "\n";
    }
}

// Print the pattern
printPattern(5);