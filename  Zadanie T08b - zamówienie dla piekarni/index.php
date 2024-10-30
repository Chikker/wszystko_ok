<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T08b</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T08b</h1>
    <h2>Autor: Dominik Walenczak 3p/02</h2>
    <hr>
</header>
<div class="container">
    <section class="produkty">
        <h2>NASZE PRODUKTY: </h2> <br>
        <img src="img/image-removebg-preview.png" alt="ponczek taki o">
        <img src="img/image-removebg-preview%20(1).png" alt="pizzerka o taka z salami">
        <img src="img/image-removebg-preview%20(2).png" alt="rurka z takim o kremikiem pysznym o jaki on jest dobry naprawde bym go tak jadl ze szok">
        <img src="img/image-removebg-preview%204.png" alt="O TAKA PYSZNA CALZONEEE OJEJKJUUU">
    </section>
    <section>
        <h2>Piekarnia</h2>
        <h3>Zamówienie Online:</h3>
        <form action="wynik.php" method="post">
            <label for="a">Pączek (4,99 zł/szt): </label>
            <input type="text" id="a" name="a">
            <label for="b">Pizzerka ( 6,50 zł/szt):  </label>
            <input type="text" id="b" name="b">
            <label for="c">Rurka z kremem ( 3,99 zł/szt):  </label>
            <input type="text" id="c" name="c">
            <label for="e">Calzone ( 7,99 zł/szt):  </label>
            <input type="text" id="e" name="e">
            <label for="d">Podaj swoj wiek:   </label>
            <input type="number" id="d" name="d">
            <input type="submit" value="Wyślij">
        </form>
    </section>
</div>
</body>
</html>
