<?php
function printFibonacci($n) {
    $fib = array(0, 1); 
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
    }

    for ($i = 0; $i < $n; $i++) {
        echo $fib[$i] . " ";
    }
}
printFibonacci(15);