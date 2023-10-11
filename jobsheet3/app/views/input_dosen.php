<!-- link untuk menghubungkan ke boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h3>Tambah Data Dosen</h3>
<a class="btn btn-success" href="tampil_dosen.php">Kembali</a>
<br>
<form action="proses_dosen.php?aksi=tambah" method="post">
    <div class="px-3 mb-3">
        <table>
            <tr>
                <td>
                    <label for="disabledTextInput" class="form-label">NIDN</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nidn" placeholder="Masukkan NIDN">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nama" placeholder="Masukkan Nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="disabledTextInput" class="form-label">Tempat Lahir</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <textarea class="form-control" id="disabledTextInput" class="form-control" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"></textarea>
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
</form>