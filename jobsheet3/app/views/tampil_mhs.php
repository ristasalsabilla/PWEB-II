<?php
// menghubungkan ke file database
include '../classes/database.php';
// objek database baru  
$db = new database;
?>

<!-- link untuk menghubungkan ke bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h2>Data Mahasiswa</h2>
<br>
<!-- tombol tambah data mahasiswa -->
<a class="btn btn-success" href="input_mhs.php">+ Tambah Mahasiswa</a>
<br><br>
<!-- tabel data mahasiswa -->
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
    // perulangan tampil data mahasiswa
    foreach ($db->tampil_mahasiswa() as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <!-- tombol edit data mahasiswa -->
                <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                <!-- tombol hapus data mahasiswa -->
                <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>