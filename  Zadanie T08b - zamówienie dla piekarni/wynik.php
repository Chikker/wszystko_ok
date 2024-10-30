<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<section class="wynik">
    <?php
    // Przypisanie zmiennych z formularza
    $a = isset($_POST["a"]) ? intval($_POST["a"]) : 0;
    $b = isset($_POST["b"]) ? intval($_POST["b"]) : 0;
    $c = isset($_POST["c"]) ? intval($_POST["c"]) : 0;
    $e = isset($_POST["e"]) ? intval($_POST["e"]) : 0;
    $d = isset($_POST["d"]) ? intval($_POST["d"]) : 0;

    // Ceny jednostkowe produktów
    $cena_paczek = 4.99;
    $cena_pizzerka = 6.50;
    $cena_rurka = 3.99;
    $cena_calzone = 7.99;

    // Sprawdzenie minimalnego wieku
    if ($d < 16) {
        echo "Minimalny wiek do zakupu to 16 lat.";
        exit;
    }

    // Obliczanie liczby darmowych pączków (co trzeci jest darmowy)
    $darmowe_paczki = intdiv($a, 3);
    $platne_paczki = $a - $darmowe_paczki;

    // Obliczanie kosztów
    $cena_za_paczki = $platne_paczki * $cena_paczek;
    $cena_za_pizzerki = $b * $cena_pizzerka;
    $cena_za_rurki = $c * $cena_rurka;
    $cena_za_calzone = $e * $cena_calzone;

    // Całkowita cena
    $cena_calosciowa = $cena_za_paczki + $cena_za_pizzerki + $cena_za_rurki + $cena_za_calzone;

    // Wyświetlenie paragonu w formie tabeli
    echo "<h2>Nazwa sklepu: Pączki Walenczaka</h2>";
    echo "<h3>Paragon</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Produkt</th><th>Ilość</th><th>Cena jednostkowa</th><th>Cena całkowita</th></tr>";
    echo "<tr><td>Pączki (w tym {$darmowe_paczki} darmowe)</td><td>{$a}</td><td>" . number_format($cena_paczek, 2) . " zł</td><td>" . number_format($cena_za_paczki, 2) . " zł</td></tr>";
    echo "<tr><td>Pizzerki</td><td>{$b}</td><td>" . number_format($cena_pizzerka, 2) . " zł</td><td>" . number_format($cena_za_pizzerki, 2) . " zł</td></tr>";
    echo "<tr><td>Rurki z kremem</td><td>{$c}</td><td>" . number_format($cena_rurka, 2) . " zł</td><td>" . number_format($cena_za_rurki, 2) . " zł</td></tr>";
    echo "<tr><td>Calzone</td><td>{$e}</td><td>" . number_format($cena_calzone, 2) . " zł</td><td>" . number_format($cena_za_calzone, 2) . " zł</td></tr>";
    echo "<tr><td colspan='3'><strong>Łączna cena do zapłaty:</strong></td><td><strong>" . number_format($cena_calosciowa, 2) . " zł</strong></td></tr>";
    echo "</table>";
    ?>

</section>
</body>
</html>