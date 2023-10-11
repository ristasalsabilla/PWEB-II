<?php

//membuat class mahasiswa
class mahasiswa
{
    // mendefinisikan property dengan tipe public dan private
    public $nama;
    private $nim = "220302043";

    // public method, tanpa menuliskan public maka sudah otomatis menjadi public
    // method untuk menampilkan nama
    function tampilkan_nama()
    {
        // nilai kembalian
        return "Nama Saya Rista </br>";
    }

    // method untuk menampilkan nim
    function tampilkan_nim()
    {
        return "NIM Saya " . $this->nim;
    }
}

//membuat atau instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

// memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();

// public bisa dipanggil di luar class
// protected tidak bisa dipanggil di luar class, bisa dipanggil di luar tetapi yg turunan atau extends
// private hanya bisa dipanggil di dalam class