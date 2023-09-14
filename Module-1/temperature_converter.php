<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Define variables for temperature values and conversion direction
    $temperature =15; // Change this value as needed
    $conversion = "c_to_f"; 

    // Function to perform temperature conversion
    
    function convertTemperature($temp, $conversion) {
        global $unitType;
        if ($conversion == "c_to_f") {
            $unitType = "&deg;F";
            return ($temp * 9/5) + 32;
        } else {
            $unitType = "&deg;C";
            return ($temp - 32) * 5/9;
        }
    }

    // Perform the temperature conversion
    $converted_temperature = convertTemperature($temperature, $conversion);

    // Display the result
    if($conversion=="c_to_f"){
        $originType="&deg;C";
        echo "<p>Original Temperature: $temperature $originType</p>";
    }
    else{
        $originType="&deg;F";
       echo "<p>Original Temperature: $temperature $originType</p>";
    }

   
    if ($conversion == "c_to_f") {
        echo "<p>Converted Temperature: $converted_temperature $unitType</p>";
    } else {
        echo "<p>Converted Temperature: $converted_temperature $unitType</p>";
    }
    ?>
</body>
</html>
