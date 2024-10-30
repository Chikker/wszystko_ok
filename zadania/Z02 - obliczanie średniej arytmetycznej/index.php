<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 02</title>
    <link rel="stylesheet" href="../Z30%20-%20ułamek%20właściwy/style.css">
</head>
<body>
<header>
    <h1>Zadanie 02</h1>
    <h2>Autor: Dominik Walenczak 3p/02</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
    <form action="index.php" method="post">
        <label for="a">Podaj a: </label>
        <input type="text" id="a" name="a">
        <label for="b">Podaj b: </label>
        <input type="text" id="b" name="b">
        <label for="c">Podaj c: </label>
        <input type="text" id="c" name="c">
        <label for="d">Podaj d: </label>
        <input type="text" id="d" name="d">
        <input type="submit" value="Wyślij">
    </form>
</section>
<section class="wynik">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['a'], $_POST['b'], $_POST['c'], $_POST['d']) && is_numeric($_POST['a']) && is_numeric($_POST['b']) && is_numeric($_POST['c']) && is_numeric($_POST['d'])) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $d = $_POST["d"];
            $srednia = ($a+$b+$c+$d)/4;
            $srednias = round($srednia,2);
            echo "<h1>a = $a<br> b = $b<br> c = $c<br> d = $d<br> Średnia = $srednia <br> Średnia zaokrąglona = $srednia <br></h1>";

        }
    }


    ?>
</section>
</body>
</html>
