<?php

use mahasiswa as GlobalMahasiswa;

class manusia
{
    public $nama_saya;
    protected $jenis_kelamin;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }

    function panggil_jk()
    {
        return "Saya berjenis kelamin : Wanita";
    }
}

// class turunan atau sub class dari manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    private $prodi = "Teknik Informatika";

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }

    function panggil_prodi()
    {
        return $this->prodi;
    }
}

//intansiasi class mahasiswa'
$informatika = new mahasiswa();
$prodi = new mahasiswa();

$informatika->panggil_nama("Rista Salsabilla");
$informatika->panggil_mahasiswa("Putri");

//tampilkan isi property
echo "Nama depan Saya : " . $informatika->nama_saya . "</br>";
echo "Nama belakang Saya : " . $informatika->nama_mahasiswa . "</br>";
echo $informatika->panggil_jk();
echo "<br>Saya mahasiswa prodi : " . $prodi->panggil_prodi();
