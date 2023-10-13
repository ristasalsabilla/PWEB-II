<?php
// mengimpor file
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
// membuat objek database 
$database = new database();
// mendapatkan koneksi database
$db = $database->getKoneksi();
// kondisi
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // membuat objek baru
    $mahasiswaController = new MahasiswaController($db);
    // menghapus data mahasiswa berdasarkan id
    $result = $mahasiswaController->deleteMahasiswa($id);

    if ($result) {
        // jika berhasil, diarahkan ke halaman mahasiswa
        header("location: /jobsheet5/mahasiswa");
    } else {
        // jika gagal, menampilkan pesan 
        echo "Gagal menghapus data";
    }
}
