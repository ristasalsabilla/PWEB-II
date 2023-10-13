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
    // mengambil data mahasiswa berdasarkan id
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        // memeriksa apakah ada data yang dikirim dari formulir
        if (isset($_POST['submit'])) {
            // mengambil data dari formulir
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            // update data mahasiswa
            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $alamat);

            if ($result) {
                // jika berhasil, diarahkan ke halaman mahasiswa
                header("location: /jobsheet5/mahasiswa");
            } else {
                // jika gagal, diarahkan ke halaman edit
                header("location: edit");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>
<!-- impor file dari bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- judul halaman -->
<h3>Edit Data Mahasiswa</h3>
<!-- tombol kembali -->
<a class="btn btn-success" href="/jobsheet5/mahasiswa">Kembali</a>
<?php
if ($mahasiswaData) {
?>
    <!-- menampilkan formulir edit mahasiswa -->
    <form action="" method="post">
        <?php
        // perulangan
        foreach ($mahasiswaData as $d) {
        ?>
            <div class="px-3 mb-3">
                <table>
                    <tr>
                        <td>
                            <!-- untuk menampilkan NIM ke layar -->
                            <label for="disabledTextInput" class="form-label">NIM</label>
                            <input type="text" id="disabledTextInput" class="form-control" name="nim" value="<?php echo $d['nim'] ?>" placeholder="Masukkan NIM">
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