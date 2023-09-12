<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    $temperature = 22; 

    if ($temperature <= 0) {
        echo "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "It's cool.";
    } else {
        echo "It's warm.";
    }
    ?>

</body>
</html>
