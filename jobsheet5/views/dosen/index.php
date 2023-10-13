<?php
// memasukkan atau impor file
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
// mendapatkan koneksi database
$db = $database->getKoneksi();
// membuat objek baru
$dosenController = new DosenController($db);
// mengambil semua data dosen
$dosen = $dosenController->getAllDosen();
?>

<h2>Data Dosen</h2>
<br>
<!-- tombol tambah dosen -->
<a class="btn btn-primary" href="tambahdosen">+ Tambah Dosen</a>
<br><br>
<table class="table table-striped table-bordered" style="text-align:center">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    // perulangan
    foreach ($dosen as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tempat_lahir'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="editdosen/<?php echo $x['id']; ?>">Edit</a>
                <!-- menampilkan pesan konfirmasi sebelum menghapus -->
                <a class="btn btn-danger" href="hapusdosen/<?php echo $x['id']; ?>" onclick=" return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>