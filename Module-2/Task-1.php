<?php
function printEvenNumbers($start, $end, $step) {
    // Ensure the start is even
    if ($start % 2 != 0) {
        $start++;
    }

    // Iterate through the range and print even numbers
    for ($i = $start; $i <= $end; $i += $step) {
        if($i==$end){
            echo $i . ".";
        }else{
            echo $i . ", ";
        }
        
    }
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbers(1, 20, 2);
?>