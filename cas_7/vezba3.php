<?php

$brojevi = ["22", "53", "36", "46", "13"];
$rezultat = 0;
foreach($brojevi as $broj) {
    if ($broj % 9 == 0) {
        continue;
    }
    $rezultat += $broj;

}

echo $rezultat;