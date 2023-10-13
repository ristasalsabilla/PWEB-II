<?php
// memasukkan atau impor file
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
// membuat objek database
$database = new database();
// mendapatkan koneksi database
$db = $database->getKoneksi();
// kondisi
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    // membuat objek baru
    $mahasiswaController = new MahasiswaController($db);
    // membuat data mahasiswa baru
    $result = $mahasiswaController->createMahasiswa($nim, $nama, $alamat);
    // cek hasil createMahasiswa
    if ($result) {
        // jika berhasil, diarahkan ke halaman mahasiswa
        header("location: mahasiswa");
    } else {
        // jika gagal, diarahkan ke halaman tambah
        header("location: tambah");
    }
}
