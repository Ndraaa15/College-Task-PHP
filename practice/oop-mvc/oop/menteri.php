<?php
include "pengurusBEM.php";

class menteri extends pengurusBEM
{
  private $nama;
  private $jabatan;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  function setJabatan($jabatan)
  {
    $this->jabatan = $jabatan;
  }
  public function getJabatan()
  {
    echo "$this->jabatan";
  }

  public function setNama($nama)
  {
    $this->nama = $nama;
  }

  public function getNama()
  {
    echo "$this->nama";
  }
}
