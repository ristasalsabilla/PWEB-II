<?php

// membuat nama class database
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

    // method untuk menampilkan dosen
    function tampil_dosen()
    {
        $data = mysqli_query($this->koneksi, "select * from dosen");
        // buat perulangan 
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    // method untuk tambah dosen
    function tambah_dosen($nidn, $nama, $tempat_lahir, $alamat)
    {
        mysqli_query($this->koneksi, "insert into dosen (nidn, nama, tempat_lahir, alamat) values('$nidn', '$nama', '$tempat_lahir', '$alamat')");
    }

    // method untuk mengedit data dosen
    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    // method untuk update data dosen
    function update($id, $nidn, $nama, $tempat_lahir, $alamat)
    {
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', tempat_lahir='$tempat_lahir', alamat='$alamat' where id='$id'");
    }

    // method untuk hapus data dosen
    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}
