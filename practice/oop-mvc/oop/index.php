<?php
require_once 'pengurusBEM.php';
require_once 'menteri.php';

$bem = new menteri("BEM");
$bem->setJabatan("BEM");
echo $bem->getJabatan();