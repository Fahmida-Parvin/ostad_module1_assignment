<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required><br>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required><br>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        $average = ($score1 + $score2 + $score3) / 3;

        switch (true) {
            case $average >= 90:
                $grade = 'A';
                break;

            case $average >= 80:
                $grade = 'B';
                break;

            case $average >= 70:
                $grade = 'C';
                break;

            case $average >= 60:
                $grade = 'D';
                break;

            default:
                $grade = 'F';
                break;
        }

        echo "Average Score: $average<br>";
        echo "Grade: $grade";
    }
    ?>   
</body>
</html>