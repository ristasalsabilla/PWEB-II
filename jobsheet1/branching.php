<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <form method="post" action="">
        <!-- input nilai x -->
        Masukkan Nilai x: <input type="number" name="x">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    // $x = 2;
    // echo "Nilai x = $x </br></br>";
    // if ($x > 0) {
    //     echo "$x adalah Bilangan Positif";
    // } elseif ($x < 0) {
    //     echo "$x adalah Bilangan Negatif";
    // } else {
    //     echo "$x adalah Bilangan Nol";
    // }

    if (isset($_POST['submit'])) {
        // untuk mengambil nilai x dari nilai yang diinputkan
        $x = $_POST["x"];

        echo "Nilai x = $x </br></br>";
        if ($x > 0) {
            echo "$x adalah Bilangan Positif";
        } else if ($x < 0) {
            echo "$x adalah Bilangan Negatif";
        } else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>

</html>