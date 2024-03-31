<?php
session_start();
$_SESSION["nama"] = $_POST["nama"];
header("location:Lat3_2c.php");
