<?php
function modifyText($text) {
    // Convert the string to all lowercase
    $text = strtolower($text);
    
    // Replace "brown" with "red" in the string
    $text = str_replace("brown", "red", $text);
    
    // Print the modified text
    echo $text;
}

// Create the $text variable
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function and pass the $text variable as an argument
modifyText($text);

?>