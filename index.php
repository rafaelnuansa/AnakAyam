<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anak Ayam</title>
</head>

<body>



    <?php

    $anakAyam = 10;
    echo "anak ayam turun" . $anakAyam;
    for ($turun = $anakAyam; $turun >= 1; $turun--) {
        $sisa = $turun - 1;
        if ($sisa != 0) {
            echo "<P>anak ayam turun $turun mati satu tinggal $sisa";
        } else {
            echo "<P>anak ayam turun $turun mati satu tinggal induknya";
        }
    }
    ?>
</body>

</html>