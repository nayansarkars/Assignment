<?php
function removeEvenNumbers($numbers) {
    $result = array();
    // Iterate through each number in the array
    foreach ($numbers as $number) {
        // Check if the number is odd
        if ($number % 2 != 0) {
            // Add the odd number to the result array
            $result[] = $number;
        }
    }
    print_r($result);
}
// Create the $numbers array containing the numbers 1 to 10
$numbers = range(1, 10);
// Call the function and pass the $numbers array as an argument
removeEvenNumbers($numbers);
?>