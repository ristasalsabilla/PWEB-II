<?php
// membuat class HomeController
class HomeController
{
    // untuk mengarahkan ke halaman home
    public function home()
    {
        header("location:http://localhost/jobsheet5/index.php");
    }
    // untuk mengarahkan ke halaman mahasiswa
    public function mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
    }
    // untuk mengarahkan ke halaman tambah data mahasiswa
    public function tambah()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/tambah.php");
    }
    // untuk mengarahkan ke halaman edit data mahasiswa
    public function edit()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/edit.php");
    }
    // untuk mengarahkan ke halaman hapus data mahasiswa
    public function hapus()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/hapus.php");
    }
}
