<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 3</h1>
    <h2>Autor: Dominik Walenczak</h2>
    <hr>
</header>
<section>
    <form action="index.php" method="post">
        <label for="1">Podaj A: </label>
        <input type="text" name="liczba1" id="1" required>
        <input type="submit" value="Wyslij">
    </form>
</section>
<section class="wynik">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $liczba1 = $_POST['liczba1'];


        if ($liczba1 % 2 == 0){
            for ($i = 1; $i < $liczba1; $i++) {
                if ($i < $liczba1 / 2) {
                    echo "||||oooo<br>";
                } else {
                    echo "oooo||||<br>";
                }
                }
            } else {
            echo"Liczba nieparzysta";
        }


    }

    ?>

</section>
</body>
</html>