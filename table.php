<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Tabel Galuh</title>
</head>
<body>
<?php  
$fruits = array("Apple", "Medicine", "Tamarind","Salt","Cucumber" );
$taste = array("Sweet", "Bitter", "Sour", "Salty", "Fresh");
$cost = array("$1", "$6", "$2.7", "$1.2", "$2");

echo "<table border='1'>";
for ($i=0; $i<=4; $i++){
echo"<tr><td> $fruits[$i] </td><td> $taste[$i]</td><td> $cost[$i]</td></tr>";
}
echo "</table";
?>
</body>
</html>