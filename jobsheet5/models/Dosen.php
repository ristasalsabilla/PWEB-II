<?php
// membuat class dosen
class Dosen
{
    private $koneksi;
    // konstructor untuk menginisialisasi koneksi databse
    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    // method untuk mendapatkan semua data dosen
    public function getAllDosen()
    {
        $query = "SELECT * FROM dosen";
        // digunakan untuk berinteraksi dengan database
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    // membuat data dosen baru
    public function createDosen($nidn, $nama, $tempat_lahir, $alamat)
    {
        $query = "INSERT INTO dosen(nidn, nama, tempat_lahir, alamat) VALUES('$nidn', '$nama', '$tempat_lahir', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    // mendapatkan data dosen berdasarkan id
    public function getDosenById($id)
    {
        $query = "SELECT * FROM dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    // update data dosen
    public function updateDosen($id, $nidn, $nama, $tempat_lahir, $alamat)
    {
        $query = "UPDATE dosen set nidn='$nidn', nama='$nama', tempat_lahir='$tempat_lahir', alamat='$alamat' where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    // hapus data dosen
    public function deleteDosen($id)
    {
        $query = "DELETE FROM dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
