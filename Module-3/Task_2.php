<?php
$mainArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 

function removeEvenNumbers($arr) {
    return array_filter($arr, function ($num) {
        return $num % 2 !== 0;  
    });
}

$oddNumbers = removeEvenNumbers($mainArr);  

echo "Original array: " . implode(", ", $mainArr) . "\n";

echo "Array after removing even numbers: " . implode(", ", $oddNumbers);

?>

