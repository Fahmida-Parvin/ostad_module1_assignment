<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Comparison Tool</title>
</head>
<body>
   <h1>Number Comparison Tool</h1>
   <form method="post">
       <label for="number1">Enter First Number:</label>
       <input type="number" name="number1" id="number1" required><br>
       
       <label for="number2">Enter Second Number:</label>
       <input type="number" name="number2" id="number2" required><br>
       
       <input type="submit" value="Compare">
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $number1 = $_POST["number1"];
       $number2 = $_POST["number2"];
       
       $largerNumber = ($number1 > $number2) ? $number1 : $number2;
       
       echo "The larger number is: $largerNumber";
   }
   ?>
</body>
</html>