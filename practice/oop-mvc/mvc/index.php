<?php
include_once "c_programKerja.php";

session_start();
$user = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$controller = new c_programKerja();

// Angka 1 dugunakan agar tidak terjadi error Undefined Array
$status = $_GET['status'] ?? $_POST['status'] ?? 1;

// Dilakukan switch sesuai dengan status yang didapat
if ($user == "kepaladepartment") {
    switch ($status) {
        case 'tambah':
            $controller->tambah();
            break;

        case 'edit':
            $controller->edit($_GET['no']);
            break;

        case 'delete':
            $controller->delete($_GET['no']);
            break;

        case 'insert':
            $controller->insert($_POST['nomorProgram'], $_POST['namaProgram'], $_POST['suratKeterangan']);
            break;

        case 'update':
            $controller->update($_POST['nomorProgram'], $_POST['namaProgram'], $_POST['suratKeterangan']);
            break;
        default:
            $controller->invoke();
            break;
    }
} elseif ($user == "menteri") {
    $controller->onlyView();
}
