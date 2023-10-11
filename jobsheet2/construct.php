<?php

// membuat class 
class mahasiswa
{
    // menuliskan property atau atribut
    var $nim;
    var $nama;
    var $alamat;

    // construct = dipanggil atau dieksekusi pertama kali, ditampilkan di paling atas
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }

    // destruct = dipanggil atau dieksekusi diakhir, ditampilkan di paling akhir
    function __destruct()
    {
        echo "<br>Politeknik Negeri Cilacap";
    }

    // method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama Saya adalah Rista </br>"; // isi method
    }

    // method untuk menampilkan mahasiswa
    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah"; // isi method
    }

    // method untuk menampilkan alamat
    function tampil_alamat()
    {
        // isi method
    }
}

// objek baru 
$nama_mahasiswa = new mahasiswa();

// menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
