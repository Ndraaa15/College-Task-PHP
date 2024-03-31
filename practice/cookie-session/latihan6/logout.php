<?php
session_start();
session_destroy();

setcookie("cd_order", "", time()-3600);
setcookie("dvd_order", "", time()-3600);
header("Location: login.php");