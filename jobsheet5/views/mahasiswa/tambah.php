<!-- menghubungkan file ke bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h3>Tambah Data Mahasiswa</h3>
<!-- tombol kembali -->
<a class="btn btn-success" href="mahasiswa">Kembali</a>
<br>
<!-- form tambah mahasiswa -->
<form action="prosestambah" method="post">
    <div class="px-3 mb-3">
        <table>
            <tr>
                <td>
                    <!-- untuk menampilkan NIM ke layar -->
                    <label for="disabledTextInput" class="form-label">NIM</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nim" placeholder="Masukkan NIM">
                </td>
            </tr>
            <tr>
                <td>
                    <!-- untuk menampilkan Nama ke layar -->
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nama" placeholder="Masukkan Nama">
                </td>
            </tr>
            <tr>
                <td>
                    <!-- untuk menampilkan Alamat ke layar -->
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <textarea class="form-control" id="disabledTextInput" class="form-control" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"></textarea>
                </td>
            </tr>
        </table>
    </div>
    <div class="px-3 mt-3">
        <tr>
            <td></td>
            <td>
                <!-- tombol simpan -->
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </td>
        </tr>
    </div>
</form>