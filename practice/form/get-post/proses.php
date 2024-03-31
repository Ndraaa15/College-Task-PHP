<?php
if(isset($_GET['nama'])){
  $name = $_GET['nama'];
  echo "Hello, $name data ini didapatkan dari get" . "<br>";
}else if(isset($_POST['nama'])){
  $name = $_POST['nama'];
  echo "Hello, $name data ini didapatkan dari post" . "<br>";
}