<?php

function sortGradesDescending($grades) {
    rsort($grades);
    return $grades;
}

$grades = [85, 92, 78, 88, 95];

echo "Original grades array: " . implode(", ", $grades) . "\n";

// Sort the grades in descending order
$sortedGrades = sortGradesDescending($grades);

print_r($sortedGrades);
?>
