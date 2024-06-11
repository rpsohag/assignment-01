<?php

// Problem Number 02
function countWordsInFile($filePath) {
    // Check if the file exists or not
    if (!file_exists($filePath)) {
        return "File does not exist.";
    }

    // Read the file contents
    $fileContents = file_get_contents($filePath);

    // Remove any extra spaces and newlines
    $fileContents = trim($fileContents);

    // Count the number of words
    $wordCount = str_word_count($fileContents);

    return $wordCount;
}

// Specify the filename
$filePath = 'fileForCount.txt';


// Output the word count
echo countWordsInFile($filePath);