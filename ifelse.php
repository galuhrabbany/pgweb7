<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else-elseif Galuh</title>
</head>
<body>
    
<?php
$t = 98;
echo "<p>Nilai ujian anda pada mata kuliah Aerial Survei adalah " . $t; 
echo ", jika terdapat kendala harap hubungi tim dosen terkait.</p>";

    if ($t < "65") {
    echo "Maaf anda tidak lulus CPMK.";
    } elseif ($t < "80") {
    echo "Nilai anda mendapat predikat B.";
    } else {
    echo "Selamat anda mendapat nilai A!";
    }
    ?>
</body>
</html>