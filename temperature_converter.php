<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <form method="post">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br>
        <label for="conversion">Conversion:</label>
        <select name="conversion" id="conversion">
            <option value="celsius-to-fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit-to-celsius">Fahrenheit to Celsius</option>
        </select>

        <input type="submit" value="Convert">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $temperature = $_POST["temperature"];
        $conversionType = $_POST["conversion"];

        // Perform the temperature conversion
        if ($conversionType == "celsius-to-fahrenheit") {
            $result = ($temperature * 9/5) + 32;
            echo "<p>$temperature&deg;C is $result&deg;F</p>";
        } elseif ($conversionType == "fahrenheit-to-celsius") {
            $result = ($temperature - 32) * 5/9;
            echo "<p>$temperature&deg;F is $result&deg;C</p>";
        }
    }
    ?>
</body>
</html>