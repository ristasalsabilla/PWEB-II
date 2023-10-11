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
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";

    echo "</br>Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y</br>";
        $y += 2;
    }

    echo "</br>Perulangan DO WHILE bilangan prima dari 1 hingga 20 </br>";
    $z = 2; // Mulai dari angka 2, bilangan prima paling kecil

    do { // perulangan
        $prima = true; // Anggap dulu bahwa angka tersebut adalah prima

        for ($i = 2; $i < $z; $i++) {
            if ($z % $i == 0) {
                $prima = false; // Bukan bilangan prima
                break;
            }
        }

        if ($prima) {
            echo "$z </br>";
        }

        $z++;
    } while ($z < 20);

    ?>
</body>

</html>