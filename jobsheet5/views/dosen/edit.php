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
    // mengambil data dosen berdasarkan id
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        // memeriksa apakah ada data yang dikirim dari formulir
        if (isset($_POST['submit'])) {
            // mengambil data dari formulir
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $alamat = $_POST['alamat'];
            // update data dosen
            $result = $dosenController->updateDosen($id, $nidn, $nama, $tempat_lahir, $alamat);

            if ($result) {
                // jika berhasil, diarahkan ke halaman Dosen
                header("location: /jobsheet5/dosen");
            } else {
                // jika gagal, diarahkan ke halaman Edit
                header("location: editdosen");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>
<!-- impor file dari bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- judul halaman -->
<h3>Edit Data Dosen</h3>
<!-- tombol kembali -->
<a class="btn btn-success" href="/jobsheet5/dosen">Kembali</a>
<?php
if ($dosenData) {
?>
    <!-- menampilkan formulir edit dosen -->
    <form action="" method="post">
        <?php
        // perulangan
        foreach ($dosenData as $d) {
        ?>
            <div class="px-3 mb-3">
                <table>
                    <tr>
                        <td>
                            <!-- untuk menampilkan NIDN ke layar -->
                            <label for="disabledTextInput" class="form-label">NIDN</label>
                            <input type="text" id="disabledTextInput" class="form-control" name="nidn" value=" <?php echo $d['nidn'] ?>" placeholder="Masukkan NIDN">
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


            <!-- <table border="0">
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr> -->
        <?php
        }
        ?>
        <div class="px-3 mt-3">
            <tr>
                <td></td>
                <td>
                    <!-- tombol simpan -->
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                </td>
            </tr>
        </div>
        </table>
    </form>
<?php
}
?>