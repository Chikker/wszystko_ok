<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST["a"];
    $b = $_POST["b"];

    echo "a = $a <br> b = $b";

    if ($b == 0){
        echo " <br>Nie można dzielic przez zero <br>";
    }
    else if (!ctype_digit($a) || !ctype_digit($b)){
        echo "<br> Obie liczby muszą być całkowite";
    } else if ($a % $b == 0) {
        echo "<br> Liczba $a jest podzielna przez $b";
    } else {
        echo "<br>Liczba $a nie jest podzielna przez $b.";
    }


    ?>
</section>
</body>
</html>