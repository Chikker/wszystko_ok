<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liczby z pierwszą i ostatnią cyfrą taką samą</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Analiza pliku liczby.txt</h1>
    <h2>Autor: Dominik Walenczak 3p/2</h2>
</header>
<section>
    <?php

    $plikWejsciowy = fopen('liczby.txt', 'r');


    $plikWynikowy = fopen('wynik_1.txt', 'w');


    $iloscLiczb = 0;
    $znalezionaLiczba = null;

    while (($liczba = fgets($plikWejsciowy)) !== false) {

        $liczba = trim($liczba);


        if ($liczba[0] === $liczba[strlen($liczba) - 1]) {

            if ($znalezionaLiczba === null) {
                $znalezionaLiczba = $liczba;
                fwrite($plikWynikowy, $znalezionaLiczba . PHP_EOL);
            }

            $iloscLiczb++;
        }
    }


    fclose($plikWejsciowy);
    fclose($plikWynikowy);

    echo "Ilość liczb spełniających warunki: " . $iloscLiczb . "<br>";
    echo "Pierwsza znaleziona liczba: " . $znalezionaLiczba;
    ?>

</section>

</body>
</html>
