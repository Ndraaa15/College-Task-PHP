<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $teamName = $_POST['team'];
    $originTeam = $_POST['origin'];
    $categoryTeam = $_POST['category'];
    $contactTeam = $_POST['contact'];
    $paymentProof = $_FILES['payment-proof'];

    $checkExtResult = checkExtension($paymentProof);
    $dirStorage = "./storage/" . $teamName . "-" . $originTeam . "-" . $categoryTeam . "." .  $checkExtResult[1];
    if (file_exists($dirStorage)) {
      echo "File already exists";
      return;
    }


    if (!$checkExtResult[0]) {
      echo "File extension not allowed";
      return;
    }

    move_uploaded_file($_FILES['payment-proof']['tmp_name'], $dirStorage);
  }
}

function checkExtension($file)
{
  $allowed =  array('png', 'jpg');
  $filename = $file['name'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if (!in_array($ext, $allowed)) {
    return [false, $ext];
  }
  return [true, $ext];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Page</title>
  <style>
    body{
      font-family: poppins;
    }
    .table {
      width: 100%;
      border: 1px solid black;
      border-collapse: collapse;
    }

    .table th {
      background-color: gray;
    }

    .table th, td {
      border: 1px solid black;
      text-align: center;
      padding: 8px;
    }

    .payment-proof {
      width: 200px;
      height: 200px;
    }
  </style>
</head>

<body>
  <table class="table">
    <tr>
      <th>Team Name</th>
      <th>Origin</th>
      <th>Category</th>
      <th>Contact</th>
      <th>Payment Proof</th>
    </tr>
    <tr>
      <td><?php echo $teamName ?></td>
      <td><?php echo $originTeam ?></td>
      <td><?php echo $categoryTeam ?></td>
      <td><?php echo $contactTeam ?></td>
      <td><img src="<?php echo $dirStorage ?>" alt="Payment Proof" class="payment-proof"></td>
    </tr>
  </table>
</body>

</html>