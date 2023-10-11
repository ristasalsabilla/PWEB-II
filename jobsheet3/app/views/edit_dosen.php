<?php
// memasukkan isi file databasedosen
include '../classes/databasedosen.php';
$db = new database(); // objek baru
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Edit Data Dosen</h3>
<!-- tombol kembali -->
<a class="btn btn-success" href="tampil_dosen.php">Kembali</a>
<br>
<!-- membuat form untuk edit data dosen -->
<form action="proses_dosen.php?aksi=update" method="post">
    <?php

    // perulangan untuk mengambil data dosen
    foreach ($db->edit($_GET['id']) as $d) {

    ?>
        <div class="px-3 mb-3">
            <table>
                <tr>
                    <td>
                        <!-- untuk menampilkan NIDN ke layar -->
                        <label for="disabledTextInput" class="form-label">NIDN</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nidn" value="<?php echo $d['nidn'] ?>" placeholder="Masukkan NIDN">
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- untuk menampilkan Nama ke layar -->
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nama" value="<?php echo $d['nama'] ?>" placeholder="Masukkan Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- untuk menampilkan Tempat Lahir ke layar -->
                        <label for="disabledTextInput" class="form-label">Tempat Lahir</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>" placeholder="Masukkan Tempat Lahir">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- untuk menampilkan Alamat ke layar -->
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <textarea class="form-control" id="disabledTextInput" class="form-control" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"><?php echo $d['alamat'] ?></textarea>
                    </td>
                </tr>
            </table>
        </div>
        <div class="px-3 mt-3">
            <tr>
                <td></td>
                <!-- tombol simpan -->
                <td><input type="submit" class="btn btn-primary" value="Simpan"></td>
            </tr>
        </div>
    <?php
    }
    ?>
</form>