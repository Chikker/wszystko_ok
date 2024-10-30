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
    if ($b == 0) {
        echo "Mianownik nie moze byc rowny zeru";
    } else{
        echo "Licznik jest rowny $a";
        echo "<br> Mianownik jest rowny $b <br>";

        $calkowita = floor($a/$b); ;
        $reszta = $a % $b;
        echo "$calkowita $reszta/$b <br>";
    };
    ?>
</section>
</body>
</html>