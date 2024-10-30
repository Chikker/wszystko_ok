<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Zadanie 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 06</h1>
    <h2>Autor: Dominik Walenczak</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru <a href="https://pl.wikipedia.org/wiki/Wz%C3%B3r_Herona">Herona</a></p>
    <form action="index.php" method="post">
        <label for="a">Podaj a:</label>
        <input type="text" name="a" id="a">
        <label for="b">Podaj b:</label>
        <input type="text" name="b" id="b">
        <label for="c">Podaj c:</label>
        <input type="text" name="c" id="c">
        <input type="submit" value="Wyślij">

    </form>
</section>
<section class="wynik">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];


        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            echo "Nie można zbudować trójkąta o bokach <br>";
            echo "a = $a <br> b = $b <br> c = $c <br>";
        } else {
            $p = ($a + $b + $c) / 2;
            $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
            echo "Pole trójkąta o bokach <br>a = $a <br> b = $b <br> c = $c <br> wynosi: $s";
        }
    }

    ?>
</section>
</body>
</html>