<?php

session_start();

$arr = $_SESSION['arr'];

$name = $arr['name'];
$nim = $arr['nim'];
$num = $arr['num'];
$result = $arr['result'];

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Session</title>
</head>
<body>
  <h3>Hasil Perhitungan Faktorial (Session)</h3>
  <p>Nama : <?php echo $name ?></p>
  <p>NIM : <?php echo $nim ?></p>
  <p>Angka : <?php echo $num ?></p>
  <p>Hasil Faktorial : <?php echo $result ?></p>
</body>
</html>