<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <?php
    // Define variables for two numbers
    $number1 = 55; // Change this value as needed
    $number2 = 45; // Change this value as needed

    // Use the ternary operator to determine the larger number
    $largerNumber = ($number1 > $number2) ? $number1 : $number2;

    // Display the result
    echo "<p>Number 1: $number1</p>";
    echo "<p>Number 2: $number2</p>";
    echo "<p>The larger number is: $largerNumber</p>";
    ?>
</body>
</html>
