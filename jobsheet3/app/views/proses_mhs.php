<?php
// menghubungkan ke file database
include '../classes/database.php';
$db = new database(); // objek database baru

// untuk mengeksekusi "aksi"
$aksi = $_GET['aksi'];
// jika aksi adalah tambah, maka tambah data mahasiswa
if ($aksi == "tambah") {
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php");
}
