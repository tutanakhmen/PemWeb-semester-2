<?php
 require_once('libfunction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Bagun Ruang dan Datar</title>
</head>
<body>
    <h1>Luas segitiga : <?= segitiga(2,3);?> </h1>
    <h1>Luas Vol persegi panjang : <?= persegiPanjang(2,3);?></h1>
    <h1>Volume Bangun Ruang Kubus : <?= kubus(7)?></h1>
    <h1>Volume Bangun Ruang Balok : <?= balok(3,4,5)?></h1>
</body>
</html>