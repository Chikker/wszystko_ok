<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T09 - tablica asocjacyjna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Autor: Dominik Walenczak</h1>
    <h2>Zadanie T09 - tablica asocjacyjna</h2>
    <hr>
</header>
<section>
    <p>Po zapoznaniu się  z materiałem napisz skrypt, w którym zdefiniuj tablicę asocjacyjną - 5-elementową. W tablicy indeksami są nazwy państw, a wartościami ich stolice.</p>
    <form action="index.php" method="post">
        <input type="submit" value="Submit">
    </form>
</section>
<section class="wynik">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $stolice = [
            "Polska" => "Warszawa",
            "Niemcy" => "Berlin",
            "Francja" => "Paryż",
            "Włochy" => "Rzym",
            "Hiszpania" => "Madryt"
        ];

        echo "<ul>";
        foreach ($stolice as $panstwo => $stolica) {
            echo "<li><strong>$panstwo</strong>: $stolica</li>";
        }
        echo "</ul>";
    }
    ?>
</section>

</body>
</html>
