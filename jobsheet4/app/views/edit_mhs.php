<?php
include '../classes/database.php';
$db = new database();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Edit Data Mahasiswa</h3>
<a class="btn btn-success" href="tampil_mhs.php">Kembali</a>
<br>

<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db->edit($_GET['id']) as $d) {


    ?>
        <div class="px-3 mb-3">
            <table>
                <tr>
                    <td>
                        <label for="disabledTextInput" class="form-label">NIM</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nim" value="<?php echo $d['nim'] ?>" placeholder="Masukkan NIM">
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nama" value="<?php echo $d['nama'] ?>" placeholder="Masukkan Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <textarea class="form-control" id="disabledTextInput" class="form-control" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"><?php echo $d['alamat'] ?></textarea>
                    </td>
                </tr>
            </table>
        </div>
        <div class="px-3 mt-3">
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary" value="Simpan"></td>
            </tr>
        </div>
    <?php
    }
    ?>
</form>