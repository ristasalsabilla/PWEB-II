<?php
// memasukkan model Dosen
include_once '../../models/Dosen.php';
// Membuat class controller Dosen
class DosenController
{
    private $model;
    //konstruktor untuk menginisialisasi model Dosen
    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }
    // mendapatkan semua data dosen
    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }
    // membuat data dosen baru
    public function createDosen($nidn, $nama, $tempat_lahir, $alamat)
    {
        return $this->model->createDosen($nidn, $nama, $tempat_lahir, $alamat);
    }
    // mendapatkan data dosen berdasarkan id
    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }
    // update data dosen
    public function updateDosen($id, $nidn, $nama, $tempat_lahir, $alamat)
    {
        return $this->model->updateDosen($id, $nidn, $nama, $tempat_lahir, $alamat);
    }
    // hapus data dosen
    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}
