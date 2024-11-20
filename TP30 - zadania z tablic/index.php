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
<header>
    <h1>Zadanie TP30 - zadania z tablic</h1>
    <h2>Autor: Dominik Walenczak 3p/2</h2>
    <hr>
</header>
<section>
    <pre>
    <?php
//    Utwórz tablicę o nazwie tab1, zawierającą następujące liczby całkowite: 7, 3, 1, 6, 9, 5, 4, 10, 2, 2.
    $tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];
    var_dump($tab1);
    //Wypisz zawartość 5 komórki tablicy na ekran. Zmień zawartość 7 komórki tablicy, wprowadzając do niej wartość 12.
    echo "7 komorka tab1 = ". $tab1[4]. "<br>";
    $tab[6] = 12;
    //Utwórz drugą tablicę o nazwie tab2, o tej samej wielkości co tab1. Przepisz zawartość tab1 do tab2.
    $tab2 = $tab1;
    echo "Tablica tab2: ";
    var_dump($tab2);
    echo "<br>";
    //Utwórz trzecią tablicę o nazwie tab3, o tej samej wielkości co dwie poprzednie. Zawartością komórek tablicy tab3 jest suma komórek o tych samych indeksach tablic tab1 i tab2.
    $tab3 = [];
    for ($i = 0; $i < count($tab1); $i++) {
        $tab3[$i] = $tab1[$i] + $tab2[$i];
    }
    echo "Tablica tab3 (suma tab1 i tab2): ";
    var_dump($tab3);
    echo "<br>";
    //Przepisz ponownie zawartość tablicy tab1 do tablicy tab2, jednak w odwrotnej kolejności.
    $tab2 = array_reverse($tab1);
    echo "Tablica tab2 po odwróceniu: ";
    var_dump($tab2);
    echo "<br>";
    ?>
    </pre>
    <pre>
        <form action="index.php" method="post">
            <label for="wartosci">Podaj liczby oddzielone przecinkami:</label>
            <textarea id="wartosci" name="value" placeholder="Np. 1,2,3,4,5" required cols="30" rows="10"> </textarea>
            <button type="submit">Wyślij</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = $_POST["value"];

            //Utwórz tablicę, a następnie:
            $array = array_map('intval', explode(',', $value));

            //Wypełnij tablicę wartościami podanymi przez użytkownika.
            echo "<h2>Podana tablica:</h2>";
            var_dump($array);
            echo "<br>";
            //Znajdź najmniejszy i największy element w tablicy.
            $min = min($array);
            $max = max($array);
            echo "<p>Najmniejszy element: $min</p>";
            echo "<p>Największy element: $max</p>";
            //Oblicz średnią wartość elementów tablicy.
            $average = array_sum($array) / count($array);
            echo "<p>Średnia wartość: $average</p>";
            //Wylicz ilość wystąpień cyfry 3 w tablicy.
            $count3 = substr_count(implode('', $array), '3');
            echo "<p>Ilość wystąpień cyfry 3: $count3</p>";
            //Dowolnym sposobem posortuj elementy tablicy w porządku rosnącym.
            sort($array);
            echo "<h2>Tablica po posortowaniu:</h2>";
            var_dump($array);
            echo "<br>";
            //Znajdź medianę elementów tablicy.
            $n = count($array);
            $median = ($n % 2 == 0) ? ($array[$n / 2 - 1] + $array[$n / 2]) / 2 : $array[floor($n / 2)];
            echo "<p>Mediana: $median</p>";
            //Wypisz 3 najmniejsze i trzy największe elementy tablicy.
            $smallest3 = array_slice($array, 0, 3);
            $largest3 = array_slice($array, -3);
            echo "<p>3 najmniejsze elementy: ";
            var_dump($smallest3);
            echo "</p>";
            echo "<p>3 największe elementy: ";
            var_dump($largest3);
            echo "</p>";
            //Zwiększ wartość każdego elementu tablicy podnosząc go do kwadratu.
            $squaredArray = array_map(fn($x) => $x ** 2, $array);
            echo "<h2>Tablica po podniesieniu do kwadratu:</h2>";
            var_dump($squaredArray);
            echo "<br>";
            //Policz ilość liczb parzystych i nieparzystych w tablicy.
            $evenCount = count(array_filter($array, fn($x) => $x % 2 === 0));
            $oddCount = count($array) - $evenCount;
            echo "<p>Ilość liczb parzystych: $evenCount</p>";
            echo "<p>Ilość liczb nieparzystych: $oddCount</p>";
            //Podaj ile liczb zawartych w tablicy jest podzielna bez reszty przez 3.
            $divisibleBy3Count = count(array_filter($array, fn($x) => $x % 3 === 0));
            echo "<p>Ilość liczb podzielnych przez 3: $divisibleBy3Count</p>";
        }
    //Utwórz tablicę, która zawierać będzie 10 elementów.
    //Wypełnij ją literami wprowadzonymi przez użytkownika
    //Wypełnij ją 10 literowym wyrazem podanym przez użytkownika.
    //Zamień wszystkie wielkie litery na małe i odwrotnie.
    //Wypisz zawartość tablicy w losowej kolejności.
    //Utwórz 100-elementową tablicę liczb całkowitych i wypełnij ją losowymi liczbami.
    //Znajdź największą spośród liczb oraz wyświetl na ekranie informację mówiącą o tym, ile razy ta liczba znalazła się w tablicy.
    //Wyświetl na ekran liczby nieparzyste.
    //Wyświetl na ekran liczby znajdujące się w komórkach o nieparzystych indeksach.
    //Program policzy ile liczb zawiera się w przedziale <5, 15) , po czym wypisze te liczby na ekran.
    //Znajdź element najbliższy wartością wprowadzonej przez użytkownika liczbie „a”.
    //Znajdź poprzednik i następnik najmniejszej wartości w tablicy (wartość komórki o numerze o jeden większym i o jeden mniejszym, niż indeks minimum tablicy).
    //Przepisać do nowej tablicy te elementy, których wartość jest >10. Nowa tablica ma mieć rozmiar równy ilości tych elementów.
    //Utwórz nową tablicę 100 elementową. Wypełnij ją w taki sposób, aby
    //B[i] = A[1] + A[2] + A[3] + … + A[i],
    //gdzie B to nasza nowa, a A, stara tablica.
    //Posortuj tablicę malejąco.
    //Wypisz na ekran elementy, które występują w tablicy przynajmniej 3 razy.
    //Utwórz pustą tablicę 100 elementów.
    //Wypełnij tablicę kolejnymi liczbami ciągu Fibonacciego.
    //Wypełnij tablicę kolejnymi potęgami liczby 2.
    //Wypełni tablicę ciągiem liczb: 3, 6, 9, 12, …
    //Wypełni tablicę ciągiem liczb: 2, 4, 8, 16, 32, …
    ?>
        </pre>
</section>
</body>
</html>