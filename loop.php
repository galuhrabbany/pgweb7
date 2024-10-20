<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Galuh</title>
</head>
<body>
    <?php  
    $i = 2;

    do {
    echo $i;
    $i++;
    } while ($i < 10);
    ?> 

<?php  
    for ($x = 0; $x <= 12; $x++) {
    if ($x == 5) continue;
    echo "<br>";
    echo "The number is: $x <br>";
}
?>  

</body>
</html>