<?php
// memasukkan model Mahasiswa
include_once '../../models/Mahasiswa.php';
// membuat class MahasiswaController
class MahasiswaController
{
    private $model;
    // konstruktor untuk menginisialisasi model Mahasiswa
    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }
    // mendapatkan semua data mahasiswa
    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }
    // membuat data mahasiswa baru
    public function createMahasiswa($nim, $nama, $alamat)
    {
        return $this->model->createMahasiswa($nim, $nama, $alamat);
    }
    // mendapatkan data mahasiswa berdasarkan id
    public function getMahasiswaById($id)
    {
        return $this->model->getMahasiswaById($id);
    }
    // update data mahasiswa
    public function updateMahasiswa($id, $nim, $nama, $alamat)
    {
        return $this->model->updateMahasiswa($id, $nim, $nama, $alamat);
    }
    // menghapus data mahasiswa 
    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }
}
