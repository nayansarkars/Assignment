<?php
function sortGrades($grades) {
    // Sort the grades in descending order
    rsort($grades);
    
    // Print the sorted grades array
    print_r($grades);
}

// Create the $grades array
$grades = array(85, 92, 78, 88, 95);

// Call the function and pass the $grades array as an argument
sortGrades($grades);
?>
