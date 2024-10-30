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
<section class="wynik">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $liczby = array(
            array(0, 0, 0),
            array(0, 0, 0),
            array(0, 0, 0)
        );

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $liczby[$i][$j] = rand(0, 9);
            }
        }

        $LG_PD = $liczby[0][0] + $liczby[1][1] + $liczby[2][2];
        $LD_PG = $liczby[0][2] + $liczby[1][1] + $liczby[2][0];

        echo "<table border='1'>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $liczby[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "LGPD: " . $LG_PD . "<br>";
        echo "PGLD: " . $LD_PG . "<br>";
        if ($LG_PD > $LD_PG) {
            echo "LGPD > PGLD";
        } elseif ($LG_PD < $LD_PG) {
            echo "LGPD < PGLD";
        } else {
            echo "LGPD == PGLD";
        }
    }
    ?>
</section>
</body>
</html>