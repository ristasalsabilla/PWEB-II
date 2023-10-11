<?php
// memanggil class database
include '../classes/database.php';
//instansiasi class database 
$db = new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-3 py-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dosen</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'berhasil') {
    ?>
        <div class="alert alert-success mx-auto text-center" style="width:20%" role="alert">
            Data <a href="#" class="alert-link">BERHASIL</a> di tambahkan
        </div>
    <?php
        header("refresh:2, url=tampil_mhs.php");
    } elseif (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
    ?>
        <div class="alert alert-success mx-auto text-center" style="width:18%" role="alert">
            Data<a href="#" class="alert link">BERHASIL</a> di edit
        </div>
    <?php
        header("refresh:2, url=tampil_mhs.php");
    } elseif (isset($_GET['pesan']) && $_GET['pesan'] == 'done') {
    ?>
        <div class="alert alert-success mx-auto text-center" style="width:18%" role="alert">
            Data <a href="#" class="alert-link">BERHASIL</a> di hapus
        </div>
    <?php
        header("refresh:2, url=tampil_mhs.php");
    }
    ?>

    <div class="px-5">
        <h2>Data Mahasiswa</h2>
        <a class="btn btn-primary mb-2 mt-2" href="input_mhs.php">Tambah Mahasiswa</a>
        <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($db->tampil_mahasiswa() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>