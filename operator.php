<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Galuh</title>
</head>
<body>
    <?php
    $x = 15;
    $y = 5;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x;
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    echo $x ** $y;
    ?>

    <?php
    $x = 12; 
    echo "<br>"; 
    echo $x;
    ?>  

    <?php
    $x = 50;  
    $x += 120;
    echo "<br>";
    echo $x;
    ?> 

    <?php
    $x = 201;  
    $y = "202";
    echo "<br>";
    var_dump($x == $y); // returns true because values are equal
    ?>  

    <?php
    $x = "232";  
    $y = "232";
    echo "<br>";
    var_dump($x === $y); // returns false because types are not equal
    ?>  

<?php
$x = "Galuh";  
$y = "Galuh";

echo "<br>";
var_dump($x === $y); // returns false because types are not equal
?>  

</body>
</html>