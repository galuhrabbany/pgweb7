<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Galuh</title>
</head>
<body>
<?php
    function pesan() {
    echo "Aku mau pulang mbak 😟!";
    }

    pesan();
    ?> 

    <?php
    function matkul($fname) {
    echo "$fname SIG.<br>";
    }

    matkul("AS");
    matkul("PGPB");
    matkul("PGWEB");
    matkul("SIGPL");
    matkul("IUT");
    ?>

</body>
</html>