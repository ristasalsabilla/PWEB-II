<?php

// // membuat class mahasiswa
// class mahasiswa
// {
//     // menuliskan property atau atribut
//     var $nim;
//     var $nama;
//     var $alamat;

//     // method untuk menampilkan nama
//     function tampil_nama()
//     {
//         return "Nama Saya adalah Rista"; // isi method
//     }

//     // method untuk menampilkan alamat
//     function tampil_alamat()
//     {
//         // isi method
//     }
// }

// // objek baru 
// $nama_mahasiswa = new mahasiswa();

// // menampilkan objek ke layar
// echo $nama_mahasiswa->tampil_nama();

// membuat class dosen
class dosen
{
    // menuliskan property atau atribut
    var $nidn;
    var $nama;
    var $prodi;

    // method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama Saya adalah Rista"; // isi method
    }

    // method untuk menampilkan prodi
    function tampil_prodi()
    {
        // isi method
    }
}

// objek baru 
$nama_dosen = new dosen();

// menampilkan objek ke layar
echo $nama_dosen->tampil_nama();
