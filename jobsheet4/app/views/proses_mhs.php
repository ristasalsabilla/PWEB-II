<?php
// menghubungkan ke file database
include '../classes/database.php';
$db = new database();// objek baru

// untuk mengeksekusi "aksi"
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=berhasil");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=sukses&id=" . $_POST['id']);
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php?pesan=done&id=" . $_POST['id']);
}
