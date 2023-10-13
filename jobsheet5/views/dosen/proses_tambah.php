<?php
// memasukkan atau impor file
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
// membuat objek database
$database = new database();
// mendapatkan koneksi database
$db = $database->getKoneksi();
// kondisi
if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    // membuat objek baru
    $dosenController = new DosenController($db);
    // membuat data dosen baru
    $result = $dosenController->createDosen($nidn, $nama, $tempat_lahir, $alamat);
    // cek hasil createDosen
    if ($result) {
        // jika berhasil, diarahkan ke halaman dosen
        header("location: dosen");
    } else {
        // jika gagal, diarahkan ke halaman tambahdosen
        header("location: tambahdosen");
    }
}
