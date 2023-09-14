<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
        $num1 =8; $num2 =2; $operation = "add"; $result = "";

        // Perform the calculation based on the selected operation
        if ($operation == "add") {
            $result = $num1 + $num2;
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operation == "divide" && $num2 != 0) {
            $result = $num1 / $num2;
        } elseif ($operation == "divide" && $num2 == 0) {
            $result = "Error: Division by zero is not allowed.";
        }
    
    ?>
    <form>
        <label for="num1">Enter Number 1:</label>
        <input type="number" required value="8"><br><br>

        <label for="num2">Enter Number 2:</label>
        <input type="number" required value="2"><br><br>

        <label for="operation">Select Operation:</label>
        <select required>
            <option value="add" <?php if ($operation == "add") echo "selected"; ?>>Addition (+)</option>
            <option value="subtract" <?php if ($operation == "subtract") echo "selected"; ?>>Subtraction (-)</option>
            <option value="multiply" <?php if ($operation == "multiply") echo "selected"; ?>>Multiplication (*)</option>
            <option value="divide" <?php if ($operation == "divide") echo "selected"; ?>>Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the calculation result
    if ($result !== "") {
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
