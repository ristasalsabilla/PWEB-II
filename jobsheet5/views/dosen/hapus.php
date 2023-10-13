<?php
// mengimpor file
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
// membuat objek database 
$database = new database();
// mendapatkan koneksi database
$db = $database->getKoneksi();
// kondisi
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // membuat objek baru
    $dosenController = new DosenController($db);
    // menghapus data dosen berdasarkan id
    $result = $dosenController->deleteDosen($id);

    if ($result) {
        // jika berhasil, diarahkan ke halaman dosen
        header("location: /jobsheet5/dosen");
    } else {
        // jika gagal, menampilkan pesan 
        echo "Gagal menghapus data";
    }
}
