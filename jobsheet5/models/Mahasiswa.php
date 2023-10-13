<?php
// membuat class mahasiswa
class Mahasiswa
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    // method untuk mendapatkan semua data mahasiswa
    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    // membuat data mahasiswa baru
    public function createMahasiswa($nim, $nama, $alamat)
    {
        $query = "INSERT INTO mahasiswa(nim, nama, alamat) VALUES('$nim', '$nama', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    // mendapatkan data mahasiswa berdasarkan id
    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM mahasiswa where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    // update data mahasiswa
    public function updateMahasiswa($id, $nim, $nama, $alamat)
    {
        $query = "UPDATE mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    // hapus data mahasiswa
    public function deleteMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
