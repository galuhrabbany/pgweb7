<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case PHP</title>
</head>
<body>
<?php
$makan = "Ramen";

    switch ($makan) {
    case "Ramen":
        echo "Your favorite food is ramen!";
        break;
    case "Nasi Goreng":
        echo "Your favorite food is nasi goreng!";
        break;
    case "Sushi":
        echo "Your favorite food is sushi!";
        break;
    default:
        echo "Your favorite food is neither ramen, nasi goreng, nor sushi!";
    }
?>
</body>
</html>