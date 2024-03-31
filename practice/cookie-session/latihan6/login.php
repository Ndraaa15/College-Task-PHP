<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];
      header("Location: Lat3_6a.php");
    } else {
      echo "Username atau Password salah";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" value="Login">
  </form>
</body>

</html>