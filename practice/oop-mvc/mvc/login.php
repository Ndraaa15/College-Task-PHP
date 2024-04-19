<?php
session_start();


if (isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (($username === 'menteri' && $password === 'menteri') || ($username === 'kepaladepartment' && $password === 'kepaladepartment')) {
    if ($username === 'menteri') {
      $_SESSION['username'] = 'menteri';
    } else {
      $_SESSION['username'] = 'kepaladepartment';
    }
    header("Location: index.php");
    exit;
  } else {
    $error = "username and password is incorrect!";
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
  <h1>Login</h1>
  <?php if (isset($error)) : ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="username">Username: </label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password: </label><br>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>

</html>