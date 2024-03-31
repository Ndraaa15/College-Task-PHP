<?php
$brush_price = 5;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

// for ( $counter = 10; $counter <= 100; $counter += 5) {
//   echo "<tr><td>";
//   echo $counter;
//   echo "</td><td>";
//   echo $brush_price * $counter;
//   echo "</td></tr>";
// }

// $i = 10;
// while($i <= 100){
//   echo "<tr><td>";
//   echo $i;
//   echo "</td><td>";
//   echo $brush_price * $i;
//   echo "</td></tr>";
//   $i += 5;
// }

$j = 10;
do {
  echo "<tr><td>";
  echo $j;
  echo "</td><td>";
  echo $brush_price * $j;
  echo "</td></tr>";
  $j += 5;
}while($j <= 100);

echo "</table>";