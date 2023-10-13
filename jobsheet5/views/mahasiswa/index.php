<?php
// memasukkan atau impor file
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
// mendapatkan koneksi database
$db = $database->getKoneksi();
// membuat objek baru
$mahasiswaController = new MahasiswaController($db);
// mengambil semua data mahasiswa
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<h2>Data Mahasiswa</h2>
<br>
<!-- tombol tambah mahasiswa -->
<a class="btn btn-primary" href="tambah">+ Tambah Mahasiswa</a>
<br><br>
<table class="table table-striped table-bordered" style="text-align:center">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    // perulangan
    foreach ($mahasiswa as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">Edit</a>
                <!-- menampilkan pesan konfirmasi sebelum menghapus -->
                <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>" onclick=" return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>