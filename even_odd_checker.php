<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
</head>
<body>
   <h1>Even or Odd Checker</h1>
   <form method="post">
   <label for="number">Enter a Number:</label>
   <input type="number" name="number" id="number" required>
   <input type="submit" value="check">
   </form>
   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];

    if($number % 2 == 0){
        echo"$number is an even number.";
    } else {
        echo"$number is an odd number.";
    }
   }
   ?>
</body>
</html>