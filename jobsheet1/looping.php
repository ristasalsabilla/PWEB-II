<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    // for tidak ada deklarasi nilai, langsung didalam (nilai awal, batas akhir, operasi)
    // inisialisasi $x dengan nilai 2, batasan sampai 10, operasi penambahan 2 setiap perulangan
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";

    echo "</br>Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y</br>";
        $y += 2; // menambahkan 2 ke $Y setiap perulangan
    }

    echo "</br>Perulangan DO WHILE bilangan prima dari 1 hingga 20 </br>";
    $z = 2; // Mulai dari angka 2, bilangan prima paling kecil

    do { // perulangan
        $prima = true; 
        // periksa apakah $z bilangan prima
        // $i merupakan var penghitung utk perulangan
        for ($i = 2; $i < $z; $i++) {
            if ($z % $i == 0) {
                $prima = false; // bukan bilangan prima
                break;
            }
        }

        if ($prima) {
            echo "$z </br>"; // cetak $z bilangan prima
        }

        $z++;
    } while ($z < 20); // perulangan sampai $z mencapai 20

    ?>
</body>

</html>