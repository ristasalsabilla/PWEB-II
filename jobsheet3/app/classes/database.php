<?php

// membuat class database
class database
{
    // mendefinisikan property atau atribut
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    // construct = dipanggil atau dieksekusi pertama kali, ditampilkan di paling atas 
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    // method untuk menampilkan mahasiswa
    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        // buat perulangan untuk mengambil data dari database
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //method untuk tambah mahasiswa
    function tambah_mhs($nim, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "insert into mahasiswa (nim, nama, alamat) values('$nim', '$nama', '$alamat')");
    }

    //method untuk mengedit data mahasiswa
    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    // method untuk update data mahasiswa
    function update($id, $nim, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
    }

    // method untuk hapus data mahasiswa
    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }
}
