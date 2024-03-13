<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="rozliczenie.php" method="post">
</form>
</body>
</html>
<?php
// Funkcja do rozliczenia wydatków
function rozliczenieWycieczki($n, $m, $zdarzenia) {
    $osoby = array_fill(1, $n, 0); // Inicjalizacja tablicy wydatków dla każdej osoby

    foreach ($zdarzenia as $zdarzenie) {
        $typ = $zdarzenie[0];
        $wartosc = $zdarzenie[1];

        if ($typ == 'Z') {
            $kwotaNaOsobe = $wartosc / $n; // Kwota dzielona po równo między wszystkie osoby
            for ($i = 1; $i <= $n; $i++) {
                $osoby[$i] += $kwotaNaOsobe; // Dodanie kwoty do wydatków każdej osoby
            }
        } elseif ($typ == 'W') {
            $osoby[$wartosc] = 0; // Wyzerowanie wydatków osoby opuszczającej wycieczkę
        }
    }

    return $osoby;
}

// Przykłady użycia
$test1 = rozliczenieWycieczki(2, 3, [['Z', 8], ['W', 2], ['W', 1]]);
echo implode(' ', $test1);

$test2 = rozliczenieWycieczki(4, 7, [['Z', 10], ['W', 2], ['Z', 9], ['W', 1], ['W', 4], ['Z', 5], ['W', 3]]);
echo implode(' ', $test2);

$test3 = rozliczenieWycieczki(5, 5, [['W', 2], ['W', 4], ['W', 1], ['W', 3], ['W', 5]]);
echo implode(' ', $test3);

$test4 = rozliczenieWycieczki(3, 4, [['Z', 10], ['W', 1], ['W', 2], ['W', 3]]);
echo implode(' ', $test4);

?>