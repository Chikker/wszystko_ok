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
        ?>
<form action="index.php" method="post">
    <label for="letters">Podaj 10 liter oddzielonych przecinkami:</label><br>
    <input type="text" id="letters" name="letters" placeholder="Np. a,b,c,d,e,f,g,h,i,j" required><br><br>

    <label for="word">Podaj 10-literowy wyraz:</label><br>
    <input type="text" id="word" name="word" maxlength="10" placeholder="Np. Wyraz" required><br><br>

    <button type="submit">Wyślij</button>
</form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //Utwórz tablicę, która zawierać będzie 10 elementów.
            $lettersInput = $_POST["letters"];
            $lettersArray = explode(',', str_replace(' ', '', $lettersInput));

            //Wypełnij ją literami wprowadzonymi przez użytkownika
            if (count($lettersArray) !== 10) {
                echo "<p>Proszę wprowadzić dokładnie 10 liter oddzielonych przecinkami!</p>";
                exit;
            }

            echo "<h2>Tablica liter:</h2>";
            var_dump($lettersArray);
            echo "<br>";
            //Wypełnij ją 10 literowym wyrazem podanym przez użytkownika.
            $word = $_POST["word"];
            if (strlen($word) !== 10) {
                echo "<p>Proszę wprowadzić dokładnie 10-literowy wyraz!</p>";
                exit;
            }

            $wordArray = str_split($word);
            echo "<h2>Tablica z wyrazu:</h2>";
            var_dump($wordArray);
            echo "<br>";
            //Zamień wszystkie wielkie litery na małe i odwrotnie.
            $swappedLettersArray = array_map(fn($char) => ctype_lower($char) ? strtoupper($char) : strtolower($char), $lettersArray);
            $swappedWordArray = array_map(fn($char) => ctype_lower($char) ? strtoupper($char) : strtolower($char), $wordArray);

            echo "<h2>Tablica liter po zamianie wielkości liter:</h2>";
            var_dump($swappedLettersArray);
            echo "<br>";

            echo "<h2>Tablica wyrazu po zamianie wielkości liter:</h2>";
            var_dump($swappedWordArray);
            echo "<br>";

            //Wypisz zawartość tablicy w losowej kolejności.
            shuffle($lettersArray);
            shuffle($wordArray);

            echo "<h2>Tablica liter w losowej kolejności:</h2>";
            var_dump($lettersArray);
            echo "<br>";

            echo "<h2>Tablica wyrazu w losowej kolejności:</h2>";
            var_dump($wordArray);
            echo "<br>";
        } ?>
        <form method="post" action="index.php">
            <label for="liczba"> Podaj a: </label>
            <input type="number" name="a" id="liczba" required>
            <input type="submit" value="Wyslij">
        </form>
        <?php
    //Utwórz 100-elementową tablicę liczb całkowitych i wypełnij ją losowymi liczbami.
        $array = array_map(fn() => rand(1, 100), range(1, 100));
        echo "<h2>Tablica 100 losowych liczb:</h2>";
        var_dump($array);
        echo "<br>";
    //Znajdź największą spośród liczb oraz wyświetl na ekranie informację mówiącą o tym, ile razy ta liczba znalazła się w tablicy.
        $maxValue = max($array);
        $maxCount = count(array_filter($array, fn($x) => $x === $maxValue));
        echo "<p>Największa liczba: $maxValue (występuje $maxCount razy)</p>";
        //Wyświetl na ekran liczby nieparzyste.
        $oddNumbers = array_filter($array, fn($x) => $x % 2 !== 0);
        echo "<h2>Liczby nieparzyste:</h2>";
        var_dump($oddNumbers);
        echo "<br>";
    //Wyświetl na ekran liczby znajdujące się w komórkach o nieparzystych indeksach.
        $oddIndexNumbers = array_filter($array, fn($x, $index) => $index % 2 !== 0, ARRAY_FILTER_USE_BOTH);
        echo "<h2>Liczby z nieparzystych indeksów:</h2>";
        var_dump($oddIndexNumbers);
        echo "<br>";

        //Program policzy ile liczb zawiera się w przedziale <5, 15) , po czym wypisze te liczby na ekran.
        $inRange = array_filter($array, fn($x) => $x >= 5 && $x < 15);
        echo "<p>Liczby w przedziale <5, 15):</p>";
        var_dump($inRange);
        echo "<p>Ilość: " . count($inRange) . "</p>";
    //Znajdź element najbliższy wartością wprowadzonej przez użytkownika liczbie „a”.
        $a = $_POST["a"];
        $closest = array_reduce($array, fn($closest, $item) => abs($item - $a) < abs($closest - $a) ? $item : $closest, $array[0]);
        echo "<p>Element najbliższy wartości $a: $closest</p>";
    //Znajdź poprzednik i następnik najmniejszej wartości w tablicy (wartość komórki o numerze o jeden większym i o jeden mniejszym, niż indeks minimum tablicy).
        $minValue = min($array);
        $minIndex = array_search($minValue, $array);
        $prevValue = $minIndex > 0 ? $array[$minIndex - 1] : "Brak";
        $nextValue = $minIndex < count($array) - 1 ? $array[$minIndex + 1] : "Brak";
        echo "<p>Poprzednik najmniejszej wartości ($minValue): $prevValue</p>";
        echo "<p>Następnik najmniejszej wartości ($minValue): $nextValue</p>";
        //Przepisać do nowej tablicy te elementy, których wartość jest >10. Nowa tablica ma mieć rozmiar równy ilości tych elementów.
        $greaterThan10 = array_filter($array, fn($x) => $x > 10);
        echo "<h2>Nowa tablica z elementami >10:</h2>";
        var_dump($greaterThan10);
        echo "<br>";
        //Utwórz nową tablicę 100 elementową. Wypełnij ją w taki sposób, aby
    //B[i] = A[1] + A[2] + A[3] + … + A[i],
    //gdzie B to nasza nowa, a A, stara tablica.
        $newArray = [];
        $cumulativeSum = 0;
        foreach ($array as $value) {
            $cumulativeSum += $value;
            $newArray[] = $cumulativeSum;
        }
        echo "<h2>Tablica z sumami skumulowanymi:</h2>";
        var_dump($newArray);
        echo "<br>";
    //Posortuj tablicę malejąco.
        $sortedArray = $array;
        rsort($sortedArray);
        echo "<h2>Tablica posortowana malejąco:</h2>";
        var_dump($sortedArray);
        echo "<br>";
    //Wypisz na ekran elementy, które występują w tablicy przynajmniej 3 razy.
        $frequentElements = array_filter(array_count_values($array), fn($count) => $count >= 3);
        echo "<h2>Elementy występujące co najmniej 3 razy:</h2>";
        var_dump(array_keys($frequentElements));
        echo "<br>";
        ?>
        <?php
    //Utwórz pustą tablicę 100 elementów.
        $array = array_fill(0, 100, 0);

    //Wypełnij tablicę kolejnymi liczbami ciągu Fibonacciego.
        $array[0] = 0;
        $array[1] = 1;
        for ($i = 2; $i < 100; $i++) {
            $array[$i] = $array[$i - 1] + $array[$i - 2];
        }
        echo "<h2>Tablica wypełniona ciągiem Fibonacciego:</h2>";
        var_dump($array);
        echo "<br>";

        //Wypełnij tablicę kolejnymi potęgami liczby 2.
        for ($i = 0; $i < 100; $i++) {
            $array[$i] = pow(2, $i);
        }
        echo "<h2>Tablica wypełniona potęgami liczby 2:</h2>";
        var_dump($array);
        echo "<br>";

        //Wypełni tablicę ciągiem liczb: 3, 6, 9, 12, …
        for ($i = 0; $i < 100; $i++) {
            $array[$i] = 3 * ($i + 1);
        }
        echo "<h2>Tablica wypełniona ciągiem (3, 6, 9, ...):</h2>";
        var_dump($array);
        echo "<br>";

        //Wypełni tablicę ciągiem liczb: 2, 4, 8, 16, 32, …
        for ($i = 0; $i < 100; $i++) {
            $array[$i] = 2 ** ($i + 1); // Można też użyć pow(2, $i + 1)
        }
        echo "<h2>Tablica wypełniona ciągiem (2, 4, 8, ...):</h2>";
        var_dump($array);
        echo "<br>";
        ?>
        </pre>
</section>
</body>
</html>