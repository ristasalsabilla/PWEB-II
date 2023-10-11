<?php
// menghubungkan ke file databasedosen
include '../classes/databasedosen.php';
// objek database baru 
$db = new database;
?>

<!-- link untuk menghubungkan ke bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h2>Data Dosen</h2>
<br>
<!-- tombol tambah data dosen -->
<a class="btn btn-success" href="input_dosen.php">+ Tambah Dosen</a>
<br><br>
<!-- tabel data dosen -->
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
    // perulangan tampil data dosen
    foreach ($db->tampil_dosen() as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tempat_lahir'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <!-- tombol edit data dosen -->
                <a class="btn btn-warning" href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                <!-- tombol hapus data dosen -->
                <a class="btn btn-danger" href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>