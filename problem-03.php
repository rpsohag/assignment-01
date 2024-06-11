<?php

// Problem Number 03

function reverseCharactersInWords($sentence) {
    // Split the sentence into words
    $words = explode(' ', $sentence);

    // Reverse the characters of each word
    $reversedWords = array_map(function($word) {
        return strrev($word);
    }, $words);

    // Join the reversed words back into a sentence
    $reversedSentence = implode(' ', $reversedWords);

    return $reversedSentence;
}

// Get the result
echo reverseCharactersInWords("I love programming"); // I evol gnimmargorp