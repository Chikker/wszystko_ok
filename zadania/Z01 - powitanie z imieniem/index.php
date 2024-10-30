<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 01</h1>
    <h2>Autor: Dominik Walenczak 3p/02</h2>
    <hr>
</header>
<section>
    <p>Program wczytuje imię i wyświetla powitanie z tym imieniem</p>
    <form action="index.php" method="post">
        <label for="imie">Podaj swoje imię: </label>
        <input type="text" id="imie" name="imie">
        <input type="submit" value="Wyślij">
    </form>
</section>
<section class="wynik">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $imie = $_POST['imie'];

        echo "<h1>Cześć $imie!!!!!!!!!!!!!!</h1>";
        echo "<h2>Miło cię widzieć na naszej stronie</h2>";
    }

    ?>
</section>
</body>
</html>
