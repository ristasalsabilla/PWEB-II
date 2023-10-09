<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>

<body>
    <?php
    // function persegi_panjang($p, $l)
    // {
    //     return $p * $l;
    // }
    // function lingkaran($r)
    // {
    //     return 3.14 * $r * $r;
    // }
    // echo "Luas Persegi Panjang = " . persegi_panjang(5, 2) . "</br>";
    // echo "Luas Lingkaran = " . lingkaran(7) . "</br>";

    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    $luas_persegipanjang = 0;
    $luas_lingkaran = 0;

    if (isset($_POST['submit'])) {
        // Mendapatkan nilai panjang dan lebar dari formulir
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];

        // Mendapatkan nilai jari-jari dari formulir
        $r = $_POST['jari_jari'];

        // Menghitung luas persegi panjang dan lingkaran
        $luas_persegipanjang = persegi_panjang($p, $l);
        $luas_lingkaran = lingkaran($r);
    }
    ?>
    <form method="post" action="">
        Masukkan panjang Persegi Panjang: <input type="number" name="panjang" required><br>
        Masukkan lebar Persegi Panjang: <input type="number" name="lebar" required><br>
        Masukkan jari-jari Lingkaran: <input type="number" name="jari_jari" required><br>
        <input type="submit" name="submit" value="Hitung">
    </form>
    <?php
    echo "Luas Persegi Panjang = " . $luas_persegipanjang . " cm2</br>";
    echo "Luas Lingkaran = " . $luas_lingkaran . " cm2</br>";
    ?>
</body>

</html>