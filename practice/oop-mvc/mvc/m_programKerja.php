<?php

require "koneksiMVC.php";

class m_programKerja
{
    private $database;
    protected $tablename = "proker";

    public function __construct()
    {
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }

    // Add Program Kerja
    public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $this->database->query("INSERT INTO $this->tablename VALUES ('$nomorProgram','$namaProgram','$suratKeterangan')");
    }

    // Update Program Kerja

    public function updateProker($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $this->database->query("UPDATE $this->tablename SET nomorProgram='$nomorProgram', namaProgram = '$namaProgram', suratKeterangan = '$suratKeterangan' WHERE nomorProgram = $nomorProgram");
    }

    // Delete Program Kerja
    public function deleteProker($nomorProgram)
    {
        $this->database->query("DELETE FROM $this->tablename WHERE $nomorProgram = nomorProgram");
    }

    // Get All ProgramKerja
    public function getAll()
    {
        $result = $this->database->query("SELECT * FROM $this->tablename");
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return []; // or handle the error accordingly
        }
    }


    // Get semua data berdasarkan nomor kerja
    public function get($nomorProgram)
    {
        return $this->database->query("SELECT * FROM $this->tablename WHERE nomorProgram = $nomorProgram")->fetch_assoc();
    }
}
