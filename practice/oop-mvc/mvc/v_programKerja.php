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
        <!-- Penambahan kolom aksi untuk melakukan CRUD -->
        <td>Aksi</td>
      </tr>
      <?php
      if ($proker == null) {
        echo "<tr><td colspan='4'>Data Kosong</td></tr>";
      } else {
        foreach ($proker as $prokerOnly) {
          echo "<tr>",
          "<td>{$prokerOnly['nomorProgram']}</td>",
          "<td>{$prokerOnly['namaProgram']}</td>",
          "<td>{$prokerOnly['suratKeterangan']}</td>",
          // tombol edit mengirim data menggunakan GET
          "<td><a href='index.php?status=edit&no={$prokerOnly['nomorProgram']}'>Edit</a>",
          " | <a href='index.php?status=delete&no={$prokerOnly['nomorProgram']}'>Delete</a></td>",
          "</tr>";
        }
      }
      echo "</table>";
      ?>
    </tbody>
  </table>
  <br>
  <a href="index.php?status=tambah"><button>Tambah Data</button></a><br><br>
  <a href="logout.php">Logout</a>
</body>

</html>