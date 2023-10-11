<?php
// untuk menghubungkan ke databasedosen
include '../classes/databasedosen.php';
$db = new database(); // inisiasi

// untuk mengeksekusi "aksi"
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['alamat']);
    header("location:tampil_dosen.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['alamat']);
    header("location:tampil_dosen.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_dosen.php");
}
