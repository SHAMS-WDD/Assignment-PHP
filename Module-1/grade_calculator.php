<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Define variables for test scores
    $score1 = 92; // Change these values as needed
    $score2 = 88; // Change these values as needed
    $score3 = 90; // Change these values as needed

    // Calculate the average
    $average = ($score1 + $score2 + $score3) / 3;

    // Determine the grade based on the average
    $grade = '';

    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    // Display the result
    echo "<p>Test Scores: $score1, $score2, $score3</p>";
    echo "<p>Average Score: $average</p>";
    echo "<p>Grade: $grade</p>";
    ?>
</body>
</html>
