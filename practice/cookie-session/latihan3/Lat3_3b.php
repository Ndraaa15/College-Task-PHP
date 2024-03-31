<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $num = $_POST['number'];
    $result = countFactorial($num);
    $arr = array(
      'name' => "Gede Indra Adi Brata",
      'nim' => "225150200111006",
      'num' => $num,
      'result' => $result
    );
    
    $_SESSION['arr'] = $arr;
  }
}

function countFactorial($num): int
{
  if ($num == 0) {
    return 1;
  } else {
    return $num * countFactorial($num - 1);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Factorial</title>
</head>

<body>
  <h3>Hasil Perhitungan Faktorial</h3>
  <p>Angka :  <?php echo $num ?> </p>
  <p>Hasil Faktorial :  <?php echo $result ?> </p>
  <a href="Lat3_3c.php">Lanjutkan</a>
</body>

</html>