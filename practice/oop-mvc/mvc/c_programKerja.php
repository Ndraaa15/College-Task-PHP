<?php

include_once "m_programKerja.php";
class c_programKerja
{

   public $model;
   public function __construct()
   {
      $this->model = new m_programKerja();
   }

   public function invoke()
   {
      $proker = $this->model->getAll();
      include 'v_programKerja.php';
   }

   public function onlyView()
   {
      $proker = $this->model->getAll();
      include 'v_viewOnly.php';
   }

   public function tambah()
   {
      $title = "Tambah Data";
      $status = "insert";
      include 'v_formInput.php';
   }

   public function edit($no)
   {
      $title = "Edit Data";
      $status = "update";
      $proker = $this->model->get($no);
      include 'v_formInput.php';
   }

   // Membuat funcion untuk melakukan CURD

   public function insert($no, $nama, $keterangan)
   {
      $this->model->setPogramKerja($no, $nama, $keterangan);
      header("Location:index.php");
   }

   public function update($no, $nama, $keterangan)
   {
      $this->model->updateProker($no, $nama, $keterangan);
      header("Location:index.php");
   }

   public function delete($no)
   {
      $this->model->deleteProker($no);
      header("Location:index.php");
   }
}
