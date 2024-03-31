<?php
session_start();

require_once 'calculator.php';

$calc = new Calculator();

if(isset($_POST['submit'])) {
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $operation = $_POST['operation'];

  if($operation == 'add') {
    $result = $calc->add($number1, $number2);
  } elseif($operation == 'subtract') {
    $result = $calc->subtract($number1, $number2);
  } elseif($operation == 'multiply') {
    $result = $calc->multiply($number1, $number2);
  } elseif($operation == 'divide') {
    $result = $calc->divide($number1, $number2);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
</head>
<body>
  <div style="display: flex; flex-direction:column;padding:0% 40%;text-align:center;">
    <h1>Simple Calculator</h1>
    <form action="index.php" method="post" style="display: flex; flex-direction:column;gap:10px">
      <input type="text" name="number1" placeholder="Enter first number" required>
      <input type="text" name="number2" placeholder="Enter second number" required>
      <select name="operation">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
      </select>
      <button type="submit" name="submit">Calculate</button>
    </form>
    <?php
      if (isset($result)) {
        echo "<h2>Result: $result</h2>";
      }
    ?>
    <?php
      if (isset($calc->history)) {
        $reversedHistory = array_reverse($calc->history);
        echo "<h2>History</h2>";
        foreach ($reversedHistory as $value) {
          echo $value;
          echo "<br>";
        }
      }
    ?>
  </div>
</body>
</html>







