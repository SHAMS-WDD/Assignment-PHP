<?php

function calculateAverageGrades($grades) {
    $sum = array_sum($grades);
    $countgrades = count($grades);  // Added a semicolon here
    $average = $sum / $countgrades;
    if ($average>=80){
        $result="A+";
    }elseif($average>=70 && $average<80){
        $result="A";
    }elseif($average>=60 && $average<70){
        $result="A-";
    }elseif($average>=50 && $average<60){
        $result="B";
    }
    return $result;
}


$studentGrades = array(
    'student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'student2' => array('Math' => 50, 'English' => 90, 'Science' => 91),
    'student3' => array('Math' => 75, 'English' => 55, 'Science' => 78)
);

echo "Student Grades and Averages:\n";

foreach ($studentGrades as $student => $grades) {

    echo "Student: $student\n";
    echo "Grades: " . implode(", ", $grades) . "\n";
    echo "Average Grade: " . calculateAverageGrades($grades) . "\n\n";
}

?>
