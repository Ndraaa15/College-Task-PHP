<!DOCTYPE html>
<html>

<head>
  <title>Program Kerja BEM</title>
</head>

<body>
  <h2>Daftar Program Kerja BEM</h2>
  <table border="1">
    <tbody>
      <tr>
        <td>No</td>
        <td>Nama Program Kerja</td>
        <td>Surat Keterangan</td>
      </tr>
    </tbody>
    <?php
    if ($proker == null) {
      echo "<tr><td colspan='4'>Data Kosong</td></tr>";
    } else {
      foreach ($proker as $prokerOnly) {
        echo "<tr>",
        "<td>{$prokerOnly['nomorProgram']}</td>",
        "<td>{$prokerOnly['namaProgram']}</td>",
        "<td>{$prokerOnly['suratKeterangan']}</td>",
        "</tr>";
      }
    }
    echo "</table>";
    ?>
    <br>
    <a href="logout.php">logout</a>
</body>

</html>