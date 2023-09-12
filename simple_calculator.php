<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <form action="post">
            <h2>Basic Calculator</h2>
            <input type="number" name="num1"  id="number" placeholder="Enter First number" required><br>
            <input type="number" id="number" placeholder="Enter second number" name="num2"  required><br>
            <select name="Operation">
          <option value="add">Addition</option>
          <option value="subtract">Subtraction</option>
          <option value="multiply">Multiplication</option>
          <option value="divide">Division</option>
          <option value="add">Addition</option>
            </select> <br> 
            <button type="submit">Calculate</button>
        </form>
    </div>
    <?php
    echo $_SERVER['SERVER_NAME']
    ?>
</body>

</html>
!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" id="num1" required><br>
        <label for="num1">Enter Number 2:</label>
        <input type="number" name="num2" id="num1" required><br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: Division by zero.";
                }
                break;
            default:
                echo "Invalid operation selected.";
                break;
        }

        echo "Result: $result";
    }
    ?>
</body>
</html>