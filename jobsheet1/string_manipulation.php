<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
    $date = "Hari ini Senin, tanggal 09-10-2023 </br>";
    echo $date;
    echo strtoupper($date);
    // strtolower() nilai string menjadi huruf kecil
    echo strtolower($date);
    // substr(string, mulai, panjang huruf) memotong string
    echo substr($date, 0, 8);
    echo "</br></br>";

    $x = "Selamat belajar PHP! </br>";
    echo $x;
    // strtoupper() nilai string menjadi kapital
    echo strtoupper($x);
    // strtolower() nilai string menjadi huruf kecil
    echo strtolower($x);
    // substr(string, mulai, panjang huruf) memotong string
    echo substr($x, 0, 7);
    ?>
</body>

</html>