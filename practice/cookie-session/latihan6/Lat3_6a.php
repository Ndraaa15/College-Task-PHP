<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
  echo "Welcome, ".$_SESSION['username']."<br>";
} else {
  header("Location: login.php");
}

$cd_order = 0;
$dvd_order = 0;

if(isset($_COOKIE['cd_order'])) $cd_order = $_COOKIE['cd_order'];
if(isset($_COOKIE['dvd_order'])) $dvd_order = $_COOKIE['dvd_order'];
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Order Form</title>
</head>

<body>
  <form action="Lat3_6b.php" method="post">
    <p>
      Order CD, amount:
      <input type="text" name="cd_order" value="<?php echo $cd_order ?>" size="2" maxlength="2" />
    </p>
    <p>
      Order DVD, amount:
      <input type="text" name="dvd_order" value="<?php echo $dvd_order ?>" size="2" maxlength="2" />
    </p>
    <input type="submit" value="Add To Cart" name="submit" />
  </form>
  <br>
  <a href="logout.php">Log Out</a>
</body>

</html>