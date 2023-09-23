<?php
// Load common stop words into an array
$stop_words = array("the", "and", "in", "to", "of", "a", "for", "on", "with", "as");

// Get user input
$input_text = $_POST["text"];
$sort_order = $_POST["sort"];
$display_count = $_POST["limit"];

// Tokenize the input text
$words = str_word_count(strtolower($input_text), 1);

// Calculate word frequencies
$word_count = array_count_values($words);

// Remove stop words
foreach ($stop_words as $stop_word) {
    unset($word_count[$stop_word]);
}

// Sort the word frequencies based on user choice
if ($sort_order == "ascending") {
    asort($word_count);
} else {
    arsort($word_count);
}

// Limit the number of words to display
$top_words = array_slice($word_count, 0, $display_count);

// Display the results
echo "<h2>Word Frequencies:</h2>";
echo "<table>";
echo "<tr><th>Word</th><th>Frequency</th></tr>";
foreach ($top_words as $word => $frequency) {
    echo "<tr><td>$word</td><td>$frequency</td></tr>";
}
echo "</table>";
?>
