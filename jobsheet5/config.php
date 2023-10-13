<?php

class database
{
    // alamat server database mySQL
    var $host = "localhost";
    // nama pengguna mySQL
    var $username = "root";
    // password mySQL
    var $password = "";
    // nama database yang digunakan
    var $db = "akademik";
    // variabel menyimpan objek
    var $koneksi;

    function getKoneksi()
    {
        // membuat koneksi ke database
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$this->koneksi) {
            // jika koneksi gagal akan menampilkan pesan eror
            die("Koneksi database gagal : " . mysqli_connect_error());
        }
        // mengembalikan objek koneksi
        return $this->koneksi;
    }
}
