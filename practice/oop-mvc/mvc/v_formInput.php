<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- variable title dari c_programKerja -->
    <title><?= $title ?></title>
</head>

<body>
    <!-- variable title dari c_programKerja -->
    <h1><?= $title ?></h1>
    <!-- Membuat form yang berfungsi untuk Tambah data dan Edit data -->
    <!-- Variable proker dari c_program kerja -->
    <form action="index.php" method="post">
        <input type="text" name="status" value="<?= $status ?>" hidden>
        <label for="nomorProgram">Nomor Program</label>
        <input type="text" name="nomorProgram" id="nomorProgram" value="<?= $proker['nomorProgram'] ?? "" ?>">
        <br>
        <label for="namaProgram">Nama Program</label>
        <input type="text" name="namaProgram" id="namaProgram" value="<?= $proker['namaProgram'] ?? "" ?>">
        <br>
        <label for="suratKeterangan">Surat Keterangan</label>
        <input type="text" name="suratKeterangan" id="suratKeterangan" value="<?= $proker['suratKeterangan'] ?? "" ?>">
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>