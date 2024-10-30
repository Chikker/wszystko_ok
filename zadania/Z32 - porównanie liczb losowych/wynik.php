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
    $losowa_a = rand($a, $b);
    $losowa_b = rand($a, $b);



    echo "liczby losowana z zakresu <b>od $a do $b </b> <br>";
    echo "Wylosowna liczba1 = $losowa_a <br>";
    echo "Wylosowna liczba2 = $losowa_b <br>";

    if ($losowa_a > $losowa_b) {
        echo "$losowa_a > $losowa_b <br>";
    } elseif ($losowa_a < $losowa_b) {
        echo "$losowa_a < $losowa_b <br>";
    } else
        echo "$losowa_a == $losowa_b <br>";
    ?>
</section>
</body>
</html>